@extends('layouts.layout')
@section('content')
<div class="about-section">
    <div class="about-section-content">
        @foreach($infos as $data)
        <div class="about-section-content-picture">
            <img src="{{asset('/storage/aboutPictures/' .$data->picture_path)}}" alt="Image">
        </div>
        <div class="about-section-content-data">
            <h1>{{$data['title']}}</h1>
            <p>{{$data['intro']}}</p>
            <h1>{{$data['reason']}}</h1>
            <p>{{$data['content']}}</p>
        </div>
        @endforeach
    </div>
</div>
@stop