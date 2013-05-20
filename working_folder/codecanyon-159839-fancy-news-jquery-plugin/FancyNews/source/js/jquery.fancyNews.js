/*!
 * Fancy News v2.0
 *
 * Copyright 2011, Rafael Dery
 *
 * Only for sale at the envato marketplaces
 */

;(function($) {
	jQuery.fn.fancyNews = function(arg) {
	
		var options = $.extend({},$.fn.fancyNews.defaults,arg);
		var $elem, newsContainers, $newsList, $nav, previewSize, slideAmount, slideInt, contents = [], topIndex = 0;
		
			function _init(elem) {
				
				$elem = $(elem).addClass('fn-container');
				newsContainers = $elem.children('div').remove();
				
				if(options.vertical) {
					$elem.addClass('fn-vertical');
				}
				
				//add css to the main
				$elem.css({
					'overflow': 'hidden',
					'position': 'relative',
					'width': options.vertical ? options.width+(options.offset * options.previewsPerPage) : options.width,
					'height': options.vertical ? options.height : options.height+(options.offset * options.previewsPerPage)
				})
				.append('<ul class="fn-news-list"></ul>')
				.append("<div class='fn-preloader'></div>")
				.append("<div class='fn-full-post' style='height:"+$elem.height()+"px; background:"+options.backgroundColor+"'><h3></h3><div></div></div>");
				
				$newsList = $elem.children('.fn-news-list');
				
				$elem.find('.fn-preloader').css({
					'top': options.height*0.5-$elem.find('.fn-preloader').height()*0.5,
					'left': options.width*0.5-$elem.find('.fn-preloader').width()*0.5
				});
				
				//save preview height
				previewSize = options.vertical ? options.width / options.previewsPerPage : options.height / options.previewsPerPage;
				slideAmount = previewSize + options.offset;
				
				//load rss feed if URL is passed
				if(options.feed){
					_loadFromXml();
				}
				else{
					_loadFromDom();
				}			
			};
			
			function _loadFromDom(){
				
				for(var i=0; i < newsContainers.length; ++i){
				
					_appendNewsItem(
						$(newsContainers[i]).children('span').attr('title').length > 0 ? $(newsContainers[i]).find('span').attr('title') : '', 
						newsContainers[i].title,
						_getWords($(newsContainers[i]).children('span').text(), options.maxWords)+'[....]',
						options.useLinks ? $(newsContainers[i]).data('link') : $(newsContainers[i]).children('span').html(),
						$(newsContainers[i]).children('img').attr('src')
					);
				};
				
				_listCreated();
				
			};
			
			function _loadFromXml(){
			
				var timestamp = new Date(),
					gurl = "http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&callback=?&q="+options.feed+"?"+timestamp.getTime()+"&num="+options.numOfEntries;
				
				$.getJSON(gurl, function(data){
					
					if(data.responseStatus == 200) {
						var feeds = data.responseData.feed;
						for(var i=0; i<feeds.entries.length; i++){
							var entry = feeds.entries[i];
							_appendNewsItem(
								entry.title, 
								String(entry.publishedDate).substr(0,16),
								_getWords(entry.content.replace(/(<([^>]+)>)/ig,""), options.maxWords)+'[....]',
								options.useLinks ? entry.link : entry.content
							);
						}
						
						_listCreated();
					}
					else {
						$elem.append('<p class="fn-error"><strong>Error!</strong> The URL of the RSS feed is not correct.</p>');
					}
					
				});
			};
			
			function _appendNewsItem(title, date, excerpt, content, image) {
				
				var dateHtml = date != undefined && date != '' ? '<h4>'+date+'</h4>' : '',
					imageHtml = image != undefined && image != '' ? '<img src="'+image+'" />' : '';
				
				
				//save text or link in array
				contents.push(content);
				
				//append new list item
				var $lastItem = $newsList.append('<li class="fn-preview fn-clearfix" style="background:'+options.backgroundColor+';" data-index="'+$newsList.children('li').size()+'">'+imageHtml+'<div><h3>'+title+'</h3>'+dateHtml+'<p>'+excerpt+'</p></div></li>').children('li:last');
				
				if(options.vertical) {
					$lastItem.css({'width': previewSize, 'left': (previewSize + options.offset) * ($newsList.children('li').size()-1)});
				}
				else {
					$lastItem.css({'height': previewSize, 'marginBottom': options.offset});
				}
				
				//list item handlers
				$lastItem.fadeIn(100 + ($newsList.children('li').size() * 300))
		
			};
			
			function _listCreated(){
			
				options.onListCreated.call();
			
				$elem.children('.fn-preloader').hide();
				
				//create the navigation bar with all buttons
				$elem.after('<div class="fn-navigation fn-clearfix" style="width:'+options.width+'px; background:'+options.backgroundColor+'"><span class="fn-post-count">1 - '+options.previewsPerPage+'</span><a href="#" class="fn-close-button"></a></div>');
				
				$nav = $elem.next('.fn-navigation');
				
				//hide navigation on some option settings
				if(!options.arrows && options.infiniteLoop && options.useLinks) {
					$nav.hide();
				}
				
				if(options.vertical) {
					$nav.addClass('fn-vertical').css('width', options.width + (options.offset * options.previewsPerPage));
				}
				
				if(options.arrows) {
					var arrowHtml = options.vertical ? '<a href="#" class="fn-next-button"></a><a href="#" class="fn-previous-button"></a>' : '<a href="#" class="fn-previous-button"></a><a href="#" class="fn-next-button"></a>';
					$nav.children('span:first').after(arrowHtml);
				}
				
				if(options.infiniteLoop) {
					$nav.children('.fn-post-count').hide();
				}				
				
				//move list up/down
				$nav.children('.fn-previous-button, .fn-next-button').click(function(){
					_stopInterval();
					_startInterval();
					
					if(options.vertical) {
						$(this).hasClass('fn-previous-button') ? _slide('right') : _slide('left');
					}
					else {
						$(this).hasClass('fn-previous-button') ? _slide('up') : _slide('down');
					}
					
					return false;
				});
				
				//back to preview overview
				$nav.children('.fn-close-button').click(function(){
						_toggleButtons();
						$elem.children('.fn-full-post').fadeOut(200, function() {
							$(this).children('div').mCustomScrollbar("destroy");
							_stopInterval();
						})
						return false;
				});
				
				$newsList.delegate('li', 'mouseover', function(){
					$(this).stop().animate({ 'opacity': 1, 'backgroundColor': options.backgroundOverColor}, 800);
				})						
				.delegate('li', 'mouseout', function(){
					
					$(this).stop().animate({ 'opacity': 1, 'backgroundColor': options.backgroundColor}, 500);	
				})
				.delegate('li', 'click', function(){
					
					var $this = $(this),
						content = contents[parseInt($this.data('index'))];
					
					if(options.useLinks) {
						if(content == undefined || content == '') {
							alert('No link given!');
						}
						else {
							window.open(content, options.targetWindow);
						}
					}
					else {									
						//hide next/previous button
						_toggleButtons();
						
						$elem.children('.fn-preloader').show();
						
						var $fullPostElem = $elem.children('.fn-full-post');
								
						//fade in view box and set title and content
						$fullPostElem.fadeIn(500, function() {
							_stopInterval();
						})
						.children('h3').text($this.children('div').children('h3').text())
						.parent().children('div').html(content).fadeOut(0);
						
						var titleHeight = $fullPostElem.children('h3').height() + parseInt($fullPostElem.children('h3').css('marginTop')) + parseInt($fullPostElem.children('h3').css('marginBottom'));
						
						$fullPostElem.children('div').height($fullPostElem.height() - titleHeight).find('img').imagesLoaded(function($images) {
							$fullPostElem.children('div').stop().fadeIn(300).mCustomScrollbar({mouseWheelPixels: 120});
							
							$elem.children('.fn-preloader').fadeOut(200);
						});
					}	
				});
				
				if(options.slideTime) {
					//stop interval when moving mouse over list
					$newsList.hover(
						function() {
							_stopInterval();
						},
						function() {
							_startInterval();
						}
					);
					
					//stop scrolling when switching to another window/tab
					$(window).blur(_stopInterval);
					$(window).focus(_startInterval);					
					
					//start interval for auto-slide
					_startInterval();
				}
					
			};
			
			//toggles the control buttons
			function _toggleButtons(){
			
				if($nav.children('.fn-previous-button').is(':hidden')){
					$nav.children('.fn-previous-button, .fn-next-button').show();
				 	$nav.children('.fn-close-button').hide();					
				 }
				else {
					$nav.children('.fn-previous-button, .fn-next-button').hide();
				 	$nav.children('.fn-close-button').show();					
				}
			};
			
			function _slide(direction) {

				//check for slide animation		
				if($newsList.is(':animated')) { return false; }
				
				var listLength = $newsList.children('li').size();
				
				if(options.vertical) {
					if( typeof(direction)==='undefined' ) direction = 'left';

					if(direction == 'left') {
						if(Math.round((listLength * slideAmount) + parseFloat($newsList.position().left)) > ($newsList.width()) || options.infiniteLoop) {
						
							$newsList.animate({left: '-='+slideAmount}, 500, function() {
								if(options.infiniteLoop) {
									var leftItem = $newsList.children('li:first').remove(),
										lastLeftPos = parseFloat($newsList.children('li:last').css('left'));

									$newsList.append(leftItem);
									leftItem.css('left', lastLeftPos + slideAmount);
								}
							});
							
							++topIndex;
							$nav.children('.fn-post-count').text((topIndex+1) + ' - ' + (options.previewsPerPage+topIndex));
						}
					}
					else {
						if(parseFloat($newsList.position().left) != 0 || options.infiniteLoop) {
							
							if(options.infiniteLoop) {
								var rightItem = $newsList.children('li:last').remove(),
									firstLeftPos = parseFloat($newsList.children('li:first').css('left'));
									
								$newsList.prepend(rightItem);
								rightItem.css('left', firstLeftPos - slideAmount);	
							}
							
							$newsList.animate({left: '+='+slideAmount}, 500);
							
							--topIndex;
							$nav.children('.fn-post-count').text((topIndex+1) + ' - ' + (options.previewsPerPage+topIndex));
							
						}
					}
				}
				else {
					if( typeof(direction)==='undefined' ) direction = 'down';
					//move the list down
					if(direction == 'down') {
						if(Math.round((listLength * slideAmount) + parseFloat($newsList.position().top)) > $newsList.height() || options.infiniteLoop) {
						
							$newsList.animate({top: '-='+slideAmount}, 500, function() {
								if(options.infiniteLoop) {
									var topItem = $newsList.children('li:first').remove();
									$newsList.append(topItem).css('top', '+='+slideAmount );
								}
							});
							
							++topIndex;
							$nav.children('.fn-post-count').text((topIndex+1) + ' - ' + (options.previewsPerPage+topIndex));
						}
						
					}
					//move the list up
					else {
						if(parseFloat($newsList.position().top) != 0 || options.infiniteLoop) {
							
							if(options.infiniteLoop) {
								var bottomItem = $newsList.children('li:last').remove();
								$newsList.prepend(bottomItem).css('top', '-='+slideAmount);	
							}
							
							$newsList.animate({top: '+='+slideAmount}, 500);
							
							--topIndex;
							$nav.children('.fn-post-count').text((topIndex+1) + ' - ' + (options.previewsPerPage+topIndex));
							
						}
					}
				}				
			};
			
			function _startInterval() {
				if(options.slideTime && slideInt == undefined) {
					slideInt = setInterval(_slide, options.slideTime);
				}
			};
			
			function _stopInterval() {
				if(options.slideTime && slideInt != undefined) {
					clearInterval(slideInt);
					slideInt = undefined;
				}
			};
		
		return this.each(function() {_init(this)});
	};
	
	//returns the words for the preview text depending on maxWords options
	function _getWords(text, length){
		var textArray = text.split(" ");
		var shortedText = "";
		if(textArray.length > length){
			for(var i=0; i<length;++i){
				shortedText+= textArray[i]+ " ";
			}
			return shortedText;
		}
		else{
			return text;
		}	
	};
	
	$.fn.fancyNews.defaults = {
		width: 500, //the width of the main content area in px(without footer bar)
		height: 420, //the height of the main content area in px(without footer bar)
		offset: 2, //the offset between every preview box in px
		maxWords: 55, //the numbers of words for each preview text
		previewsPerPage: 3, //the numbers of previews per page
		numOfEntries: 10, //number of blog entries to load (only for RSS feed)
		slideTime: 0, // set the delay for the slide show
		feed: '', // a URL to a RSS feed
		backgroundColor: '#1A1A1A', //the background color
		backgroundOverColor: '#0C0C0C', //the background color when you move your mouse over a preview
		useLinks: false, //enable or disable the links on every preview
		targetWindow: '_blank', //_blank or _self
		infiniteLoop: false, // V2.0 - if a slide time is set, you can also enable infinite loop
		arrows: true, // V2.0 - show or hide the arrows to navigate
		vertical: false, // V2.0 - enable vertical scrolling
		onListCreated: function() {} // V2.0 - a callback when the list with the previews has been created
	};
})(jQuery);



