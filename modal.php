<!-- MODAL -->
<div id="modal_ask" class="modal_window"> 
    <form action="../php/ask.php" class="send_order">
		<p>Вы можете задать вопрос онлайн:</p>
		<input name="name" type="text" placeholder="Имя"/>
		<input name="phone" type="text" placeholder="Телефон"/>
		<textarea name="message" placeholder="Сообщение"></textarea>
		<input name="click_from" type="text" class="hidden_input click_from" value="Заказать звонок"/>
		<input type="submit" value="Отправить"/>
	</form>
</div>
<div id="modal_order" class="modal_window"> 
    <form action="../php/ask.php" class="send_order">
		<p>Вы можете оставить заявку:</p>
		<input name="name" type="text" placeholder="Имя"/>
		<input name="phone" type="text" placeholder="Телефон"/>
		<textarea name="message" placeholder="Сообщение"></textarea>
		<input name="click_from" type="text" class="hidden_input click_from"/>
		<input type="submit" value="Отправить"/>
	</form>
</div>
<div id="successful_sending" class="modal_window"> 
<div class="close_modal"></div>
<p class="successful_sending_header">Наш специалист свяжется с Вами в течении 10 минут.</p>
<p>Время работы нашей компании с 9 до 22 по Москвоскому времени</p>
<a href="#" class="close_modal continue">Продолжить покупки</a>
</div>

<!-- Первая указка -->

<div id="modal_laser_1" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../green_laser_pointer_200_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../green_laser_pointer_200_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../green_laser_pointer_200_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../green_laser_pointer_200_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../green_laser_pointer_200_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
					Лазерная указка 200 мВт  - отличный подарок для преподавателей. С ней Вы сможете без труда провести презентацию либо лекцию, свободно перемещаясь по аудитории.  Эта указка идеально подходит для того, чтобы указывать на предметы или экран во время своего выступления, ведь яркую точку зелёного цвета очень хорошо видно и с дальнего расстояния. Лазерную указку 200 мВт можно использовать и в темноте, что является преимуществом относительно деревянных указок. Любая презентация станет эффектнее и сможет впечатлить Ваших слушателей.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/OPndm_OjBtM" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>200 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>532 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Зеленый</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Нерегулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 90 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 300 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Батарейки типа ААА х 2</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>1,5 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>80 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>180 х 18 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Лазерная указка для презентаций Green Dragon 200 mW</p>
		<p class="modal_subtitle">Удобная современная лазерная указка. Дизайн в виде ручки отлично подходит для офиса.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">1500 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="1500" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Green Dragon 200 mW" class="hidden_input" name="item_name" />
				<input type="text" value="1500" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Вторая указка -->

<div id="modal_laser_2" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../green_laser_pointer_500_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../green_laser_pointer_500_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../green_laser_pointer_500_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../green_laser_pointer_500_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../green_laser_pointer_500_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">Лазерная указка 500 мВт — самая универсальная модель лазеров! Она станет незаменимым помощником абсолютно каждому: астроному, туристу, строителю, экскурсоводу, преподавателю и конечно тому, кто просто хочет поднять себе и окружающим настроение.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/lAoKT6MGHEg" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>500 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>532 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Зеленый</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 90 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 250 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 18650</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>3,7 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>160 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>165 х 25 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Зеленая лазерная указка Laser 303 - Green Dragon 500 mW</p>
		<p class="modal_subtitle">Поджигает спичку! Универсальный лазер, работает от аккумулятора.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">2200 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="2200" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Green Dragon 500 mW" class="hidden_input" name="item_name" />
				<input type="text" value="2200" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Третья указка -->

<div id="modal_laser_3" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../green_laser_pointer_1000_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../green_laser_pointer_1000_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../green_laser_pointer_1000_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../green_laser_pointer_1000_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../green_laser_pointer_1000_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">Лазерная указка 1000 мВт — настоящая находка для любителей лазеров!  Мощный яркий луч зелёного цвета способен на многое -  он в миг поджигает спички, лопает воздушные шарики, может прожечь пластик. Его очень хорошо видно как в темноте, так и в светлое время суток.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/0TQAQdv3K6o" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>1000 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>532 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Зеленый</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 60 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 200 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 18650</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>3,7 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>220 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>200 х 25 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Мощная лазерная указка Green Dragon 1000 mW</p>
		<p class="modal_subtitle">Влагозащищенная мощная лазерная укзка. Идеальна для строителей, астрономов, походников.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">4700 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="4700" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Green Dragon 1000 mW" class="hidden_input" name="item_name" />
				<input type="text" value="4700" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Четвертая указка -->

