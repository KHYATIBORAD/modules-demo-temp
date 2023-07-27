<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module ModuleManager</title>
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
        <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-modulemanager', 'Resources/assets/sass/app.scss') }} --}}

    </head>
    <body>
        @yield('content')

        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-modulemanager', 'Resources/assets/js/app.js') }} --}}
    </body>
</html>
