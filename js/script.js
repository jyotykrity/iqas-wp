/* ======================
 MOBILE MENU TOGGLE
======================*/

const body=document.body;
const menuToggle=document.getElementById("menuToggle");

menuToggle.addEventListener("click",()=>{
body.classList.toggle("menu-open");
});


/* ======================
 SUBMENU TOGGLE
======================*/

document.querySelectorAll(".submenu-toggle")
.forEach(btn=>{
btn.addEventListener("click",()=>{
btn.nextElementSibling.classList.toggle("open");
});
});


// PWA Service Worker
if("serviceWorker" in navigator){
navigator.serviceWorker.register("service-worker.js");
}
// Main required closed
/* ===========================
FAQ ACCORDION
=========================== */

document.querySelectorAll(".faq article").forEach(item=>{
item.addEventListener("click",()=>{

const p=item.querySelector("p");

document.querySelectorAll(".faq p").forEach(el=>{
if(el!==p) el.style.display="none";
});

p.style.display=
p.style.display==="block"?"none":"block";

});
});
