
let isMenuOpen = false;

let menuElement = document.getElementById('menu');
let menuLinks = document.querySelectorAll('.mobile-menu-li'); 

function toggleMenu() {
    isMenuOpen = !isMenuOpen;

    document.getElementById('menu-header').style.display = isMenuOpen ? 'flex' : 'none';
    document.getElementById('hamburger').style.display = isMenuOpen ? 'none' : 'block';
    document.getElementById('menu-items').style.display = isMenuOpen ? 'block' : 'none';

    // Optionnel : ajouter ou enlever des classes pour les animations
    if (isMenuOpen) {
        menuElement.style='background-color:rgba(52, 48, 50, 0.48)'; // Ajoute une classe si le menu est ouvert
    } else {
        menuElement.style='background-color:none'; // Enlève la classe si le menu est fermé
    }

}

menuLinks.forEach(element => {
    element.addEventListener('click',()=>{
        console.log('im done')
        element.style='background-color:gray'
    });
});

function closeMenuIfOutside(event) {
    if (!menu.contains(event.target) && isMenuOpen) {
        toggleMenu();
    }
}

document.addEventListener('click', closeMenuIfOutside);