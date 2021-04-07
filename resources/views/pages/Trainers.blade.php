@extends('layouts.layout1')
@section('content')
<div class="trainers-section-contact">
    <div class="trainers_picture">
        @foreach($infos as $info)
        <div class="trainers-picture-info">
            <img src="{{asset('/storage/trainerPictures/' .$info->file_path)}}" alt="Image">
            <div class="trainer_name">
                <h3>{{ $info['coachName']}}</h3>
                <p>GYM TRAINER</p>
            </div>
            <h2>{{ $info['description']}}</h2>
        </div>
        @endforeach
    </div>
</div>
@stop