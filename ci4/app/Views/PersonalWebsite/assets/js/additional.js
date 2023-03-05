function displayTime() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var time = hours + ":" + minutes + ":" + seconds;
    document.getElementById("clock").innerHTML = time;
}
setInterval(displayTime, 1000);

function Random() {
    var rnd = Math.floor(Math.random() * 101);
    document.getElementById("tb").value = rnd;
}

var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
document.getElementById("currentDate").innerHTML = date; 

function myFunction() {
    alert("stop clicking me (-_-)");
}

/* For Loop */
const cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];
let text = "";
for (let i = 0; i < cars.length; i++) {
  text += cars[i] + "<br>";
}
document.getElementById("demo1").innerHTML = text;

/* For In Loop */
const numbers = [45, 4, 9, 16, 25];
let txt = "";
for (let x in numbers) {
    txt += numbers[x] + "<br>"; 
}
document.getElementById("demo2").innerHTML = txt;

/* For Of Loop */
const brand = ["BMW", "Volvo", "Mini"];

let print = "";
for (let x of brand) {
  print += x + "<br>";
}
document.getElementById("demo3").innerHTML = print;

/* While Loop */
let print1 = "";
let i = 0;
while (i < 10) {
  print1 += "<br>The number is " + i;
  i++;
}
document.getElementById("demo4").innerHTML = print1;

/* Creating Maps */
const fruits = new Map([
    ["apples", 500],
    ["bananas", 300],
    ["oranges", 200]
]);
  
document.getElementById("demo5").innerHTML = fruits.get("apples");