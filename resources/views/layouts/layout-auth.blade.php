<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Castoro+Titling&family=Dancing+Script:wght@400;500;600;700&family=Darumadrop+One&family=El+Messiri:wght@700&family=Fjalla+One&family=Foldit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Unbounded:wght@200;300;400;500&family=Work+Sans:ital,wght@0,100;0,200;0,700;0,800;1,100;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/web/css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MO</title>
</head>

<body>
    <div class="star-field">
        <div class="layer"></div>
        <div class="layer"></div>
        <div class="layer"></div>
    </div>
        <div class="layout-form">
            <div class="main-auth">
                @yield('auth')
            </div>



            <script src="{{ asset('asset/web/js/main.js') }}"></script>
</body>

</html>
