var liste=document.querySelectorAll(".container img");
for (let index = 0; index < liste.length; index++) {
    var element = liste[index];
    element.addEventListener("click",function(event){
        var baliseCliquee = event.target;
        var urlImageCliquee = baliseCliquee.getAttribute("src");
        var balisePrincipale = document.querySelector(".imagePrincipal");
        balisePrincipale.setAttribute("src", urlImageCliquee);
    });
}
