let toggles = document.getElementsByClassName("toggle");
let contentDiv = document.getElementsByClassName("content");
let icons = document.getElementsByClassName("icon");

for (let i = 0; i < toggles.length; i++) {
  toggles[i].addEventListener("click", () => {
    if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
      contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
      toggles[i].style.color = "#222222";
      icons[i].classList.remove("fa-plus");
      icons[i].classList.add("fa-minus");
    } else {
      contentDiv[i].style.height = "0px";
      toggles[i].style.color = "#111130";
      icons[i].classList.remove("fa-minus");
      icons[i].classList.add("fa-plus");
    }

    for (let j = 0; j < contentDiv.length; j++) {
      if (j !== i) {
        contentDiv[j].style.height = "0px";
        toggles[j].style.color = "#111130";
        icons[j].classList.remove("fa-minus");
        icons[j].classList.add("fa-plus");
      }
    }
  });
}

// sub toggle tab title

const checkbox_label2 = document.querySelectorAll(".checkbox_label2");
const sub_checkbox_title = document.querySelectorAll(".sub_checkbox_title");

checkbox_label2.forEach((tab, index) => {
  tab.addEventListener("click", (e) => {
    checkbox_label2.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");

    sub_checkbox_title.forEach((content) => {
      content.classList.remove("active");
    });
    sub_checkbox_title[index].classList.add("active");
  });
});

// product-image section

const product_image = document.querySelectorAll(".product_image");

checkbox_label2.forEach((tab, index) => {
  tab.addEventListener("click", (e) => {
    checkbox_label2.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");

    product_image.forEach((content) => {
      content.classList.remove("active");
    });
    product_image[index].classList.add("active");
  });
});
