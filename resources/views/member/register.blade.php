@extends('member/layout')

@section('content')

<section id="register">
		<div class="container">
			<div class="row">
				<div class="col-md-8 center-div">
					<h3>Register Here</h3>
					<div id="register-container">
						<p>We do care about your privacy.Please fill the information correctly to generate precise result.</p>
					<form>
						<div class="form-group">
						    <label for="nameFormControlInput">Name</label>
						    <input type="text" class="form-control" id="nameFormControlInput" placeholder="John Doe">
					  	</div>
					    <div class="form-group">
						    <label for="usernameFormControlInput">Username</label>
						    <input type="text" class="form-control" id="usernameFormControlInput" placeholder="johndoe">
					    </div>
					    <div class="form-group">
						    <label for="exampleFormControlInput">Email</label>
						    <input type="email" class="form-control" id="exampleFormControlInput" placeholder="name@example.com">
					    </div>
					    <div class="form-group">
						    <label for="passwordFormControlInput">Password</label>
						    <input type="email" class="form-control" id="passwordFormControlInput" placeholder="A-Z,a-z,0-9,*%^.....">
					    </div>
					    <div id="locationField" class="form-group">
								<label for="addressFormControlInput">Address</label>
								<input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" name="address" class="form-control"/>
							</div>
						<div class="form-group">
							<input type="submit" type="button" class="btn btn-sm btn-block custom-btn">
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		
		var placeSearch, autocomplete;
		
		var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			country: 'long_name',
			postal_code: 'short_name'
		};
		
		function initAutocomplete() {
			// Create the autocomplete object, restricting the search predictions to
			// geographical location types.
			autocomplete = new google.maps.places.Autocomplete(
					document.getElementById('autocomplete'), {types: ['geocode']});
		
			// Avoid paying for data that you don't need by restricting the set of
			// place fields that are returned to just the address components.
			autocomplete.setFields(['address_component']);
		
			// When the user selects an address from the drop-down, populate the
			// address fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		}
		
		function fillInAddress() {
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();
		
			for (var component in componentForm) {
				document.getElementById(component).value = '';
				document.getElementById(component).disabled = false;
			}
		
			// Get each component of the address from the place details,
			// and then fill-in the corresponding field on the form.
			for (var i = 0; i < place.address_components.length; i++) {
				var addressType = place.address_components[i].types[0];
				if (componentForm[addressType]) {
					var val = place.address_components[i][componentForm[addressType]];
					document.getElementById(addressType).value = val;
				}
			}
		}
		
		// Bias the autocomplete object to the user's geographical location,
		// as supplied by the browser's 'navigator.geolocation' object.
		function geolocate() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function(position) {
					var geolocation = {
						lat: position.coords.latitude,
						lng: position.coords.longitude
					};
					var circle = new google.maps.Circle(
							{center: geolocation, radius: position.coords.accuracy});
					autocomplete.setBounds(circle.getBounds());
				});
			}
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5yfw0EccaDY6Zw9-8uwyhD5ozE_AkVlg&libraries=places&callback=initAutocomplete"
	async defer></script>
	

    @endsection