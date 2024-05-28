<!DOCTYPE html>
<html lang='en'>
<?php
session_start();
if (isset($_SESSION["Name"]) && $_SESSION["Name"] != "Guest Visitor") {
    header("Location: index.php");
}
?>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='index.css'>
</head>

<body>

    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action = "validate.php" method="post">
                        <h2>Login</h2>
                        <div class="inputbox"> <ion-icon name="mail-outline"></ion-icon> <input name="username" type="email" required>
                            <label>Email</label>
                        </div>
                        <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input name="password" type="password"
                                required> <label>Password</label> </div>
                        <div class="forget"> <label><a href="contact.php">Forgot Password</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a class="nav-link" href="contact.php">Contact</a></div>
                                <button>Log In</button>
                        <div class="register">
                            <p>Don't have an account? <a href="contact.php">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section> 
    </body>
</body>

</html>