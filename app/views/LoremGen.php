<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
        <meta>
        <title>Lorem Ipsum Generator</title>
        <link rel='stylesheet' href='/styles/p3_style.css' type='text/css'>
            <style type="text/css">
            @import url(fonts.googleapis.com/css?family=Lato:700);
            </style>
        </head>
        <body>
            <h3>Your Ramdom lorem ipsum Text generator</h3>
            <div class='top_bar'>
                <ul class='nav'>
                    <li><a href='/ '> ← Home</a></li>
                    <!--Navigation menu-->
                    <li><a href='/UserGen'>← Ramdom User Generator</a></li>
                    <li><a href='' >Password Generator</a></li>
                </ul>
            </div>
            <form method='post' action='/LoremGen'>
                <label>Homw many paragraphs do you want ?</label><br>
                <label>Paragraphs</label>
                <input name='paragraphCount' type='number' value=''> (Max: 50)
                <input type='submit' value='Generate'>
            </form>
            <?php echo ' paragraphCoun ' ?>
        </body>
    </html>