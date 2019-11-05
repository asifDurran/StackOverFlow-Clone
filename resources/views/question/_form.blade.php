@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" name="title" value="{{ old('title', $question->title) }}" id="question-title" class="form-control">

   
</div>
<div class="form-group">
    <label for="question-body">Explain you question</label>
    <textarea name="body" id="question-body" rows="10" class="form-control">{{ old('body', $question->body) }}</textarea>   
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>