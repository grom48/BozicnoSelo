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