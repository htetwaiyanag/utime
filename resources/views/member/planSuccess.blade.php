@extends('member/layout')

@section('content')

<div class="container">

  <div class="row mid-div">

      <div class="col-md-8 center-div">

        <p class="planner-success-msg">Hello <span class="user-name">{{ Auth::user()->name }}</span>,<br>your planner is ready to use..</p>

        <a href="{{ route('planner.index') }}" class="btn c-btn">Start Using</a>

      </div>

  </div>

</div>

@endsection