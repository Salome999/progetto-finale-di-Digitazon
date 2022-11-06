@extends('layouts.app')
@section('content')

    <div class="container">
        @include('alerts')
        <form action="{{ route('likes.store') }}" method="POST">
            @csrf
            <input type="hidden" name="ricepe_id" value="{{ $ricepe->id}}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
           <button class="mb-2" type="submit">Like</button>
           <span>{{ count($ricepe->users)}} Person liked</span>
          </form>
        <show-component  ></show-component>
<br><br><br>
            <h1>Comments</h1>
            @foreach ($ricepe->comments as $c)
                <div class="comments">
                    <h5> {{ $c->user->name }} </h5>
                    <span>{{ $c->created_at }} :</span>
                    <span style="margin-left: 20px">{{ $c->text }}</span>

              
                    {{-- <form action="{{ route('comments.destroy', $c)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">x</button>
                    </form>
              
     --}}
                </div>
            @endforeach
                
               
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <textarea type="text" placeholder="Tap your comment" name="text" class="form-control"></textarea>
                <input type="hidden" name="ricepe_id" value="{{ $ricepe->id }}">
                <input type="submit" value="commenta" class="btn btn-secondary my-2">              
            </form>
@endsection
<style>
    .comments {
        border: 0.5px solid rgb(47, 46, 46);
        background-color: rgb(215, 203, 204);
        border-radius: 5px;
    }

</style>
