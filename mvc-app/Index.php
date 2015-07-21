<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Online Alumni</title>
     <!-- Metro UI CSS-->
    <link href="shared-resources/Metro-UI/build/css/metro.css" rel="stylesheet" />
    <link href="shared-resources/Metro-UI/build/css/metro-icons.css" rel="stylesheet" />
     <!-- Metro UI JS-->
    <script src="shared-resources/Metro-UI/build/js/metro.js"></script>
   
    <!-- Login Form  Snippets-->
    <style>
        .login-form {
            width: 400px;
            height: 300px;
            position: fixed;
            top: 50%;
            margin-top: -150px;
            left: 50%;
            margin-left: -200px;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>
    <script>
        $(function () {
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>
</head>
<body class="bg-cyan">
    <div class="login-form padding20 block-shadow" style="opacity: 1; -webkit-transform: scale(1); transform: scale(1); -webkit-transition: 0.5s; transition: 0.5s;">
        <form>
            <h2 class="text-light">Login</h2>
            <hr class="thin">
            <br>
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Username:</label>
                <input type="text" name="user_login" id="user_login" style="padding-right: 36px;">
                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
            </div>
            <br>
            <br>
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Password:</label>
                <input type="password" name="user_password" id="user_password" style="padding-right: 36px;">
                <button class="button helper-button reveal" tabindex="-1" type="button"><span class="mif-looks"></span></button>
            </div>
            <br>
            <br>
            <div class="form-actions">
                 <a href="Home.php" class="button primary">Sign In</a>                   
                 <a href="#">Forgot Password?</a>              
            </div>
        </form>
    </div>

    <!-- hit.ua -->
    <a href="http://hit.ua/?x=136046" target="_blank">
        <script language="javascript" type="text/javascript"><!--
    Cd = document; Cr = "&" + Math.random(); Cp = "&s=1";
    Cd.cookie = "b=b"; if (Cd.cookie) Cp += "&c=1";
    Cp += "&t=" + (new Date()).getTimezoneOffset();
    if (self != top) Cp += "&f=1";
    //--></script>
        <script language="javascript1.1" type="text/javascript"><!--
    if (navigator.javaEnabled()) Cp += "&j=1";
    //--></script>
        <script language="javascript1.2" type="text/javascript"><!--
    if (typeof (screen) != 'undefined') Cp += "&w=" + screen.width + "&h=" +
    screen.height + "&d=" + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth);
    //--></script>
        <script language="javascript" type="text/javascript"><!--
    Cd.write("<img src='http://c.hit.ua/hit?i=136046&g=0&x=2" + Cp + Cr +
    "&r=" + escape(Cd.referrer) + "&u=" + escape(window.location.href) +
    "' border='0' wi" + "dth='1' he" + "ight='1'/>");
    //--></script><img src="http://c.hit.ua/hit?i=136046&amp;g=0&amp;x=2&amp;s=1&amp;c=1&amp;t=-480&amp;j=1&amp;w=1024&amp;h=768&amp;d=24&amp;0.9228343926370144&amp;r=http%3A//metroui.org.ua/tabcontrol.html&amp;u=http%3A//metroui.org.ua/templates/login.html" border="0" width="1" height="1"></a>
    <!-- / hit.ua -->
    
</body>
</html>