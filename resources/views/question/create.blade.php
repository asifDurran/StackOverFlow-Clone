@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row">  
      <div class="col-md-12">
              <div class="card">
                    <div class="card-header">
                      <div class="d-flex float-left">
                      <h4>Ask Question</h4>
                      </div>
                      <div class="d-flex float-right">
                      <a href="{{route('questions.index')}}" class="btn btn-info btn-sm">Back to all questions </a>   
                    
                      </div>
                    </div>
                      <div class="card-body">
                      <form action="{{route('questions.store')}}" method="post">
                         @csrf
                        <div class="form-group">
                         <label for="Question">Question Title</label>
                         <input type="text" name="title" id="title" vlaue="{{old('title')}}" class="form-control">
                        </div>

                        <div class="form-group">
                         <label for="explainquestoin">Explain your Question</label>
                         <textarea name="body" id="body" cols="10" rows="10" class="form-control"> {{old('body')}}</textarea>
                        </div>
                        <div class="form-group">
                         <button type="submit" class="btn btn-outline-primary btn-md ">Submit</button>
                        </div>
                      </form>
                      
                    </div>
              </div>
            </div>  
   </div>
 </div>
@endsection