@extends('layouts.layout1')
@section('content')
<div class="trainers-section-contact">
    <div class="trainers_picture">
        @foreach($infos as $info)
        <h1>{{$info->description}}</h1>
        <img src="{{asset('/storage/trainerPictures/' .$info->file_path)}}" alt="Image">
        @endforeach
    </div>
</div>
@stop