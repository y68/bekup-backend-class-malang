<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title></title>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	<style>	
	/* Text Form */
    .text-header {
        text-transform:uppercase;
        font-size:40px;
    }
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
    }
    
    /* Full-width inputs */
    input[type=text], input[type=password] {
        width: 96%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Extra style for the cancel button (red) */
    .submitbtn {
        width:auto;
        padding:10px 18px;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
	</style>
</head>

<body>
	
	<div class="container" style="margin-top:30px">
		<h1 class="text-center text-header">BekUp 2.0</h1>
		<div class="panel-login">
			<h4 class="text-center">Masuk</h4>
			<form action="<?= base_url(); ?>peserta/do_login" method="post">
            <div class="container">
                <div class="form-group">
                    <label><strong>Username</strong></label><br/>
                    <input type="text" id="uname" placeholder="Masukkan username atau email" name="uname" required autocomplete="off" />
                </div>

                <div class="form-group">
                    <label><strong>Password</strong></label><br/>
                    <input type="password" id="pwd" placeholder="Masukkan password" name="psw" required autocomplete="off" />
                </div>

                <button type="submit" class="submitbtn">Login</button>
                <button type="button" class="cancelbtn" onclick="this.form.reset();">Ulangi</button>
                <?php if ( @$_SESSION['gagal']): ?>
                <br/><p class="label label-danger">Username atau password salah!</p>
                <?php 
                unset($_SESSION['gagal']);
                endif; 
                ?>
                </div>
            </form>
	
        </div>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.4/typed.min.js"></script>
</body>
</html>