<?php session_start();
if (!isset($_SESSION['loggedin'])) {?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BOOT LOCK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#" style="padding-left: 2%;">BOOT LOCK</a>
        <!-- <h5>BOOT LOCK</h5> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </nav>
<br><br>
<div class="container">
  <br>
  <div class="row">
    <div class="col">

    </div>
    <div>
        <div class="row no-gutters">
          
          
            <center><div class="card-body">
              <div class="cont">
                  <div class="login" >
                      <div class="ui blue card">
                          <div class="content bg-warning">
                              <div class="header" align="center">LOGIN</div>
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
                                          <center><input type="submit" name="submit" class="btn btn-success" value="submit"></center>
                                      </form>
                                  </span>
                              </div>
                              <p></p>
                          </div>
                      </div>

                  </div>
              </div>
            </div></center>
          
        </div>
    </div>
    <div class="col">

    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
    </script>
</body>

</html>
<?php 
}else{
      @header("Location:checklog.php");
    }
?>