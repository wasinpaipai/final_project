<html>
  <head>
    <title>Scan</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  </head>
  <body>
    <h3 class="text-center">SCAN</h3>
    <div class="container">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-4" id="app">
          <div class="card text-center">
            <div class="card-header">
              Please scan QRcade.
            </div>
            <div class="card-body">
              <div class="preview-container">
                <video id="preview"></video>
              </div>
            </div>
            <div class="card-footer text-muted">
              <div class="sidebar">
                <section class="scans">
                  <h2>Scans</h2>
                  <ul v-if="scans.length === 0">
                    <li class="empty">No scans yet</li>
                  </ul>
                  <form method="POST">
                    <transition-group name="scans" tag="ul">
                  
                        <input type="text" name="test" value="<?php echo '<transition-group name="scans"> <li v-for="scan in scans" :key="scan.date" :title="scan.content" name="scan1" >{{ scan.content }} </transition-group>'; ?>">
                      <input type="submit" value="Submit"></li>
                    </transition-group>
                  </form>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div class="col">

        </div>
      </div>
    </div>
    <script type="text/javascript" src="app.js"></script>
    <?php
      
      if (isset($_POST['test'])) {
        echo $_POST['test'];
      }


     ?>

  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
