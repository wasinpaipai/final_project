<!DOCTYPE html>
<html>
<head>

    <style>
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .bg {
            width: 100%;
            height: 100%;
            max-height: 100%;
            margin: 0;
            padding: 0;
            background-image: url('https://f.ptcdn.info/373/029/000/1426428491-Pantip4-o.jpg');
            background-size:100% 100%;
            background-repeat: no-repeat;
        }
    </style>
    <meta charset="utf-8">
    <title>Train Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body style="background-color:#C0CBB7;">

    <div class="bg">

        <div class="cont">
            <div class="login" align="center">
                <br><h1>-Online Thai Train Booking-</h1><br>
                <div class="ui blue card">
                    <div class="content">
                        <div class="header">Log in</div>
                        <hr>
                        <div class="meta">
                            <span>
                                <form method="POST" action="checklog.php" class="ui form">
                                    <b>Username: <input type="text" name="username">
                                        <br>
                                        Password: <input type="password" name="password">
                                        <br>
                                        <br></b>
                                        <!-- <button class="ui primary button">Save</button> -->
                                    <input class="ui primary button" type="submit" name="submit" value="Login">
                                </form>
                            </span>
                        </div>
                        <p></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
    </script>
</body>

</html>