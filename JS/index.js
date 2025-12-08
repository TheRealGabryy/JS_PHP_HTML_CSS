console.log("Hello World!");
let name = "gabriele";
let surname = "Bolognese";
let age = 17;
let birthday = "06/12/2008";

function printInfo() {
    console.log(`${name} ${surname} ${age} ${birthday}`);
}

printInfo();

let months = ["January", "February", "March", "April"];
let ages = [11, 12, 13, 14, 17];

for (let i = 0;  i < 10; i++) {
    console.log("Month: " + (i+1) + "^ : " + months[i]);
}

const printAges = function () {
    console.log(`${name} ${surname} ${ages[ages.length - 1]}`);
}

printAges();

