window.onload = function () {
	var carousel = document.getElementById('carousel');
	var carousel_items = carousel.children;
	var item_width= Math.floor(parseFloat(getComputedStyle(carousel_items[0]).width)) +
					Math.ceil(parseFloat(getComputedStyle(carousel_items[0]).marginRight)) +
					Math.ceil(parseFloat(getComputedStyle(carousel_items[0]).marginLeft));
	var visible_items = Math.ceil(Math.floor(parseFloat(getComputedStyle(carousel).width)) / item_width);
	var clicks=0;
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
		}
	}
	arr_left.onclick = function(){
		if (clicks > 0){
			for (var i=0;i<carousel_items.length;i++){
				var left = parseInt(getComputedStyle(carousel_items[i],'').left);
				carousel_items[i].style.left = left+item_width+'px';
			}
			clicks--;
		}
	}
}