<div id="modal_laser_4" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../green_laser_pointer_3000_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../green_laser_pointer_3000_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../green_laser_pointer_3000_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../green_laser_pointer_3000_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../green_laser_pointer_3000_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">Лазерная указка 3000 мВт — самый мощный из представленных лазеров с зелёным лучом! Возможности этой указки действительно поражают — она может прожечь практически всё, кроме металла. Дальность свечения достигает 60 км., что даёт возможность использовать её в самых разных целях: астрономия, различные физико-оптические опыты, строительство и многое другое.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/dKIZA_YYSVc" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>3000 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>532 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Зеленый</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 45 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 200 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 18650</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>3,7 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>220 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>200 х 25 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Зеленый лазер Green Dragon 3000 mW</p>
		<p class="modal_subtitle">Очень яркий зеленый лазер! Прожигает изоленту, пластмассу, картон. Поставляется в алюминиевом кейсе.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">11400 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="11400" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Green Dragon 3000 mW" class="hidden_input" name="item_name" />
				<input type="text" value="11400" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Пятая указка -->

<div id="modal_laser_5" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../green_laser_pointer_10000_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../green_laser_pointer_10000_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../green_laser_pointer_10000_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../green_laser_pointer_10000_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../green_laser_pointer_10000_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">Лазерная указка 3000 мВт — самый мощный из представленных лазеров с зелёным лучом! Возможности этой указки действительно поражают — она может прожечь практически всё, кроме металла. Дальность свечения достигает 60 км., что даёт возможность использовать её в самых разных целях: астрономия, различные физико-оптические опыты, строительство и многое другое. </p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/SN5AJM3-BE4" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>10000 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>532 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Зеленый</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 60 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 200 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 18650 х 2</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>3,7 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>390 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>215 х 28 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Самая мощная лазерная указка Green Dragon 10000 mW</p>
		<p class="modal_subtitle">Новейший уникальный зеленый лазер! Выжигает по дереву, прожигает пластмассу. Бронзовый корпус с золотым покрытием.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">36500 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="36500" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Green Dragon 10000 mW" class="hidden_input" name="item_name" />
				<input type="text" value="36500" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Шестая указка -->

<div id="modal_laser_6" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../red_laser_pointer_200_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../red_laser_pointer_200_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../red_laser_pointer_200_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../red_laser_pointer_200_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../red_laser_pointer_200_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Лазерная указка 200 мВт (Laser Pointer 200 Red) – модель из серии указок с лучом красного цвета. Если Вам необходимо светить на зелёный фон, то лазерная указка 200 мВт просто незаменима.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="520" height="293" src="//www.youtube.com/embed/krdDQ-k1xPo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>200 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>650 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Красный</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Нерегулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 90 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 450 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Батареки типа ААА х 2</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>1,5 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>80 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>180 х 18 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Красная лазерная указка Red Dragon 200 mW</p>
		<p class="modal_subtitle">Идеальна для презентаций или игры с домашними животными</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">1500 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="1500" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Red Dragon 200 mW" class="hidden_input" name="item_name" />
				<input type="text" value="1500" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Седьмая указка -->

<div id="modal_laser_7" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../red_laser_pointer_2000_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../red_laser_pointer_2000_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../red_laser_pointer_2000_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../red_laser_pointer_2000_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../red_laser_pointer_2000_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Лазерная указка 2000 мВт Red –  мощный лазер с лучом красного цвета. Области применения этой указки весьма широки: будь то астрономия, туризм, строительство или развлекательная сфера.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="520" height="293" src="//www.youtube.com/embed/B9ycCqnR6Sc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>2000 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>650 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Красный</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 60 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 200 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 18650</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>3,7 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>160 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>160 х 25 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Красный лазер Red Dragon 2000 mW</p>
		<p class="modal_subtitle">Мощная красная лазерная укзка. Поджигает спички, лопает шарики, прожигает изоленту, пластмассу.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">2900 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="2900" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Red Dragon 2000 mW" class="hidden_input" name="item_name" />
				<input type="text" value="2900" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Восьмая указка -->

<div id="modal_laser_8" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../blue_laser_pointer_10000_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../blue_laser_pointer_10000_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../blue_laser_pointer_10000_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../blue_laser_pointer_10000_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../blue_laser_pointer_10000_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Лазерная указка 10000 мВт — превосходный мощный лазер с синим лучом. С его помощью можно выжигать по дереву, не говоря уже о том, что он прожигает пластик, резину и многое другое.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="520" height="293" src="//www.youtube.com/embed/R1Iz_Z9Fbcg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>10000 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>445 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Синий</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 30 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 100 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 16340 х 2</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>7,4 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>280 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>210 х 30 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Синяя лазерная указка Blue Dragon 10000 mW</p>
		<p class="modal_subtitle">Выжигает по дереву! Прожигает пластмассу, картон, белую бумагу. Поставляется в алюминиевом кейсе. </p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">8900 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="8900" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Blue Dragon 10000 mW" class="hidden_input" name="item_name" />
				<input type="text" value="8900" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Девятая указка -->

