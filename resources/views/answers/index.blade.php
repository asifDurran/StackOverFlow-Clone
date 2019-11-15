<div class="row mt-4">
    <div class="col-md-12">
       <div class="card">
         <div class="card-header">
           <h2>{{$answersCount ." ". Str::plural('Answer' , $answersCount)}}</h2>          
         </div>
         <hr>
       
         <div class="card-body">
           @foreach($answers as $answer) 
             <!-- This section show vote,star, and counts  -->
             <div class="float-left vote-controls">
             <a title="This Answer is useful" class="vote-up {{Auth::guest() ? 'off' : ''}}" 
                onclick ="event.preventDefault();document.getElementById('up-vote-answer-{{$answer->id}}').submit();"
                >
                  <i class="fas fa-caret-up fa-2x"></i> 
                </a>  
                <form id="up-vote-answer-{{$answer->id}}" action="/answers/{{$answer->id}}/vote" method="post" style="display:none;"> 
                    @csrf
                  <input type="hidden" value="1" name="vote">
                </form> 
                <span class="votes-count">{{ $answer->votes_count}}</span>                     
                <a title="This Answer is not useful" class="vote-down {{Auth::guest() ? 'off' : ''}}" 
                onclick ="event.preventDefault();document.getElementById('down-vote-answer-{{$answer->id}}').submit();"
                > 
                  <i class="fas fa-caret-down fa-2x"></i>
                </a>  
                <form id="down-vote-answer-{{$answer->id}}" action="/answers/{{$answer->id}}/vote" method="post" style="display:none;"> 
                    @csrf
                  <input type="hidden" value="-1" name="vote">
                </form>               
            </div> 

             <!-- The section end here  -->
           <ul class="list-group">
            <li class="list-group-item">
              {!!($answer->body)!!}
              <div class="row">
                <div class="col-md-4">
                  <div class="d-flex float-left">
                      @can('update', $answer)
                        <a class="btn btn-outline-info btn-sm" href="{{route('questions.answer.edit',[$answer->id,$question->id])}}">Edit</a>
                      @endcan

                      @can('delete', $answer)
                      
                        <form action="{{route('questions.answer.destroy',[$answer->id,$question->id])}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete it?')" class="btn btn-outline-danger btn-sm">Delete</button>                        
                        </form>
                      @endcan
                    </div> 

                </div>
                <div class="col-md-4">
                </div>
                   <div class="col-md-4">
                     @include('shared.author',[
                       'model' => $answer,
                       'label' => 'answered'
                     ])
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