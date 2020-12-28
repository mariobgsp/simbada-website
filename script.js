// POP Up

function showIndikator(id_sumber){
  var str_id = id_sumber.toString();
  var modalClassName = ".modal"+str_id;
  modal = document.querySelector(modalClassName);
  modal.style.display = "block"; 
};

function closePopup(){
  console.log("woi");
  modal.style.display = "none"; 
};

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}