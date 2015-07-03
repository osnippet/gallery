<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Gallery</title> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">

	
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </head>



<body class="pack">

<div id="container">
    <div class="wrapper">
        <div class="col-sm-3" id="ss">
            <form class="form-signin" method="POST">
                <div style="color: red;border: #000 solid  2px;">
                    <?php echo validation_errors(); ?>
                </div>
                 <input type="text" class="form-control" name="email" placeholder="ایمیل خود را وارد کنید" required="" autofocus="" />
                <input type="password" class="form-control" name="password" placeholder="پسوورد خود را وارد کنید" required=""/>    
                <input type="password" class="form-control" name="password_conf" placeholder="Password Again" required=""/>   
                <input type="text" class="form-control" name="username" placeholder="نام کاربری خود را وارد کنید" required="" autofocus="" />
                <div class="form-group" id="captcha_display">
                    <script type="text/javascript">

                        function createCaptcha()
                        {
                            $.get("<?php echo site_url('captcha/') ?>",'',function (data)
                            {
                                $('#captcha_display').html(data);
                            });
                        }

                        $(document).ready(function()
                        {
                            createCaptcha();
                        });
                    </script>
                </div>
                <input type="text" class="form-control" name="captcha" placeholder="capthcha" required="" autofocus="" />
                
                <div class="col-sm-5">
                <input type="submit" class="btn btn-lg btn-primary btn-block" id="sub" name="submit" value="ثبت نام" >
                </div>
            </form>
        </div>
    </div>
</div>
    </body>