/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.6
 * 
 * Requires: 1.2.2+
 */
(function(a){function d(b){var c=b||window.event,d=[].slice.call(arguments,1),e=0,f=!0,g=0,h=0;return b=a.event.fix(c),b.type="mousewheel",c.wheelDelta&&(e=c.wheelDelta/120),c.detail&&(e=-c.detail/3),h=e,c.axis!==undefined&&c.axis===c.HORIZONTAL_AXIS&&(h=0,g=-1*e),c.wheelDeltaY!==undefined&&(h=c.wheelDeltaY/120),c.wheelDeltaX!==undefined&&(g=-1*c.wheelDeltaX/120),d.unshift(b,e,g,h),(a.event.dispatch||a.event.handle).apply(this,d)}var b=["DOMMouseScroll","mousewheel"];if(a.event.fixHooks)for(var c=b.length;c;)a.event.fixHooks[b[--c]]=a.event.mouseHooks;a.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var a=b.length;a;)this.addEventListener(b[--a],d,!1);else this.onmousewheel=d},teardown:function(){if(this.removeEventListener)for(var a=b.length;a;)this.removeEventListener(b[--a],d,!1);else this.onmousewheel=null}},a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})})(jQuery)


/* 
== malihu jquery custom scrollbars plugin == 
version: 2.3.2 
author: malihu (http://manos.malihu.gr) 
plugin home: http://manos.malihu.gr/jquery-custom-content-scroller 
*/
;(function($){
	var methods={
		init:function(options){
			var defaults={ 
				set_width:false, /*optional element width: boolean, pixels, percentage*/
				set_height:false, /*optional element height: boolean, pixels, percentage*/
				horizontalScroll:false, /*scroll horizontally: boolean*/
				scrollInertia:550, /*scrolling inertia: integer (milliseconds)*/
				scrollEasing:"easeOutCirc", /*scrolling easing: string*/
				mouseWheel:"pixels", /*mousewheel support and velocity: boolean, "auto", integer, "pixels"*/
				mouseWheelPixels:60, /*mousewheel pixels amount: integer*/
				autoDraggerLength:true, /*auto-adjust scrollbar dragger length: boolean*/
				scrollButtons:{ /*scroll buttons*/
					enable:false, /*scroll buttons support: boolean*/
					scrollType:"continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
					scrollSpeed:20, /*scroll buttons continuous scrolling speed: integer*/
					scrollAmount:40 /*scroll buttons pixels scroll amount: integer (pixels)*/
				},
				advanced:{
					updateOnBrowserResize:true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
					updateOnContentResize:false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
					autoExpandHorizontalScroll:false, /*auto-expand width for horizontal scrolling: boolean*/
					autoScrollOnFocus:true /*auto-scroll on focused elements: boolean*/
				},
				callbacks:{
					onScrollStart:function(){}, /*user custom callback function on scroll start event*/
					onScroll:function(){}, /*user custom callback function on scroll event*/
					onTotalScroll:function(){}, /*user custom callback function on scroll end reached event*/
					onTotalScrollBack:function(){}, /*user custom callback function on scroll begin reached event*/
					onTotalScrollOffset:0, /*scroll end reached offset: integer (pixels)*/
					whileScrolling:false, /*user custom callback function on scrolling event*/
					whileScrollingInterval:30 /*interval for calling whileScrolling callback: integer (milliseconds)*/
				}
			},
			options=$.extend(true,defaults,options);
			/*check for touch device*/
			$(document).data("mCS-is-touch-device",false);
			if(is_touch_device()){
				$(document).data("mCS-is-touch-device",true); 
			}
			function is_touch_device(){
				return !!("ontouchstart" in window) ? 1 : 0;
			}
			return this.each(function(){
				var $this=$(this);
				/*set element width/height, create markup for custom scrollbars, add classes*/
				if(options.set_width){
					$this.css("width",options.set_width);
				}
				if(options.set_height){
					$this.css("height",options.set_height);
				}
				if(!$(document).data("mCustomScrollbar-index")){
					$(document).data("mCustomScrollbar-index","1");
				}else{
					var mCustomScrollbarIndex=parseInt($(document).data("mCustomScrollbar-index"));
					$(document).data("mCustomScrollbar-index",mCustomScrollbarIndex+1);
				}
				$this.wrapInner("<div class='mCustomScrollBox' id='mCSB_"+$(document).data("mCustomScrollbar-index")+"' style='position:relative; height:100%; overflow:hidden; max-width:100%;' />").addClass("mCustomScrollbar _mCS_"+$(document).data("mCustomScrollbar-index"));
				var mCustomScrollBox=$this.children(".mCustomScrollBox");
				if(options.horizontalScroll){
					mCustomScrollBox.addClass("mCSB_horizontal").wrapInner("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />");
					var mCSB_h_wrapper=mCustomScrollBox.children(".mCSB_h_wrapper");
					mCSB_h_wrapper.wrapInner("<div class='mCSB_container' style='position:absolute; left:0;' />").children(".mCSB_container").css({"width":mCSB_h_wrapper.children().outerWidth(),"position":"relative"}).unwrap();
				}else{
					mCustomScrollBox.wrapInner("<div class='mCSB_container' style='position:relative; top:0;' />");
				}
				var mCSB_container=mCustomScrollBox.children(".mCSB_container");
				if($(document).data("mCS-is-touch-device")){
					mCSB_container.addClass("mCS_touch");
				}
				mCSB_container.after("<div class='mCSB_scrollTools' style='position:absolute;'><div class='mCSB_draggerContainer' style='position:relative;'><div class='mCSB_dragger' style='position:absolute;'><div class='mCSB_dragger_bar' style='position:relative;'></div></div><div class='mCSB_draggerRail'></div></div></div>");
				var mCSB_scrollTools=mCustomScrollBox.children(".mCSB_scrollTools"),
					mCSB_draggerContainer=mCSB_scrollTools.children(".mCSB_draggerContainer"),
					mCSB_dragger=mCSB_draggerContainer.children(".mCSB_dragger");
				if(options.horizontalScroll){
					mCSB_dragger.data("minDraggerWidth",mCSB_dragger.width());
				}else{
					mCSB_dragger.data("minDraggerHeight",mCSB_dragger.height());
				}
				if(options.scrollButtons.enable){
					if(options.horizontalScroll){
						mCSB_scrollTools.prepend("<a class='mCSB_buttonLeft' style='display:block; position:relative;'></a>").append("<a class='mCSB_buttonRight' style='display:block; position:relative;'></a>");
					}else{
						mCSB_scrollTools.prepend("<a class='mCSB_buttonUp' style='display:block; position:relative;'></a>").append("<a class='mCSB_buttonDown' style='display:block; position:relative;'></a>");
					}
				}
				/*mCustomScrollBox scrollTop and scrollLeft is always 0 to prevent browser focus scrolling*/
				mCustomScrollBox.bind("scroll",function(){
					if(!$this.is(".mCS_disabled")){ /*native focus scrolling for disabled scrollbars*/
						mCustomScrollBox.scrollTop(0).scrollLeft(0);
					}
				});
				/*store options, global vars/states, intervals and update element*/
				$this.data({
					/*init state*/
					"mCS_Init":true,
					/*option parameters*/
					"horizontalScroll":options.horizontalScroll,
					"scrollInertia":options.scrollInertia,
					"scrollEasing":options.scrollEasing,
					"mouseWheel":options.mouseWheel,
					"mouseWheelPixels":options.mouseWheelPixels,
					"autoDraggerLength":options.autoDraggerLength,
					"scrollButtons_enable":options.scrollButtons.enable,
					"scrollButtons_scrollType":options.scrollButtons.scrollType,
					"scrollButtons_scrollSpeed":options.scrollButtons.scrollSpeed,
					"scrollButtons_scrollAmount":options.scrollButtons.scrollAmount,
					"autoExpandHorizontalScroll":options.advanced.autoExpandHorizontalScroll,
					"autoScrollOnFocus":options.advanced.autoScrollOnFocus,
					"onScrollStart_Callback":options.callbacks.onScrollStart,
					"onScroll_Callback":options.callbacks.onScroll,
					"onTotalScroll_Callback":options.callbacks.onTotalScroll,
					"onTotalScrollBack_Callback":options.callbacks.onTotalScrollBack,
					"onTotalScroll_Offset":options.callbacks.onTotalScrollOffset,
					"whileScrolling_Callback":options.callbacks.whileScrolling,
					"whileScrolling_Interval":options.callbacks.whileScrollingInterval,
					/*events binding state*/
					"bindEvent_scrollbar_click":false,
					"bindEvent_mousewheel":false,
					"bindEvent_focusin":false,
					"bindEvent_buttonsContinuous_y":false,
					"bindEvent_buttonsContinuous_x":false,
					"bindEvent_buttonsPixels_y":false,
					"bindEvent_buttonsPixels_x":false,
					"bindEvent_scrollbar_touch":false,
					"bindEvent_content_touch":false,
					/*buttons intervals*/
					"mCSB_buttonScrollRight":false,
					"mCSB_buttonScrollLeft":false,
					"mCSB_buttonScrollDown":false,
					"mCSB_buttonScrollUp":false,
					/*callback intervals*/
					"whileScrolling":false
				}).mCustomScrollbar("update");
				/*detect max-width*/
				if(options.horizontalScroll){
					if($this.css("max-width")!=="none"){
						if(!options.advanced.updateOnContentResize){ /*needs updateOnContentResize*/
							options.advanced.updateOnContentResize=true;
						}
						$this.data({"mCS_maxWidth":parseInt($this.css("max-width")),"mCS_maxWidth_Interval":setInterval(function(){
							if(mCSB_container.outerWidth()>$this.data("mCS_maxWidth")){
								clearInterval($this.data("mCS_maxWidth_Interval"));
								$this.mCustomScrollbar("update");
							}
						},150)});
					}
				}else{
					/*detect max-height*/
					if($this.css("max-height")!=="none"){
						$this.data({"mCS_maxHeight":parseInt($this.css("max-height")),"mCS_maxHeight_Interval":setInterval(function(){
							mCustomScrollBox.css("max-height",$this.data("mCS_maxHeight"));
							if(mCSB_container.outerHeight()>$this.data("mCS_maxHeight")){
								clearInterval($this.data("mCS_maxHeight_Interval"));
								$this.mCustomScrollbar("update");
							}
						},150)});
					}
				}
				/*window resize fn (for layouts based on percentages)*/
				if(options.advanced.updateOnBrowserResize){
					var mCSB_resizeTimeout;
					$(window).resize(function(){
						if(mCSB_resizeTimeout){
							clearTimeout(mCSB_resizeTimeout);
						}
						mCSB_resizeTimeout=setTimeout(function(){
							if(!$this.is(".mCS_disabled") && !$this.is(".mCS_destroyed")){
								$this.mCustomScrollbar("update");
							}
						},150);
					});
				}
				/*content resize fn (for dynamically generated content)*/
				if(options.advanced.updateOnContentResize){
					var mCSB_onContentResize;
					if(options.horizontalScroll){
						var mCSB_containerOldSize=mCSB_container.outerWidth();
					}else{
						var mCSB_containerOldSize=mCSB_container.outerHeight();
					}
					mCSB_onContentResize=setInterval(function(){
						if(options.horizontalScroll){
							if(options.advanced.autoExpandHorizontalScroll){
								mCSB_container.css({"position":"absolute","width":"auto"}).wrap("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />").css({"width":mCSB_container.outerWidth(),"position":"relative"}).unwrap();
							}
							var mCSB_containerNewSize=mCSB_container.outerWidth();
						}else{
							var mCSB_containerNewSize=mCSB_container.outerHeight();
						}
						if(mCSB_containerNewSize!=mCSB_containerOldSize){
							$this.mCustomScrollbar("update");
							mCSB_containerOldSize=mCSB_containerNewSize;
						}
					},300);
				}
			});
		},
		update:function(){
			var $this=$(this),
				mCustomScrollBox=$this.children(".mCustomScrollBox"),
				mCSB_container=mCustomScrollBox.children(".mCSB_container");
			mCSB_container.removeClass("mCS_no_scrollbar");
			$this.removeClass("mCS_disabled mCS_destroyed");
			mCustomScrollBox.scrollTop(0).scrollLeft(0); /*reset scrollTop/scrollLeft to prevent browser focus scrolling*/
			var mCSB_scrollTools=mCustomScrollBox.children(".mCSB_scrollTools"),
				mCSB_draggerContainer=mCSB_scrollTools.children(".mCSB_draggerContainer"),
				mCSB_dragger=mCSB_draggerContainer.children(".mCSB_dragger");
			if($this.data("horizontalScroll")){
				var mCSB_buttonLeft=mCSB_scrollTools.children(".mCSB_buttonLeft"),
					mCSB_buttonRight=mCSB_scrollTools.children(".mCSB_buttonRight"),
					mCustomScrollBoxW=mCustomScrollBox.width();
				if($this.data("autoExpandHorizontalScroll")){
					mCSB_container.css({"position":"absolute","width":"auto"}).wrap("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />").css({"width":mCSB_container.outerWidth(),"position":"relative"}).unwrap();
				}
				var mCSB_containerW=mCSB_container.outerWidth();
			}else{
				var mCSB_buttonUp=mCSB_scrollTools.children(".mCSB_buttonUp"),
					mCSB_buttonDown=mCSB_scrollTools.children(".mCSB_buttonDown"),
					mCustomScrollBoxH=mCustomScrollBox.height(),
					mCSB_containerH=mCSB_container.outerHeight();
			}
			if(mCSB_containerH>mCustomScrollBoxH && !$this.data("horizontalScroll")){ /*content needs vertical scrolling*/
				mCSB_scrollTools.css("display","block");
				var mCSB_draggerContainerH=mCSB_draggerContainer.height();
				/*auto adjust scrollbar dragger length analogous to content*/
				if($this.data("autoDraggerLength")){
					var draggerH=Math.round(mCustomScrollBoxH/mCSB_containerH*mCSB_draggerContainerH),
						minDraggerH=mCSB_dragger.data("minDraggerHeight");
					if(draggerH<=minDraggerH){ /*min dragger height*/
						mCSB_dragger.css({"height":minDraggerH});
					}else if(draggerH>=mCSB_draggerContainerH-10){ /*max dragger height*/
						var mCSB_draggerContainerMaxH=mCSB_draggerContainerH-10;
						mCSB_dragger.css({"height":mCSB_draggerContainerMaxH});
					}else{
						mCSB_dragger.css({"height":draggerH});
					}
					mCSB_dragger.children(".mCSB_dragger_bar").css({"line-height":mCSB_dragger.height()+"px"});
				}
				var mCSB_draggerH=mCSB_dragger.height(),
				/*calculate and store scroll amount, add scrolling*/
					scrollAmount=(mCSB_containerH-mCustomScrollBoxH)/(mCSB_draggerContainerH-mCSB_draggerH);
				$this.data("scrollAmount",scrollAmount).mCustomScrollbar("scrolling",mCustomScrollBox,mCSB_container,mCSB_draggerContainer,mCSB_dragger,mCSB_buttonUp,mCSB_buttonDown,mCSB_buttonLeft,mCSB_buttonRight);
				/*scroll*/
				var mCSB_containerP=Math.abs(Math.round(mCSB_container.position().top));
				$this.mCustomScrollbar("scrollTo",mCSB_containerP,{callback:false});
			}else if(mCSB_containerW>mCustomScrollBoxW && $this.data("horizontalScroll")){ /*content needs horizontal scrolling*/
				mCSB_scrollTools.css("display","block");
				var mCSB_draggerContainerW=mCSB_draggerContainer.width();
				/*auto adjust scrollbar dragger length analogous to content*/
				if($this.data("autoDraggerLength")){
					var draggerW=Math.round(mCustomScrollBoxW/mCSB_containerW*mCSB_draggerContainerW),
						minDraggerW=mCSB_dragger.data("minDraggerWidth");
					if(draggerW<=minDraggerW){ /*min dragger height*/
						mCSB_dragger.css({"width":minDraggerW});
					}else if(draggerW>=mCSB_draggerContainerW-10){ /*max dragger height*/
						var mCSB_draggerContainerMaxW=mCSB_draggerContainerW-10;
						mCSB_dragger.css({"width":mCSB_draggerContainerMaxW});
					}else{
						mCSB_dragger.css({"width":draggerW});
					}
				}
				var mCSB_draggerW=mCSB_dragger.width(),
				/*calculate and store scroll amount, add scrolling*/
					scrollAmount=(mCSB_containerW-mCustomScrollBoxW)/(mCSB_draggerContainerW-mCSB_draggerW);
				$this.data("scrollAmount",scrollAmount).mCustomScrollbar("scrolling",mCustomScrollBox,mCSB_container,mCSB_draggerContainer,mCSB_dragger,mCSB_buttonUp,mCSB_buttonDown,mCSB_buttonLeft,mCSB_buttonRight);
				/*scroll*/
				var mCSB_containerP=Math.abs(Math.round(mCSB_container.position().left));
				$this.mCustomScrollbar("scrollTo",mCSB_containerP,{callback:false});
			}else{ /*content does not need scrolling*/
				/*unbind events, reset content position, hide scrollbars, remove classes*/
				mCustomScrollBox.unbind("mousewheel focusin");
				if($this.data("horizontalScroll")){
					mCSB_dragger.add(mCSB_container).css("left",0);
				}else{
					mCSB_dragger.add(mCSB_container).css("top",0);
				}
				mCSB_scrollTools.css("display","none");
				mCSB_container.addClass("mCS_no_scrollbar");
				$this.data({"bindEvent_mousewheel":false,"bindEvent_focusin":false});
			}
		},
		scrolling:function(mCustomScrollBox,mCSB_container,mCSB_draggerContainer,mCSB_dragger,mCSB_buttonUp,mCSB_buttonDown,mCSB_buttonLeft,mCSB_buttonRight){
			var $this=$(this);
			/*while scrolling callback*/
			$this.mCustomScrollbar("callbacks","whileScrolling"); 
			/*drag scrolling*/
			if(!mCSB_dragger.hasClass("ui-draggable")){ /*apply drag function once*/
				if($this.data("horizontalScroll")){
					var draggableAxis="x";
				}else{
					var draggableAxis="y";
				}
				mCSB_dragger.draggable({ 
					axis:draggableAxis,
					containment:"parent",
					drag:function(event,ui){
						$this.mCustomScrollbar("scroll");
						mCSB_dragger.addClass("mCSB_dragger_onDrag");
					},
					stop:function(event,ui){
						mCSB_dragger.removeClass("mCSB_dragger_onDrag");	
					}
				});
			}
			if(!$this.data("bindEvent_scrollbar_click")){ /*bind once*/
				mCSB_draggerContainer.bind("click",function(e){
					if($this.data("horizontalScroll")){
						var mouseCoord=(e.pageX-mCSB_draggerContainer.offset().left);
						if(mouseCoord<mCSB_dragger.position().left || mouseCoord>(mCSB_dragger.position().left+mCSB_dragger.width())){
							var scrollToPos=mouseCoord;
							if(scrollToPos>=mCSB_draggerContainer.width()-mCSB_dragger.width()){ /*max dragger position is bottom*/
								scrollToPos=mCSB_draggerContainer.width()-mCSB_dragger.width();
							}
							mCSB_dragger.css("left",scrollToPos);
							$this.mCustomScrollbar("scroll");
						}
					}else{
						var mouseCoord=(e.pageY-mCSB_draggerContainer.offset().top);
						if(mouseCoord<mCSB_dragger.position().top || mouseCoord>(mCSB_dragger.position().top+mCSB_dragger.height())){
							var scrollToPos=mouseCoord;
							if(scrollToPos>=mCSB_draggerContainer.height()-mCSB_dragger.height()){ /*max dragger position is bottom*/
								scrollToPos=mCSB_draggerContainer.height()-mCSB_dragger.height();
							}
							mCSB_dragger.css("top",scrollToPos);
							$this.mCustomScrollbar("scroll");
						}
					}
				});
				$this.data({"bindEvent_scrollbar_click":true});
			}
			/*mousewheel scrolling*/
			if($this.data("mouseWheel")){
				var mousewheelVel=$this.data("mouseWheel");
				if($this.data("mouseWheel")==="auto"){
					mousewheelVel=8; /*default mousewheel velocity*/
					/*check for safari browser on mac osx to lower mousewheel velocity*/
					var os=navigator.userAgent;
					if(os.indexOf("Mac")!=-1 && os.indexOf("Safari")!=-1 && os.indexOf("AppleWebKit")!=-1 && os.indexOf("Chrome")==-1){ 
						mousewheelVel=1;
					}
				}
				if(!$this.data("bindEvent_mousewheel")){ /*bind once*/
					mCustomScrollBox.bind("mousewheel",function(event,delta){
						event.preventDefault();
						var vel=Math.abs(delta*mousewheelVel);
						if($this.data("horizontalScroll")){
							if($this.data("mouseWheel")==="pixels"){
								if(delta<0){
									delta=-1;
								}else{
									delta=1;
								}
								var scrollTo=Math.abs(Math.round(mCSB_container.position().left))-(delta*$this.data("mouseWheelPixels"));
								$this.mCustomScrollbar("scrollTo",scrollTo);
							}else{
								var posX=mCSB_dragger.position().left-(delta*vel);
								mCSB_dragger.css("left",posX);
								if(mCSB_dragger.position().left<0){
									mCSB_dragger.css("left",0);
								}
								var mCSB_draggerContainerW=mCSB_draggerContainer.width(),
									mCSB_draggerW=mCSB_dragger.width();
								if(mCSB_dragger.position().left>mCSB_draggerContainerW-mCSB_draggerW){
									mCSB_dragger.css("left",mCSB_draggerContainerW-mCSB_draggerW);
								}
								$this.mCustomScrollbar("scroll");
							}
						}else{
							if($this.data("mouseWheel")==="pixels"){
								if(delta<0){
									delta=-1;
								}else{
									delta=1;
								}
								var scrollTo=Math.abs(Math.round(mCSB_container.position().top))-(delta*$this.data("mouseWheelPixels"));
								$this.mCustomScrollbar("scrollTo",scrollTo);
							}else{
								var posY=mCSB_dragger.position().top-(delta*vel);
								mCSB_dragger.css("top",posY);
								if(mCSB_dragger.position().top<0){
									mCSB_dragger.css("top",0);
								}
								var mCSB_draggerContainerH=mCSB_draggerContainer.height(),
									mCSB_draggerH=mCSB_dragger.height();
								if(mCSB_dragger.position().top>mCSB_draggerContainerH-mCSB_draggerH){
									mCSB_dragger.css("top",mCSB_draggerContainerH-mCSB_draggerH);
								}
								$this.mCustomScrollbar("scroll");
							}
						}
					});
					$this.data({"bindEvent_mousewheel":true});
				}
			}
			/*buttons scrolling*/
			if($this.data("scrollButtons_enable")){
				if($this.data("scrollButtons_scrollType")==="pixels"){ /*scroll by pixels*/
					var pixelsScrollTo;
					if($.browser.msie && parseInt($.browser.version)<9){ /*stupid ie8*/
						$this.data("scrollInertia",0);
					}
					if($this.data("horizontalScroll")){
						mCSB_buttonRight.add(mCSB_buttonLeft).unbind("mousedown touchstart onmsgesturestart mouseup mouseout touchend onmsgestureend",mCSB_buttonRight_stop,mCSB_buttonLeft_stop);
						$this.data({"bindEvent_buttonsContinuous_x":false});
						if(!$this.data("bindEvent_buttonsPixels_x")){ /*bind once*/
							/*scroll right*/
							mCSB_buttonRight.bind("click",function(e){
								e.preventDefault();
								if(!mCSB_container.is(":animated")){
									pixelsScrollTo=Math.abs(mCSB_container.position().left)+$this.data("scrollButtons_scrollAmount");
									$this.mCustomScrollbar("scrollTo",pixelsScrollTo);
								}
							});
							/*scroll left*/
							mCSB_buttonLeft.bind("click",function(e){
								e.preventDefault();
								if(!mCSB_container.is(":animated")){
									pixelsScrollTo=Math.abs(mCSB_container.position().left)-$this.data("scrollButtons_scrollAmount");
									if(mCSB_container.position().left>=-$this.data("scrollButtons_scrollAmount")){
										pixelsScrollTo="left";
									}
									$this.mCustomScrollbar("scrollTo",pixelsScrollTo);
								}
							});
							$this.data({"bindEvent_buttonsPixels_x":true});
						}
					}else{
						mCSB_buttonDown.add(mCSB_buttonUp).unbind("mousedown touchstart onmsgesturestart mouseup mouseout touchend onmsgestureend",mCSB_buttonRight_stop,mCSB_buttonLeft_stop);
						$this.data({"bindEvent_buttonsContinuous_y":false});
						if(!$this.data("bindEvent_buttonsPixels_y")){ /*bind once*/
							/*scroll down*/
							mCSB_buttonDown.bind("click",function(e){
								e.preventDefault();
								if(!mCSB_container.is(":animated")){
									pixelsScrollTo=Math.abs(mCSB_container.position().top)+$this.data("scrollButtons_scrollAmount");
									$this.mCustomScrollbar("scrollTo",pixelsScrollTo);
								}
							});
							/*scroll up*/
							mCSB_buttonUp.bind("click",function(e){
								e.preventDefault();
								if(!mCSB_container.is(":animated")){
									pixelsScrollTo=Math.abs(mCSB_container.position().top)-$this.data("scrollButtons_scrollAmount");
									if(mCSB_container.position().top>=-$this.data("scrollButtons_scrollAmount")){
										pixelsScrollTo="top";
									}
									$this.mCustomScrollbar("scrollTo",pixelsScrollTo);
								}
							});
							$this.data({"bindEvent_buttonsPixels_y":true});
						}
					}
				}else{ /*continuous scrolling*/
					if($this.data("horizontalScroll")){
						mCSB_buttonRight.add(mCSB_buttonLeft).unbind("click");
						$this.data({"bindEvent_buttonsPixels_x":false});
						if(!$this.data("bindEvent_buttonsContinuous_x")){ /*bind once*/
							/*scroll right*/
							mCSB_buttonRight.bind("mousedown touchstart onmsgesturestart",function(e){
								e.preventDefault();
								e.stopPropagation();
								$this.data({"mCSB_buttonScrollRight":setInterval(function(){
									var scrollTo=Math.round((Math.abs(Math.round(mCSB_container.position().left))+$this.data("scrollButtons_scrollSpeed"))/$this.data("scrollAmount"));
									$this.mCustomScrollbar("scrollTo",scrollTo,{moveDragger:true});
								},30)});
							});
							var mCSB_buttonRight_stop=function(e){
								e.preventDefault();
								e.stopPropagation();
								clearInterval($this.data("mCSB_buttonScrollRight"));
							}
							mCSB_buttonRight.bind("mouseup touchend onmsgestureend mouseout",mCSB_buttonRight_stop);
							/*scroll left*/
							mCSB_buttonLeft.bind("mousedown touchstart onmsgesturestart",function(e){
								e.preventDefault();
								e.stopPropagation();
								$this.data({"mCSB_buttonScrollLeft":setInterval(function(){
									var scrollTo=Math.round((Math.abs(Math.round(mCSB_container.position().left))-$this.data("scrollButtons_scrollSpeed"))/$this.data("scrollAmount"));
									$this.mCustomScrollbar("scrollTo",scrollTo,{moveDragger:true});
								},30)});
							});	
							var mCSB_buttonLeft_stop=function(e){
								e.preventDefault();
								e.stopPropagation();
								clearInterval($this.data("mCSB_buttonScrollLeft"));
							}
							mCSB_buttonLeft.bind("mouseup touchend onmsgestureend mouseout",mCSB_buttonLeft_stop);
							$this.data({"bindEvent_buttonsContinuous_x":true});
						}
					}else{
						mCSB_buttonDown.add(mCSB_buttonUp).unbind("click");
						$this.data({"bindEvent_buttonsPixels_y":false});
						if(!$this.data("bindEvent_buttonsContinuous_y")){ /*bind once*/
							/*scroll down*/
							mCSB_buttonDown.bind("mousedown touchstart onmsgesturestart",function(e){
								e.preventDefault();
								e.stopPropagation();
								$this.data({"mCSB_buttonScrollDown":setInterval(function(){
									var scrollTo=Math.round((Math.abs(Math.round(mCSB_container.position().top))+$this.data("scrollButtons_scrollSpeed"))/$this.data("scrollAmount"));
									$this.mCustomScrollbar("scrollTo",scrollTo,{moveDragger:true});
								},30)});
							});
							var mCSB_buttonDown_stop=function(e){
								e.preventDefault();
								e.stopPropagation();
								clearInterval($this.data("mCSB_buttonScrollDown"));
							}
							mCSB_buttonDown.bind("mouseup touchend onmsgestureend mouseout",mCSB_buttonDown_stop);
							/*scroll up*/
							mCSB_buttonUp.bind("mousedown touchstart onmsgesturestart",function(e){
								e.preventDefault();
								e.stopPropagation();
								$this.data({"mCSB_buttonScrollUp":setInterval(function(){
									var scrollTo=Math.round((Math.abs(Math.round(mCSB_container.position().top))-$this.data("scrollButtons_scrollSpeed"))/$this.data("scrollAmount"));
									$this.mCustomScrollbar("scrollTo",scrollTo,{moveDragger:true});
								},30)});
							});	
							var mCSB_buttonUp_stop=function(e){
								e.preventDefault();
								e.stopPropagation();
								clearInterval($this.data("mCSB_buttonScrollUp"));
							}
							mCSB_buttonUp.bind("mouseup touchend onmsgestureend mouseout",mCSB_buttonUp_stop);
							$this.data({"bindEvent_buttonsContinuous_y":true});
						}
					}
				}
			}
			/*scrolling on element focus (e.g. via TAB key)*/
			if($this.data("autoScrollOnFocus")){
				if(!$this.data("bindEvent_focusin")){ /*bind once*/
					mCustomScrollBox.bind("focusin",function(){
						mCustomScrollBox.scrollTop(0).scrollLeft(0);
						var focusedElem=$(document.activeElement);
						if(focusedElem.is("input,textarea,select,button,a[tabindex],area,object")){
							if($this.data("horizontalScroll")){
								var mCSB_containerX=mCSB_container.position().left,
									focusedElemX=focusedElem.position().left,
									mCustomScrollBoxW=mCustomScrollBox.width(),
									focusedElemW=focusedElem.outerWidth();
								if(mCSB_containerX+focusedElemX>=0 && mCSB_containerX+focusedElemX<=mCustomScrollBoxW-focusedElemW){
									/*just focus...*/
								}else{ /*scroll, then focus*/
									var moveDragger=focusedElemX/$this.data("scrollAmount");
									if(moveDragger>=mCSB_draggerContainer.width()-mCSB_dragger.width()){ /*max dragger position is bottom*/
										moveDragger=mCSB_draggerContainer.width()-mCSB_dragger.width();
									}
									mCSB_dragger.css("left",moveDragger);
									$this.mCustomScrollbar("scroll");
								}
							}else{
								var mCSB_containerY=mCSB_container.position().top,
									focusedElemY=focusedElem.position().top,
									mCustomScrollBoxH=mCustomScrollBox.height(),
									focusedElemH=focusedElem.outerHeight();
								if(mCSB_containerY+focusedElemY>=0 && mCSB_containerY+focusedElemY<=mCustomScrollBoxH-focusedElemH){
									/*just focus...*/
								}else{ /*scroll, then focus*/
									var moveDragger=focusedElemY/$this.data("scrollAmount");
									if(moveDragger>=mCSB_draggerContainer.height()-mCSB_dragger.height()){ /*max dragger position is bottom*/
										moveDragger=mCSB_draggerContainer.height()-mCSB_dragger.height();
									}
									mCSB_dragger.css("top",moveDragger);
									$this.mCustomScrollbar("scroll");
								}
							}
						}
					});
					$this.data({"bindEvent_focusin":true});
				}
			}
			/*touch events*/
			if($(document).data("mCS-is-touch-device")){
				/*scrollbar touch-drag*/
				if(!$this.data("bindEvent_scrollbar_touch")){ /*bind once*/
					var mCSB_draggerTouchY,
						mCSB_draggerTouchX;
					mCSB_dragger.bind("touchstart onmsgesturestart",function(e){
						e.preventDefault();
						e.stopPropagation();
						var touch=e.originalEvent.touches[0] || e.originalEvent.changedTouches[0],
							elem=$(this),
							elemOffset=elem.offset(),
							x=touch.pageX-elemOffset.left,
							y=touch.pageY-elemOffset.top;
						if(x<elem.width() && x>0 && y<elem.height() && y>0){
							mCSB_draggerTouchY=y;
							mCSB_draggerTouchX=x;
						}
					});
					mCSB_dragger.bind("touchmove onmsgesturechange",function(e){
						e.preventDefault();
						e.stopPropagation();
						var touch=e.originalEvent.touches[0] || e.originalEvent.changedTouches[0],
							elem=$(this),
							elemOffset=elem.offset(),
							x=touch.pageX-elemOffset.left,
							y=touch.pageY-elemOffset.top;
						if($this.data("horizontalScroll")){
							$this.mCustomScrollbar("scrollTo",(mCSB_dragger.position().left-(mCSB_draggerTouchX))+x,{moveDragger:true});
						}else{
							$this.mCustomScrollbar("scrollTo",(mCSB_dragger.position().top-(mCSB_draggerTouchY))+y,{moveDragger:true});
						}
					});
					$this.data({"bindEvent_scrollbar_touch":true});
				}
				/*content touch-drag*/
				if(!$this.data("bindEvent_content_touch")){ /*bind once*/
					var touch,
						elem,
						elemOffset,
						x,
						y,
						mCSB_containerTouchY,
						mCSB_containerTouchX;
					mCSB_container.bind("touchstart onmsgesturestart",function(e){
						touch=e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
						elem=$(this);
						elemOffset=elem.offset();
						x=touch.pageX-elemOffset.left;
						y=touch.pageY-elemOffset.top;
						mCSB_containerTouchY=y;
						mCSB_containerTouchX=x;
					});
					mCSB_container.bind("touchmove onmsgesturechange",function(e){
						e.preventDefault();
						e.stopPropagation();
						touch=e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
						elem=$(this).parent();
						elemOffset=elem.offset();
						x=touch.pageX-elemOffset.left;
						y=touch.pageY-elemOffset.top;
						if($this.data("horizontalScroll")){
							$this.mCustomScrollbar("scrollTo",mCSB_containerTouchX-x);
						}else{
							$this.mCustomScrollbar("scrollTo",mCSB_containerTouchY-y);
						}
					});
					$this.data({"bindEvent_content_touch":true});
				}
			}
		},
		scroll:function(bypassCallbacks){
			var $this=$(this),
				mCSB_dragger=$this.find(".mCSB_dragger"),
				mCSB_container=$this.find(".mCSB_container"),
				mCustomScrollBox=$this.find(".mCustomScrollBox");
			if($this.data("horizontalScroll")){
				var draggerX=mCSB_dragger.position().left,
					targX=-draggerX*$this.data("scrollAmount"),
					thisX=mCSB_container.position().left,
					posX=Math.round(thisX-targX);
			}else{
				var draggerY=mCSB_dragger.position().top,
					targY=-draggerY*$this.data("scrollAmount"),
					thisY=mCSB_container.position().top,
					posY=Math.round(thisY-targY);
			}
			if($.browser.webkit){ /*fix webkit zoom and jquery animate*/
				var screenCssPixelRatio=(window.outerWidth-8)/window.innerWidth,
					isZoomed=(screenCssPixelRatio<.98 || screenCssPixelRatio>1.02);
			}
			if($this.data("scrollInertia")===0 || isZoomed){
				if(!bypassCallbacks){
					$this.mCustomScrollbar("callbacks","onScrollStart"); /*user custom callback functions*/
				}
				if($this.data("horizontalScroll")){
					mCSB_container.css("left",targX);
				}else{
					mCSB_container.css("top",targY);
				}
				if(!bypassCallbacks){
					/*user custom callback functions*/
					if($this.data("whileScrolling")){
						$this.data("whileScrolling_Callback").call();
					}
					$this.mCustomScrollbar("callbacks","onScroll");  
				}
				$this.data({"mCS_Init":false});
			}else{
				if(!bypassCallbacks){
					$this.mCustomScrollbar("callbacks","onScrollStart"); /*user custom callback functions*/
				}
				if($this.data("horizontalScroll")){
					mCSB_container.stop().animate({left:"-="+posX},$this.data("scrollInertia"),$this.data("scrollEasing"),function(){
						if(!bypassCallbacks){
							$this.mCustomScrollbar("callbacks","onScroll"); /*user custom callback functions*/
						}
						$this.data({"mCS_Init":false});
					});
				}else{
					mCSB_container.stop().animate({top:"-="+posY},$this.data("scrollInertia"),$this.data("scrollEasing"),function(){
						if(!bypassCallbacks){
							$this.mCustomScrollbar("callbacks","onScroll"); /*user custom callback functions*/
						}
						$this.data({"mCS_Init":false});
					});
				}
			}
		},
		scrollTo:function(scrollTo,options){
			var defaults={
				moveDragger:false,
				callback:true
			},
				options=$.extend(defaults,options),
				$this=$(this),
				scrollToPos,
				mCustomScrollBox=$this.find(".mCustomScrollBox"),
				mCSB_container=mCustomScrollBox.children(".mCSB_container"),
				mCSB_draggerContainer=$this.find(".mCSB_draggerContainer"),
				mCSB_dragger=mCSB_draggerContainer.children(".mCSB_dragger"),
				targetPos;
			if(scrollTo || scrollTo===0){
				if(typeof(scrollTo)==="number"){ /*if integer, scroll by number of pixels*/
					if(options.moveDragger){ /*scroll dragger*/
						scrollToPos=scrollTo;
					}else{ /*scroll content by default*/
						targetPos=scrollTo;
						scrollToPos=Math.round(targetPos/$this.data("scrollAmount"));
					}
				}else if(typeof(scrollTo)==="string"){ /*if string, scroll by element position*/
					var target;
					if(scrollTo==="top"){ /*scroll to top*/
						target=0;
					}else if(scrollTo==="bottom" && !$this.data("horizontalScroll")){ /*scroll to bottom*/
						target=mCSB_container.outerHeight()-mCustomScrollBox.height();
					}else if(scrollTo==="left"){ /*scroll to left*/
						target=0;
					}else if(scrollTo==="right" && $this.data("horizontalScroll")){ /*scroll to right*/
						target=mCSB_container.outerWidth()-mCustomScrollBox.width();
					}else if(scrollTo==="first"){ /*scroll to first element position*/
						target=$this.find(".mCSB_container").find(":first");
					}else if(scrollTo==="last"){ /*scroll to last element position*/
						target=$this.find(".mCSB_container").find(":last");
					}else{ /*scroll to element position*/
						target=$this.find(scrollTo);
					}
					if(target.length===1){ /*if such unique element exists, scroll to it*/
						if($this.data("horizontalScroll")){
							targetPos=target.position().left;
						}else{
							targetPos=target.position().top;
						}
						scrollToPos=Math.ceil(targetPos/$this.data("scrollAmount"));
					}else{
						scrollToPos=target;
					}
				}
				/*scroll to*/
				if(scrollToPos<0){
					scrollToPos=0;
				}
				if($this.data("horizontalScroll")){
					if(scrollToPos>=mCSB_draggerContainer.width()-mCSB_dragger.width()){ /*max dragger position is bottom*/
						scrollToPos=mCSB_draggerContainer.width()-mCSB_dragger.width();
					}
					mCSB_dragger.css("left",scrollToPos);
				}else{
					if(scrollToPos>=mCSB_draggerContainer.height()-mCSB_dragger.height()){ /*max dragger position is bottom*/
						scrollToPos=mCSB_draggerContainer.height()-mCSB_dragger.height();
					}
					mCSB_dragger.css("top",scrollToPos);
				}
				if(options.callback){
					$this.mCustomScrollbar("scroll",false);
				}else{
					$this.mCustomScrollbar("scroll",true);
				}
			}
		},
		callbacks:function(callback){
			var $this=$(this),
				mCustomScrollBox=$this.find(".mCustomScrollBox"),
				mCSB_container=$this.find(".mCSB_container");
			switch(callback){
				/*start scrolling callback*/
				case "onScrollStart":
					if(!mCSB_container.is(":animated")){
						$this.data("onScrollStart_Callback").call();
					}
					break;
				/*end scrolling callback*/
				case "onScroll":
					if($this.data("horizontalScroll")){
						var mCSB_containerX=Math.round(mCSB_container.position().left);
						if(mCSB_containerX<0 && mCSB_containerX<=mCustomScrollBox.width()-mCSB_container.outerWidth()+$this.data("onTotalScroll_Offset")){
							$this.data("onTotalScroll_Callback").call();
						}else if(mCSB_containerX>=-$this.data("onTotalScroll_Offset")){
							$this.data("onTotalScrollBack_Callback").call();
						}else{
							$this.data("onScroll_Callback").call();
						}
					}else{
						var mCSB_containerY=Math.round(mCSB_container.position().top);
						if(mCSB_containerY<0 && mCSB_containerY<=mCustomScrollBox.height()-mCSB_container.outerHeight()+$this.data("onTotalScroll_Offset")){
							$this.data("onTotalScroll_Callback").call();
						}else if(mCSB_containerY>=-$this.data("onTotalScroll_Offset")){
							$this.data("onTotalScrollBack_Callback").call();
						}else{
							$this.data("onScroll_Callback").call();
						}
					}
					break;
				/*while scrolling callback*/
				case "whileScrolling":
					if($this.data("whileScrolling_Callback") && !$this.data("whileScrolling")){
						$this.data({"whileScrolling":setInterval(function(){
							if(mCSB_container.is(":animated") && !$this.data("mCS_Init")){
								$this.data("whileScrolling_Callback").call();
							}
						},$this.data("whileScrolling_Interval"))});
					}
					break;
			}
		},
		disable:function(resetScroll){
			var $this=$(this),
				mCustomScrollBox=$this.children(".mCustomScrollBox"),
				mCSB_container=mCustomScrollBox.children(".mCSB_container"),
				mCSB_scrollTools=mCustomScrollBox.children(".mCSB_scrollTools"),
				mCSB_dragger=mCSB_scrollTools.find(".mCSB_dragger");
			mCustomScrollBox.unbind("mousewheel focusin");
			if(resetScroll){
				if($this.data("horizontalScroll")){
					mCSB_dragger.add(mCSB_container).css("left",0);
				}else{
					mCSB_dragger.add(mCSB_container).css("top",0);
				}
			}
			mCSB_scrollTools.css("display","none");
			mCSB_container.addClass("mCS_no_scrollbar");
			$this.data({"bindEvent_mousewheel":false,"bindEvent_focusin":false}).addClass("mCS_disabled");
		},
		destroy:function(){
			var $this=$(this),
				content=$this.find(".mCSB_container").html();
			$this.find(".mCustomScrollBox").remove();
			$this.html(content).removeClass("mCustomScrollbar _mCS_"+$(document).data("mCustomScrollbar-index")).addClass("mCS_destroyed");
		}
	}
	$.fn.mCustomScrollbar=function(method){
		if(methods[method]){
			return methods[method].apply(this,Array.prototype.slice.call(arguments,1));
		}else if(typeof method==="object" || !method){
			return methods.init.apply(this,arguments);
		}else{
			$.error("Method "+method+" does not exist");
		}
	};
})(jQuery); 
/*iOS 6 bug fix 
  iOS 6 suffers from a bug that kills timers that are created while a page is scrolling. 
  The following fixes that problem by recreating timers after scrolling finishes (with interval correction).*/
