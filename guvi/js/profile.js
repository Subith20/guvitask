// const inputs = document.querySelectorAll(".input-field");
// const toggle_btn = document.querySelectorAll(".toggle");
// const main = document.querySelector("main");
// const bullets = document.querySelectorAll(".bullets span");
// const images = document.querySelectorAll(".image");
// let popup = document.getElementById("popup")

// function openPopup() {
//     popup.classList.add("open-popup");
// }

// function openPopup() {
//     popup.classList.remove("open-popup");
// }
// inputs.forEach((inp) => {
//     inp.addEventListener("focus", () => {
//         inp.classList.add("active");
//     });
//     inp.addEventListener("blur", () => {
//         if (inp.value != "") return;
//         inp.classList.remove("active");
//     });
// });

// toggle_btn.forEach((btn) => {
//     btn.addEventListener("click", () => {
//         main.classList.toggle("sign-up-mode");
//     });
// });

// function moveSlider() {
//     let index = this.dataset.value;

//     let currentImage = document.querySelector(`.img-${index}`);
// }

// function moveSlider() {
//     let index = this.dataset.value;

//     let currentImage = document.querySelector(`.img-${index}`);
//     images.forEach((img) => img.classList.remove("show"));
//     currentImage.classList.add("show");

//     const textSlider = document.querySelector(".text-group");
//     textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

//     bullets.forEach((bull) => bull.classList.remove("active"));
//     this.classList.add("active");
// }
// bullets.forEach((bullet) => {
//     bullet.addEventListener("click", moveSlider);
// });



function logout() {
    localStorage.clear()
    alert("Successfully loggeg out")
    location.href = "/guvi/login.html"
}

function load() {


    if (!localStorage.getItem("email")) {
        location.href = "/guvi/login.html"
    } else {
        document.getElementById("dname").innerHTML = localStorage.getItem("name")
        document.getElementById("demail").innerHTML = localStorage.getItem("email")
    }

}