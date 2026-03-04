let calculator = document.getElementById("calculator");
let display = document.createElement("input");
display.type = "text";
display.readOnly = true;
calculator.appendChild(display);

calculator.appendChild(document.createElement("br"));

let buttons = [
    "7","8","9","/",
    "4","5","6","*",
    "1","2","3","-",
    "0",".","=","+"
];

let count = 0;   

buttons.forEach(function(val){

    let btn = document.createElement("button");
    btn.innerText = val;
    btn.style.margin = "5px";
    btn.style.width = "50px";
    btn.style.height = "40px";

    btn.addEventListener("click", function(){

        if(val === "="){
            calculate();
        }
        else{
            display.value += val;
        }

    });

    calculator.appendChild(btn);

    count++;  
    if(count % 4 === 0){
        calculator.appendChild(document.createElement("br"));
    }

});


function calculate(){

    let expression = display.value;

    let num1 = "";
    let num2 = "";
    let operator = "";

    for(let i = 0; i < expression.length; i++){

        let ch = expression[i];

        if(ch === "+" || ch === "-" || ch === "*" || ch === "/"){
            operator = ch;
        }
        else{
            if(operator === ""){
                num1 += ch;
            }
            else{
                num2 += ch;
            }
        }
    }

    num1 = parseFloat(num1);
    num2 = parseFloat(num2);

    let result = 0;

    if(operator === "+"){
        result = num1 + num2;
    }
    else if(operator === "-"){
        result = num1 - num2;
    }
    else if(operator === "*"){
        result = num1 * num2;
    }
    else if(operator === "/"){
        result = num1 / num2;
    }

    alert("Result: " + result);

    display.value = "";
}