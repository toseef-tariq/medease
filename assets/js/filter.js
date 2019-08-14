/*========================= 	
	**********
	*********
	******
	*** TECHWARE(PENMANSHIP - SWD ^TW130) 
============================*/

/* === filter redirection method === */
	jQuery(document).ready(function ($) {   
		/* === Doctor key === */
		$('.form_doctor').submit(function(event) {
			event.preventDefault();
		});
		$('.form_doctor .form-control.filter-field').on("change", function(event) {
			event.preventDefault();		
			filter_results();	
		});
		$('.form_doctor .btn.btn-primary.btn-pat').on("click", function(event) {	
			document.getElementById("form_doctor").reset();	
			filter_results();		
			event.preventDefault();
		});
		/* === Clinic key === */
		$('.form_doctor_clinic').submit(function(event) {
			event.preventDefault();
		});
		$('.form_doctor_clinic .form-control.filter-field_clinic').on("change", function(event) {
			event.preventDefault();		
			filter_results_clinic();		
		});
		$('.form_doctor_clinic .btn.btn-primary.btn-pat').on("click", function(event) {	
			document.getElementById("form_doctor_clinic").reset();		
			filter_results_clinic();	
			event.preventDefault();
		});
		/* === Medical key === */
		$('.form_doctor_medical').submit(function(event) {
			event.preventDefault();
		});
		$('.form_doctor_medical .form-control.filter-field_medical').on("change", function(event) {
			event.preventDefault();	
			filter_results_medical();		
		});
		$('.form_doctor_medical .btn.btn-primary.btn-pat').on("click", function(event) {	
			document.getElementById("form_doctor_medical").reset();	
			filter_results_medical();		
			event.preventDefault();
		});
		/* === Hospital key === */
		$('.form_doctor_hospital').submit(function(event) {
			event.preventDefault();
		});
		$('.form_doctor_hospital .form-control.filter-field_hospital').on("change", function(event) {
			event.preventDefault();	
			filter_results_hospital();	
		});
		$('.form_doctor_hospital .btn.btn-primary.btn-pat').on("click", function(event) {	
			document.getElementById("form_doctor_hospital").reset();	
			filter_results_hospital();	
			event.preventDefault();
		});
	});
/* === filter results === */
	/* === Doctor Lock === */
	function filter_results() {
		var value = $('.form_doctor').serialize();
		$.ajax({
			type: "POST",
			url: base_url+"Doctor/filtersearch_doctor",
			data: value,				
			success: function(data) {
				data = JSON.parse(data);
				console.log(data.map_data);
				ViewCustInGoogleMap(data.map_data, true);
				console.log(data.map_data);																			
					$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');
					$('.evnt-mn.doctor').html(data['temp']);
			},			
			error: function(data) {				                 
				var error = '<div class="message"><div class="error"><h1>Sorry, No records found.  </h1></div></div>';
				$('.col-lg-6.evt-br.doctor').html(error);
				$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');					
			}
		});
	}
	/* === clinic Lock === */
	function filter_results_clinic() {
		var value = $('.form_doctor_clinic').serialize();
		$.ajax({
			type: "POST",
			url: base_url+"Clinic/filtersearch_clinic",
			data: value,				
			success: function(data) {
				data = JSON.parse(data);
				console.log(data);
				console.log(data.map_data);
				ViewCustInGoogleMap(data.map_data, true);
				console.log(data.map_data);								
				$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');				
				$('.col-lg-10.clinic').html(data['temp']);
			},			
			error: function(data) {				                 
				var error = '<div class="message"><div class="error"><h1>Sorry, No records found.  </h1></div></div>';
				$('.col-lg-6.evt-br.doctor').html(error);
				$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');				
			}
		});
	}	
	/* === Medical Lock === */
	function filter_results_medical() {
		var value = $('.form_doctor_medical').serialize();
		$.ajax({
			type: "POST",
			url: base_url+"Medical/filtersearch_medical",
			data: value,				
			success: function(data) {
				data = JSON.parse(data);
				console.log(data);
				console.log(data.map_data);
				ViewCustInGoogleMap(data.map_data, true);
				console.log(data.map_data);								
				$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');				
				$('.col-lg-10.medical').html(data['temp']);
			},			
			error: function(data) {				                 
				var error = '<div class="message"><div class="error"><h1>Sorry, No records found.  </h1></div></div>';
				$('.col-lg-6.evt-br.doctor').html(error);
				$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');
			}
		});
	}
	/* === Hospital Lock === */
	function filter_results_hospital() {
		var value = $('.form_doctor_hospital').serialize(); 
		$.ajax({
			type: "POST",
			url: base_url+"Hospital/filtersearchhospital",
			data: value,				
			success: function(data) {
				data = JSON.parse(data);
				console.log(data);
				console.log(data.map_data);
				ViewCustInGoogleMap(data.map_data, true);
				console.log(data.map_data);																	
				$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');				
				$('.col-lg-10.hospital').html(data['temp']);
			},			
			error: function(data) {				                 
				var error = '<div class="message"><div class="error"><h1>Sorry, No records found.  </h1></div></div>';
				$('.col-lg-6.evt-br.doctor').html(error);
				$('html, body').animate({scrollTop:$('.doctor-sub').offset().top}, 'slow');					
			}
		});
	}
	/* === general map marker === */
	function ViewCustInGoogleMap(data) {
		var mapOptions = {
			center: new google.maps.LatLng(9.9710364, 76.2382522), // Coimbatore = (11.0168445, 76.9558321)
			zoom: 7,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		people = JSON.parse(data);	
		for (var i = 0; i < people.length; i++) {
			setMarker(people[i]);
		}
	}
	function setMarker(people) {
		geocoder = new google.maps.Geocoder();
		infowindow = new google.maps.InfoWindow();
		if ((people.LatitudeLongitude == null) || (people.LatitudeLongitude == 'null') || (people.LatitudeLongitude == '')) {
			geocoder.geocode({ 'address': people["Location"] }, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
						latlng = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
						marker = new google.maps.Marker({
						position: latlng,
						map: map,
						draggable: false,
						html: "<b>"+people.DisplayText+"</b><div>"+people.Location+"</div>"
					});
					google.maps.event.addListener(marker, 'click', function(event) {
						infowindow.setContent(this.html);
						infowindow.setPosition(event.latLng);
						infowindow.open(map, this);
					});
				}else {
					alert(people.DisplayText + " -- " + people.Location + ". This address couldn't be found");
				}
			});
		}else {
			var latlngStr = people.LatitudeLongitude.split(",");
			var lat = parseFloat(latlngStr[0]);
			var lng = parseFloat(latlngStr[1]);
			latlng = new google.maps.LatLng(lat, lng);
			marker = new google.maps.Marker({
				position: latlng,
				map: map,
				draggable: false, // cant drag it
				html: "<b>"+people.DisplayText+"</b><div>"+people.Location+"</div>" // Content display on marker click
			});
			google.maps.event.addListener(marker, 'click', function(event) {
				infowindow.setContent(this.html);
				infowindow.setPosition(event.latLng);
				infowindow.open(map, this);
			});
		}
	}