var iOSVersion=iOSVersion();
if(iOSVersion>=6){
	(function(h){var a={};var d={};var e=h.setTimeout;var f=h.setInterval;var i=h.clearTimeout;var c=h.clearInterval;if(!h.addEventListener){return false}function j(q,n,l){var p,k=l[0],m=(q===f);function o(){if(k){k.apply(h,arguments);if(!m){delete n[p];k=null}}}l[0]=o;p=q.apply(h,l);n[p]={args:l,created:Date.now(),cb:k,id:p};return p}function b(q,o,k,r,t){var l=k[r];if(!l){return}var m=(q===f);o(l.id);if(!m){var n=l.args[1];var p=Date.now()-l.created;if(p<0){p=0}n-=p;if(n<0){n=0}l.args[1]=n}function s(){if(l.cb){l.cb.apply(h,arguments);if(!m){delete k[r];l.cb=null}}}l.args[0]=s;l.created=Date.now();l.id=q.apply(h,l.args)}h.setTimeout=function(){return j(e,a,arguments)};h.setInterval=function(){return j(f,d,arguments)};h.clearTimeout=function(l){var k=a[l];if(k){delete a[l];i(k.id)}};h.clearInterval=function(l){var k=d[l];if(k){delete d[l];c(k.id)}};var g=h;while(g.location!=g.parent.location){g=g.parent}g.addEventListener("scroll",function(){var k;for(k in a){b(e,i,a,k)}for(k in d){b(f,c,d,k)}})}(window));
}
function iOSVersion(){
	var agent=window.navigator.userAgent,
		start=agent.indexOf('OS ');
	if((agent.indexOf('iPhone')>-1 || agent.indexOf('iPad')>-1) && start>-1){
		return window.Number(agent.substr(start+3,3).replace('_','.'));
	}
	return 0;
}


