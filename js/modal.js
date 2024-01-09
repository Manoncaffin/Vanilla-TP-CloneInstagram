// code pour créer une page style popup sans créer une nouvelle page
const imgspost = document.querySelectorAll(".imgpost");

// OUVRIR MODAL
imgspost.forEach((img) => {
  img.addEventListener("click", openModal);
});

function openModal(event){

  let modal = document.querySelector("#myModal");
  modal.classList.remove('d-none');
  modal.classList.add('d-flex');

  //afficher la bonne image
  let imgModal = document.querySelector('#imgModal');
  imgModal.src = event.target.src;

}


// FERMER MODAL
let btn_close = document.querySelector("#btn_close");
btn_close.addEventListener("click", closeModal);

function closeModal() {
  let modal = document.querySelector("#myModal");
  modal.classList.remove('d-flex');
  modal.classList.add('d-none');
}

