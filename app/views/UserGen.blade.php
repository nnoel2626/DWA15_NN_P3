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


<p>Create random users to test your web applications with.</p>

        {{Form::open(array('url' => '/UserGen', 'method' => 'GET')) ;}}

            {{Form::label('user_number', 'How many users do you need?'); }}

            {{Form::text('user_number', 'Enter number 1-12'); }}

            {{Form::submit('Submit'); }}

        {{Form::close( ); }}

        <br/>

        @if($errors->has())
            <div class="errors">
                @foreach ($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
        @endif

        <p>Your faker user will be displayed here:</p>
        @for ($i=0; $i < $user_number; $i++)
            <p>{{{$faker->name}}}<br/>
        {{{$faker->streetAddress}}}<br/>
        {{{$faker->city}}}, {{{$faker->stateAbbr}}} {{{$faker->postcode}}}<br/>
        {{{$faker->phoneNumber}}}</p>
        @endfor

    @stop