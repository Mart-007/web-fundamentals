//Sample 0.1 
let a = 15;
let b = "hello";
let c = function(name){
    console.log("My name is:", name)
    return name.length;
}

//Level 1 - Storing a function in a variable

//1.
let c = function(name){
    console.log("My name is:", name);
    return name.length;
}

//2.
let c = function(name){
    console.log("My name is:", name);
    return name.length;
}
c(15);

//3.
let c = function(name = "Reymart"){
    console.log("My name is:", name);
    return name.length;
}
console.log(c());

//4.
let c = function(name = "Reymart"){
    console.log("My name is:", name);
    return name.length;
}
console.log(c("Kei"));