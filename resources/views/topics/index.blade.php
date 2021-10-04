@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">
  <div class="container">

    <div class="col-lg-12" style="margin-left: 267px;">
     <ul class="list-group">
      <li class="list-group-item" style="background-color: #fff;
      border-color: #fff;"><b>Topics</b>
    </li></ul>
    <ul class="list-group">

      @foreach($topics as $topic)
      <li class="list-group-item"><b>{{$topic->title}}</b><hr>
        <h5><b>Quiz Date :</b> {{ $topic->created_at->format('d/m/Y')}}</h5>
        <a href="{{route('topics.show', $topic->id)}}" class="inline_block btn btn-primary" style="margin-left: 383px;
        margin-top: -45px;">Go
      To Quiz</a>
    </li>
  </ul>

  @endforeach
</div>

</div>
</div>




@endsection