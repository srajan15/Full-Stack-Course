let age = prompt("enter your age!");
// if (age < 18) {
//   alert("you are not allow to drive");
//   console.log("you are not allow to drive");
// } else {
//   alert("you are allow to drive");
//   console.log("you are allow to drive");
// }

let haveLicence = Boolean(
  prompt("do you have licence! if no leave with blank")
);

if (age > 18 && haveLicence) {
  alert("you are allow to drive 😀");
  console.log("you are allow to drive");
} else {
  alert("you are not allow to drive 😐");
  console.log("you are not allow to drive");
}
