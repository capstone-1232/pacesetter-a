// Get the modal
var modal = document.getElementsByClassName("emaillist");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("sucess")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }

// Nav slider
document.querySelector('.nav-btn').addEventListener('click', () => {
  document.querySelector('.menu nav').classList.toggle('menu-expanded');
});