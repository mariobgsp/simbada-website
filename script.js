// POP Up

// Get the modal


// Get the <span> element that closes the modal
var spanList = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
function showIndikator(id_sumber){
  var str_id = id_sumber.toString();
  var modalClassName = ".modal"+str_id;
  modal = document.querySelector(modalClassName);
  span = spanList[id_sumber-1];
  modal.style.display = "block"; 
};

function close(){
  console.log(span);
  modal.style.display = "none"; 
};
// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}