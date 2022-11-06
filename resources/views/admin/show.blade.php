@extends('layouts.app')
@section('content')

  @include('alerts')

    <div class="container" >
        <a href="{{ route('admin.index', $ricepe)}}" class="btn btn-primary" >Torna al menu principale</a>
        <a href="{{ route('admin.edit', $ricepe)}}" class="btn btn-primary float-end" >Edit</a>
        <div class="card"> <br>  <h2 class="card-title">{{ $ricepe->name }}</h2>
          <div class="card mb-3" style="max-width: 100%;">
              <div class="row g-0">
                <div class="col-md-3">
                    @if ($ricepe->image)
                    <img src="{{ asset('images/ricepes/' . $ricepe->image) }}" class="uno" alt="...">
                @endif

                <form action="{{ route('likes.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ricepe_id" value="{{ $ricepe->id}}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                   <button  class="mb-2" type="submit">Like</button>
                   <span>  {{  count($ricepe->users)}} Person liked</span>
                   
                  </form>
                </div>
                <div class="col-md-8">
                  <div class="card-body"><br>
                      <h3 class="due card-text">{{ $ricepe->description }}</h3><br>
                      <h5 class="card-text">{{ $ricepe->category_id }}</h5><br>
                      <h3 class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                        <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                        <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                      </svg> : {{ $ricepe->time }}</h3> <br>
                  </div>
                </div>
              </div>
            </div>
            <h3 class="card-title"><h1>Preparazione</h1><hr style="color: green"> {{ $ricepe->preparation }}</h3>   
        </div >
        <p  class="ing card-text "><h1>Ingredients: <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
            <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
          </svg> </h1><hr style="color: green"><h3 >{{ $ricepe->ingredients }}</h3></p>
        <br><br><br>
        <h1>Comments:</h1>
        @foreach ($ricepe->comments as $c)
        <div class="comments">
            <h5> {{ $c->user->name }} </h5>
            <span>{{ $c->created_at }} :</span>
            <span style="margin-left: 20px">{{ $c->text }}</span>

            <form action="{{ route('comments.destroy', $c)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger float-end" type="submit">x</button>
          </form>
        </div>
    @endforeach
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <textarea type="text" placeholder="Tap your comment" name="text" class="form-control"></textarea>
        <input type="hidden" name="ricepe_id" value="{{ $ricepe->id }}">
        <input type="submit" value="commenta" class="btn btn-secondary my-2">
    </form>
       </div>   
@endsection
<style>
    .due {
        margin-left: 150px
    }
    .comments {
        border: 0.5px solid rgb(47, 46, 46);
        background-color: rgb(215, 203, 204);
        border-radius: 5px;
    }

</style>

