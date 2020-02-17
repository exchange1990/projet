// sélectionner l'élément button
const button = document.querySelector("#button")

// sélectionner l'élément menu
const menu = document.querySelector("#menu")

// quand on clique sur button on modifie les style de display de l'élément menu
button.addEventListener("click", function() {
    menu.classList.toggle("hide")
})