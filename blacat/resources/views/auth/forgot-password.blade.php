@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="tittle-register">
            <h1>Forgot Passwod</h1>
            <h3>Welcome Back!</h3>
        </div>
        <div class="content-container">
            <div class="input-size-pos">
                <h3>Reset Password</h3>
                <p>We'll send to your email a code to reset your password</p>
                <input class="input-theme-sytle" type="text" name="" placeholder="email" />
            </div>

            <div class="input-size-btn forgot-btn">
                <a href="{{ 'sendcode' }}"><button class="btn-sign">Send Code</button></a>
            </div>
        </div>
    </div>

</body>

</html>