<div id="modal_laser_9" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../blue_laser_pointer_20000_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../blue_laser_pointer_20000_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../blue_laser_pointer_20000_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../blue_laser_pointer_20000_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../blue_laser_pointer_20000_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Лазерная указка 20000 мВт — очень мощный лазер с лучом синего цвета. Портативный лазер с такой мощностью — это просто находка для профессионалов и любителей лазерной и оптической техники. Возможности этой указки по истине безграничны: она прожигает дерево, картон даже с расстояния в 10м, плавит резину и даже олово. 
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="520" height="293" src="//www.youtube.com/embed/oKFJdedHnZo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>20000 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>445 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Синий</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 25 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 100 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 16340 х 2</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>7,4 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>320 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>210 х 30 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Мощный синий лазер Blue Dragon 20000 mW</p>
		<p class="modal_subtitle"> Можно разжечь костер! Самый мощный в мире портативный лазер на 2013 г.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">16900 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="16900" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Blue Dragon 20000 mW" class="hidden_input" name="item_name" />
				<input type="text" value="16900" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Десятая указка -->

<div id="modal_laser_10" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../blue_laser_pointer_45000_mw/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../blue_laser_pointer_45000_mw/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../blue_laser_pointer_45000_mw/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../blue_laser_pointer_45000_mw/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../blue_laser_pointer_45000_mw/images/4.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Лазерная указка 45 Вт - настоящий прорыв в сфере портативных лазеров! Это новейшая модель 2014 года, которая на данный момент является самым мощным лазером с лучом синего цвета, который только Вы сможете приобрести.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="520" height="293" src="//www.youtube.com/embed/kKu2TB_LSas?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Мощность: </td>
					<td>45000 мВт</td>
				</tr>
				<tr>
					<td>Длина волны:</td>
					<td>445 нм</td>
				</tr>
				<tr>
					<td>Цвет луча:</td>
					<td>Синий</td>
				</tr>
				<tr>
					<td>Фокусировка:</td>
					<td>Регулируемая</td>
				</tr>
				<tr>
					<td>Время работы от одного заряда:</td>
					<td>~ 20 мин</td>
				</tr>
				<tr>
					<td>Время непрерывной работы:</td>
					<td>до 100 с</td>
				</tr>
				<tr>
					<td>Питание:</td>
					<td>Аккумулятор 18650 х 2</td>
				</tr>
				<tr>
					<td>Рабочее напряжение:</td>
					<td>7,4 В</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>390 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>215 х 28 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Самый мощный в мире портативный лазер Blue Dragon 45000 mW </p>
		<p class="modal_subtitle">Новейший уникальный лазер! Плавит олово, поджигает дерево. Бронзовый корпус с золотым покрытием.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">36500 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="36500" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Blue Dragon 45000 mW" class="hidden_input" name="item_name" />
				<input type="text" value="36500" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Первый акксесуар -->

<div id="modal_laser_11" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../acc_16340/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../acc_16340/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../acc_16340/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../acc_16340/images/1.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../acc_16340/images/2.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Аккумулятор 16340 (другие названия - R123, RCR123A) — это цилиндрический литий-ионный аккумулятор, номинальное напряжение 3,7 В и емкость 650 мАч. Аккумуляторы типоразмера 16340 имеют 34,5 мм в длину и 17 мм в диаметре.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/SN5AJM3-BE4" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Модель: </td>
					<td>Аккумулятор 16430 (R123, RCR123A)</td>
				</tr>
				<tr>
					<td>Тип:</td>
					<td>Литий-ионный цилиндрический</td>
				</tr>
				<tr>
					<td>Напряжение:</td>
					<td>3,7 В</td>
				</tr>
				<tr>
					<td>Сила тока:</td>
					<td>1 А</td>
				</tr>
				<tr>
					<td>Емкость:</td>
					<td>650 мАч</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>35 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>17 х 34,5 мм</td>
				</tr>
				<tr>
					<td>Рабочая температура:</td>
					<td>от -10 °С до +40 °С</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Аккумулятор 16340</p>
		<p class="modal_subtitle">Аккумулятор 16340 (другие названия - R123, RCR123A) — это цилиндрический литий-ионный аккумулятор, номинальное напряжение 3,7 В и емкость 650 мАч. </p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price"> 350 Р</p>
					<!-- <p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul> -->
				</div>
				<input type="text" value="350" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Аккумулятор 16340" class="hidden_input" name="item_name" />
				<input type="text" value="350" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Второй акксусуар -->

