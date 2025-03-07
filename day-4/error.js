try {
  let arr = [22, 33, 22];
  console.lg(arr[1]);
} catch (err) {
  console.log(err.name);
  console.log(err.message);
}
