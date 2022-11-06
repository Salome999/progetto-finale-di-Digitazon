@extends('layouts.app')
@section('content')
    <div class="container">

        @include('errors')
        @include('alerts')
         <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="category_name" class="form-control" name="category_name" >Category name</label><br><br>
            <input class="form-control" type="text" name="category_name" placeholder="category_name"><br><br>
            
            <button class="btn btn-success" type="submit">Submit</button>
            @if ($errors->any())
                <ul>
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif
        </form>
    </div>
@endsection
