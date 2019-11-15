<div class="float-right">
<span class="text-muted"> {{$label.' '. $model->created_at->diffForHumans()}}</span>
    <div class="media mt-2">
    <a href=""  class="pr-2">
        <img src="{{$model->user->avatar}}" alt="">
    </a>
        <div class="media-body mt-1">
        <a href="" class="">{{$model->user->name}}</a>
        </div>
    </div>
</div>