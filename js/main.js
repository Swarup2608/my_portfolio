var typed = new Typed(".typing",{
    strings: ["Web Designer","Web Devloper","AI devloper","Data Analyst","Full Stack Devloper"],
    typeSpeed: 100,
    BackSpeed: 60,
    loop: true
});

const navtoggler = document.querySelector(".nav-toggler span i"),
nav = document.querySelector(".side");
navtoggler.addEventListener("click",()=>{
    nav.classList.toggle("open");
    if(styler.classList.contains("open")){
        styler.classList.remove("open");
    }
})