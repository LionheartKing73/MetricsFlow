<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
    <div style="max-width: 800px; margin: 0; padding: 30px 0;">
        <table width="80%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="5%"></td>
                <td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
                    <h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">
                        Welcome to Campaign Application!
                    </h2>
                    Thanks for joining. We listed your sign in details below, make sure you keep them safe.<br />
                    To verify your email address, please follow this link:<br />
                    <br />
                    <a target="_blank" href="<?php echo url('users/activate/'.$user['token'])?>" style="color: #3366cc;">
                        Finish your registration...
                    </a>

                    <br />
                    <br />
                    Link doesn't work? Copy the following link to your browser address bar:<br />
                    <nobr>
                        <a  target="_blank" href="<?php echo url('activate/'.$user['token'])?>">
                            <?php
                                echo url('users/activate/'.$user['token']);
                            ?>
                        </a>
                    </nobr>
                    <br />
                    <br />
                    Your Name: <?php echo $user['name']; ?><br />
                    Your email address: <?php echo $user['email']; ?><br />
                    <br />
                    <br />
                    Have fun!<br />
                    Campaign Development Team
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
