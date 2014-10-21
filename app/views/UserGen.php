<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
    <head>
        <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
        <meta>
        <title>Ramdom Users Generaotr</title>
        <link rel='stylesheet' href='/styles/p3_style.css' type='text/css'>
            <style type="text/css">
            @import url(fonts.googleapis.com/css?family=Lato:700);
            </style>
        </head>
        <body>
            <h3>User Generator</h3>
            <div class='top_bar'>
                <ul class='nav'><!-- Navigation menu--><!-- For displaying main menu if there is one -->
                <li><a href='/' >← Home</a></li>
                <li><a href='/LoremGen'>← Lorem Ipsum Generator</a></li>
                <li><a href=' '>← Password Generator</a></li>
            </ul>
        </div>
        <br>
        <br>
        <form method='post' action='/UserGen'><label for='users'>How many users?</label> <input name='count' type='number' value=' '> (Max: 50)<br>
        <br>
        <input checked='checked' name='birth' type='checkbox'> <label for="birth">Birthdate</label><br>
        <input checked='checked' name='address' type='checkbox'> <label for='address'>Address</label><br>
    <input type='submit' value='Generate!'></form>
    <h3>
    <!--
    echo $faker => name;
    echo '<br>';
    echo $faker => e-mail;
    echo '<br>';
    echo $faker => address;
    echo '<br>';
    echo '<br>'; -->
</html>