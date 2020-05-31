@extends('layouts.app')

@section('content')
<div class="container">
   <h1 style="text-align: center; margin-bottom: 100px;">Corona Statistics Table</h1>
        @foreach($slug as $slugs)
            <h5>{{$slugs}}</h5>
        @endforeach
    {{--    <x-covidwidget></x-covidwidget>     import the component in blade file--}}
    <x-covidwidget></x-covidwidget>
</div>
@endsection
