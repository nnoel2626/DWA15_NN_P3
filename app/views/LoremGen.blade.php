@extends('_master')

@section('title')
Lorem Ipsum Generator
    @stop

{{ HTML::style('styles/p3_style.css'); }}

@section( 'content' )
<a href="/">Home</a>

        <h1>Lorem Ipsum Generator</h1>

        <div class='top_bar'>        <!--Navigation menu-->
                <ul class='nav'>
                    <li><a href='/ '>Home</a></li>
                    <li><a href='/UserGen'>Ramdom User Generator</a></li>
                    <li><a href=' http://p2.nnoel-phpsite.me ' >Password Generator</a></li>
                </ul>
            </div>

        {{Form::open(array('url' => '/LoremGen', 'method' => 'GET'))}}

            {{Form::label('number', 'Numer of paragraphs?')}}

            {{Form::text('number', 'Enter number 1-12')}}

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