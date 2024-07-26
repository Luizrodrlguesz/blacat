@include ('layouts.header')
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="tittle-register">
            <h1>Insert code</h1>
            <h3>Forgot password</h3>
        </div>
        <div class="content-container">
            <h3>Insert code</h3>
            <p>Insert the code that we sent to your email</p>
            <div id="otp" class="digit-group">
                <input class="form-control" type="text" id="digit-2" name="digit-2" data-next="digit-3"
                    data-previous="digit-1" />
                <input class="form-control" type="text" id="digit-3" name="digit-3" data-next="digit-4"
                    data-previous="digit-2" />
                <input class="form-control" type="text" id="digit-4" name="digit-4" data-next="digit-5"
                    data-previous="digit-3" />
                <input class="form-control" type="text" id="digit-5" name="digit-5" data-next="digit-6"
                    data-previous="digit-4" />
            </div>

            <div class="input-size-btn forgot-btn">
                <a href="signin.html"><button class="btn-sign">Confirm</button></a>
            </div>
        </div>
    </div>

</body>

</html>
