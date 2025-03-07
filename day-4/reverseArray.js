let arr = [2, 4, 6, 8, 10];
let i, j;

for (i = 0, j = arr.length - 1; i < j; i++, j--) {
  let temp = arr[i];
  arr[i] = arr[j];
  arr[j] = temp;
}

console.log(arr);
