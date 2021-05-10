//First Recursion Challenge Using recursion, implement function sigma(num) that, given a number, returns the sum of all positive integers up to the given number (inclusive). Ex: sigma(3) = 6 (or 1+2+3); sigma(5) = 15 (or 1+2+3+4+5).
function sigma(n){
if(n<1){
    return n;
}
return n+sigma(n-1);
}

//Using recursion, write a function factorial(num) that, given a number, returns the product (multiplication) of all positive integers from 1 up to the given number (inclusive). For example, factorial(3) = 6 (or 1*2*3); factorial(5) = 120 (or 1*2*3*4*5).
function factorial(n){
    if(n<2){
        return n;
        
    }
    return n*factorial(n-1);    
}

//Create a function to generate Fibonacci numbers. In this famous mathematical sequence, each number is the sum of the previous two, starting with values 0 and 1. Your function should accept one argument, an index into the sequence (where 0 corresponds to the initial value, 4 corresponds to the value four later, etc).
function fib(n){
    if(n<2){
        return n;
        }
    return fib(n-2)+fib(n-1);
    
}