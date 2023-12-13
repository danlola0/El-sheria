const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const txtAnim = document.querySelector(".h1");

inputs.forEach((inp) => {
    inp.addEventListener("focus" , () => {
        inp.classList.add("active");
    });
    inp.addEventListener("blur" , () => {
        if(inp.value != "") return;
        inp.classList.remove("active");
    });
});

toggle_btn.forEach((btn) => {
    btn.addEventListener("click" , () => {
        main.classList.toggle("sign-up-mode");
    });
});

new Typewriter(txtAnim, {
    //deleteSpeed : 20
})
.typeString('Moi c\'est Sheria HANGI')
.pauseFor(300)
.typeString('<strong>, La boite Sheria Service "S²" </strong>')