window.onload = function () {
	var nav = document.getElementById('nav');
	var start_fixed = $(nav).offset().top;
	if (window.scrollY >= start_fixed) {
		nav.style.position = 'fixed';
		nav.style.top = '0';
	};
	document.onscroll=function(){
		if (window.scrollY >= start_fixed) {
			nav.style.position = 'fixed';
			nav.style.top = '0';
		};
		if (window.scrollY < start_fixed) {
			nav.style.position = 'absolute';
			nav.style.top = 'auto';
		};
	};
	// Различное поведение навигации при клике. Прокрутка или dropdown
	var nav_btns = document.getElementsByTagName('nav')[0].getElementsByClassName('to_scroll');
	var nav_height = $('#nav').innerHeight();
	for (var i=0;i<nav_btns.length;i++){
		var scroll = true;
		var elementClick = $(nav_btns[i]).attr("href");
		if (!document.getElementById(elementClick.substr(1))) scroll = false;
		if (!scroll) nav_btns[i].parentNode.classList.add('dropdown_on_click');
		nav_btns[i].onclick = function(event){
			event.preventDefault();
			if (scroll) {
				elementClick = $(this).attr("href");
				destination = $(elementClick).offset().top - nav_height;
				$('body').animate( { scrollTop: destination }, 1100 );
			} else {
				this.nextElementSibling.classList.toggle('open');
			}
		};
	};
	
}