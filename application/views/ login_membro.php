<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    body {
        font-family: "Poppins", sans-serif;
        font-size: 14px;
        color: #222;
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        background: linear-gradient(45deg, #a547b1, #f84298) center;
        background-size: 100vw 100vh;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 340px;
    }

    .main {
        width: 340px;
        height: 400px;
        background: white;
        border-radius: 3px;
        padding: 30px;
        position: relative;
        display: flex;
    }

    .main .form_wrapper {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .main .form_wrapper .tile {
        text-align: center;
        margin-bottom: 20px;
        width: 100%;
        overflow: hidden;
    }

    .main .form_wrapper .tile h3 {
        font-size: 22px;
        margin: 0px;
        transition: all 0.3s ease;
    }

    .main .form_wrapper .radio {
        display: none;
    }

    .main .form_wrapper .tab {
        width: 50%;
        border: solid 2px #f1f1f1;
        height: 40px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        margin-bottom: 20px;
        font-weight: 500;
        transition: color 0.3s ease;
        user-select: none;
    }

    .main .form_wrapper .tab.login_tab {
        border-right: none;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .main .form_wrapper .tab.signup_tab {
        border-left: none;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
    }

    .main .form_wrapper .shape {
        background: linear-gradient(45deg, #a547b1, #f84298) no-repeat center;
        width: 50%;
        height: calc(40px - 1px);
        border-radius: 5px;
        position: absolute;
        top: 55.5px;
        left: 0px;
        opacity: 0.9;
        transition: all 0.4s ease;
    }

    .main .form_wrapper .shape:hover {
        background: linear-gradient(-45deg, #a547b1, #f84298) no-repeat center;
    }

    .main .form_wrapper #login:checked~.shape {
        left: 0px;
    }

    .main .form_wrapper #login:checked~.login_tab {
        border-color: transparent;
        z-index: 1;
        color: white;
    }

    .main .form_wrapper #login:checked~.tile .signup {
        display: none;
    }

    .main .form_wrapper #login:checked~.form_wrap {
        transform: translateX(0);
    }

    .main .form_wrapper #login:checked~.form_wrap .signup_form {
        opacity: 0;
    }

    .main .form_wrapper #signup:checked~.shape {
        left: 50%;
    }

    .main .form_wrapper #signup:checked~.signup_tab {
        border-color: transparent;
        z-index: 1;
        color: white;
    }

    .main .form_wrapper #signup:checked~.tile .login {
        display: none;
    }

    .main .form_wrapper #signup:checked~.form_wrap {
        transform: translateX(-100%);
    }

    .main .form_wrapper #signup:checked~.form_wrap .login_form {
        opacity: 0;
    }

    .main .form_wrapper a {
        color: #f84298;
        text-decoration: none;
        transition: all 0.3s linear;
    }

    .main .form_wrapper a:hover {
        color: #a547b1;
    }

    .main .form_wrapper .form_wrap {
        display: flex;
        width: 100%;
        flex: 0 0 100%;
        transition: transform 0.3s ease, opacity 0.2s ease;
    }

    .main .form_wrapper .form_wrap .form_fild {
        width: 100%;
        flex: 0 0 100%;
        transition: all 0.5s ease;
    }

    .main .form_wrapper .form_wrap .form_fild .input_group {
        width: 100%;
        margin-bottom: 12px;
    }

    .main .form_wrapper .form_wrap .form_fild .input_group .input {
        border: solid #f1f1f1 2px;
        border-radius: 5px;
        width: 100%;
        height: 40px;
        padding: 5px 10px;
        font-size: 15px;
        font-weight: 500;
        outline: none;
        transition: all 0.3s linear;
    }

    .main .form_wrapper .form_wrap .form_fild .input_group .input::placeholder {
        color: #adadad;
    }

    .main .form_wrapper .form_wrap .form_fild .input_group .input:hover {
        border-color: rgba(248, 66, 151, 0.3);
    }

    .main .form_wrapper .form_wrap .form_fild .input_group .input:focus {
        border-color: rgba(248, 66, 151, 0.3);
    }

    .main .form_wrapper .form_wrap .form_fild .forgot {
        display: block;
        margin-bottom: 15px;
        padding: 0px 2px;
    }

    .main .form_wrapper .form_wrap .form_fild .btn {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        border: none;
        outline: none;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 0.8px;
        color: white;
        background: linear-gradient(45deg, #a547b1, #f84298) no-repeat center;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s linear;
    }

    .main .form_wrapper .form_wrap .form_fild .btn:hover {
        background: linear-gradient(-45deg, #a547b1, #f84298) no-repeat center;
    }

    .main .form_wrapper .form_wrap .form_fild .btn:active {
        transform: scale(0.95);
    }

    .main .form_wrapper .form_wrap .form_fild .not_mem {
        text-align: center;
    }

    .main .form_wrapper .form_wrap .form_fild .not_mem label {
        pointer-events: none;
    }

    .main .form_wrapper .form_wrap .form_fild .not_mem label span {
        pointer-events: all;
        color: #f84298;
        text-decoration: none;
        transition: all 0.3s linear;
    }

    .main .form_wrapper .form_wrap .form_fild .not_mem label span:hover {
        color: #a547b1;
    }
</style>

<body>
    <section class="main">
        <div class="form_wrapper">
            <input type="radio" class="radio" name="radio" id="login" checked />
            <input type="radio" class="radio" name="radio" id="signup" />
            <div class="tile">
                <h3 class="login">Login Form</h3>
                <h3 class="signup">Signup Form</h3>
            </div>

            <label class="tab login_tab" for="login">
                Login
            </label>

            <label class="tab signup_tab" for="signup">
                Signup
            </label>
            <span class="shape"></span>
            <div class="form_wrap">
                <div class="form_fild login_form">
                    <div class="input_group">
                        <input type="email" class="input" placeholder="Email Address" />
                    </div>
                    <div class="input_group">
                        <input type="password" class="input" placeholder="Password" />
                    </div>

                    <a href="#forgot" class="forgot">Forgot password?</a>

                    <input type="submit" class="btn" value="Login" />

                    <div class="not_mem">
                        <label for="signup">Not a member? <span> Signup now</span></label>
                    </div>

                </div>

                <div class="form_fild signup_form">
                    <div class="input_group">
                        <input type="email" class="input" placeholder="Email Address" />
                    </div>
                    <div class="input_group">
                        <input type="password" class="input" placeholder="Password" />
                    </div>

                    <div class="input_group">
                        <input type="password" class="input" placeholder="Confirm Password" />
                    </div>

                    <input type="submit" class="btn" value="Signup" />

                </div>
            </div>

        </div>
    </section>