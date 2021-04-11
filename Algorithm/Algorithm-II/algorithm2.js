//1
 function a(){
    console.log('hello');
    }
    console.log('Dojo');

//2
function a(){
  console.log('hello');
    return 15;
    }
    x = a();
  console.log('x is', x);

//3
function a(n){
    console.log('n is', n);
       return n+15;
     }
     x = a(3);
     console.log('x is', x);

//4
function a(n){
       console.log('n is', n);
       y = n*2;
       return y;
     }
     x = a(3) + a(5);
     console.log('x is', x);

//5
function op(a,b){
       c = a+b;
       console.log('c is', c);
       return c;
     }
     x = op(2,3) + op(3,5);
     console.log('x is', x);

//6
function op(a,b){
  c = a+b; 
  console.log('c is', c);
   return c;
 }
 x = op(2,3) + op(3,op(2,1)) + op(op(2,1),op(2,3));
 console.log('x is', x);

//7
function op(a,b){
       c = a+b;
       console.log('c is', c);
       return c;
     }
     x = op(2,3) + op(3,op(2,1)) + op(op(2,1),op(2,3));
     console.log('x is', x)