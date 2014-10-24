@extends('_master')

@section(' title')
Welcome
@stop
@section('head')
<link rel='stylesheet' href='/styles/p3_style.css' type='text/css'>
@stop
@section('content')
    <h1>Developer's Best Friend!</h1>
    <div class= 'top_bar'>    <!-- Navigation menu--> <!--  For displaying main menu if there is one -->
    <ul class= 'nav'>
        <li><a href= " /LoremGen" >Lorem-Ipsum  Generator</a></li>
        <li><a href= " /UserGen" >Ramdom Users Generator</a></li>
        <li><a href= " http://p2.nnoel-phpsite.me " >Password Generator</a></li>
    </ul>
</div>
<h2>Main features of this  app</h2>
<div class="line-separator"></div>
<p>My web application allows users to generate random Lorem Ipsum text which derive from a 1st-century BC latin text by Cicero.
    Now a days it is used mostly web deloppers  and graphic designers to demonstrate the graphic elements of a document
     or visual presentation.This application also allows users  to generate  random
    people names, addresses, and phone numbers.  Such data is commonly used during
    web development process to populate and  test databases and number of other  applications. I used  my navigation
    menu to integrate my password generator that I did in project 2.
</p>

<div class='ipsum'>
        <h4> Here is a sample Lorem Ipsun text:</h4>
           <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque tellus, nec imperdiet urna.
            Nullam pretium, lorem vitae porttitor porttitor, metus sapien congue arcu, semper consectetur sem dui non diam.
             Curabitur sodales congue metus vel lacinia. Nulla luctus est id ultrices eleifend. Pellentesque a ex sit amet leo
             accumsan vestibulum id quis justo. Suspendisse nibh ligula, consectetur a metus sed, iaculis ultrices felis.
             mattis tincidunt massa porta id. Morbi in metus vehicula, ullamcorper elit ut, varius ante. Vestibulum ac pretium metus.</p><br>
    </div>
        <div class='rand_user'>
        <h4> Here is a sample of random User:</h4>
         <p>    <br> Sharon Schroeder
        8181 Feil Neck<br>
New Rosafurt, RI 36502<br>
(216)665-8524<br>
<br>
Prof. Ernesto Rempel II<br>
3911 Schmeler Freeway Suite 330<br>
Carrollland, KS 56820-1119<br>
192-213-<br>
<br>
Kenny Dietrich<br>
069 Lueilwitz <br>
West Hayleymouth, WA 45796-8221<br>
05304136700<br>
<br>
Elta Dibbert Sr.<br>
8706 Heidi Forest Apt. 852<br>
Maciefort, NE 68133<br>
(766)701-5180<br></p>
    </div>
@stop