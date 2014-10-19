<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LoremGeb</title>
	<style>
	@import url(//fonts.googleapis.com/css?family=Lato:700);

	</style>
</head>
<body>
	  <h2>Your Ramdom lorem ipsum Text generator</h2>
               <!--    <div  clas= 'top_bar'><!-- Navigation menu-->

                   <li><a href='/'>&larr; Home</a></li>
                   <li><a href='/UserGen'>&larr; Ramdom User Generator</a></li>
                  <li><a href='/ #'>&larr; Password Generator</a></li>
                  </div>
	<br>


            <form method='get' action="LoremGen"  id="options" >

           	<label >Homw many paragraphs do you want ?</label><br>
            	<label >Paragraphs</label>
            	<input name='numberOfParas' type="number"  value='50'> (Max: 50)<br>

	 <br>
      	 <input type="submit"  value="Generate"/></li>
              </form>

	<section class='users'>

	<?php echo $numberOfParas = $data['numberOfParas']; ?>




             </section>
</body>
</html>
