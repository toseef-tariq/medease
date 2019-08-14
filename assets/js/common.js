/*========================= 	
	**********
	*********
	******
	*** TECHWARE(PENMANSHIP - SWD ^TW130) 	
============================*/	
	$(document).ready(function () {
	// you want to enable the pointer events only on click;
		$('#map_canvas').addClass('scrolloff'); // set the pointer events to none on doc ready
		$('#canvas1').on('click', function () {
			$('#map_canvas').removeClass('scrolloff'); // set the pointer events true on click
		});
	// you want to disable pointer events when the mouse leave the canvas area;
		$("#map_canvas").mouseleave(function () {
			$('#map_canvas').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
		});
	});
/* === Autocomplete Search Script === */	
	/* === Doctor === */
	var autocompleteDoc = {};
	var autocompletesWrapsDoc = ['locality_finder_Doc'];
	/* === Clinic === */
	var autocompleteClinic = {};
	var autocompletesWrapsClinic = ['locality_finder_Clinic'];
	/* === Medical Center === */
	var autocompleteMedical = {};
	var autocompletesWrapsMedical = ['locality_finder_Medical'];
	/* === Hospital === */
	var autocompleteHospital = {};
	var autocompletesWrapsHospital = ['locality_finder_Hospital'];
	/* All Autocomplete Initialization Method */
	function initialize() {	
		/* === Doctor Autocomplete Wraps === */
		$.each(autocompletesWrapsDoc, function(index, name) {
			if($('#'+name).length == 0) {
				return;
			}
			autocompleteDoc[name] = new google.maps.places.Autocomplete($('#'+name+' .autocompleteDoc')[0], { types: ['geocode'] });	
			google.maps.event.addListener(autocompleteDoc[name], 'place_changed', function() {							
				var place = autocompleteDoc[name].getPlace();							
				document.getElementById('lat_doc').value = place.geometry.location.lat();
				document.getElementById('lon_doc').value = place.geometry.location.lng();									
			});
		});
		/* === Clinic Autocomplete Wraps === */
		$.each(autocompletesWrapsClinic, function(index, name) {				
				if($('#'+name).length == 0) {
					return;
				}
				autocompleteClinic[name] = new google.maps.places.Autocomplete($('#'+name+' .autocompleteClinic')[0], { types: ['geocode'] });	
				google.maps.event.addListener(autocompleteClinic[name], 'place_changed', function() {
					var place_renter = autocompleteClinic[name].getPlace();							
					document.getElementById('lat_clinic').value = place_renter.geometry.location.lat();
					document.getElementById('lon_clinic').value = place_renter.geometry.location.lng();						
				});
			});
		/* === Medical Center Autocomplete Wraps === */
		$.each(autocompletesWrapsMedical, function(index, name) {				
				if($('#'+name).length == 0) {
					return;
				}
				autocompleteMedical[name] = new google.maps.places.Autocomplete($('#'+name+' .autocompleteMedical')[0], { types: ['geocode'] });	
				google.maps.event.addListener(autocompleteMedical[name], 'place_changed', function() {
					var place_renter = autocompleteMedical[name].getPlace();							
					document.getElementById('lat_medical').value = place_renter.geometry.location.lat();
					document.getElementById('lon_medical').value = place_renter.geometry.location.lng();
				});
			});		
		/* === Hospital Autocomplete Wraps === */
		$.each(autocompletesWrapsHospital, function(index, name) {				
				if($('#'+name).length == 0) {
					return;
				}
				autocompleteHospital[name] = new google.maps.places.Autocomplete($('#'+name+' .autocompleteHospital')[0], { types: ['geocode'] });	
				google.maps.event.addListener(autocompleteHospital[name], 'place_changed', function() {
					var place_renter = autocompleteHospital[name].getPlace();							
					document.getElementById('lat_hospital').value = place_renter.geometry.location.lat();
					document.getElementById('lon_hospital').value = place_renter.geometry.location.lng();						
				});
			});		
	}	
