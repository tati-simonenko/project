$(document).ready(function() { // вся магия после загрузки страницы
	$('.modal_ask').click( function(event){ // ловим клик по ссылки с id="go"
		if (!event) {event = window.event;};
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предыдущей анимации
				$('#modal_ask') 
					.css('display', 'block') // убираем у модального окна display: none;
					.animate({opacity: 1}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз

		});
	});
	$('.modal_order').click( function(event){ // ловим клик по ссылки с id="go"
		if (!event) {event = window.event;};
		var clicker = this;
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предыдущей анимации
				$('#modal_order') 
					.css('display', 'block') // убираем у модального окна display: none;
					.animate({opacity: 1}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
				document.getElementById('modal_order').getElementsByClassName('click_from')[0].value = clicker.innerHTML;
		});
	});
	$('.modal_buy').click( function(event){ // ловим клик по ссылки с id="go"
		if (!event) {event = window.event;};
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предыдущей анимации
				$('#modal_buy') 
					.css('display', 'block') // убираем у модального окна display: none;
					.animate({opacity: 1}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
		});
	});
	//$('.modal_laser').click( function(event){ // ловим клик по ссылки с id="go"
	var modal_laser = document.getElementsByClassName('modal_laser');
	for (var i=0;i<modal_laser.length;i++){
		modal_laser[i].onclick = function(event){
			if (!event) {event = window.event;};
			event.preventDefault(); // выключаем стандартную роль элемента
			var item_id = this.getAttribute('data-item_id');
			$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
				function(){ // после выполнения предыдущей анимации
					$(item_id) 
						.css('display', 'block') // убираем у модального окна display: none;
						.animate({opacity: 1}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
			});
		};
	};
	/* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
	$('#overlay').click( function(){ // ловим клик по подложке
		$('.modal_window')
			.animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
		/*$('#modal_ask')
			.animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
		$('#modal_order')
			.animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
		$('#modal_laser')
			.animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
		*/
	});
	$('.close_modal').click( function(event){
		if (!event) {event = window.event;};
		event.preventDefault();
		$('#successful_sending').animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
			function(){ // после анимации
				$(this).css('display', 'none'); // делаем ему display: none;
			}
		);
		$('#modal_buy').animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
			function(){ // после анимации
				$(this).css('display', 'none'); // делаем ему display: none;
			}
		);
		$('#modal_ask').animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
			function(){ // после анимации
				$(this).css('display', 'none'); // делаем ему display: none;
			}
		);
		$('#modal_order').animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
			function(){ // после анимации
				$(this).css('display', 'none'); // делаем ему display: none;
			}
		);
		$('.modal_window')
			.animate({opacity: 0}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
	});
	
});