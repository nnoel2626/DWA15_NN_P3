@extends('_master')

@section('title')
    DWA P3 Random User Generator
    @stop

@section('content')
<h1>Random User Generator</h1>

<p>Create random users to test your web applications with.</p>

        {{Form::open(array('url' => '/users', 'method' => 'GET')) ;}}

            {{Form::label('user_number', 'How many users do you need?'); }}

            {{Form::text('user_number', 'Enter number 1-12'); }}

            {{Form::submit('Submit'); }}

        {{Form::close(); }}

        <br/>

        @if($errors->has())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
        @endif

        <p>Here is your text:</p>
        @foreach ($faker as $key) {
            <p>{{{$faker->name}}}<br/>
        {{{$faker->streetAddress}}}<br/>
        {{{$faker->city}}}, {{{$faker->stateAbbr}}} {{{$faker->postcode}}}<br/>
        {{{$faker->phoneNumber}}}</p>
        }
        @endforeach

    @stop