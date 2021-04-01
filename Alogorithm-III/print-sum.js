function printSum(x){
    var sum = 0;
    for(var i=0; i<x; i++){
        console.log(i);
       sum += i % x; 
    }
    return sum
  }
  y = printSum(255) // should print all the integers from 0 to 255 and with each integer print the sum so far.
  console.log(y) // should print 32640