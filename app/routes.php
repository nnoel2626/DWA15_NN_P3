<?php




//homepage
Route::get('/', function()
{
    return View::make('index');
});

///form to get lorem ipsum text
Route::get('/LoremGen/{number?}', function() {
    $number = Input::get('number');

//validating the form
    $rules = array(
        'number' => "Integer|Between:1,12"
        );
    $validator = Validator::make(Input::all(), $rules);


    if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::to('LoremGen')
            ->withErrors($validator);
    } else {

    //create lorem ipsum text
        $generator = new Lorem();

        $paragraphs = $generator->getParagraphs($number);

            return View::make('LoremGen')


            ->with('number', $number)
            ->with('paragraphs', $paragraphs);
        }

});

//form to request a number of fake users
Route::get('/UserGen/{user_number?}', function(){
    $user_number = Input::get('user_number');
    $faker = Faker\Factory::create();

    //validating the form
    $rules = array(
        'user_number' => "Integer|Between:1,12"
        );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::to('UserGen')
            ->withErrors($validator);
    } else {

    //create users
        return View::make('UserGen')
        ->with('user_number', $user_number)
        ->with('faker', $faker);
    }
});