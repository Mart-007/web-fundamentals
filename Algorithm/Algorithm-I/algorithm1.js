// Predict the output
//1
for(var i=0; i<5;i++){   
    console.log(i);
 }

 //2
 for(var i=0; i<5; i++)
{
   i = i + 1;  
   console.log(i);
}

//3
for(var i=0; i<5; i++)
{
   i = i + 3; 
   console.log(i);
}

//4
function y(num1, num2){   
   return num1+num2;
}
console.log(y(2,3))
console.log(y(3,5))

//5
function y(num1, num2){
   console.log(num1);   
   return num1+num2;
}
console.log(y(2,3))
console.log(y(3,5))

//6
a = 15;
console.log(a);
function y(a){
   console.log(a);   
   return a;
}
b = y(10);
console.log(b);

//7
a = 15;
console.log(a);
function y(a){
   console.log(a);   
   return a*2;
}
b = y(10);
console.log(b);