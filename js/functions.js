function popup() {
    var popup = document.getElementsByClassName("es_subscription_message ");
    popup.classList.toggle("show");
  }

   window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}