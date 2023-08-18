// Add to cart
const plus = document.getElementById("plus"),
  minus = document.getElementById("minus"),
  num = document.getElementById("num");
let a = 1;

plus.addEventListener("click", () => {
  a++;
  a = a < 10 ? "0" + a : a;
  num.innerText = a;
});

minus.addEventListener("click", () => {
  if (a > 1) {
    a--;
    a = a < 10 ? "0" + a : a;
    num.innerText = a;
  }
});

//
//
//
//
//
//
//
const btn_image = document.querySelectorAll(".btn_image");
btn_image.forEach((btn) => {
  btn.addEventListener("click", () => {
    btn_image.forEach((tab) => {
      tab.classList.remove("active");
    });
    btn.classList.add("active");
  });
});

const productItem = document.querySelectorAll(".item");

const next_btn = document.getElementById("next_btn");
const prev_btn = document.getElementById("prev_btn");

let count = 0;
prev_btn.addEventListener("click", () => {
  if (count > 0) {
    count--;
  }
  next_btn.disabled = false;
});
// Event listener for the increase button
next_btn.addEventListener("click", () => {
  count++;

  if (count > productItem.length - 2) {
    next_btn.disabled = true;
  }
});

//
//
//
//
//
//
//
//
//
//
//
//
//
//

productScroll();

function productScroll() {
  let slider = document.getElementById("slider");
  let next = document.getElementsByClassName("pro-next");
  let prev = document.getElementsByClassName("pro-prev");
  // let slide = document.getElementById("slide");
  let item = document.getElementById("slide");

  for (let i = 0; i < next.length; i++) {
    //refer elements by class name

    let position = 0; //slider postion

    prev[i].addEventListener("click", function () {
      //click previos button
      if (position > 0) {
        //avoid slide left beyond the first item
        position -= 1;
        translateX(position); //translate items
      }
    });

    next[i].addEventListener("click", function () {
      if (position >= 0 && position < hiddenItems()) {
        //avoid slide right beyond the last item
        position += 1;
        translateX(position); //translate items
      }
    });
  }

  function hiddenItems() {
    //get hidden items
    let items = getCount(item, false);
    let visibleItems = slider.offsetWidth / 375;
    return items - Math.ceil(visibleItems);
  }
}

function translateX(position) {
  //translate items
  slide.style.left = position * -415 + "px";
}

function getCount(parent, getChildrensChildren) {
  //count no of items
  let relevantChildren = 0;
  let children = parent.childNodes.length;
  for (let i = 0; i < children; i++) {
    if (parent.childNodes[i].nodeType != 3) {
      if (getChildrensChildren)
        relevantChildren += getCount(parent.childNodes[i], true);
      relevantChildren++;
    }
  }
  return relevantChildren;
}
//
//
//
//
//
//
//
//
//
