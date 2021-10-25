let trigger = document.querySelector("#hamburger")
let isClosed = true;

trigger.addEventListener("click", () => {
    burgerTime();
})

function burgerTime() {
    if (isClosed == true) {
        trigger.classList.remove("is-closed");
        trigger.classList.add("is-open")
        isClosed = false
    } else {
        trigger.classList.remove("is-open")
        trigger.classList.add("is-closed")
        isClosed = true
    }
}

const overlay = document.querySelector(".overlay");
const hamburger = document.querySelector(".ham");
const ham = document.querySelector(".ham");

trigger.addEventListener("click", () => {
    if (overlay.style.width === "100%") {
        overlay.style.width = "0%";
    } else {
        overlay.style.width = "100%";
    }
});

function closeMenu() {
    overlay.style.width = "0%";
    trigger.classList.remove("active")
}  