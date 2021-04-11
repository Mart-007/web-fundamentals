//Return the given array, after setting any negative values to zero.  For example resetNegatives( [1,2,-1, -3]) should return [1,2,0,0].
function resetNegatives(x){
    for(var i=0; i<x.length; i++){
        if(x[i]<0){
            x[i]=0;
        }
    }
    return x;
}
y = resetNegatives([1,2,-1,5,-3]);
console.log(y);

//2. Given an array, move all values forward by one index, dropping the first and leaving a ‘0’ value at the end.  For example moveForward( [1,2,3]) should return [2,3,0].
function forward(arr){

    for(var i=0; i<arr.length; i++){
        if(arr[i]>arr[0]){
        arr[0] = arr[1];
        arr[i] = arr[0]+1;
        } 
        else(arr[i] == arr[2])
        {
            arr[2] = 0; 
        }
    }
    return arr;
    }
    y = forward([1,2,3]);
    console.log(y)

//3. Given an array, return an array with values in a reversed order.  For example, returnReversed([1,2,3]) should return [3,2,1].
function reverse(arr){
    var newArr = [];
    for(var i=arr.length-1; i>=0; i--){
        newArr.push(arr[i])
        }
    return newArr;
}
y = reverse([1,2,3]);
console.log(y);

//4. Create a function that changes a given array to list each original element twice, retaining original order.  Have the function return the new array.  For example repeatTwice( [4,”Ulysses”, 42, false] ) should return [4,4, “Ulysses”, “Ulysses”, 42, 42, false, false].
function duplicate(arr){
    var temp = [];
    for(var i=0; i<arr.length; i++){
        if(i<arr.length){
            temp.push(arr[i], arr[i]);
        }   
    }
    return temp;
}
y = duplicate([4,"Ulysses", 42, false]);
console.log(y);
