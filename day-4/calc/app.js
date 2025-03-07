let num1 = Number(prompt("enter num1"));
let num2 = Number(prompt("enter num2"));
let operator = prompt("enter operator +, -, /, *");
let result = 0;

if (operator === "+") {
  result = num1 + num2;
  alert(result);
  console.log(result);
} else if (operator === "-") {
  result = num1 - num2;
  alert(result);
  console.log(result);
} else if (operator === "*") {
  result = num1 * num2;
  alert(result);
  console.log(result);
} else if (operator === "/") {
  result = num1 / num2;
  alert(result);
  console.log(result);
} else {
  alert("wrong input");
  console.log("wrong input", op);
}
