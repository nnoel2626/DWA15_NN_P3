@extends('_master')

@section(' title')
Welcome
@stop
@section('head')
<link rel='stylesheet' href='/styles/p3_style.css' type='text/css'>
@stop
@section('content')
    <h3> Welcome to my web application!</h3>
    <div class= 'top_bar'>    <!-- Navigation menu--> <!--  For displaying main menu if there is one -->
    <ul class= 'nav'>
        <li><a href= " /loremipsum" >Lorem-Ipsum  Generator</a></li>
        <li><a href= " /users" >Ramdom User Generator</a></li>
        <li><a href= " http://p2.nnoel-phpsite.me " >Password Generator</a></li>
    </ul>
</div>
<h4>Main features of this  app</h4>
<p>My web application allows the user to generate random filler text and/or random users.
    Such data is commonly used to simulate the user experience and/or test websites in the development process.
This site allows the user to generate random filler text and/or random users. Such data is commonly used to simulate
the user experience and/or test websites in the development process.
</p>
@stop