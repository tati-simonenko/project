window.onload = function () {
	var nav = document.getElementById('nav');
	var start_fixed = $(nav).offset().top;
	if (window.scrollY >= start_fixed) {
		nav.style.position = 'fixed';
		nav.style.top = '0';
	};
	paginator(); // pagination for blog
	slider(); // activate slider
	
	
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
		var open_nav = null;
		var elementClick = $(nav_btns[i]).attr("href");
		if (!document.getElementById(elementClick.substr(1))) scroll = false;
		//if (!scroll) nav_btns[i].parentNode.classList.add('dropdown_on_click');
		nav_btns[i].onclick = function(event){
			if (!event) {event = window.event;};
			event.preventDefault();
			if (scroll) {
				elementClick = $(this).attr("href");
				destination = $(elementClick).offset().top - nav_height;
				$('html, body').animate( { scrollTop: destination }, 1100 );
			}; /*else {
				if (open_nav) open_nav.nextElementSibling.classList.toggle('open');
				this.nextElementSibling.classList.toggle('open');
				open_nav = this;
			} open dropdown on click. Removed 13/11 */
		};
	};
	document.onclick = function(event){
		event = event || window.event
		var t = event.target || event.srcElement;
		
		if (!t.classList.contains('to_scroll') && !t.parentNode.classList.contains('to_scroll') && !t.parentNode.firstElementChild.classList.contains('to_scroll') && !t.parentNode.parentNode.firstElementChild.classList.contains('to_scroll') && !t.parentNode.parentNode.parentNode.firstElementChild.classList.contains('to_scroll')){
			if (open_nav) {
				open_nav.nextElementSibling.classList.toggle('open');
				open_nav = null;
			}
		}
	}
	
	var browser_width = document.documentElement.clientWidth;
	var adaptive;
	
	if (browser_width < 480) {
		adaptive = 0;
	}
	if (browser_width < 600 && browser_width>479) {
		adaptive = 1;
	}
	if (browser_width < 1170 && browser_width>599) {
		adaptive = 2;
	}
	if (browser_width>1169) {
		adaptive = 3;
	}
	
	window.onresize = function(){
		var browser_width = document.documentElement.clientWidth;
		if ( (browser_width < 480) && (adaptive != 0) ) {
			adaptive = 0;
			setTimeout(slider,1000);
			paginator();
		}
		if ( (browser_width < 600) && (browser_width>479) && (adaptive != 1) ) {
			adaptive = 1;
			setTimeout(slider,1000);
			paginator();
		}
		if ( (browser_width < 1020) && (browser_width>599) && (adaptive != 2) ) {
			adaptive = 2;
			setTimeout(slider,1000);
			paginator();
		}
		if ( (browser_width < 1170) && (browser_width>1019) && (adaptive != 3) ) {
			adaptive = 3;
			setTimeout(slider,1000);
			paginator();
		}
		if ((browser_width>1169) && (adaptive != 4) ) {
			adaptive = 4;
			setTimeout(slider,1000);
			paginator();
		}
	}
	
	//         SLIDER           //
	function slider(){
		var carousel = null;
		var carousel_items = null;
		var item_width = null;
		var carousel = document.getElementById('carousel');
		if (carousel){
		var carousel_items = carousel.children;
		var item_width= Math.floor(parseFloat(getComputedStyle(carousel_items[0]).width)) +
						Math.ceil(parseFloat(getComputedStyle(carousel_items[0]).marginRight)) +
						Math.ceil(parseFloat(getComputedStyle(carousel_items[0]).marginLeft));
		var visible_items = Math.ceil(Math.floor(parseFloat(getComputedStyle(carousel).width)) / item_width);
		var clicks=0;
		for (var i=0;i<carousel_items.length;i++){
			carousel_items[i].style.transition = 'none';
		}
		for (var i=0;i<carousel_items.length;i++){
			carousel_items[i].style.left = i*item_width+'px';
		}
		for (var i=0;i<carousel_items.length;i++){
			carousel_items[i].style.transition = 'all 1s';
		}
		var arr_left = document.getElementById('arr_left');
		var arr_right = document.getElementById('arr_right');
		arr_right.onclick = function(){
			if (clicks < carousel_items.length-visible_items){
				for (var i=0;i<carousel_items.length;i++){
					var left = parseInt(getComputedStyle(carousel_items[i],'').left);
					carousel_items[i].style.left = left-item_width+'px';
				}
				clicks++;
			} else {
				for (var i=0;i<carousel_items.length;i++){
					carousel_items[i].style.left = i*item_width+'px';
					clicks = 0;
				}
			}
		}
		arr_left.onclick = function(){
			if (clicks > 0){
				for (var i=0;i<carousel_items.length;i++){
					var left = parseInt(getComputedStyle(carousel_items[i],'').left);
					carousel_items[i].style.left = left+item_width+'px';
				}
				clicks--;
			} else {
				for (var i=0;i<carousel_items.length;i++){
					carousel_items[i].style.left = (i-carousel_items.length+visible_items)*item_width+'px';
					clicks = carousel_items.length-visible_items;
				}
			}
		}
		}
	}
	
	
	//         PAGINATOR           //
	function paginator(){
		var per_page = 5;
		if (document.documentElement.clientWidth < 600) per_page = 3;
		$("div.holder").jPages = null;
		$(function(){
			$("div.holder").jPages({
				containerID : "itemContainer",
				perPage: per_page,
			});
		});
	}
	
	//item
	var accessories = document.getElementById('accessories');
	if (accessories){
		var accessories_ul = accessories.nextElementSibling;
		accessories.onclick = function(){
			this.parentNode.classList.remove('closed');
			this.onmouseout = function(){
				this.parentNode.classList.add('closed');
			}
		}
		accessories_ul.onmouseover = function(){
			this.parentNode.classList.remove('closed');
		}
		accessories_ul.onmouseout = function(){
			this.parentNode.classList.add('closed');
		}
		var large_photo = document.getElementById('large_photo');
		var photos = document.getElementsByClassName('one_photo');
		if (large_photo && photos){
			for (var i=0;i<photos.length;i++){
				photos[i].onclick = function(){
					large_photo.setAttribute('src', this.getAttribute('src'));
				}
			}
		}
		
		var accessories_labels = accessories.nextElementSibling.getElementsByTagName('label');
		var item_price = document.getElementById('item_price');
		var input_total_cost = document.getElementById('total_cost');
		for (var i=0;i<accessories_labels.length;i++){
			accessories_labels[i].onclick = function(){
				if (!this.classList.contains('added')){
					var total_cost = parseInt(item_price.innerHTML);
					item_price.innerHTML = total_cost + parseInt(this.getAttribute('data-price')) + ' Р';
					input_total_cost.value = total_cost + parseInt(this.getAttribute('data-price')) + ' Р';
					this.nextElementSibling.checked= false;
				} else {
					var total_cost = parseInt(item_price.innerHTML);
					item_price.innerHTML = total_cost - parseInt(this.getAttribute('data-price')) + ' Р';
					input_total_cost.value = total_cost + parseInt(this.getAttribute('data-price')) + ' Р';
					this.nextElementSibling.checked= true;
				}
				this.classList.toggle('added');
			}
		}
	}
	
	
	
	//modal
	var modal_view = document.getElementsByClassName('modal_view');
	for (var i=0; i<modal_view.length;i++){
		//modal_views = modal_view.children;
		modal_view[i].modal_views = modal_view[i].children;
		for (var j=0;j<modal_view[i].modal_views.length;j++){
			modal_view[i].modal_views[j].onclick = function(){
				if (!this.classList.contains('active')){
					this.parentNode.parentNode.getElementsByClassName(this.parentNode.getElementsByClassName('active')[0].getAttribute('data-view'))[0].classList.remove('active');
					this.parentNode.getElementsByClassName('active')[0].classList.remove('active');
					this.classList.add('active');
					this.parentNode.parentNode.getElementsByClassName(this.getAttribute('data-view'))[0].classList.add('active');
					/*var active_type_view = document.getElementById(active_view.getAttribute('data-view'));
					if (active_type_view){
						active_type_view.classList.toggle('active');
						active_view = this;
						this.classList.toggle('active');
						active_type_view = document.getElementById(this.getAttribute('data-view'))
						if (active_type_view){
							active_type_view.classList.toggle('active');
						}
					}*/
				}
			}
		}
	}
	var modal_arrs_left = document.getElementsByClassName('modal_arr_left');
	var modal_arrs_right = document.getElementsByClassName('modal_arr_right');
	for (var i=0; i<modal_arrs_left.length;i++){
		modal_arrs_left[i].gallery = modal_arrs_right[i].gallery = modal_arrs_left[i].parentNode;
		modal_arrs_left[i].gallery.images = modal_arrs_right[i].gallery.images = modal_arrs_left[i].gallery.getElementsByClassName('hidden_img');
		modal_arrs_left[i].gallery.visible_image = modal_arrs_right[i].gallery.visible_image = modal_arrs_left[i].gallery.getElementsByClassName('visible_img')[0];
		modal_arrs_left[i].gallery.number_visible_img = modal_arrs_right[i].gallery.number_visible_img = 0;
	}
	//var modal_imgs = document.getElementById('modal_gallery').getElementsByClassName('hidden_img');
	//var visible_modal_img = document.getElementById('modal_gallery').getElementsByClassName('visible_img')[0];
	//var number_visible_img = 0;
	for (var i=0; i<modal_arrs_left.length;i++){
		modal_arrs_left[i].onclick = function(){
			if (this.gallery.number_visible_img == 0) this.gallery.number_visible_img = this.gallery.images.length;
			this.gallery.visible_image.setAttribute('src', this.gallery.images[this.gallery.number_visible_img-1].getAttribute('src'));
			this.gallery.number_visible_img--;
		}
		modal_arrs_right[i].onclick = function(){
			if (this.gallery.number_visible_img == this.gallery.images.length-1) this.gallery.number_visible_img = -1;
			this.gallery.visible_image.setAttribute('src', this.gallery.images[this.gallery.number_visible_img+1].getAttribute('src'));
			this.gallery.number_visible_img++;
		}
	};
	var modal_accessories = document.getElementsByClassName('modal_accessories');
	for (var i=0; i<modal_accessories.length;i++){
		modal_accessories[i].ul = modal_accessories[i].nextElementSibling;
		modal_accessories[i].labels = modal_accessories[i].nextElementSibling.getElementsByTagName('label');
		modal_accessories[i].item_price = modal_accessories[i].previousElementSibling;
		modal_accessories[i].modal_input_total_cost = modal_accessories[i].parentNode.nextElementSibling;
		modal_accessories[i].onclick = function(){
			this.parentNode.parentNode.classList.remove('closed');
			this.onmouseout = function(){
				this.parentNode.parentNode.classList.add('closed');
			}
		}
		modal_accessories[i].ul.onmouseover = function(){
			this.parentNode.parentNode.classList.remove('closed');
		}
		modal_accessories[i].ul.onmouseout = function(){
			this.parentNode.parentNode.classList.add('closed');
		}
		for (var j=0; j<modal_accessories[i].labels.length;j++){
			modal_accessories[i].labels[j].onclick = function(){
				var modal_price = this.parentNode.parentNode.parentNode.firstElementChild;
				var modal_input_total_price = modal_price.parentNode.nextElementSibling;
				if (!this.classList.contains('added')){
					var modal_total_cost = parseInt(modal_price.innerHTML);
					modal_price.innerHTML = modal_total_cost + parseInt(this.getAttribute('data-price')) + ' Р';
					modal_input_total_price.value = modal_total_cost + parseInt(this.getAttribute('data-price')) + 'Р';
					this.nextElementSibling.checked= false;
				} else {
					var modal_total_cost = parseInt(modal_price.innerHTML);
					modal_price.innerHTML = modal_total_cost - parseInt(this.getAttribute('data-price')) + ' Р';
					modal_input_total_price.value = modal_total_cost + parseInt(this.getAttribute('data-price')) + ' Р';
					this.nextElementSibling.checked= true;
				}
				this.classList.toggle('added');
			}
		}
	}
	/*
	var modal_accessories_labels = modal_accessories.nextElementSibling.getElementsByTagName('label');
		var modal_item_price = document.getElementById('modal_item_price');
		var modal_input_total_cost = document.getElementById('modal_total_cost');
		for (var i=0;i<modal_accessories_labels.length;i++){
			modal_accessories_labels[i].onclick = function(){;
				if (!this.classList.contains('added')){
					var modal_total_cost = parseInt(modal_item_price.innerHTML);
					modal_item_price.innerHTML = modal_total_cost + parseInt(this.getAttribute('data-price'));
					modal_input_total_cost.value = modal_total_cost + parseInt(this.getAttribute('data-price'));
				} else {
					var modal_total_cost = parseInt(item_price.innerHTML);
					modal_item_price.innerHTML = modal_total_cost - parseInt(this.getAttribute('data-price'));
					modal_input_total_cost.value = modal_total_cost + parseInt(this.getAttribute('data-price'));
				}
				this.classList.toggle('added');
			}
		}*/
	
	//form 
	$(function(){
    // откуда берем данные сформы
    $('.send_order').submit(function(e){
        //отменяем стандартное действие при отправке формы
        if (!e) {e = window.event;};
		e.preventDefault();
		var click_from = 'somewhere';
		if (this.getElementsByClassName('click_from').length != 0) click_from = this.getElementsByClassName('click_from')[0].value;
		if (this.firstElementChild.id == 'modal_buy') click_from = 'кнопка КУПИТЬ';
		if (this.parentNode.parentNode.classList.contains('half_modal')) click_from = 'модальное окно';
		if (this.parentNode.id == 'modal_ask') click_from = 'Заказать звонок в шапке';

		var inputs = this.parentNode.getElementsByTagName('input');
		var empty_input = false;
		for (var i=0; i<inputs.length-1; i++){
			if (inputs[i].type == "submit") continue;
			if (inputs[i].value == '' || inputs[i].value == null) {
				inputs[i].classList.add('empty_input');
				empty_input = true;
			};
			if (inputs[i].type == "text") {
				inputs[i].onclick = function(){
					this.classList.remove('empty_input');
				}
			}
		}

		// Проверка на заполнение textarea
		
		// var textarea = this.parentNode.getElementsByTagName('textarea');
		// if (textarea.length != 0){
		// 	if (textarea[0].value == '' || textarea[0].value == null) {
		// 		textarea[0].classList.add('empty_input');
		// 		empty_input = true;
		// 	};
		// 	textarea[0].onclick = function(){
		// 		this.classList.remove('empty_input');
		// 	}
		// }

		if (!empty_input){
			//берем из формы метод передачи данных
			var m_method=$(this).attr('method');
			//получаем адрес скрипта на сервере, куда нужно отправить форму
			var m_action=$(this).attr('action');
			//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
			//то есть в стандартном формате передачи данных формы
			var m_data=$(this).serialize();
			m_data = m_data + "&locattion=" + window.location.toString() + "&click_from=" + click_from;
			$.ajax({
				type: m_method,
				url: m_action,
				data: m_data,
				success: function(result){
					// где показываем результат
					//$('#product_add_result').html(result);
					$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
						function(){ // после выполнения предыдущей анимации
							$('#successful_sending') 
								.css('display', 'block') // убираем у модального окна display: none;
								.animate({opacity: 1}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
					});
				}
			});
		};
    });
});
}