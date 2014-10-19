<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
	@import url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
</head>
<body>

	<h3>User Generator</h3>

                  <div  clas= 'top_bar'><!-- Navigation menu--> <!-- For displaying main menu if there is one -->
                  <li><a href= "{ { URL::route('home')} } " >Home</a></li>
                   <li><a href='/'>&larr; Home</a></li>
                   <li><a href='/LoremGen'>&larr; Lorem Ipsum Generator</a></li>
                  <li><a href='/ #'>&larr; Password Generator</a></li>
                  </div>

                         <br>  <br>

                                    <form method='GET' action='/UserGen'>
                                    <label for='users'>How many users?</label>
                                     <input name='nUsers' type='text' value='50'> (Max: 50)
                                    <br>

                                    <br>
                                    <input checked='checked' name='birthdate' type='checkbox'>
                                    <label for="birthdate">Birthdate</label>        <br>

                                    <input checked='checked' name='profile' type='checkbox'>
                                      <label for='profile'>Profile</label>        <br>

                                 	<input type='submit' value='Generate!'>
                                    </form>

                                    <section class='users'>

			<h3><?php

			// for ($i = 0; $i < 50; $i++) {

   //                   			 		echo $faker => name;
   //             					echo '<br>';
   //                   					echo $faker => e-mail;
   //                     					echo '<br>';
   //                      					echo $faker => address;
   //                     					echo '<br>';
   //                     	 				echo '<br>';}
                  		 ?></h3>
                                    </section>
	</div>
</body>
</html>
