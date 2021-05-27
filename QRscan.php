<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Decoding QR codes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        html, body {
            height: 100%;
            width: 100%;
        }
        .bg {
            background-image: url("https://f.ptcdn.info/373/029/000/1426428491-Pantip4-o.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="background-color: white; padding: 20px;">
                <div class="panel-heading">
                    <h1>Decode QR codes</h1>
                </div>
                <hr>
                <form action="payment.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="qrimage" accept="image/*" id="qrimage" class="form-control"><br>
                    <input type="submit" class="btn btn-md btn-block btn-danger" value="Decode the Code">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>