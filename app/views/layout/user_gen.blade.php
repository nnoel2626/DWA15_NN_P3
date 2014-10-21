@extends('_master')


@section(' title')
Ramdom Users Generator
@stop

 @section( 'content' )
                  <h3>User Generator</h3>

                  <div  class= 'top_bar'>
                  <li><a href= '{ { URL::route('home')} } ' >Home</a></li>
                   <li><a href='/'>&larr; Home</a></li>
                   <li><a href='/LoremorGen'>&larr; Lorem Ipsum Generator</a></li>
                  <li><a href='/ #'>&larr; Password Generator</a></li>
                  </div>

                         <br>  <br>

                                    <form method= 'GET' action='/UserGen' >
                                    <label  for = 'users'>How many users?</label>
                                     <input maxlength=' ' name='count'  type='text' value=' ' > (Max: 50)
                                    <br>

                                    Include...
                                    <br>

                                    <input checked='checked' name='birth' type='checkbox'>

                                    <label for='birthdate' >Birthdate</label><br>

                                    <input checked='checked' name='address' type='checkbox'>

                                    <label for='address'>Address</label><br>

                                     <input type='submit' value= 'Generate!'>

                                    </form>

                                    <section class='users'>

                                    </section>
@stop