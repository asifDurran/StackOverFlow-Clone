@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row">
     <div class="d-flex justify-content-center">
       
        <div class="col-md-10">
          <div class="card">
                <div class="card-header">
                  <h2>All Questions</h2>
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