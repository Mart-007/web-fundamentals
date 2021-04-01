function printSumArray(x){
    var sum = 0;
    for(var i=0; i<x.length; i++) {
      sum = i + x.length+1;
    }
    return sum;
  }
  console.log( printSumArray([1,2,3]) ); // should log 6