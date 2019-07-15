 $(document).ready(function() {
    $("#MyModal").modal();

    var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	var content 		='<div class="row added"><div class="form-group col-md-3"><label class="subjectFormInputControl">Subject</label><input type="text" class="form-control" id="subjectFormInputControl"></div><div class="form-group col-md-2"><label class="subjectFormInputControl">Priority</label><select class="custom-select" id="subjectFormInputControl"><option selected disabled>Choose...</option><option value="1">Urgent</option><option value="2">High</option><option value="3">Medium</option><option value="4">Low</option></select></div><div class="form-group col-md-2"><label class="subjectFormInputControl">Giving Hour</label><input type="number" class="form-control" min="2" max="14"></div><div class="col-md-2"><label>Specific Day</label><small class="text-warning">(optional)</small><select><option selected disabled>Choose...</option><option value="1">Monday</option><option value="2">Tuesday</option><option value="3">Wednesday</option><option value="4">Thursday</option><option value="5">Friday</option><option value="6">Saturday</option><option value="7">Sunday</option></select></div><div class="col-md-2"><label>Address</label><br><button type="button" class="btn location-btn" data-toggle="modal" data-target="#subjectAddressModal" data-whatever="@getbootstrap"><i class="fas fa-map-marked-alt"></i></button></div><a href="#" class="remove_field col-md-1"><i class="fas fa-times"></i></a><div class="modal fade" id="subjectAddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><span class="modal-title text-muted" id="exampleModalLabel">Choose your address at map</label></div><div class="modal-body"><form><div class="form-group"><label for="locationFormControlInput" class="col-form-label">Location</label><input type="text" class="form-control" id="locationFormControlInput"></div><div class="form-group"><div id="map"></div></div></form></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-success">Ok</button></div></div></div></div></div>';
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append(content); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); 
		$(this).parent('div').remove();  x--;
	})
});

