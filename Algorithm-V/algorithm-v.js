//1. Given an array and a value Y, count and print the number of array values greater than Y.
 function count(arr){
     for(var i=0; i<arr.length; i++){
         arr[i] = arr[i] +1;
     }
     return arr;
 }
 y = count([1,2,4,5,6])
 console.log(y);

//2. Given an array, print the max, min and average values for that array.
 function maxMinAvg(arr){
     var min = arr[0]
     var max = arr[0]
     var avg = arr[0]
 for(var i=0; i<arr.length; i++){
     if(arr[i]<min){
         min = arr[i]
     }
     if(arr[i]>max){
         max = arr[i]
     }
     if(arr[i] = avg){
         avg += arr[i];
     }
 }
 return[min, max, avg];
 }

 y= maxMinAvg([1,2,5,3]);
 console.log(y);

//3. Given an array of numbers, create a function that returns a new array where negative values were replaced with the string ‘Dojo’.   For example, replaceNegatives( [1,2,-3,-5,5]) should return [1,2, "Dojo", "Dojo", 5].
function replace(arr){
    for(var i=0; i<arr.length; i++){
        if(arr[i]<0){
            console.log("Dojo")
        }
    }
    return arr;
}
y = replace([1,2,-1,5,-3]);
console.log(y);
