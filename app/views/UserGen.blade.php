@extends('_master')

@section('title')
    DWA P3 Random User Generator
    @stop

{{ HTML::style('styles/p3_style.css'); }}

@section('content')

<h1>Random User Generator</h1>

        <div class='top_bar'>        <!--Navigation menu-->
                <ul class='nav'>
                    <li><a href='/ '>Home</a></li>
                    <li><a href='/LoremGen'>Lorem Ipsum Generator</a></li>
                    <li><a href='http://p2.nnoel-phpsite.me ' >Password Generator</a></li>
                </ul>
            </div>

<h2>Please select a number between ( 1&12) to create random users.</h2>
<div class='input'>
        {{Form::open(array('url' => '/UserGen', 'method' => 'GET')) ;}}

            {{Form::label('user_number', 'How many users do you need?'); }}

            {{Form::text('user_number', 'Enter number 1-12'); }}

            {{Form::submit('Submit'); }}

        {{Form::close( ); }}
    </div>
     <h3>Your faker users names, address and phone numbers will be displayed below this line:</h3>
     <div class="line-separator"></div>

        @if($errors->has())
            <div class="errors">
                @foreach ($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
        @endif


        @for ($i=0; $i < $user_number; $i++)
           <p><span>{{{$faker->name}}}<br/>
        {{{$faker->streetAddress}}}<br/>
        {{{$faker->city}}}, {{{$faker->stateAbbr}}} {{{$faker->postcode}}}<br/>
        {{{$faker->phoneNumber}}}<br/><span></p>
        @endfor

    @stop