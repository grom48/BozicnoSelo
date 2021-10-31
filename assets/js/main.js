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

// !Accordion

const accordion = document.querySelector(".accordion");
const items = accordion.querySelectorAll(".accordion__item");

items.forEach((item) => {
  const title = item.querySelector(".accordion__title");

  title.addEventListener("click", (e) => {
    const opened_item = accordion.querySelector(".is-open");

    // Toggle trenutni item
    toggle_item(item);

    // Zatvori prije otvorene iteme ako postoje
    if (opened_item && opened_item !== item) {
      toggle_item(opened_item);
    }
  });
});

const toggle_item = (item) => {
  const body = item.querySelector(".accordion__body");
  const content = item.querySelector(".accordion__content");

  if (item.classList.contains("is-open")) {
    body.removeAttribute("style");
    item.classList.remove("is-open");
  } else {
    body.style.height = body.scrollHeight + "px";
    item.classList.add("is-open");
  }
};

//Get the button:
let mybutton = document.getElementById("mybtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.classList.add("show")
  } else {
    mybutton.classList.remove("show")
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
};

function animateIcon() {
  const hamIcon = document.querySelector("#nav-icon2");
  hamIcon.classList.toggle("open")
}

