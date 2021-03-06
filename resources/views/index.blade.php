<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RohmiGApp</title>


<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>
<link href=" {{ mix('css/app.css') }}" rel="stylesheet" />
</head>

<body class="antialiased">


    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html> -->


<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.navbar')
    <div class="wrap">
        <div id="main" class="row">
            <div class="col-md-12">
                @include('pages.header')
                @include('pages.education')
                @include('pages.experience')
                @include('pages.portofolio')
                @include('pages.about')
                @include('pages.contact')
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>
