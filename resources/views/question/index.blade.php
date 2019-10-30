@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row">
     <div class="d-flex justify-content-center">
       
        <div class="col-md-10">
          <div class="card">
                <div class="card-header">
                  <div class="d-flex float-left">
                  <h4>All Questions</h4>
                  </div>
                  <div class="d-flex float-right">
                   <a href="{{route('questions.create')}}" class="btn btn-info btn-sm">Ask Questions</a>   
                
                  </div>
                </div>
                  <div class="card-body">
                    @foreach($questions as $question)
                    <ul class="list-gorup">

                      <li class="list-group-item">
                        
                        <a href="" class="link"><h4>{{$question->title}}</h4></a>
                        <p class="lead">
                          Asked by 
                          <a href="" class="link">{{$question->user->name}}</a>
                          <small class="text-muted">
                           {{$question->created_at->diffForHumans()}}
                          </small>
                        </p>
                       <!-- Counter and voter section  -->
                          
                       <div class="d-flex flex-column counters">
                          <div class="vote ">
                            <strong> {{$question->votes}} </strong> {{Str::plural('vote', $question->votes)}}
                          </div>

                          <div class="status">
                            <strong> {{$question->answers}} </strong> {{Str::plural('answer', $question->answers)}}
                          </div>

                          <div class="view">
                            {{$question->views  ." ". Str::plural('view', $question->views)}}
                          </div>
                        </div>


                        <!-- End of counter and voting section  -->

                      </li>
                      <li class="list-group-item">
                        {{$question->body}}
                      </li>
                    
                    </ul>

                    @endforeach
                    <div class="pagination justify-content-center">
                    {{$questions->links()}}
                    </div>
                  
                </div>
          </div>
        </div>

     </div>  
   </div>
 </div>
@endsection