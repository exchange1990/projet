const modal=document.querySelector("#modal-container");
const CloseBtn=document.querySelector("#close-button");
//fonction pour ouvrir le modal
function displayPopup(){
    modal.style.display="block";
}
//fonction pour fermer le popup
function hidePopup(){
    modal.style.display="none";
}
// on ajoute un écouteur pour l'événement mouseout sur la fenêtre du navigateur qui ne sera exécuté qu'une fois
window.addEventListener("mouseout",displayPopup,{once:true});
// on ajoute un écouteur sur l'événement click sur le bouton de fermeture de la modal
close.addEventListener("click",hidePopup);
