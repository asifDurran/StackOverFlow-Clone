@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row">  
      <div class="col-md-12">
              <div class="card">
                    <div class="card-header">
                      <div class="d-flex float-left">
                      <h4>{{$question->title}}</h4>
                      </div>
                      <div class="d-flex float-right">
                      <a href="{{route('questions.index')}}" class="btn btn-info btn-sm">Back to all questions </a>   
                    
                      </div>
                    </div>
                      <div class="card-body">
                       {!!($question->body)!!}
                        
                       <div class="float-right">
                        <span class="text-muted">Answered : {{$question->created_at->diffForHumans()}}</span>
                          <div class="media mt-2">
                            <a href="{{$question->user->url}}"  class="pr-2">
                              <img src="{{$question->user->avatar}}" alt="">
                            </a>
                            <div class="media-body mt-1">
                            <a href="{{$question->user->url}}" class="">{{$question->user->name}}</a>
                            </div>
                         </div> 
                    </div>
              </div>
            </div>  
   </div>

   <div class="row mt-4">
    <div class="col-md-12">
       <div class="card">
         <div class="card-header">
           <h2>{{$question->answers_count ." ". Str::plural('Answer' , $question->answers_count)}}</h2>          
         </div>
         <hr>
       
         <div class="card-body">
           @foreach($question->answers as $answer)  
           <ul class="list-group">
            <li class="list-group-item">
              {!!($answer->body)!!}
              <div class="float-right">
                 <span class="text-muted">Answered : {{$answer->created_at->diffForHumans()}}</span>
                  <div class="media mt-2">
                    <a href="{{$answer->user->url}}"  class="pr-2">
                      <img src="{{$answer->user->avatar}}" alt="">
                    </a>
                    <div class="media-body mt-1">
                     <a href="{{$answer->user->url}}" class="">{{$answer->user->name}}</a>
                    </div>
                  </div>
               </div>
            </li>
           </ul>
           <hr>
           @endforeach
         </div>
       </div>
    </div>
   </div>
 </div>
@endsection