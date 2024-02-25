function fitness360WordPress () {
    if(document.querySelector('.swiper')) {
        const opciones = {
            loop: true,
            autoplay: {
                delay: 3000
            }

        }
        new Swiper('.swiper', opciones)
    }

    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml10 .letters');
    if(textWrapper) {
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1300,
            delay: (el, i) => 45 * i
        }).add({
            targets: '.ml10',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    }


    const hamburger = document.querySelector('.hamburguer-menu svg')
    hamburger.addEventListener('click', function() {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    })
}

document.addEventListener('DOMContentLoaded', fitness360WordPress); 

window.onscroll = function() {
    const scroll = window.scrollY;

    const barraNav = document.querySelector('.barra-navegacion');

    if(scroll > 300) {
        barraNav.classList.add('fixed-top');
    } else {
        barraNav.classList.remove('fixed-top');
    }
}