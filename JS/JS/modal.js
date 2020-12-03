var modal = document.querySelector(".modal");
var html = document.querySelector(".html");
var myservice = document.querySelector(".service1");
var closebtn = document.querySelector(".closebtn");

function toggleModal() {
  modal.classList.toggle("show_modal");
  html.classList.toggle("scrollhidden");
}


function windowOnClick(event) { 
       if (event.target === modal) { 
           toggleModal(); 
       } 
   }

myservice.addEventListener("click", toggleModal);
closebtn.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);