let toggle=document.querySelector(".toggle");
let cardRotate=document.getElementById("card-rotate")
function toggleAction(){
}  toggle.addEventListener("click",function(){
    toggle.classList.toggle("right")
    cardRotate.classList.toggle("rotated")
}
)
toggleAction()
