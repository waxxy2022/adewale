<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<script src="vendors/jquery/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
    href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
            $(function () {

                var login_window = $("#login-dialog").dialog({autoOpen: false,
                    height: 280,
                    width: 520,
                    modal: true,
                    closeText: '',
                    close: function () {
                        register_window.dialog("close");
                    }

                });

                $("#btn-login").button().on("click", function () {
                    login_window.dialog("open");
                });

                var register_window = $("#register-dialog").dialog({autoOpen: false,
                    height: 530,
                    width: 520,
                    modal: true,
                    closeText: '',
                    close: function () {
                        register_window.dialog("close");
                    }

                });

                $("#btn-register").button().on("click", function () {
                    register_window.dialog("open");
                });
            });

        </script>
        <script src="login-registration.js"></script>
        
</head>

<body>
    <div class="demo-container">
        <h2>WELCOME TO ADEWALE TAIRU RECIPE WEBSITE. REGISTER / LOGIN HERE TO PROCEED</h2>
        <div class="login-registration-menu">
            <input type="button" value="Login" id="btn-login"> <input
                type="button" value="Register" id="btn-register">
        </div>
        <div class="thank-you-registration">
        </div>
        <?php 
            require_once "login-form.php";
            require_once "registration-form.php";
        ?>
    </div>
</body>
</html>