<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>

    <!-- ALWAYS have this tag so the browser knows how big a regular viewport should be!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ALWAYS have this tag so the browser knows how big a regular viewport should be!! -->

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles.css') }}"/>
</head>
<body>

    <div class="home-banner" onclick="location.href='/';">Eranthis<br/>Communities</div>

    <form id="login-form" action="http://172.31.109.60:6969/api/login" method="GET" class="menu"> 
        <div class="login-banner"></div>

        <input type="text" name="email" placeholder="email"/>

        <input type="password" name="password" placeholder="password"/>

        <input type="submit" name="sub" value="Login">
    </form>

    <div class="aligner-element"></div>

</body>
</html>