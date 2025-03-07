function binSearch(arr, low, high, key) {
  let mid;
  while (low <= high) {
    mid = parseInt(low + high) / 2;
    if (arr[mid] === key) {
      return mid;
    }
    if (key < arr[mid]) {
      high = mid - 1;
    } else {
      low = mid + 1;
    }
  }
  return -1;
}

let arr = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
console.log(binSearch(arr, 0, arr.length - 1, 16));
