<a title="Click to mark as favorite question(Double click to undo)"
        class="favorite mt-2 {{Auth::guest() ? 'off' : ($model->is_favorited ? 'favorited' : '')}}"  
        onclick ="event.preventDefault();document.getElementById('favorite-question-{{$model->id}}').submit();"
        >  

        <i class="fas fa-star fa-lg"></i> 
        <span class="favorites-count">{{$model->favorites_count}}</span>
        </a>
        <form id="favorite-question-{{$model->id}}" action="/questions/{{$question->id}}/favorites" method="POST" style="display:none;"> 
            @csrf
        @if($question->is_favorited)
            @method('DELETE')
        @endif
        </form>