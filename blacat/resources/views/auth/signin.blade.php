@include ('layouts.header')
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="tittle-register">
            <h1>Login</h1>
            <h3>Welcome Back!</h3>
        </div>
        <div class="content-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-size-pos">
                    <label class="register-label" for="email_or_username">Email or Username</label>
                    <input class="input-theme-sytle" type="email" id="email_or_username" name="email"
                        placeholder="Your email" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-size-pos">
                    <label class="register-label" for="password">Password</label>
                    <input class="input-theme-sytle" type="password" id="password" name="password"
                        placeholder="Your Password" />
                    <span class="show-password-toggle" onclick="togglePasswordVisibility('password', 'toggleIcon1')">
                        <i class="bi bi-eye" id="toggleIcon1"></i>
                    </span>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <label class="register-label">
                        Forgot your password?
                        <a href="{{ 'forgot' }}">Reset password</a>
                    </label>
                </div>
                <div class="input-size-btn">
                    <a href="{{ 'dashboard' }}"><button type="submit" class="btn-sign">Login</button></a>
                </div>
                <div class="already-account">
                    <p>Don't have an account? <a href="{{ route('register') }}">SignUp</a></p>
                </div>
            </form>

        </div>
    </div>



</body>

</html>
