// Tabs
const tabs = document.querySelectorAll(".tab_button");
const allContent = document.querySelectorAll(".tab_content");

tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        tabs.forEach((tab) => tab.classList.remove("active"));
        tab.classList.add("active");

        allContent.forEach((content, idx) => {
            if (content) {
                // Check if content exists
                content.classList.toggle("active", index === idx);
            }
        });
    });
});

// Sub Toggle Tab Title
const checkbox_label2 = document.querySelectorAll(".checkbox_label2");
const sub_checkbox_title = document.querySelectorAll(".sub_checkbox_title");

checkbox_label2.forEach((label, index) => {
    label.addEventListener("click", () => {
        checkbox_label2.forEach((label) => label.classList.remove("active"));
        label.classList.add("active");

        sub_checkbox_title.forEach((title, idx) => {
            if (title) {
                // Check if title exists
                title.classList.toggle("active", index === idx);
            }
        });
    });
});

// Sub Tabs and Content
const subTabs = document.querySelectorAll(".checkbox_label2"); // Reused selector, consider optimizing if this is intentional
const subAllContent = document.querySelectorAll(".sub_tab_content");

subTabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        subTabs.forEach((tab) => tab.classList.remove("active"));
        tab.classList.add("active");

        subAllContent.forEach((content, idx) => {
            if (content) {
                // Check if content exists
                content.classList.toggle("active", index === idx);
            }
        });
    });
});

// Toggle
let toggles = document.getElementsByClassName("toggle");
let contentDiv = document.getElementsByClassName("content");
let icons = document.getElementsByClassName("icon");

for (let i = 0; i < toggles.length; i++) {
    toggles[i].addEventListener("click", () => {
        if (
            contentDiv[i] &&
            parseInt(contentDiv[i].style.height) !== contentDiv[i].scrollHeight
        ) {
            contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
            toggles[i].style.color = "#222222";
            icons[i] && icons[i].classList.replace("fa-plus", "fa-minus");
        } else if (contentDiv[i]) {
            contentDiv[i].style.height = "0px";
            toggles[i].style.color = "#111130";
            icons[i] && icons[i].classList.replace("fa-minus", "fa-plus");
        }

        for (let j = 0; j < contentDiv.length; j++) {
            if (j !== i && contentDiv[j]) {
                contentDiv[j].style.height = "0px";
                toggles[j].style.color = "#111130";
                icons[j] && icons[j].classList.replace("fa-minus", "fa-plus");
            }
        }
    });
}

// Add to Cart
const plus = document.getElementById("plus"),
    minus = document.getElementById("minus"),
    num = document.getElementById("num");
let a = 1;

if (plus && minus && num) {
    plus.addEventListener("click", () => {
        a = Math.min(99, a + 1); // Assuming you don't want the number to exceed 99
        num.innerText = a.toString().padStart(2, "0");
    });

    minus.addEventListener("click", () => {
        a = Math.max(1, a - 1); // Ensure 'a' does not go below 1
        num.innerText = a.toString().padStart(2, "0");
    });
}

// Select Cabinet Box Construction & Select Button (Combined)
const cabinet_btn = document.querySelectorAll(".cabinet_btn");
const select_cabinet = document.querySelectorAll(".select_cabinet");

cabinet_btn.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        cabinet_btn.forEach((btn) => btn.classList.remove("active"));
        btn.classList.add("active");

        select_cabinet.forEach((cabinet, idx) => {
            if (cabinet) {
                // Check if cabinet exists
                cabinet.classList.toggle("active", index === idx);
            }
        });
    });
});

// Radio List and Content Div
const radio_tabs = document.querySelectorAll(".account_category_radio_div");
const radio_list_content = document.querySelectorAll(".radio_list_content");

radio_tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        radio_tabs.forEach((tab) => tab.classList.remove("active"));
        tab.classList.add("active");

        radio_list_content.forEach((content, idx) => {
            if (content) {
                // Check if content exists
                content.classList.toggle("active", index === idx);
            }
        });
    });
});
