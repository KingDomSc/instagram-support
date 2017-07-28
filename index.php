<html dir="ltr" lang="en">
    <head>
        <title>KingDomSc</title>
        <meta charset="utf-8">
        <meta name="robots" content="noodp"/>
        <meta property="og:locale" content="ar_AR" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="https://use.fontawesome.com/3cb782d694.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
        <script type="text/javascript">
            $(document).ready(function() {
                var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);
                if (isSafari == true) {
                    $('.first').css('width','250px');
                } else {}
                $('.at').on('change', function() {
                    $('#at').attr('value',this.value);
                });
                $('.pt').on('change', function() {
                    $('#pt').attr('value',this.value);
                });
                $('#checking').click(function() {
                    $.post('check.php','username=' + $('#username1').val() + '&get',function(data){
                    	if (data.toLowerCase().indexOf("show_login_support_form") >= 0) {
                    		alert('True: Instagram Support Accept Username.');
                    	} else {
                    		alert('False: Instagram Support Unccept Username.');
                    	}
                    });
                });
            });
        </script>    
        <style>
            body {margin: 0; padding: 0; border: 0; background: #ccc;}
            .first {background: rgba(0,0,0,0.8);text-align: center;color: white;padding: 5px;font-family: Tahoma;font-size: 13px;position: absolute;left: 0; top: 0; right: 0; bottom: 0;margin: auto;height: 460px;}
            input, textarea, select {width: 200px;}
            * {margin: 3px;}
        </style>
    </head>
    <body>
        <section class="first">
            <form method="post" action="do.php">
                <input id="at" type="hidden" name="Accounttype" value="COMPANY">
                <input id="pt" type="hidden" name="Problemtype" value="FORGOT_EMAIL">
                <input id="sq" type="hidden" name="messa" value="">
                <h>Account Type:</h><br>
                <select class="at">
                    <option value="COMPANY">Company or Brand Account</option>
                    <option value="PERSONAL_WITH_PHOTO">Personal Account With Photos Of Me</option>
                    <option value="PERSONAL_WITHOUT_PHOTO">Personal Account Without Photos Of Me</option>
                </select><br>
                <h>Problem Type:</h><br>
                <select class="pt">
                    <option value="FORGOT_EMAIL">Forgot the email</option>
                    <option value="CANNOT_LOGIN_WITH_EMAIL">I can't log into email</option>
                    <option value="ACCOUNT_HACKED">My Account was Hacked</option>
                    <option value="OTHER">Others</option>
                </select><br>
                <h>Signup Email:</h><br>
                <input type="email" name="e1" placeholder=""><br>
                <h>Username:</h><br>
                <input id="username1" type="text" name="u1" placeholder=""><br>
                <h>Contact Email:</h><br>
                <input type="email" name="c1" placeholder=""><br>
                <h>Proxy:</h><br>
                <input type="text" name="p1" placeholder="127.0.0.1:8080"><br><br>
                <textarea name="sq" class="sq">write your message here..</textarea><br>
                <input type="button" name="checking" id="checking" value="Check Username"><br>
                <input type="submit" name="submit" value="Send"><br><br>
                <h id='about'>Coder: KingDomSc | instagram: <a href="https://instagram.com/Kingdomsc">KingDomSc</a></h>
            </form>
        </section>
    </body>
</html>