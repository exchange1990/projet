a = Math.round(Math.random() * 10)
b = prompt('taper un nombre')
while(b!=a){
    if (b<a) {
        alert('votre numero est petit')
        
    } else {
        alert('votre numero est grand')
        
    }
    b=prompt('tenter votre chance')
}
alert('vous avez gagne')