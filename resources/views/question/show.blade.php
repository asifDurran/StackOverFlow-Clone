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
                      
                    </div>
              </div>
            </div>  
   </div>
 </div>
@endsection