<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>HBO Max</title>
</head>
<body>
    <header class="header">
        <div class="options <?php echo $user == null ? 'hidden' : '' ?>">
            <button class="menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar1"></div>
            </button>
            <button class="busca"><i class="fa fa-search"></i></button>
        </div>        
        <h3>HBO<span>max</span></h3>

        <div class="perfil <?php echo $user == null ? 'hidden' : '' ?>">
            <button><span>P</span> {{ $user }}</button>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>