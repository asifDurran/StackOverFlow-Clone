@can('accept',$model)
    <a title="Mark as the best answer" 
    class="{{$model->status}} mt-2 accepted"
        
        onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $model->id }}').submit();"
        >
        <i class="fa fa-check fa-lg"></i> 
    </a>
    <form id="accept-answer-{{ $model->id }}" action="{{ route('answers.accept', $model->id) }}" method="POST" style="display:none;">
        @csrf
        
    </form>

        @if($model->is_best)
        <a title="Marked as the best answer by the owner" 
            class="{{$model->status}} mt-2 accepted"
            >
        <i class="fas fa-check fa-lg"></i> 
        </a>
        @endif
    @endcan