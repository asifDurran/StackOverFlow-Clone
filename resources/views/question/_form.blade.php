@csrf
<div class="form-group">
    <label for="Question">Question Title</label>
    <input type="text" name="title" id="title" value="{{old('title', $question->title)}}" class="form-control">
</div>

<div class="form-group">
    <label for="explainquestoin">Explain your Question</label>
    <textarea name="body" id="body" cols="10" rows="10" class="form-control"> {{old('body',$question->body)}}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-md ">{{ $buttonText}}</button>
</div>