<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('root/root.css') }}">
    <link rel="stylesheet" href="{{ asset('farmer_auth/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    
</head>
<body>
    <header></header>
    @yield('farmer_authentication')
    <footer></footer>
    <script src="{{ asset('farmer_auth/register.js') }}"></script>

</body>
</html>