<div id="modal_laser_12" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../acc_18650/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../acc_18650/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../acc_18650/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../acc_18650/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../acc_18650/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Аккумулятор 18650 — это стандартный промышленный цилиндрический литий-ионный аккумулятор, выдающий напряжение 3,7 В, емкость около 2200 мАч. Типоразмер 18650 обозначает размеры этого аккумулятора: 18 мм в диаметре и 65 мм в длину.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/SN5AJM3-BE4" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Модель: </td>
					<td>Аккумулятор 18650</td>
				</tr>
				<tr>
					<td>Тип:</td>
					<td>Литий-ионный цилиндрический</td>
				</tr>
				<tr>
					<td>Напряжение:</td>
					<td>3,7 В</td>
				</tr>
				<tr>
					<td>Сила тока:</td>
					<td>1 А</td>
				</tr>
				<tr>
					<td>Емкость:</td>
					<td>2200 мАч</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>70 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>18 х 65 мм</td>
				</tr>
				<tr>
					<td>Рабочая температура:</td>
					<td>от -10 °С до +40 °С</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Аккумулятор 18650</p>
		<p class="modal_subtitle">Аккумулятор 18650 — это стандартный промышленный цилиндрический литий-ионный аккумулятор, выдающий напряжение 3,7 В, емкость около 2200 мАч. Типоразмер 18650 обозначает размеры этого аккумулятора: 18 мм в диаметре и 65 мм в длину.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">800 Р</p>
					<!-- <p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul> -->
				</div>
				<input type="text" value="800" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Аккумулятор 18650" class="hidden_input" name="item_name" />
				<input type="text" value="800" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Третий акксесуар -->

<div id="modal_laser_13" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../acc_cover/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../acc_cover/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../acc_cover/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../acc_cover/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../acc_cover/images/2.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Чехол — обязательный аксессуар к лазерной указке, если Вы собираетесь в поход, на рыбалку или просто на природу. Чехол имеет крепление на пояс. Подайте сигнал спасателям, разожгите костер, отпугните бродячих собак - в какой бы ситуации Вы ни оказались лазерная указка теперь будет всегда с Вами!
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/SN5AJM3-BE4" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Модель: </td>
					<td>Чехол для лазерной указки</td>
				</tr>
				<tr>
					<td>Материал:</td>
					<td>Нейлон</td>
				</tr>
				<tr>
					<td>Тип застежки:</td>
					<td>«Велкро» (липучка)</td>
				</tr>
				<tr>
					<td>Крепление на пояс:</td>
					<td>Есть</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>25 г</td>
				</tr>
				<tr>
					<td>Размеры:</td>
					<td>5 х 20 см</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Чехол для лазерной указки</p>
		<p class="modal_subtitle">Чехол изготовлен из легкой, но прочной ткани - нейлона, и достаточно универсален по форме — подходит практически для любой модели лазера или светодиодного фонаря. Клапан чехла фиксируется липучкой, что дает быстрый доступ к лазеру или фонарю.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">500 Р</p>
					<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul>
				</div>
				<input type="text" value="500" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Чехол" class="hidden_input" name="item_name" />
				<input type="text" value="500" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Четвертый акксесуар -->

<div id="modal_laser_14" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../acc_glasses/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../acc_glasses/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../acc_glasses/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../acc_glasses/images/3.jpg" alt="laser_photo_3" class="hidden_img"/>
			<img src="../acc_glasses/images/2.jpg" alt="laser_photo_4" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Защитные очки блокируют лазерное излучение с длинной волны до 570 нм - ультрафиолетовый, синий и зеленый спектры. Подходят для безопасной работы с большинством лазеров, представленных в нашем магазине, исключением станут только красные и инфракрасные лазеры.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/SN5AJM3-BE4" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Модель: </td>
					<td>Защитные очки</td>
				</tr>
				<tr>
					<td>Материал:</td>
					<td>Плексиглас</td>
				</tr>
				<tr>
					<td>Защита от лазерного излучения:</td>
					<td>до 570 нм</td>
				</tr>
				<tr>
					<td>Крепление на пояс:</td>
					<td>Есть</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>30 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>150 х 150 х 55 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Защитные очки от лазерного излучения</p>
		<p class="modal_subtitle">Защитные очки сделаны из плексигласа и защищают не только от лазерного излучения но и от любых быстролетящих мелких предметов.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">500 Р</p>
				<!-- 	<p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul> -->
				</div>
				<input type="text" value="500" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Защитные очки" class="hidden_input" name="item_name" />
				<input type="text" value="500" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Пятый аксессуар -->

