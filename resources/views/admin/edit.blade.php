@extends('layouts.app')
@section('content')
@include('errors')
<div class="container">
<form action="{{ route('admin.update', $ricepe) }}" method="POST" enctype="multipart/form-data">     	
    @csrf
    @method('PUT')     	
    <input class="form-control" type="text" name="name" placeholder="Title" value=" {{ $ricepe->name }}"><br>  
    <textarea class="form-control" name="description" placeholder="Description" value=" {{ $ricepe->description }}"></textarea><br>           	   
    <textarea class="form-control" name="ingredients" placeholder="ingredients" value=" {{ $ricepe->ingredients }}"></textarea> <br>          	   
    <input class="form-control" type="text" name="category_id" placeholder="category_id" value=" {{ $ricepe->category_id }}"> <br>  
    <input class="form-control" type="text" name="time" placeholder="time" value=" {{ $ricepe->time }}">  <br> 
    <textarea class="form-control" name="preparation" placeholder="preparation" value=" {{ $ricepe->preparation }}"></textarea> <br>          	   
    <input class="form-control" type="file" name="image" placeholder="Image">  <br>         	   
    <button type="submit">Submit</button>         		
</form>
</div> 
@endsection