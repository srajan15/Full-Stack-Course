//function declaration
function fn1(a, b) {
  return a * b;
}
console.log(fn1(8, 9));
// function expression
let fn2 = function (a, b) {
  return a + b;
};
console.log(fn2);
console.log(fn2(2, 3));

let fn3 = (a, b) => {
  // arrow function
  return a + b;
};

console.log(fn3(2, 2));

let fn4 = (a) => a ** 2;
console.log(fn4(5));