<div id="modal_laser_15" class="modal_window modal_laser_window">
	<div class="half_modal">
		<div class="modal_gallery" id="modal_gallery1">
			<div class="modal_arr modal_arr_left"></div>
			<div class="modal_arr modal_arr_right"></div>
			<img src="../acc_tripod/images/1.jpg" alt="laser_photo_1" class="visible_img" id="qwe1"/>
			<img src="../acc_tripod/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../acc_tripod/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
			<img src="../acc_tripod/images/1.jpg" alt="laser_photo_1" class="hidden_img"/>
			<img src="../acc_tripod/images/2.jpg" alt="laser_photo_2" class="hidden_img"/>
		</div>
		<div class="modal_about_laser">
			<ul class="select_div modal_view">
				<li class="active" data-view="modal_laser_description">Описание</li>
				<li data-view="modal_laser_video">Видео</li>
				<li data-view="modal_laser_characteristics">Характеристики</li>
			</ul>
			<div id="modal_laser_description" class="modal_laser_description active">
				<p class="modal_laser_description-text">
				Настольный штатив с держателем для лазерных указок и светодиодных фонарей. Может регулироваться по высоте с помощью двухсекционных телескопических ножек, таким образом высота может быть 15 см, 23 см или 29 см. Положение лазера можно регулировать во всех направлениях с помощью подвижных шарниров.
				</p>
			</div>
			<div id="modal_laser_video" class="modal_laser_video">
				<iframe class="modal_iframe" width="853" height="480" src="http://www.youtube.com/embed/SN5AJM3-BE4" frameborder="0" allowfullscreen></iframe>
			</div>
			<table id="modal_laser_characteristics" class="modal_laser_characteristics">
				<tr>
					<td>Модель: </td>
					<td>Миништатив типа «трипод»</td>
				</tr>
				<tr>
					<td>Крепление:</td>
					<td>Держатель для лазеров</td>
				</tr>
				<tr>
					<td>Материал:</td>
					<td>Сталь</td>
				</tr>
				<tr>
					<td>Возможная высота:</td>
					<td>15 см, 23 см или 29 см</td>
				</tr>
				<tr>
					<td>Максимальная масса груза:</td>
					<td>800 г</td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td>130 г</td>
				</tr>
				<tr>
					<td>Габариты:</td>
					<td>17 х 34,5 мм</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="half_modal">
		<p class="modal_title">Настольный штатив для лазерных указок</p>
		<p class="modal_subtitle"> Вы сможете светить без подрагиваний на любые расстояния или зафиксироваться на одной точке и светить именно в нее, добиваясь необходимого эффекта.</p>
		<div class="item_form">
			<form action="../php/form.php" class="send_order closed">
				<div class='clear'>
					<p class="item_price" id="modal_item_price">550 Р</p>
					<!-- <p class="modal_accessories">Добавить аксессуары</p>
					<ul>
						<li>
							<label for="modal_checkbox1" data-price="350">Аккум 16340 * 1 шт (+350 Р)</label>
							<input id='modal_checkbox1' type="checkbox" name="accessory[]" value="аккумулятор_16340"/>
						</li>
						<li>
							<label for="modal_checkbox2" data-price="550">Штатив * 1 шт (+550 Р)</label>
							<input id='modal_checkbox2' type="checkbox" name="accessory[]" value="штатив"/>
						</li>
						<li>
							<label for="modal_checkbox3" data-price="500">Очки защитные * 1 шт (+500 Р)</label>
							<input id='modal_checkbox3' type="checkbox" name="accessory[]" value="очки"/>
						</li>
						<li>
							<label for="modal_checkbox4" data-price="800">Аккум 18650 * 1 шт (+800 Р)</label>
							<input id='modal_checkbox4' type="checkbox" name="accessory[]" value="аккумулятор_18650"/>
						</li>
					</ul> -->
				</div>
				<input type="text" value="550" class="hidden_input modal_total_cost" name="total_cost" />
				<input type="text" value="Штатив - тренога" class="hidden_input" name="item_name" />
				<input type="text" value="550" class="hidden_input" name="original_price" />
				<div class="inputs">
					<p>Чтобы заказать, заполните форму:</p>
					<input type="text" placeholder="Введите ваше имя:" name="name"/>
					<input type="text" placeholder="Номер телефона:" name="phone"/>
					<input type="submit" value="Отправить"/>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="overlay"></div>
<!-- END MODAL -->