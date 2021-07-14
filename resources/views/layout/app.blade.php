<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Boolean Comics</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Stylesheet -->
        <link rel='stylesheet' href='{{ asset("css/app.css") }}'>
        <!-- Fontawesome -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' integrity='sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==' crossorigin='anonymous' />
    </head>
    <body>
        <!-- Header -->
        <header>
            <h1>Comics</h1>
        </header>
        <!-- /Header -->
        
        <!-- Main -->
        <main>
            @yield('content')        
        </main>
        <!-- /Main -->
    </body>
</html>