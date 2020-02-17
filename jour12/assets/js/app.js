function onMouseOut(event) {
    // Remove this event listener
    document.removeEventListener("mouseout", onMouseOut);
    
    // Show the popup
    document.getElementById("popup").style.display = "block";
}

document.addEventListener("mouseout", onMouseOut);