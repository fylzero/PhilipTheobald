<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#222222" />
    <meta property="og:title" content="Philip Theobald">
    <meta property="og:image" content="https://www.philiptheobald.com/img/jpg/fyl.jpg">
    <meta property="og:logo" content="https://www.philiptheobald.com/img/jpg/fyl.jpg" size="200x200">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
</head>
<body>
    <v-app id="app">
        <Sandbox></Sandbox>
    </v-app>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
