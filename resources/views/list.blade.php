@extends('layouts.app')  
@section('content')
<ricepe-component user={{ Auth::user() }}></ricepe-component> 

@endsection

