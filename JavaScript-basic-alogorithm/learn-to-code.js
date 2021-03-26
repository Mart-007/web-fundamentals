//1. Create a function that prints/logs all the integers from 1 to 20.
function print1to20(){
    for(var i = 1; i < 21; i++){
        console.log(i)
       }
    }

//2. Create a function that prints/logs all the odd numbers from 3 to 20.
function printOdd3to20(){
    for (var i = 3;  i < 21; i+=2)
        console.log(i);
}

//3. Create a function that prints/logs all the even numbers from 4 to 22.
function printEven4to22(){
    for (var i = 4; i<23; i++){
        if(i%2==0) {
    
    }}; 
}

//4. Print/log all the multiples of 7 between the numbers 7 to 62.
function multiplesOf7(){
    for (var i = 7; i < 57; i++) {
         if(i%7 == 0) {
            console.log(i);
        }
    };
}

//5. Log positive numbers starting at 50, counting down by fives (exclude 0).
function countdownByFives(){
    for (var i = 50; i > 0; i-=5){
        console.log(i);
    }
}

//6. Given an array, print/log the sum of the first value in the array, plus the array’s length. Assume that the array is composed of numbers
function firstPlusLength(arr){
    var sum = arr[0] + arr.length ;
        console.log(sum)
}

//7. Create a function that prints/logs all the even numbers from 4 to 22.
// Have it also return the sum of all the numbers that were printed.
function printEven4to22(){
    for (var i = 4; i < 23; i+=2)
        console.log(i);
        return(130);
}

//8. Add odd integers from -25,000 to 30,000 and have the function return its final sum. Is there a short cut?
//Before you work on this, please watch the following video:
function addOddInts() {
    var sum = 0
    for (var i = -24999; i<30000; i+=2){
        sum += i;
    }
return sum;
}

//9. Given an array, write a function that prints/logs each number in the array.
function printArray(arr){
    for(var i=0; i<arr.length; i++){
        console.log(arr[i]);
    }
}

//10. Given an array, write a function that only prints/logs its positive value. For example printPositives([-1,3,-5, 10]) prints/logs 3, 10.
function printPositives(arr){
    for(var i=0; i<arr.length; i++){
        if(arr[i] > 0) {
        console.log(arr[i]);
        }
    }
}

//11. Given an array, write a function that prints the index value of its positive values.
//For example printPositiveIndex([1, 3, -10]), have it print/log 0, 1 (as the 0th index had a positive value and index 1 also had a positive value). printPostiiveIndex([10, 5, -5, 15]) should print/log 0, 1, and 3. In other words, it prints the index of each positive number in the array.
function printPositiveIndex(arr){
    for(var i=0; i<arr.length; i++){
        if(arr[i] > 0) {
        console.log(i)
        }
    }
}

//12. Given an array, write a function that returns a new array where each negative value was converted to a positive value. For example, bePositive([-1,-3,-5]) returns [1, 3, 5]. A positive number in the original array should remain as positive, so that each number in the new array is all positive.
function bePositive(arr){
    for(var i=0; i<arr.length; i++){
        //if tha value is current negative
        if(arr[i] < 0){
        arr[i] = arr[i]*-1;
        }
    };
    return arr;        
}

//13. Given an array with multiple values, write a function that replaces each value in the array with the product of the original value multiplied by itself. For example squareVal( [1, 3, 5] ) should return [1, 9, 25].
function squareVal(arr){
    for(var i=0; i<arr.length; i++){
        console.log('arr[i] is ' , arr[i]);
        arr[i] = arr[i] * arr[i];
        console.log('arr[i] is now' , arr[i]);
        }
    return arr; 
}

//14. Given an array with multiple values, write a function that replaces any negative numbers within the array with the value of 0. When the program is done the array should contain no negative values. (e.g. [1,5,10,-2] will become [1,5,10,0])
function noNeg(arr){
    for(var i=0; i<arr.length; i++){
        if (arr[i] < 0 ){
         arr[i] = 0;
        }
    }
    return arr;
}

//15. Given an array of multiple values, write a function that returns the sum of its numbers. For example, findSum([1,2,3]) should return 6.
function findSum(arr){
    var sum = 0;
    for(var i=0; i<arr.length; i++){
        sum += arr[i];
        console.log(sum);
    }
console.log('sum is now' , sum);
    return sum;
}

