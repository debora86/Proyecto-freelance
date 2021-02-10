/*agregando posicion fija en el header al hacer scroll*/
// 

window.onscroll = () => {
	// var color1 = $('.navbar-light .navbar-nav .nav-link').css('color');
	const scroll = window.scrollY;
	const headerNav = document.querySelector('#menu');
	const documentBody = document.querySelector('body');
	

	if (scroll > 300) {
		// 
		headerNav.classList.add('navbar-scroll');
		 // $('.navbar-light .navbar-nav .nav-link').css({'color' : '#474545'});
		 // headerNav.classList.add('ft-activo');
		

	}
	else{
		headerNav.classList.remove('navbar-scroll');
		// documentBody.classList.add('ft-activo');
	}
}
function carrusel_1() {
	$('.carousel').carousel({
		  interval: 6000,
		  pause: "false"
		});

}
