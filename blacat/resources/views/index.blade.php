@include('layouts.header')

{{-- <!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container">
        <div class="tittle-register">
            <h1>entrou</h1>
            <h3>sdvncksd</h3>
            <div class="input-size-btn">
                <a class="nav-link" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="dz-icon">
                        <i class="icon feather icon-log-out"></i>
                    </span>
                    <span>LogOut</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>

</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = 'Luiz';
    $sobrenome = 'Rodrigues';
    $apelido = "Shock \u{26A1}";
    
    echo "$nome \"$apelido\" $sobrenome";
    // echo "\n$nome \"$apelido\" \t$sobrenome \$$idade \u{}";
    
    $canal = 'Curso em video';
    $ano = date('Y');
    
    echo <<<FRASE
        estudando PHP no $canal no ano de $ano
    FRASE;
    
    ?>
</body>

</html>
