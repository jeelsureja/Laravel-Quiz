@extends('layouts.app')
@section('content')
<div class="container">
  @if($topic)
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <div class="topic-title">
        <div class="font-large-1  text-center" style="">
        </div>
      </div>
      <form id="formData">
        @csrf
        <div class="container bg mt-sm-5 my-1">
          <div class="question ml-sm-5 pl-sm-5 pt-2">
            <!-- Title of topic  -->
            <label class="topic-label">{{$topic->title}} - Quiz</label>
            <a href="/topics" type="button" class="btn btn-primary"  style="margin-left: 295px;
            margin-top: -41px;">Go to Topics</a>
            <hr class="result-hr">
            <!-- User-Details Display -->
            <div class="user-data">
              <label class="name">Name: {{ Auth::user()->name }}</label><br>
              <label class="email">Email: {{ Auth::user()->email }}</label><br>
              <label class="date">Date:{{ date('d-m-Y', time()) }}</label>
              <hr class="result-hr">
            </div>
            <input type="hidden" name="topic_id" value="{{$topic->id}}">
            <?php $i=0; ?>
            @foreach($topic->questions as $question )
            <?php $i++; ?>
            <div class="py-2 h5">
              <b>[{{$i}}] . {{$question->question_text}}</b>
              <input type="hidden" name="question_id[]" value="{{$question->id}}">
            </div>
            @foreach($question->options as $option)
            <div>
              <label class="options"><input type="radio" name="option_{{$question->id}}[]"
               value="{{$option->id}}" >
               {{$option->option}}
             </label>
           </div>
           @endforeach
           @endforeach
         </div> 
         <div id="btn_data">
           <a href="javascript:;" class="btn btn-success mt-3 submitBtn" style="justify-content: center;">Submit</a>
           <a href="javascript:;" class="btn btn-danger mt-3 resetBtn" style="justify-content: center;" onclick="fun()">Reset</a>  
         </div>
         <hr>
         <div class="jumbotron">
          <p class="result-label">Result</p>
          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLong" style="margin-top: -101px;">Show Solutions</button>
          <hr class="result-hr">
          <hr>
          <label class="showResult" style="margin-top: 10px"></label>
          <!-- Display Not Attempt -->
          <p id="np" class="title-np"></p>
        </div>  
      </div>
    </form>
  </div>
</div>
@else
<h1>No Topic</h1>
@endif

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><b>Question Solutions</b></h3>
        
      </div>
      <div class="modal-body">
        <?php $i=0; ?>
        @foreach($topic->questions as $question )
        <?php $i++; ?>
        <div class="py-2 h5">
          <b>[{{$i}}] . {{$question->question_text}}</b>
        </div>
        @foreach($question->options as $option)
        <div>
          @if($option->correct == 1)    
          <p class="answer"> <lable class="result-label"><b>Answer:</b>  </lable>{{$option->option}}</p>
          @endif
        </div>
        @endforeach
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/collect.js/4.18.3/collect.js"></script>
<script>
  function fun(){  
   document.getElementById("formData").reset();  
 }   
 

 $('.jumbotron').hide();
 $(document).on('click','.submitBtn',function(){

  $('#btn_data').hide();
  $('.user-data').show();
  $('.jumbotron').show();

  var formData=$('#formData').serialize();
  var decodedUrl = decodeURIComponent(formData);
  var option = decodedUrl.match(/option_/g);
  var question = decodedUrl.match(/question_/g);
  const option_data = collect(option);
  const option_total = option_data.count();

  const question_data = collect(question);
  const question_total = question_data.count();

  var not_attempt = question_total - option_total;
  document.getElementById('np');
  var np1 = "Not Attempt Question: ";
  var np2 = parseInt(not_attempt);
  let res = np1.concat(np2);
  np.innerText =res;
  $.ajax({
    type: "GET",
    url: "{{route('get.result')}}",
    data:formData,
    success: function(result) {
      $('.showResult').html(result.html);

    }
  });
})
</script>
@endsection