<body style="background-color:#e3ede7;">
    
</body>
<center><?php
    session_start();
    echo "<h1>QR Code</h1><hr/>";
    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 7;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
     
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
    
    //config form
    echo 'Your code:&nbsp;<input type="text" name="data" readonly value="'.(isset($_REQUEST['data'])?htmlspecialchars($_REQUEST['data']):"Empty").'" />';
        ?>
        <?php
            function conn(){
                    $conn = new mysqli("localhost", "root","", "seproj");
                    return $conn;
                }

                ///Data Variable///
                $username = $_SESSION['username'];
                /*
                $tnum = $_POST['train_no'];
                $line = $_POST['railway_line'];
                $s_dep = $_POST['departure'];
                $s_ter = $_POST['terminal'];
                $t_dep = $_POST['time_depart'];
                $t_arv = $_POST['time_arrive'];
                */
                $code = $_POST['data'];
                $conn = conn();
                $sql = "INSERT INTO ticket(
                    fname,
                    lname,
                    carID,
                    lock_time,
                    code
                    )
                    VALUES (
                    '$fname',
                    '$lname',
                    '$carID',
                    '$lock_time'
                    )";
                $conn->query($sql);
        ?>
        <button type="button" onclick="location.href='QRscan.php'">Click Me!</button>
</center>