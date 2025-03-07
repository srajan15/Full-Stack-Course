function linearSearch(key) {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] === key) {
      return i;
    }
  }
  return "not found";
}

console.log(linearSearch(6));
