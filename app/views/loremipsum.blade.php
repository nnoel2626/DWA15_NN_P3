@extends('_master')

@section('title')
Lorem Ipsum Generator
    @stop

@section( 'content' )
<a href="/">Home</a>

        <h1>Lorem Ipsum Generator</h1>

        {{Form::open(array('url' => '/loremipsum', 'method' => 'GET'))}}

            {{Form::label('number', 'Numer of paragraphs?')}}

            {{Form::text('number', 'Enter number 1-9')}}

            {{Form::submit('Submit')}}

        {{Form::close();}}

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

<p>Here is your text:</p>

        @foreach ($paragraphs as $paragraph)
            <p>{{{$paragraph}}}</p>
        @endforeach

    @stop