

@extends('member/layout')

@section('content')

<section id="step1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 center-div">
        <h3 align="center">Let's make your planner now</h3>
        <div class="step-progress">
          <ul>
            <li>
              <img src="{{  asset('css/img/layout.png') }}" alt="step1"><br>
              <i class="fas fa-spinner active-step"></i>
              <p>Fill Details</p>
            </li>
            <li>
              <img src="{{ asset('css/img/search.png') }}" alt="step2"><br>
              <i class="fas fa-times"></i>
              <p>Choose one</p>
            </li>
            <li>
              <img src="{{  asset('css/img/approve.png') }}" alt="step3"><br>
              <i class="fas fa-times"></i>
              <p>Final planner</p>
            </li>
          </ul>
        </div>
        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="subject" type="text" class="validate">
                  <label>Subject</label>
                </div>
                <div class="input-field col s6">
                    <select id="priority">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Urgent</option>
                      <option value="2">High</option>
                      <option value="3">Medium</option>
                      <option value="4">Low</option>
                    </select>
                    <label>Priority Select</label>
                </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                      <input type="number" id="givingHr" type="text" class="validate">
                      <label>Giving Hour</label>
                    </div>
                    <div class="input-field col s6">
                        <select id="specDay">
                          <option value="" disabled selected>Choose your option</option>
                          <option value="1">Monday</option>
                          <option value="2">Tuesday</option>
                          <option value="3">Wednesday</option>
                          <option value="4">Thursday</option>
                          <option value="2">Friday</option>
                          <option value="3">Saturday</option>
                          <option value="4">Sunday</option>
                        </select>
                        <label>Specific Day</label>
                    </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                      <label>Emotion Level</label><br>  
                        <input type="range" min="1" max="5" value="3" class="slider" id="emoRange">
                        <p id="demo" style="text-align:center"></p>
                    </div> 
              </div>
            </form>
          </div>
          <div class="row">
            <button href="#" class="btn btn-sm custom-btn" id="add-btn">Add</button>
          </div>
          <div class="row">
            <div class="col-md-8 center-div">
              <h4 align="center">Plan List</h4>
                <ul id="plan-output"></ul>
                <form action="{{ route('plans.store') }}" id="planForm" method="POST"></form>
            </div>
          </div>
    </div>
  </div>
</section>
<script>

  $('select').formSelect();

  $('.save-btn').hide();

  var plan=[];

  var emoji = ['angryemoji.png','sademoji.png','happyemoji.png','laughemoji.png','hearteyeemoji.png'];

  var priority_color={
    1 : 'text-danger',
    2 : 'text-warning',
    3 : 'text-primary',
    4 : 'text-info'
  };

  var priority={
    1 : 'urgent',
    2 : 'high' ,
    3 : 'medium',
    4 : 'low'
  };

  function createHiddenForm(){
    $('#planForm').html("");

    for(var n=0;n<plan.length;n++){

      $('#planForm').append('@csrf<input type="text" name="plan['+n+'][subject]" value="'+plan[n]["subject"]+'"><input type="text" name="plan['+n+'][priority]" value="'+plan[n]["priority"]+'"><input type="number" name="plan['+n+'][givingHour]" value="'+plan[n]["givingHour"]+'"><input name="plan['+n+'][specificDay]" value="'+plan[n]["specificDay"]+'"><input name="plan['+n+'][emotionLevel]" value="'+plan[n]["emotionLevel"]+'">')
    }

    $('#planForm').append('<input type="submit" value="Save" class="btn btn-sm btn-block custom-btn">');
  }

  $('#add-btn').click(function(){

    var sub = $('#subject').val();
    var pri = $('#priority').val();
    var gh = $('#givingHr').val();
    var sd = $('#specDay').val();
    var el = $('#emoRange').val();

    

    plan.push({
      'subject' : sub,
      'priority' : pri,
      'givingHour' : gh,
      'specificDay' : sd,
      'emotionLevel' : el
    });

    $('#plan-output').empty("");

    for(var n=0;n<plan.length;n++){

      var lvl = plan[n].emotionLevel;

      var p_index = plan[n].priority;

      $('#plan-output').append("<li><img src='/css/img/"+emoji[lvl-1]+"' width='30' height='30'/>"+"<span class='subject-title'>"+plan[n].subject+"</span><br><span class='"+priority_color[p_index]+"'>"+priority[p_index]+"</span>"+"<a href='#' class='remove_field col-md-1' splice-id='"+n+"'><i class='fas fa-times'></i></a></li>");
    }

    createHiddenForm();

    $('.remove_field').on("click", function(e){ //user click on remove text
			e.preventDefault(); 
			$(this).parent('li').remove();

			if(plan.length===1){
				work=[];
        $('#planForm').html("");
				// $('.save-btn').hide();
			}else{
				var splice_id = $(this).attr('splice-id');
				plan.splice(splice_id,1);
        createHiddenForm();
			}
			
		});

  });

</script>

@endsection