@extends('layouts.layout1')
@section('content') 

<div class="section-header-text">
    <div class="section-header-text-inner">
        <h2>" STEP UP YOUR FITNESS CHALLENGE WITH US "</h2>
        <a href=""> JOIN US ></a>
    </div>
</div>
<div class=section-content>
    <div class="section-content-container">
        <div class="box">
            <div class="box-text">
                <h3>MODERN EQUIPMENT</h3>
                <p>Motivation is what gets you started, Habit is what keeps you going...</p>
            </div>
            <div class="box-link">
                <a href="">-- MORE DETAILS -- </a>
            </div>
        </div>
        <div class="box">
            <div class="box-text">
                <h3>PROFESIONAL TRAINER</h3>
                <p>Motivation is what gets you started, Habit is what keeps you going...</p>
            </div>
            <div class="box-link">
                <a href="">-- MORE DETAILS -- </a>
            </div>
        </div>
        <div class="box">
            <div class="box-text">
                <h3>HEALTHY DIET PLAN</h3>
                <p>Exercising should be about rewarding the body with endorphins and strength. Not about punishing your body for what you’ve eaten...</p>
            </div>
            <div class="box-link">
                <a href="">-- MORE DETAILS -- </a>
            </div>
        </div>
    </div>

    <div class="section-content-container2">
        <div class="box-picture">
            <img src="{{url('/images/image3.jpg')}}" alt="Image"/> 
        </div>
        <div class="box-picture-text">
            <div class="box-picture-text1">
                <h3>WE HAVE SKILL IN<br/> <span style='color: lightsalmon;'>WIDE RANGE OF FITNESS</span> AND OTHER <br/>BODY HEALTH FACILITY</h3>
                <p>Consulting an exercise professional when designing your fitness program can help you reduce injury and customise your program to your needs, especially if you are new to exercise or you haven’t done any physical activity for a while. Points to keep in mind when designing your program include ...</p>
            </div>
            <div class="box-picture-link">
                <a href=""> LEARN MORE  </a>
            </div>
        </div>
    </div>

    <div class="ads">
        <h2>Setup Your Body With LKBGYM</h2>
    </div>
    <div class="progams-inner">
        <div class="programs">
            <div class="programs-box1">
                <div class="programs-box-text">
                    <h3><span style='color: lightsalmon;'>JUNIOR</SPAN> PROGRAMS</H3>
                    <h4>Express[2 weeks], Smart[3 months], Normal[6 months]</h4>
                    <p>The LKBGYM delivers high-intensity interval training for junior that gets the job done. Our unique, results-driven workouts torch fat, sculpt muscle, and increase metabolism, burning calories long after you stop sweating.</p>
                    <a href="">VIEW PROGRAMS</a>
                </div>
                <div class="programs-box-img">
                    <img src="{{url('/images/picture.jpg')}}" alt="Image"/> 
                </div>
            </div>
            <div class="programs-box2">
                <div class="programs-box-img">
                    <img src="{{url('/images/picture1.jpg')}}" alt="Image"/> 
                </div>
                <div class="programs-box-text">
                    <h3><span style='color: lightsalmon;'>ADULT</SPAN> PROGRAMS</H3>
                    <h4>Express[2 weeks], Smart[3 months], Normal[6 months]</h4>
                    <p>The LKBGYM delivers high-intensity interval training that gets the job done. Our unique, results-driven workouts torch fat, sculpt muscle, and increase metabolism, burning calories long after you stop sweating.</p>
                    <a href="">VIEW PROGRAMS</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-trainers">
        <h3>OUR TRAINERS</h3>
    </div>
</div>
@stop