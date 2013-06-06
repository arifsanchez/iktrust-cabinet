$(function() {

		jQuery('.open-header').click(showHeader);
		jQuery('.close-header').click(hideHeader);
		
		function showHeader(){
		jQuery('.header-content').slideDown('medium');
		jQuery('.close-header').slideDown('fast');
		jQuery('.open-header').fadeOut('fast');}
		
		function hideHeader(){
		jQuery('.header-content').slideUp('medium');
		jQuery('.close-header').fadeOut('fast');
		jQuery('.open-header').fadeIn('fast');}
		
		jQuery('#switcher_btn').click(showPanel);
		jQuery('.close_btn').click(hidePanel);
		
		function showPanel(){
		jQuery('#styleSwitcher').delay(100).slideDown('medium');
		jQuery('#switcher_btn').fadeOut('fast');}
		
		function hidePanel(){
		jQuery('#styleSwitcher').fadeOut('medium');
		jQuery('#switcher_btn').delay(100).fadeIn('slow');}
		
		jQuery(".l01").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/01.png')")})
		jQuery(".l02").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/02.png')")})
		jQuery(".l03").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/03.png')")})
		jQuery(".l04").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/04.png')")})
		jQuery(".l05").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/05.png')")})
		jQuery(".l06").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/06.png')")})
		jQuery(".l07").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/07.png')")})
		jQuery(".l08").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/08.png')")})
		jQuery(".l09").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/09.png')")})
		jQuery(".l10").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/10.png')")})
		jQuery(".l11").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/11.png')")})
		jQuery(".l12").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/12.png')")})
		jQuery(".l13").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/13.png')")})
		jQuery(".l14").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/14.png')")})
		jQuery(".l15").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/15.png')")})
		jQuery(".l16").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/16.png')")})
		jQuery(".l17").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/17.png')")})
		jQuery(".l18").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/18.png')")})
		jQuery(".l19").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/19.png')")})
		jQuery(".l20").mousedown(function(){jQuery(".bglightpattern").css("background-image","url('images/background/pattern/light/20.png')")})

		jQuery(".d01").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/01.png')")})
		jQuery(".d02").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/02.png')")})
		jQuery(".d03").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/03.png')")})
		jQuery(".d04").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/04.png')")})
		jQuery(".d05").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/05.png')")})
		jQuery(".d06").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/06.png')")})
		jQuery(".d07").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/07.png')")})
		jQuery(".d08").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/08.png')")})
		jQuery(".d09").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/09.png')")})
		jQuery(".d10").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/10.png')")})
		jQuery(".d11").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/11.png')")})
		jQuery(".d12").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/12.png')")})
		jQuery(".d13").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/13.png')")})
		jQuery(".d14").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/14.png')")})
		jQuery(".d15").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/15.png')")})
		jQuery(".d16").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/16.png')")})
		jQuery(".d17").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/17.png')")})
		jQuery(".d18").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/18.png')")})
		jQuery(".d19").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/19.png')")})
		jQuery(".d20").mousedown(function(){jQuery(".bgdarkpattern").css("background-image","url('images/background/pattern/dark/20.png')")})
		
		jQuery(".wo01").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/01.png')")})
		jQuery(".wo02").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/02.png')")})
		jQuery(".wo03").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/03.png')")})
		jQuery(".wo04").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/04.png')")})
		jQuery(".wo05").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/05.png')")})
		jQuery(".wo06").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/06.png')")})
		jQuery(".wo07").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/07.png')")})
		jQuery(".wo08").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/08.png')")})
		jQuery(".wo09").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/09.png')")})
		jQuery(".wo10").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/10.png')")})
		jQuery(".wo11").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/11.png')")})
		jQuery(".wo12").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/12.png')")})
		jQuery(".wo13").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/13.png')")})
		jQuery(".wo14").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/14.png')")})
		jQuery(".wo15").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/15.png')")})
		jQuery(".wo16").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/16.png')")})
		jQuery(".wo17").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/17.png')")})
		jQuery(".wo18").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/18.png')")})
		jQuery(".wo19").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/19.png')")})
		jQuery(".wo20").mousedown(function(){jQuery(".bgwithout").css("background-image","url('images/background/20.png')")})
		
});

		

