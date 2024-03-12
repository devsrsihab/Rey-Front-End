// Add to cart
const sum = document.getElementById("plus"),
  sub = document.getElementById("minus"),
  valuePrinter = document.getElementById("num");
let increment = 1;

sum.addEventListener("click", () => {
  increment++;
  increment = increment < 10 ? "0" + increment : increment;
  valuePrinter.innerText = increment;
});

sub.addEventListener("click", () => {
  if (increment > 1) {
    increment--;
    increment = increment < 10 ? "0" + increment : increment;
    valuePrinter.innerText = increment;
  }
});
