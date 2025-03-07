function maxMin() {
  let min, max;
  max = min = arr[0];
  for (let i = 1; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
    if (arr[i] < min) {
      min = arr[i];
    }
  }
  console.log(max, min);
}
let arr = [2, 3, 4, 0, 88];
maxMin(arr);
