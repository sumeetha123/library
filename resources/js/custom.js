//functionality for SignIn button
var Modal1 = document.getElementById("ModalB");
var btn1 = document.getElementById("addbook");
var span1 = document.getElementsByClassName("close")[0];  //code for close button
btn1.onclick = function () {
    Modal1.style.display = "block";
}
span1.onclick  = function () {
    Modal1.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == Modal1) {
        Modal1.style.display = "none";
    }
}
var linkModal = document.getElementsByClassName("SignUp")[0].onclick = function () {      //code to show up signUp form 
  Modal.style.display = "block";
  Modal1.style.display = "none";
}