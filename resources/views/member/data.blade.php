@extends('member/layout')

@section('customlinkcss')
	{{-- Material kit --}}
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
	<link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/timepicker.css') }}">
@endsection

@section('customlinkjs')
	<script src="{{ asset('/js/timepicker.js') }}"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/bootstrap-datetimepicker.js"></script>
@endsection

@section('content')

<section id="data">
	<div class="container">
			<div class="row">
				<div class="col-md-9 center-div">
					<h3>Choose your daily work</h3>
					<div class="form-group">
						<label class="label-control">From</label>
						<input type="text" class="form-control timepicker" value="14:00" name="fromTime" id="fromTime">
					</div>
					<div class="form-group">
						<label class="label-control">To</label>
						<input type="text" class="form-control timepicker" value="14:00" name="toTime" id="toTime">
					</div>
					<div class="form-group">
						<label class="label-control">Your Job</label>
						<select name="category" class="form-control" id="category">
							<option value="class" icon="chalkboard-teacher">Class</option>
							<option value="eating" icon="utensils">Eating</option>
							<option value="general" icon="globe">General</option>
							<option value="playing" icon="gamepad">Playing</option>
							<option value="reading" icon="book-open">Reading</option>
							<option value="relax" icon="laugh">Relaxing</option>
							<option value="school" icon="school">School</option>
							<option value="sleeping" icon="bed">Sleeping</option>
							<option value="studying" icon="book-reader">Studying</option>
							<option value="sport" icon="table-tennis">Sport</option>
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-sm custom-btn">Add &nbsp;<i class='fas fa-plus'></i></button>
					</div>
				</div>
			</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9 center-div">
				<ul id="workOutput"></ul>
				<button class="btn btn-sm btn-block custom-btn save-btn">Save</button>
			</div>
		</div>
	</div>
</section>

<script>

$('.save-btn').hide();

	
var work=[];

	$('.btn').click(function() {

		var fromTime = $('#fromTime').val();
		var toTime = $('#toTime').val();
		var category = $('#category').val();
		var icon = $('#category option:selected').attr('icon');

		
		work.push({
			'fromTimeData' : fromTime,
			'toTimeData' : toTime,
			'category' : category,
			'iconData' : icon
		});

		$('#workOutput').empty("");

		for(var i=0;i<work.length;i++){

			// console.log(work[i].iconData);
			$('#workOutput').append("<li><i class='fas fa-"+work[i].iconData+" work-icon'></i><span class='workTitle'>"+work[i].category+
				"</span><br><span>"+work[i].fromTimeData+" to "+work[i].toTimeData+"</span><a href='#' class='remove_field col-md-1' splice-id='"+i+"'><i class='fas fa-times'></i></a></li>");

		}

		if(work.length>0){
			$('.save-btn').show();
		}

		

		$('.remove_field').on("click", function(e){ //user click on remove text
			e.preventDefault(); 
			$(this).parent('li').remove();

			if(work.length==1){
				work=[];
				$('.save-btn').hide();
			}else{
				var splice_id = $(this).attr('splice-id');
				work.splice(splice_id,1);
			}
			
		})

	});	
</script>


@endsection