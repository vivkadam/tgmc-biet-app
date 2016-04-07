<html>
<style>
body{
	background-image:url("blood1.jpg");
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }

.login {
    width: 320px;
    height: 370px;
    overflow: hidden;
    background: #1e1e1e;
    border-radius: 6px;
    margin: 150px 515px auto;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

.login .titulo {
    width: 318px;
    height: 14px;
    padding-top: 13px;
    padding-bottom: 13px;
    font-size: 14px;
    text-align: center;
    color: #bfbfbf;
    font-weight: bold;
    background: #121212;
    border: #2d2d2d solid 1px;
    margin-bottom: 30px;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    font-family: Arial;
}

.login form {
    width: 240px;
    height: auto;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
}

.login form input[type=email], .login form input[type=password] {
    width: 200px;
    font-size: 12px;
    padding-top: 14px;
    padding-bottom: 14px;
    padding-left: 40px;
    border: none;
    color: #bfbfbf;
    background: #141414;
    outline: none;
    margin: 20px;
}

.login form input[type=email] {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-top: #0b0b0b solid 1px;
    background: #141414 10px center no-repeat;
}

.login form input[type=password] {
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    border-top: #0b0b0b 1px solid;
    border-bottom: #353535 1px solid;
    background: #141414 10px center no-repeat;
}

.login form .enviar {
    margin: 10px;    
    width: 200px;
    height: 12px;
    display: block;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 6px;
    border: none;
    border-top: #4eb2a8 1px solid;
    border-bottom: #161616 1px solid;
    background: #349e92;
    text-align: center;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    color: #FFF;
    text-shadow: 0 -1px #1d7464, 0 1px #7bb8b3;
    font-family: Arial;
}

.login .olvido {
    width: 240px;
    height: auto;
    overflow: hidden;
    padding-top: 25px;
    padding-bottom: 25px;
    font-size: 10px;
    text-align: center;
}

.login .olvido .col {
    width: 50%;
    height: auto;
    float: left;
}

.login .olvido .col a {
    color: #fff;
    text-decoration: none;
    font: 12px Arial;
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block }

body { line-height: 1 }

ol, ul { list-style: none }

blockquote, q { quotes: none }

blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

input[type=submit] {
    
    background-color: #8B0000;
    color: white;
    padding: 6px 10px;
    margin: 8px 0px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #FF00FF;
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }

</style>
<body>


<section class="login">
	<div class="titulo">Login</div>
	<form action="resbg.php" method="post">
    	<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email address" >
        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
		placeholder="Password">
        <input type="submit" value="Submit">
	    </form>
</section>


</body>
</html>