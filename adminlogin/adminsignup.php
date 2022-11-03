<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminsignup.css">
    <!-- <link rel="stylesheet" href="css/style.scss"> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="../registration.php" method="post">
                <h1>
                    Create Account
                </h1>                
                <span>or use your mail for registration</span>

                <div class="name">
                    <div class="txt">
                        <label for="name"><ion-icon name="person"></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="Name" name="user">
                    </div>
                </div>

                <div class="email">
                    <div class="txt">
                        <label for="email"><ion-icon name="mail"></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="abcd@mail.com" name="email" required>
                    </div>
                </div>

                <div class="pass">
                    <div class="txt">
                        <label for="pass"><ion-icon name="lock-closed"></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="password" placeholder="" name="password" required>
                    </div>
                </div>

                <div class="phone">
                    <div class="txt">
                        <label for="name"><ion-icon name="call-outline"></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="" name="phone" required>
                    </div>
                </div>

                <div class="code">
                    <div class="txt">
                        <label for="name"><ion-icon name="qr-code-outline"></ion-icon></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="ADMIN CODE HERE" name="code" required>
                    </div>
                </div>

                <div class="fb-id">
                    <div class="txt">
                        <label for="name"><ion-icon name="logo-facebook"></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="" name="fb">
                    </div>
                </div>

                <div class="git-id">
                    <div class="txt">
                        <label for="name"><ion-icon name="logo-github"></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="" name="github">
                    </div>
                </div>

                <div class="Linkedn-id">
                    <div class="txt">
                        <label for="name"><ion-icon name="logo-linkedin"></ion-icon></label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="" name="linkedn">
                    </div>
                </div>


                <!-- <input type="password" placeholder="Password"> -->
                <button class="signupbtn">Sign up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="../validation.php" method="post">
                <h1>Sign-In</h1>
                <div class="social-container">

                    <a href="" class="social"><ion-icon name="logo-facebook" style="font-size:40px;"></ion-icon></a>
                    <a href="" class="social"><ion-icon name="logo-google" style="font-size:40px;"></ion-icon></ion-icon></a>
                    <a href="" class="social"><ion-icon name="logo-linkedin" style="font-size:40px;"></ion-icon></ion-icon></a>
                    <a href="" class="social"><ion-icon name="logo-github" style="font-size:40px;"></ion-icon></ion-icon></a>

                </div>
                <span>or use Your Account</span>
                <div class="email">
                    <div class="txt">
                        <label for="email">E-Mail</label>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder="abcd@mail.com" name="email" required>
                    </div>
                </div>
                <div class="pass">
                    <div class="txt">
                        <label for="pass">Password</label>
                    </div>
                    <div class="inp">
                        <input type="password" placeholder="" name="password" required>
                    </div>
                </div>
                <a href="">Forgot your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back</h1>
                    <p>To keep connected please login with your personal info.</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, friend</h1>
                    <p>Enter Your personal Details and Start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="admin">
        <a href="../index.html">
            <h3>
                Non-Admins click here
            </h3>
        </a>
    </div>
    <script src="adminsignup.js"></script>
</body>
</html>