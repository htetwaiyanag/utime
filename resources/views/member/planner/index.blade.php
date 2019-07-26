@extends('member/layout')

@section('content')

<section id="planner">
  <h3>Your Planner</h3>
  <p class="title-desc">
    <span class="first_date">21 June 2019</span>
    <span class="last_date">25 June 2019</span>
  </p>
  <div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3">
      <a href="">Tell me how you feel today<i class="far fa-smile-wink"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#" class="btn btn-primary btn-sm"><i class="far fa-bell"></i></a>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-9 center-div">
      <table class="table planner-table table-bordered">
        <thead style="background: #f1f1f1;">
          <tr>
            <th></th>
            <th>6:00</th>
            <th>7:00</th>
            <th>8:00</th>
            <th>9:00</th>
            <th>10:00</th>
            <th>11:00</th>
            <th>12:00</th>
            <th>1:00</th>
            <th>2:00</th>
            <th>3:00</th>
            <th>4:00</th>
            <th>5:00</th>
            <th>6:00</th>
            <th>7:00</th>
            <th>8:00</th>
            <th>9:00</th>
            <th>10:00</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Monday</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s1">Subject1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s2">Subject2</td>
            <td>-</td>
            <td colspan="2" class="task s3">Subject3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Tuesday</td>
            <td colspan="2" class="task s1">Subject1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s2">Subject2</td>
            <td>-</td>
            <td colspan="2" class="task s2">Subject5</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Wednesday</td>
            <td colspan="2" class="task s4">Subject4</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s2">Subject2</td>
            <td>-</td>
            <td colspan="2" class="task s3">Subject3</td>
            <td>-</td>
            <td colspan="2" class="task s1">Subject1</td>
            <td colspan="2" class="task s2">Subject5</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Thursday</td>
            <td colspan="2" class="task s1">Subject1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s1">Subject1</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Friday</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s2">Subject2</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s2">Subject2</td>
            <td>-</td>
            <td colspan="2" class="task s3">Subject3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Saturday</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s3">Subject3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Sunday</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td colspan="2" class="task s3">Subject3</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>  
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 explain center-div">
      <span class="s1">Urgent</span>
      <span>Subject1</span><br><br>
      <span class="s2">High</span>
      <span>Subject2 Subject5</span><br><br>
      <span class="s3">Medium</span>
      <span>Subject3</span><br><br>
      <span class="s4">Low</span>
      <span>Subject4</span>
    </div>
  </div>
</section>

@endsection

<table>
  <thead>
    <tr></tr>
  </thead>
  <tbody>
    @foreach ($plans as $plan)
        <tr>
          <td>{{ $plan->subject }}</td>
        </tr>
    @endforeach
  </tbody>
</table>