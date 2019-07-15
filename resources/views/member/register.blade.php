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
					    <div class="form-group">
					    	<label for="currentJobFormControlInput">Current Job</label>
					    	<input type="text" class="form-control" id="currentJobFormControlInput" placeholder="student,employee,.....">
					    </div> 
					    <div class="form-group">
					    	<label>Address</label> 
					    	<button type="button" class="btn location-btn" data-toggle="modal" data-target="#addressModal" data-whatever="@getbootstrap"> <i class="fas fa-map-marked-alt"></i></button>
					    </div>
						<div class="form-group">
							<input type="submit" type="button" class="btn btn-sm btn-block custom-btn">
						</div>
						<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <span class="modal-title text-muted" id="exampleModalLabel">Choose your address at map</label>
						      </div>
						      <div class="modal-body">
						        <form>
						          <div class="form-group">
						            <label for="locationFormControlInput" class="col-form-label">Location</label>
						            <input type="text" class="form-control" id="locationFormControlInput">
						          </div>
						          <div class="form-group">
						            <div id="map"></div>
						          </div>
						        </form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-success">Ok</button>
						      </div>
						    </div>
						  </div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA3hoJiliJDxVvAAWkJM89-EsSgCYpm3Ko"></script> 
    <script>
      var map;
      var marker;
      var searchBox;
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 16.8661, lng: 96.1951},
          zoom: 15
        });

        marker = new google.maps.Marker({
        	position:{
        		lat: 16.8661, 
        		lng: 96.1951
        	},
        	map:map,
        	draggable: true
        });

        searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));

        google.maps.event.addListener(searchBox, 'places_changed',function(){

        	var places = searchBox.getPlaces();

        	var bounds = new google.maps.LatLngBounds();

        	var i,place;

        	for(i=0;place=places[i];i++){

        		bounds.extend(place.geometry.location);
        		marker.setPosition(place.geometry.location);
        	}

        	map.fitBounds(bounds);
        	map.setZoom(15);
        })

    </script>

    @endsection