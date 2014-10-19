@extends('_master')




 @section('content')

                  <h3>User Generator</h3>

                  <div  clas= 'top_bar'><!-- Navigation menu--> <!-- For displaying main menu if there is one -->
                  <li><a href= "{ { URL::route('home')} } " >Home</a></li>
                   <li><a href='/'>&larr; Home</a></li>
                   <li><a href='/lorem_gen'>&larr; Lorem Ipsum Generator</a></li>
                  <li><a href='/ #'>&larr; Password Generator</a></li>
                  </div>

                         <br>  <br>

                                    <form method="POST" action="user-gen" >
                                    <label for="users">How many users?</label>
                                     <input maxlength="2" name="users" type="text" value="5" id="users"> (Max: 99)
                                    <br>

                                    Include...
                                    <br>
                                    <input checked="checked" name="birthdate" type="checkbox">
                                    <label for="birthdate">Birthdate</label>        <br>

                                    <input checked="checked" name="profile" type="checkbox">
                                      <label for="profile">Profile</label>        <br>

                                 <input type="submit" value="Generate!">
                                    </form>

                                    <section class='users'>

                                    </section>

@stop