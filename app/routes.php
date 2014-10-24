<?php




//homepage
Route::get('/', function()
{
    return View::make('index');
});

///form to get lorem ipsum text
Route::get('/loremipsum/{number?}', function() {
    $number = Input::get('number');

//validating the form
    $rules = array(
        'number' => "Integer|Between:1,9"
        );
    $validator = Validator::make(Input::all(), $rules);


    if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::to('loremipsum')
            ->withErrors($validator);
    } else {

    //create lorem ipsum text
        $generator = new Lorem();

        $paragraphs = $generator->getParagraphs($number);

            return View::make('loremipsum')


            ->with('number', $number)
            ->with('paragraphs', $paragraphs);
        }

});

// require the Faker autoloader

//form to request a number of fake users
Route::get('/users/{user_number?}', function(){

    $user_number = Input::get('unser_number');
    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create( );

    //validating the form
    $rules = array(
        'user_number' => "Integer|Between:1,9"
        );

    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::to('users')
            ->withErrors($validator);
    } else {

    //create users
        for ($user_number=0; $user_number < 12; $user_number++) {

            return View::make('users')

            ->with('user_number', $user_number)

            ->with('faker', $faker);
        }
    }
});