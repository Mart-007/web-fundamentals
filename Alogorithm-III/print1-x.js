function printUpTo(x){
    for(var i=1; i<x; i++){
       if(x<i){
           x = false;
       }
       else{
           console.log(i);
       }
        
    }
    
}
  
  
  printUpTo(1000); // should print all the integers from 1 to 1000
  y = printUpTo(-10); // should return false
  console.log(y); // should print false