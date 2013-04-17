
 ////file:app/webroot/js/application.js
	$(document).ready(function(){
	// Caching the movieName textbox:
	var username = $('#Mt4TradesTICKET');
	 
	// Defining a placeholder text:
	username.defaultText('');
	 
	// Using jQuery UI's autocomplete widget:
	username.autocomplete({
		minLength    : 1,
		source        : 'search'
	});
	 
	});
	 
	// A custom jQuery method for placeholder text:
	 
	$.fn.defaultText = function(value){
	 
	var element = this.eq(0);
	element.data('defaultText',value);
	 
	element.focus(function(){
	if(element.val() == value){
	element.val('').removeClass('defaultText');
	}
	}).blur(function(){
	if(element.val() == '' || element.val() == value){
	element.addClass('defaultText').val(value);
	}
	});
	 
	return element.blur();
	}
	
	
	
	////file:app/webroot/js/application.js
	$(document).ready(function(){
	// Caching the movieName textbox:
	var username = $('#TradersEmail');
	 
	// Defining a placeholder text:
	username.defaultText('');
	 
	// Using jQuery UI's autocomplete widget:
	username.autocomplete({
	minLength    : 1,
	source        : 'traders/search'
	});
	 
	});
	 
	// A custom jQuery method for placeholder text:
	 
	$.fn.defaultText = function(value){
	 
	var element = this.eq(0);
	element.data('defaultText',value);
	 
	element.focus(function(){
	if(element.val() == value){
	element.val('').removeClass('defaultText');
	}
	}).blur(function(){
	if(element.val() == '' || element.val() == value){
	element.addClass('defaultText').val(value);
	}
	});
	 
	return element.blur();
	}