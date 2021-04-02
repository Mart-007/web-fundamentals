//Return the given array, after setting any negative values to zero.  For example resetNegatives( [1,2,-1, -3]) should return [1,2,0,0].
// function resetNegatives(x){
//     for(var i=0; i<x.length; i++){
//         if(x[i]<0){
//             x[i]=0;
//         }
//     }
//     return x;
// }
// y = resetNegatives([1,2,-1,5,-3]);
// console.log(y);

//2. Given an array, move all values forward by one index, dropping the first and leaving a ‘0’ value at the end.  For example moveForward( [1,2,3]) should return [2,3,0].
function forward(arr){
    var temp = 0;
    var temp1 = arr[0];
    for(var i=0; i<arr.length; i++){
        if(arr[i] = arr[2]){
            arr[i] = arr[0]-1;
        } 
        else(arr[i] = arr[0])
        {
            arr.pop(arr[2]);
           
        }  
    }
    return arr;
}
y = forward([1,2,3]);
console.log(y);
