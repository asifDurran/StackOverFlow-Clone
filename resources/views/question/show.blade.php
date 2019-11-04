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
                       
                       <div class="float-left vote-controls">
                          <a title="This question is useful" class="vote-up">
                            <i class="fas fa-caret-up fa-2x"></i> 
                          </a>   
                          <span class="votes-count">1230</span>                     
                          <a title="This question is not useful" class="vote-down off"> 
                            <i class="fas fa-caret-down fa-2x"></i>
                          </a>                   
                    
                          <a title="Click to mark as favorite question(Double click to undo)"class="favorite mt-2 favorited">   
                            <i class="fas fa-star fa-lg"></i> 
                          </a>
                          <span class="favorites-count">1020</span>
                       </div>
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
             <!-- This section show vote,star, and counts  -->
             <div class="float-left vote-controls">
              <a title="This answer is useful" class="vote-up">
                <i class="fas fa-caret-up fa-2x"></i> 
              </a>   
              <span class="votes-count">1230</span>                     
              <a title="This answer is not useful" class="vote-down off"> 
                <i class="fas fa-caret-down fa-2x"></i>
              </a>                   
        
              <a title="Mark as the best answer"class="vote-accepted mt-2 accepted">   
                <i class="fas fa-check fa-lg"></i> 
              </a>
            </div> 

             <!-- The section end here  -->
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