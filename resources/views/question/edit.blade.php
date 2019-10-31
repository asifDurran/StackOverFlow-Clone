@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row">  
      <div class="col-md-12">
              <div class="card">
                    <div class="card-header">
                      <div class="d-flex float-left">
                      <h4>Edit Question</h4>
                      </div>
                      <div class="d-flex float-right">
                      <a href="{{route('questions.index')}}" class="btn btn-info btn-sm">Back to all questions </a>   
                    
                      </div>
                    </div>
                      <div class="card-body">
                      <form action="{{route('questions.update',$question->id)}}" method="post">

                        @method('PUT')
                        
                        @include("question._form", ['buttonText' => "Edit Question"])
                      </form>
                      
                    </div>
              </div>
            </div>  
   </div>
 </div>
@endsection