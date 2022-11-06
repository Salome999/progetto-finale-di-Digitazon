@extends('layouts.app')
@section('content')
<div class="">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="px-6">
                <div class="container mx-auto m-6 p-8">
                    <h1 class="sub-title">My favorites</h1>
                </div>
                @foreach ($favorites as $favorite)
                @endforeach
            </div>
        </div>
    </div>
</div>         

@endsection