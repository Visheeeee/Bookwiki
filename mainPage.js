var slideIndex = 1;
 showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n){
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  // for (i = 0; i < slides.length; i++) {
  //   slides[i].style.display = "none";  
  // }
  // slideIndex++;
  if (n > slides.length) {slideIndex = 1}
  if(n<1){slideIndex=slides.length}
  for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";  
  }    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
const menuItems = document.querySelectorAll('.menuItems')

window.addEventListener('contextmenu', event =>{
	event.preventDefault()
	contextMenu.style.top = `${event.pageY}px`
	contextMenu.style.left = `${event.pageX}px`
	setTimeout(() => {
		contextMenu.style.transform = 'scale(1)'
	}, 200)
}) 

window.addEventListener('click', event =>{
	let condition = contextMenu.style.transform == 'scale(1)' && event.target != contextMenu
	for (let li of menuItems) {
		condition += event.target != li
	}
	if (condition === menuItems.length + 1) {
		contextMenu.style.transform = 'scale(0)'
	}
})

function bg(){
  document.body.style.backgroundColor="lightgrey";
}
document.getElementById("2").onclick=function(){
  location.href="login.html";
};
document.getElementById("3").onclick=function(){
  location.href="mainPage.html";
}
