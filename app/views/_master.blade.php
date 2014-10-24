
<!doctype html>
<html>
          <head>
                    <meta charset="UTF-8">
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <link rel="stylesheet" href="styles/bootstrap.min.css">
                    <link rel="stylesheet" href="styles/devbestfriend.css" type="text/css">
                   <!-- Link to display the title of the page -->
                  <title>@yield('title',"Developer Best Friend")</title>

                    @yield ('head')

          </head>

          <body>

                    <div class = "container">

                    @yield( 'content' )

                    @yield('body')

                      </div>
            </body>
</html>



