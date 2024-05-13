<!-- resources/views/layout/app.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
    @include('partials.navbar')

    @include('partials.sidebar')


    @yield('content')
</body>
</html>