/*!
 * jQuery imagesLoaded plugin v2.1.1
 * http://github.com/desandro/imagesloaded
 *
 * MIT License. by Paul Irish et al.
 */

/*jshint curly: true, eqeqeq: true, noempty: true, strict: true, undef: true, browser: true */
/*global jQuery: false */

;(function($, undefined) {
'use strict';

// blank image data-uri bypasses webkit log warning (thx doug jones)
var BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

$.fn.imagesLoaded = function( callback ) {
	var $this = this,
		deferred = $.isFunction($.Deferred) ? $.Deferred() : 0,
		hasNotify = $.isFunction(deferred.notify),
		$images = $this.find('img').add( $this.filter('img') ),
		loaded = [],
		proper = [],
		broken = [];

	// Register deferred callbacks
	if ($.isPlainObject(callback)) {
		$.each(callback, function (key, value) {
			if (key === 'callback') {
				callback = value;
			} else if (deferred) {
				deferred[key](value);
			}
		});
	}

	function doneLoading() {
		var $proper = $(proper),
			$broken = $(broken);

		if ( deferred ) {
			if ( broken.length ) {
				deferred.reject( $images, $proper, $broken );
			} else {
				deferred.resolve( $images );
			}
		}

		if ( $.isFunction( callback ) ) {
			callback.call( $this, $images, $proper, $broken );
		}
	}

	function imgLoadedHandler( event ) {
		imgLoaded( event.target, event.type === 'error' );
	}

	function imgLoaded( img, isBroken ) {
		// don't proceed if BLANK image, or image is already loaded
		if ( img.src === BLANK || $.inArray( img, loaded ) !== -1 ) {
			return;
		}

		// store element in loaded images array
		loaded.push( img );

		// keep track of broken and properly loaded images
		if ( isBroken ) {
			broken.push( img );
		} else {
			proper.push( img );
		}

		// cache image and its state for future calls
		$.data( img, 'imagesLoaded', { isBroken: isBroken, src: img.src } );

		// trigger deferred progress method if present
		if ( hasNotify ) {
			deferred.notifyWith( $(img), [ isBroken, $images, $(proper), $(broken) ] );
		}

		// call doneLoading and clean listeners if all images are loaded
		if ( $images.length === loaded.length ) {
			setTimeout( doneLoading );
			$images.unbind( '.imagesLoaded', imgLoadedHandler );
		}
	}

	// if no images, trigger immediately
	if ( !$images.length ) {
		doneLoading();
	} else {
		$images.bind( 'load.imagesLoaded error.imagesLoaded', imgLoadedHandler )
		.each( function( i, el ) {
			var src = el.src;

			// find out if this image has been already checked for status
			// if it was, and src has not changed, call imgLoaded on it
			var cached = $.data( el, 'imagesLoaded' );
			if ( cached && cached.src === src ) {
				imgLoaded( el, cached.isBroken );
				return;
			}

			// if complete is true and browser supports natural sizes, try
			// to check for image status manually
			if ( el.complete && el.naturalWidth !== undefined ) {
				imgLoaded( el, el.naturalWidth === 0 || el.naturalHeight === 0 );
				return;
			}

			// cached images don't fire load sometimes, so we reset src, but only when
			// dealing with IE, or image is complete (loaded) and failed manual check
			// webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
			if ( el.readyState || el.complete ) {
				el.src = BLANK;
				el.src = src;
			}
		});
	}

	return deferred ? deferred.promise( $this ) : $this;
};

})(jQuery);