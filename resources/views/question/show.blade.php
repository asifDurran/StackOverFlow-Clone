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
                          <a title="This question is useful" class="vote-up {{Auth::guest() ? 'off' : ''}}" 
                          onclick ="event.preventDefault();document.getElementById('up-vote-question-{{$question->id}}').submit();"
                          >
                            <i class="fas fa-caret-up fa-2x"></i> 
                          </a>  
                          <form id="up-vote-question-{{$question->id}}" action="/questions/{{$question->id}}/vote" method="post" style="display:none;"> 
                             @csrf
                            <input type="hidden" value="1" name="vote">
                          </form> 
                          <span class="votes-count">{{ $question->votes_count}}</span>                     
                          <a title="This question is not useful" class="vote-down {{Auth::guest() ? 'off' : ''}}" 
                          onclick ="event.preventDefault();document.getElementById('down-vote-question-{{$question->id}}').submit();"
                          > 
                            <i class="fas fa-caret-down fa-2x"></i>
                          </a>  
                          <form id="down-vote-question-{{$question->id}}" action="/questions/{{$question->id}}/vote" method="post" style="display:none;"> 
                             @csrf
                            <input type="hidden" value="-1" name="vote">
                          </form>

                          <a title="Click to mark as favorite question(Double click to undo)"
                          class="favorite mt-2 {{Auth::guest() ? 'off' : ($question->is_favorited ? 'favorited' : '')}}"  
                           onclick ="event.preventDefault();document.getElementById('favorite-question-{{$question->id}}').submit();"
                          >  

                          <i class="fas fa-star fa-lg"></i> 
                          <span class="favorites-count">{{$question->favorites_count}}</span>
                          </a>
                          <form id="favorite-question-{{$question->id}}" action="/questions/{{$question->id}}/favorites" method="POST" style="display:none;"> 
                             @csrf
                            @if($question->is_favorited)
                             @method('DELETE')
                            @endif
                          </form>
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
   @include('answers.index',[
     'answers' => $question->answers,
     'answersCount' => $question->answers_count,
    ])
    @include('answers.create');
 </div>
@endsection