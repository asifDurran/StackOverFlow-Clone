@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="d-flex justify-content-center">   
       <div class="col-md-12">
          <div class="card">
                <div class="card-header">
                  <div class="float-left">
                  <h4>All Questions</h4>
                  </div>
                  <div class="float-right">
                   <a href="{{route('questions.create')}}" class="btn btn-info btn-sm">Ask Questions</a>   
                
                  </div>
                </div>
                  <div class="card-body">
                    @foreach($questions as $question)
                    <ul class="list-gorup">

                      <li class="list-group-item">
                        <div class="d-flex float-right">

                        @can('update', $question)
                          <a class="btn btn-outline-info btn-sm" href="{{route('questions.edit',$question->id)}}">Edit</a>
                        @endcan

                        @can('delete', $question)
                         
                          <form action="{{route('questions.destroy',$question->id)}}" method="post">
                           @csrf 
                           @method('DELETE')
                           <button type="submit" onclick="return confirm('Are you sure to delete it?')" class="btn btn-outline-danger btn-sm">Delete</button>
                          
                          </form>
                        @endcan
                        </div>
                        <a href="{{route('questions.show',$question->id)}}" class="link"><h4>{{$question->title}}</h4></a>
                        <p class="lead">
                          Asked by       
                          
                          <a href="">{{ $question->user->name }}</a> 

                          <small class="text-muted">
                           {{$question->created_at->diffForHumans()}}
                          </small>
                        </p>
                          
                      </li>
                      <li class="list-group-item">                     
                      <!-- Counter and voter section  -->
                      <div class="float-left counters">
                          <div class="vote ">
                            <strong> {{$question->votes_count}} </strong> {{Str::plural('vote', $question->votes_count)}}
                          </div>

                          <div class="status">
                            <strong> {{$question->answers_count}} </strong> {{Str::plural('answer', $question->answers_counts)}}
                          </div>

                          <div class="view">
                            {{$question->views  ." ". Str::plural('view', $question->views)}}
                          </div>
                        </div>                  

                        <!-- End of counter and voting section  -->
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