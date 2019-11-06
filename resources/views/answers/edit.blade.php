<div class="container">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>Edit the answer of : {{$question->title}}</h3>
                </div>
                <hr>
                <form action="{{ route('questions.answer.update', [$question->id,$answer->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <textarea name="body" id=""  rows="7" class="form-control">{{old('body',$answer->body)}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 

</div>