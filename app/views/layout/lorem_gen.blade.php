@extends('_master')



@section('content')<!--  for displaying the content of this page -->

               <h2>Your Ramdom lorem ipsum Text generator</h2>
               <!--    <div  clas= 'top_bar'><!-- Navigation menu--> For displaying main menu if there is one
                  <li><a href= "{ { URL::route('home')} } " >Home</a></li>
                   <li><a href='/'>&larr; Home</a></li>
                   <li><a href='/user_gen'>&larr; Ramdom User Generator</a></li>
                  <li><a href='/ #'>&larr; Password Generator</a></li>
                  </div>

            <form id="options" method='get' action="lorem_gen.blade.php">
            <ul>
            <li class="lab"><label >Homw many paragraphs  do you want ?</label></li>
            <li class="lab"><label for="n">Paragraphs</label></li>
            <li class="lab"><lnput>    </label></li> (Max 99)
             <li><input type="submit" class="button red" id="genbtn" value="Generate"/></li>
            </ul>
           </form>
@stop



