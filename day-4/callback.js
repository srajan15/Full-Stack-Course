function display(some) {
  console.log(some);
}
//callback function "a function pass as parameter"
function calc(num1, num2, displayCallBack) {
  let sum = num1 + num2;
  displayCallBack(sum);
}

let result = calc(12, 7, display);
