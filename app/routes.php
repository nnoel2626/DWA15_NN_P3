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
//Route Logic to display index page ///
Route::get('/', function()
{
return View::make('index');
});
//Logic rootes for Lorem Ipsum Generator Page//
Route::get ('/LoremGen', function(   ){
return View::make('LoremGen')
-> with('paragraph', Null );
});
Route::post ('/LoremGen', function(){
$count = Input::get (' paragraphCount ');
if ($count >0 && $count < 20){
$count = $count;
}else{
$count = 0;
}
$generator = new Badcow\LoremIpsum\Generator( );
$paragraphs = $generator->getParagraphs($count);
$paragraph = implode('<p>', $paragraphs);
return View::make('LoremGen')->with('paragraphCount',$paragraph);
});
//Logic rootes for Ramdom Users Generator Page//
// // -Route::get('/download',function(){
Route::get('/UserGen', function(){
return View::make('UserGen');
});
Route::post('/UserGen', function(){
// Form data
$count = Input::get('count');
$birth = Input::get('birth');
$address = Input::get('address');
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
#Don't generate anything if values is not as expected.
if ($count < 1 || $count > 10){
$count = 0;
}
# Generate an array of random information
for ($x = 0; $x <= $count; $x++){
// Generate Name
$data['name'][ ] = $faker->name;
// Generate Address
if ($address){
$data ['address'][ ] = $faker->address;
$data['city'][ ] = $faker->city;
$data['state'][ ] = $faker->state;
}else{
$data ['address'][ ] = NULL;
$data['city'][ ] = NULL;
$data['state'][ ] = NULL;
}
// Generate Birthdate
if ($birth){+     $data['birth'][  ] = $faker->dateTimeThisCentury->format('d-m-Y');
}else{
$data['birth'][ ] = NULL;
}
}
return View::make('UserGen')->with('data',$data)->with('count',$count);
});
//  Route::GET('/UserGen/{nUsers?}', function( $nUsers= 0   )
// {
//    $numberOfUsers = Input::get('nUsers');
//    $dob = Input::get('dob');
//    $email = Input::get('email');
//    $location = Input::get('location');
//    return View::make('UserGen', ['nUsers' => $numberOfUsers], ['dob' => $dob, 'email' => $email, 'location' => $location]);
//           print_r($faker);
//    });
//    Route::get('/child2.php', function()
//    {
//    $a = Input::get('query');
//    $data['userChoice'] = $a;
//    return View::make('child2', $data);
//    });