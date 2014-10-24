@extends('_master')

@section('title')
Lorem Ipsum Generator
    @stop

{{ HTML::style('styles/p3_style.css'); }}

@section( 'content' )

        <h1>Lorem Ipsum Generator</h1>

        <div class='top_bar'>        <!--Navigation menu-->
                <ul class='nav'>
                    <li><a href='/ '>Home</a></li>
                    <li><a href='/UserGen'>Ramdom Users Generator</a></li>
                    <li><a href=' http://p2.nnoel-phpsite.me ' >Password Generator</a></li>
                </ul>
            </div>

<h2>Please select a number between ( 1&12) to create random Lorem Ipsum Text.</h2>
    <div class='input'>
        {{Form::open(array('url' => '/LoremGen', 'method' => 'GET'))}}

            {{Form::label('number', 'Numer of paragraphs?')}}

            {{Form::text('number', 'Enter number 1-12')}}

            {{Form::submit('Submit')}}

        {{Form::close();}}
</div>
<h3> Your Lorem Ipsum text will be display below this line:</h3>
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



        @foreach ($paragraphs as $paragraph)
            <p>{{{$paragraph}}}</p>
        @endforeach

    @stop