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
                        @include('shared.vote',[
                         'model' => $question
                        ]);
                        
                       {!!($question->body)!!}
                        
                       <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          @include('shared.author', [
                            'model' => $question,
                            'label' => 'asked'
                          ])
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