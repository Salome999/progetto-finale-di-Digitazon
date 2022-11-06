{{-- @foreach ($comments as $comment)
@if ($ricepe->id == $comment->ricepe_id)
    <div class="card m-2">
        <div class="card-body">
            <small>
                {{ $comment->user->name }}
            </small><br>
            <small>
                {{ $comment->created_at }}
            </small>
            <p><b>
                {{ $comment->text }}
            </b></p>
        </div>
    </div>
    @endif
@endforeach
     --}}
