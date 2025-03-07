for (let i = 0; i < 10; i++) {
  if (i % 2 == 0) {
    continue;
    console.log(i);
  }
  if (i === 7) {
    break;
  }
  console.log(i);
}
