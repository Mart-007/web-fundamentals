function returnOddArray(){
    var arr = [];
    x = 0;
    for(var i=1; i<=256; i+=2){
         x = (i);
         arr.push(x)
        }
        return arr;
 }
 y = returnOddArray();
 console.log(y); // should log [1,3,5,...,253,255]