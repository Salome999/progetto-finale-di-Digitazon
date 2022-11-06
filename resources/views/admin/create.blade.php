@extends('layouts.app')
@section('content')
@include('errors')
@include('alerts')
    <div class="container">
         <a href="{{ route('admin.index')}}" class="btn btn-primary" > Menu </a>
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Name">
            <textarea class="form-control" name="description" placeholder="Description"></textarea>
            <textarea class="form-control" name="ingredients" placeholder="ingredients"></textarea>
            <input class="form-control" type="text" name="category_id" placeholder="Category">
            <input class="form-control" type="text" name="time" placeholder="time">
            <textarea rows="6" class="form-control" type="text" name="preparation" placeholder="Preparation"></textarea>
            <input class="form-control" type="file" name="image" placeholder="Image">
            <button class="btn btn-success" type="submit">Submit</button>
            @if ($errors->any())
                <ul>
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif
            
        </form>
    </div>
@endsection
