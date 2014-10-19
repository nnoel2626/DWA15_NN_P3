<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
       // Route::get('/', function()
      // {
      // return View::make('hello');
        // });

              //Display index page ///


              Route::get ( ' / ',  function( )
             {
             return View::make ('index');
              });



                Route::get('/LoremGen/{numberOfParas?}', function($numberOfParas = 1) {

                $numberOfParas = $data[ 'numberOfParas'];

                return View::make('LoremGen', $data) ->with ('numberOfParas', $numberOfParas);
                });



              Route::GET('/UserGen/{nUsers?}', function( $nUsers= 0   )
             {

                $numberOfUsers = Input::get('nUsers');
                $dob = Input::get('dob');
                $email = Input::get('email');
                $location = Input::get('location');
                return View::make('UserGen', ['nUsers' => $numberOfUsers], ['dob' => $dob, 'email' => $email, 'location' => $location]);
                       print_r($faker);
                });


                Route::get('/child2.php', function()
                {
                $a = Input::get('query');
                $data['userChoice'] = $a;
                return View::make('child2', $data);
                });