//16. Given an array with multiple values, write a function that returns the maximum number in the array. For example, findMax([-3,3,5,7]) should return 7.
function findMax(arr) {
    if(arr.length <1) {
        return false;
    }
    var max =arr [0];
        for(var i=1; i<arr.length; i++){
            if(arr[i]>max) {
            max = arr [i];
             console.log('max is now', max);
        }
    }
        console.log('final max is', max);
        return max;
}

//17. Given an array with multiple values, write a function that returns the minimum value in the array. For example findMin([0,3,-5]) should return -5.
function findMin(arr){
    var min = arr[0];
     for(var i=1; i <arr.length; i++){
        if(arr[i] <min){
        min = arr[i];
    }
}
return min;
}

//18. Given an array with multiple values, write a function that returns a new array with two elements. The first value in the new array should be the minimum value in the original array. The second value in the new array should be the maximum value in the original array.
//For example, findMinMax([1,3,5]) should return [1, 5]. Similarly, findMinMax([-1,-3,10]) should return [-3, 10].
function findMinMax(arr){
    var min = arr[0];
    var max = arr[0];
    for (var i= 1; i<arr.length; i++){
        if(arr[i] < min){
            min = arr[i];
        }
        if(arr[i] > max){
            max = arr[i];
        }
    }
return[min, max];
}

//18. Given array of numbers, create function to replace last value with number of positive values. Example, countPositives([-1,1,1,1]) changes array to [-1,1,1,3] and returns it.
function countPositives(arr){
    var count = 0 ;
    for(var i=0; i<arr.length; i++){
        if(arr[i] > 0){
        count++;
        }
    }
    console.log(count);
    arr[arr.length-1] = count;
    return arr;
}

//19. Given an array, write a function that prints values that are greater than its 2nd value in the array. For example, given [1,3,5,7,9,13], it should print/log 5, 7, 9, and 13. Assume that the array has at least 2 values. Have the function also return the sum of the numbers that were printed/logged.
function valGreaterThanSecond(arr) {
    var sum = 0;
        for(var i=0; i<arr.length; i++){
            if(arr[i] > arr[1]){
                console.log(arr[i]);
                sum += arr[i];
            }
        }
return sum;
}

//20. Given two numbers passed to the function, return a new array of length num1 with each value num2. For example, thisLengthThatValue(3,5) should return [5, 5, 5]. thisLengthThatValue(2, 10) should return [10, 10].
function thisLengthThatValue(num1, num2){
    var arr= [];
    for(var i=0; i<num1; i++){
        arr.push(num2);
    }
    console.log(arr);
    return arr;  
}

//21. Build function that accepts array. Return a new array with all values except first, adding 7 to each. Do not alter the original array.
//For example, addSevenToMost([1,3,5]) should return [10, 12]. addSevenToMost([1, 3, 5, 7]) should return [10, 12, 14].
function addSevenToMost(arr){
    var arr2 =[];
    for(var i=1; i<arr.length; i++){
        arr2.push(arr[i]+7);
    }
console.log(arr2);
return arr2;
}

//22. Write a function that accepts any array, and returns a new array with the array values that are greater than its 2nd value. If the array that was passed to the function has less than two elements, have the function return false.
//For example greaterThanSecond([1,3,5,7]) should return [5, 7]. Similarly, greaterThanSecond([0, -3, 2, 5]) should return [0, 2, 5]. Also, greaterThanSecond([2]) should return false.
function greaterThanSecond(arr){
    if(arr.length<2){
        return false;
    }
    var arr2 = [] ;
    for(var i=0; i<arr.length; i++){
        if (arr[i] > arr[1]){
        arr2.push(arr[i]);
        }
        else {
        console.log('skipping ', arr[i]);
        }
    }
    console.log(arr2);
    return arr2;
}

//23. Write a function that will swap the first and last values in any given array. The default minimum length of the array is 2. For example swapFirstLast([1,3,5]) should return [5, 3, 1]. swapFirstLast([1,3,5,7,9]) should return [9, 3, 5, 7, 1].
function swapFirstLast(arr){
    var arrnew = arr.slice();
    var temp = arrnew[0];
    arrnew[0] = arrnew[arrnew.length-1];
    arrnew[arrnew.length-1] = temp;
    return arrnew;
}