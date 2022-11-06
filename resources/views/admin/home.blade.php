@extends('layouts.app')
@section('content')
<div class="container" >
    @include('alerts')
<div class="avatar float-end">
</div><br><br><br><span class="float-end">Admin</span>
<svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check admin float-end" viewBox="0 0 16 16">
    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  </svg> 
<br>
    <a href="{{ route('admin.create')}}" class="btn btn-primary float-end" >Crea nuova recetta</a><br><br>
    <a href="{{ route('categories.create')}}" class="btn btn-primary float-end" >Aggiungere la categoria</a>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($ricepes as $ricepe)
        <div class="col" >
            <div class="card" >
                @if ($ricepe->image)
                    <img src="{{ asset('images/ricepes/' . $ricepe->image) }}" class="card-img-top" alt="...">
                @endif
                <h5 class="card-title">{{ $ricepe->name }}</h5>
                <p class="card-text">{{ $ricepe->description }}</p>
                <p class="card-body">{{ $ricepe->category->category_name }}</p>
                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                  </svg> : {{ $ricepe->time }}</p>

                <form action="{{ route('admin.destroy', $ricepe) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger float-end" >X</button>
                </form>
                <a href="{{ route('admin.edit', $ricepe)}}" class="btn btn-primary" >Edit</a>
                <a href="{{ route('admin.show', $ricepe)}}" class="btn btn-success" >Show</a>
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
<style>
    .avatar {
        height: 50px;
        width: 50px;
        background-image: url("https://openclipart.org/image/800px/277088");
        background-size: cover;
        
    }
    .admin {
      

    }
</style>