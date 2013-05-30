/*
REGISTER5! SCRIPTS
*/

  $(document).ready(function() {
	
	var ac_country = "#country-type";
	var $submit_wrapper = $("#submit-wrapper"); 
	
	// Get location
	
	var $geolocation_fix = $("#geolocation-fix");
	
	function init_geolocation_switch() {
		var geolocation_height = geolocation_fix_height;
	
		$("#switch-no").click(function() {
			$(this).parent().children("#switch-yes, #switch-no").removeClass("form-field-error");
			$geolocation_fix.show().animate({ height : geolocation_height }, { duration: 500 });
			if($(ac_country).val() == '') {
				decrease_progress_bar('switch');
			}
			$("#location-name").css("font-weight", 100);
		});

		$("#switch-yes").click(function() {
			$(this).parent().children("#switch-yes, #switch-no").removeClass("form-field-error");
			$geolocation_fix.animate({ height: 0 }, { duration: 500, complete: function () {$geolocation_fix.hide();}});
			$("#form-field-location").val($("#location-detection .location-name").text());
			$submit_wrapper.fadeIn("slow");
			increase_progress_bar('switch');
			$("#location-name").css("font-weight", 700);
		});
	}
	
	function get_visitor_country() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position){ 
				var lat = position.coords.latitude;
				var lon = position.coords.longitude;
				var latlng = new google.maps.LatLng(lat, lon);
				geocoder = new google.maps.Geocoder();

				geocoder.geocode({'latLng': latlng}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) { 
						if (results[1]) {
							var country = results[results.length-1].formatted_address;
							$("#location-detection .location-name").html(country);
							$("#geolocation-worked").css("display", "block");
							$("#no-geolocation").css("display", "none");

							$geolocation_fix.hide().css({ height : 0 });
							
							init_geolocation_switch();
						}
					}
				});
			});
		}
	}
	get_visitor_country();

	// Form fields transition effects
	
	$(".field").blur(function() { 
		$(this).animate({color: "#dee0e2"}, "slow");
	});
	
	$(".field").focus(function() { 
		if($(this).css('color') != "rgb(64, 61, 58)"){
			$(this).animate({color: "#403d3a"}, "slow");
		}
	});
	$(".right-switch, .left-switch").click(function() {
		$(".right-switch, .left-switch").removeClass('checked on-top');
		$(this).addClass('checked on-top');
		return false;
	});
	
	// Form validation
	
	function increase_progress_bar(field) {
		var svg = $("#progress-canvas svg");
		var parent = svg.parent();
		if(parent.hasClass(field + "-done")==false) {
			svg.animate({width: "+=25%"},400);
			parent.addClass(field + "-done");
		}
	}
	function decrease_progress_bar(field) {
		var svg = $("#progress-canvas svg");
		var parent = svg.parent();
		if(parent.hasClass(field + "-done")==true) {
			svg.animate({width: "-=25%"},400);
			parent.removeClass(field + "-done");
		}
	}
	function add_process_encouragement(made_mistake) {
		if(made_mistake==false) {
			$("#progress .expletive").text('Go on, you\'re doing great!');
		} else {
			$("#progress .expletive").text('Woops. Something went wrong there.');
		}
	}
	function validateEmail(email) { 
		var re = /^(([^<>()\[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ 
		return email.match(re); 
	}
	function validate_form_field($object, condition) {
		var value = $.trim($object.val());
		var alert = $object.parent().siblings(".form-alert");
		var id = $object.attr('id');
		var speed = 200;
		
		if(condition) {
			$object.removeClass('form-field-error');
			$(alert).children(".form-error").fadeOut(speed, function() {$(alert).children(".form-success").delay(speed).fadeIn(speed);});
			increase_progress_bar(id);
			add_process_encouragement(false);
			return true;
		} else {
			$object.addClass('form-field-error');
			$(alert).children(".form-success").fadeOut(speed, function() {$(alert).children(".form-error").delay(speed).fadeIn(speed);} );
			decrease_progress_bar(id);
			add_process_encouragement(true);
			return false;
		}
	}
	
	var name_passed = false;
	var email_passed = false;
	var password_passed = false;
	
	$("#form-field-name").blur(function() {
		var regex = /[0-9]/;
		if(validate_form_field($(this), $(this).val() != '' && regex.test($(this).val()) === false)) {
			name_passed = true;
		} else {
			name_passed = false;
		}
	});
	
	$("#form-field-email").blur(function() { 
		if(validate_form_field($(this), validateEmail($(this).val()))) {
			email_passed = true;
		} else {
			email_passed = false;
		}
	});
	
	$("#form-field-password").blur(function() {
		if(validate_form_field($(this), $(this).val().length>5)) {
			password_passed = true;
		} else {
			password_passed = false;
		}
	});
	
 	$(".field").blur(function() {
		if(name_passed && email_passed && password_passed) {
			$("#location-wrapper").fadeIn(500);
		}
	}); 

	$(ac_country).autocomplete(countries, {
		minChars: 2,
		width: 280,
		matchContains: true,
		scroll: true,
		max:0,
		formatItem: function(row, i, max, term) {
			$(ac_country).addClass('browsing-countries');
			return "<img src='../js/register/accountry/images/flags/" + row.code.toLowerCase() + ".gif'/> " + row.name;
		},
		formatResult: function(row) {
			return row.name;
		},
		formatMatch: function(row, i, max) {
			return row.name;
		}
	});
	
	$(ac_country).result(function(event, data, formatted) {
		$(this).removeClass('browsing-countries');
		$("#form-field-location").val(data.name);
		increase_progress_bar('switch');
		$("#geolocation-fix-approval").html('<strong>' + data.name + '</strong>, of course!');
		$submit_wrapper.fadeIn("slow");
	});

	$(ac_country).blur(function() { 
		if($.trim($(this).val()).length == 0) {
			$(this).addClass('form-field-error');
		} else {
			$(this).removeClass('form-field-error');
		}
	});
	
	// Validate fields upon form submission
	
	$("#register-form").submit(function() {	
		var no_errors = true; 
		var geolocation_worked = $("#geolocation-worked").css("display") == 'block';
		
		var $object_name = $("#form-field-name");
		var regex = /[0-9]/;
		no_errors = validate_form_field($object_name, $object_name.val() != '' && regex.test($object_name.val()) === false);
		
		var $object_email = $("#form-field-email");
		no_errors = validate_form_field($object_email, validateEmail($object_email.val()));
		
		var $object_password = $("#form-field-password");
		no_errors = validate_form_field($object_password, $object_password.val().length>5);
		
		if(geolocation_worked === true) {
			if($(".checked").length == 0) {
				$("#switch-yes, #switch-no").addClass("form-field-error");
				no_errors = false;
			}
		}
		
		if(geolocation_worked !== true || $("#switch-no").hasClass("checked")) {
			if($.trim($(ac_country).val()).length == 0) {
				$(ac_country).addClass('form-field-error');
				no_errors = false;
			} else {
				$(ac_country).removeClass('form-field-error');
			}
		}
		
		if(no_errors) {
			
			// Invoke local storage
			localStorage.setItem("name", $object_name.val());
			localStorage.setItem("email", $object_email.val());
			// password is not stored for security purposes.
			localStorage.setItem("country", $("#form-field-location").val());
			localStorage.setItem("form_submitted", "true");
			
			return true;
		} else {
			return false;
		}
	});
	
	//Simply clear field on click and re-assign default value if nothing was typed
	//I like this "feature", makes the interface a bit more usable without the hassle for the coder ;)
	$.fn.clearField = function() {
	    return this.focus(function() {
	        if( this.value == this.defaultValue ) {
	            this.value = "";
	        }
	    }).blur(function() {
	        if( !this.value.length ) {
	            this.value = this.defaultValue;
	        }
	    });
	};
	
	
//----------------------------------------------------------------//
	
	
	// Canvas Drawings
	
	// Create vee circles
	for(var i=1;i<=$(".vee-container").length;i++) {
		var paper = Raphael(document.getElementById('circle-' + i), 17, 17);
		var c = paper.circle(9, 9, 8);
		c.attr({
		        fill: '120-#1c8c10-#40d830',
		        'stroke-linecap': 'round',
				"stroke-width": 0
		});

		var c = paper.path("M10,11.7s20,-5,-10,-7");

		c.scale(0.58, 0.58);

		c.attr({
		        stroke: '#fff',
		        'stroke-width': 1.5,
				'stroke-linecap': 'round',
				rotation: 120
		});
		
		var c = paper.path("M11,14s29,-9,-15,-10");

		c.scale(0.4, 0.4);

		c.attr({
		        stroke: '#fff',
		        'stroke-width': 2,
				'stroke-linecap': 'round',
				rotation: 120
		});
	}
	
	// Create Canvas
	var paper = Raphael(document.getElementById("progress-canvas"), 320, 200);
	
	// Progress bar Background
	var c = paper.rect(0, 0, 225, 16, 5);
	c.attr({
	        fill: '90-#b31b1b-#dc3a3a',
	        'stroke-linecap': 'round',
			"stroke-width": 0
	});

	// Progress Stripes
	for(var i=1;i<12;i++) {
		var left = (i*19)-7;
		var c = paper.path("M"+left+",18s10,-30,20-20,0,20s10,0");

		c.attr({
		        stroke: '#fff',
		        'stroke-width': 4,
		        'stroke-linejoin': 'round',
				'stroke-opacity': 1
		});
	}
	
//----------------------------------------------------------------//

	
	// About
	$("#about-title").toggle(function() {$("#about-explanation").slideDown(500); }, function() {$("#about-explanation").slideUp(500);});
	$("body").click(function() { $("#about-explanation").slideUp(500); });
	
});
