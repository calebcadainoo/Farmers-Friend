$(function() {
	// ======= splash screen =======
	setTimeout(function(){
		$('.omni_logo').removeClass('fadeInDown');
		$('.omni_logo').addClass('bounceOut');
	}, 2500);

	setTimeout(function(){
		$('.limitless_logo').removeClass('fadeInUp');
		$('.limitless_logo').addClass('flipOutX');
	}, 3500);

	setTimeout(function(){
		$('.omni_splashscreen').addClass('animated zoomOut');
	}, 4000);

	setTimeout(function(){
		$('.omni_splashscreen').fadeOut(300);
	}, 4700);

	var homeTimer = setTimeout(function(){
		$('.omni_home').addClass('animated pulse');
	}, 5000);

	clearTimeout(homeTimer);

	setTimeout(function(){
		$('.home_audio').attr('autoplay', 'autoplay');
	}, 5000);

	// ======= end of splash screen =======


	// ------- greetings -------
	setInterval(function(){
		var now = new Date();
		var hh = now.getHours();
		var mm = now.getMinutes();
		var ss = now.getSeconds();
		var td = "";
		if (mm < 10) {mm = '0'+mm}
		if (ss < 10) {ss = '0'+ss}
		if (hh < 23 && hh < 12) {
			var greeting = "Good Morning";
			$('.weather_icon img').attr('src', 'ico/morning_sun.png');
		}else if (hh >= 12 && hh <= 16) {
			var greeting = "Good Afternoon";
			$('.weather_icon img').attr('src', 'ico/afternoon_sun.png');
		}else if (hh > 16 && hh <= 23) {
			var greeting = "Good Evening";
			$('.weather_icon img').attr('src', 'ico/moon.png');
		}
		if (hh > 12) {td = "PM"; hh = hh%12;}else{td = "AM"}
		timenow = hh + ':' + mm + ':' + ss + ' '+ td;
		$('.omni_greet').text(greeting);
		$('.omni_time').text(timenow);
	}, 10);
	// ------- end of greetings -------


	$('.crop').click(function(){
		window.location.href="?view=crop-search";
	});

	$('.plant').click(function(){
		window.location.href="?view=crop-location";
	});

	$('.expert').click(function(){
		window.location.href="?view=expert-speak";
	});

	$('.persons').click(function(){
		window.location.href="?view=group-chat";
	});

	$('.dollar').click(function(){
		window.location.href="?view=fam-coin";
	});

	$('.tab_pay').click(function(){
		window.location.href="?view=fam-coin&tab=payment";
	});

	$('.tab_pur').click(function(){
		window.location.href="?view=fam-coin&tab=agri-inputs";
	});

});