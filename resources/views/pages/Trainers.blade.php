@extends('layouts.layout1')
@section('content')
<div class="trainers-page-here">
    <div class="trainers-section-title">
        <h1>TRAINERS</h1>
    </div>
    <div class="trainers-section-contact">
        <div class="trainers_picture">
            @foreach($infos as $info)
            <div class="trainers-picture-info">
                <img src="{{asset('/storage/trainerPictures/' .$info->file_path)}}" alt="Image">
                <div class="trainer_name">
                    <a href="#"><h3>{{ $info['coachName']}}</h3></a>
                    <p>GYM TRAINER</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="trainersPageAdds">
            <h1>Adds here </h1>
        </div>
    </div>
</div>
@stop