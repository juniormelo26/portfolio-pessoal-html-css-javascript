/* MUDANÇA DE BACKGROUND NAVBAR */
/* Quando o usuário rolar para baixo 10px da parte superior do documento, deslize a barra de navegação para baixo */
window.addEventListener('scroll', function(){
    var navbar = document.querySelector('nav');

    if(this.scrollY - 70 > 10){
        navbar.classList.add('sticky');
    }else{
        navbar.classList.remove('sticky');
    }
    
});

/* ATIVANDO/DESATIVANDO MENU MOBILE */
const menuMobile = document.querySelector('.menu-mobile');
const navbar = document.querySelector('.navbar');
const navItens = document.querySelectorAll('.navbar a');


menuMobile.addEventListener('click', () => {
    navbar.classList.toggle('active');
})

/* FECHA MENU MOBILE AO CLICAR NO LINK/MENU */
navItens.forEach((navIten) => {
    navIten.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
});
