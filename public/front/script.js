const navBtn = document.getElementById('nav-btn');
const cancelBtn = document.getElementById('cancel-btn');
const sideNav = document.getElementById('sidenav');
const modal = document.getElementById('modal');

navBtn.addEventListener("click", function(){
    sideNav.classList.add('show');
    modal.classList.add('showModal');
});

cancelBtn.addEventListener('click', function(){
    sideNav.classList.remove('show');
    modal.classList.remove('showModal');
});

window.addEventListener('click', function(event){
    if(event.target === modal){
        sideNav.classList.remove('show');
        modal.classList.remove('showModal');
    }
});




document.getElementById("sub").addEventListener('click', function(){
    let key = document.getElementById("sharm").nodeValue;
    let selector = document.getElementById("city").nodeValue;

    if(selector === key){
        document.getElementById("form").action = "hotel-list.html";
    }
});






const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");
slides.forEach(function (slide, index) {
  slide.style.left = `${index * 100}%`;
});
let counter = 0;
nextBtn.addEventListener("click", function () {
  counter++;
  wheel();
});

prevBtn.addEventListener("click", function () {
  counter--;
  wheel();
});

function wheel() {

    if (counter === slides.length) {
    counter = 0;
    }
    if (counter < 0) {
    counter = slides.length - 1;
}
 

  slides.forEach(function (slide) {
    slide.style.transform = `translateX(-${counter * 100}%)`;
  });
}









