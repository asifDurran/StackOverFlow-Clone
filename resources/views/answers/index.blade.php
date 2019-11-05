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
              <div class="row">
                <div class="col-md-4">
                  <div class="d-flex float-left">
                      @can('update', $answer)
                        <a class="btn btn-outline-info btn-sm" href="{{route('questions.answers.edit',[$answer->id,$question->id])}}">Edit</a>
                      @endcan

                      @can('delete', $answer)
                      
                        <form action="{{route('questions.answers.destroy',[$answer->id,$question->id])}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete it?')" class="btn btn-outline-danger btn-sm">Delete</button>                        
                        </form>
                      @endcan
                    </div> 

                </div>
                <div class="col-md-4">
                </div>
                    <div class="float-right">
                     <span class="text-muted">Answered : {{$answer->created_at->diffForHumans()}}</span>
                      <div class="media mt-2">
                        <a href=""  class="pr-2">
                          <img src="{{$answer->user->avatar}}" alt="">
                        </a>
                            <div class="media-body mt-1">
                            <a href="" class="">{{$answer->user->name}}</a>
                            </div>
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