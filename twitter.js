var x = [];
var b=[];
x=document.querySelectorAll("b.u-linkComplex-target");
for(var i =0;i<x.length;i++){
    b.push("@"+x[i].innerHTML);
}
b.toString();
