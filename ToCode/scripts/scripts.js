
  // نمایش نرم کارت‌ها هنگام اسکرول

const cards = document.querySelectorAll(".card");

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {

            entry.target.classList.add("show");

        }

    });

}, {
    threshold: 0.2
});

cards.forEach(card => observer.observe(card));



// افکت شناور لوگو

const logo = document.querySelector(".logo");

let angle = 0;

function animateLogo() {

    angle += 0.02;

    logo.style.transform =
        `translateY(${Math.sin(angle) * 5}px)`;

    requestAnimationFrame(animateLogo);

}

animateLogo();



// افکت دکمه

const button = document.querySelector(".join-btn");

button.addEventListener("mouseenter", () => {

    button.style.transform = "scale(1.06)";

});

button.addEventListener("mouseleave", () => {

    button.style.transform = "scale(1)";

});



// نمایش سال جاری (در صورت وجود)

const year = document.querySelector(".year");

if (year) {

    year.textContent = new Date().getFullYear();

}



// پیام خوش‌آمدگویی

window.addEventListener("load", () => {

    console.log("Welcome ToCode ❤️");

});
