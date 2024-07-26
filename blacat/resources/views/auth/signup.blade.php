@include ('layouts.header')
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="tittle-register">
            <h1>SignUp</h1>
            <h3>Create Your Account</h3>
        </div>
        <div class="content-container">
            <form action="{{ route('registerUser') }}" method="POST">
                @csrf
                <div class="input-size-pos">
                    <label class="register-label" for="name">Your Name</label>
                    <input class="input-theme-sytle" type="text" id="name" name="name"
                        placeholder="Full name" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-size-pos">
                    <label class="register-label" for="username">Username</label>
                    <input class="input-theme-sytle" type="text" id="username" name="username"
                        placeholder="Your Username" />
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-size-pos">
                    <label class="register-label" for="email">Your Email</label>
                    <input class="input-theme-sytle" type="email" id="email" name="email"
                        placeholder="Your email" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-size-pos">
                    <label class="register-label" for="password">Your Password</label>
                    <input class="input-theme-sytle" type="password" id="password" name="password"
                        placeholder="Your Password" />
                    <span class="show-password-toggle" onclick="togglePasswordVisibility('password', 'toggleIcon1')">
                        <i class="bi bi-eye" id="toggleIcon1"></i>
                    </span>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-size-pos">
                    <label class="register-label" for="name">Confirm Your password</label>
                    <input class="input-theme-sytle" type="password" name="password_confirmation"
                        id="password_confirmation" placeholder="Confirm your Password" />
                    <span class="show-password-toggle"
                        onclick="togglePasswordVisibility('password_confirmation', 'toggleIcon2')">
                        <i class="bi bi-eye" id="toggleIcon2"></i>
                    </span>
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="input-size-pos agree-terms">
                    <input class="terms-conditions-check" type="checkbox" name="" id="" /> Agree Terms
                    and
                    Conditions
                </div>
                <div class="input-size-btn">
                    <a href="signin.html"><button class="btn-sign">Register</button></a>
                </div>

                <div class="already-account">
                    <p>Already have an account? <a href="{{ 'login' }}">login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
