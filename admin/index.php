<?php
require_once("../includes/connection.php");
require_once("../includes/session.php");
    $err = $ele = new SplFixedArray(2); #give size to array
    // remove extra html special char and symbols
    function secure($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // validate form
    function val($ele, $msg, $reg){
        if(empty($ele)){
            return $msg="* Required Field";
        }else{
            if(!preg_match($reg,$ele)){
                return $msg;
            }else{
            return $msg="";}
        }
    }

    if(isset($_POST['btnLogin'])){
        $ele = array(secure($_POST['txtEml']), secure($_POST['txtPwd']));
        $err = array("* Invalid Email. Ex. abc.xyz.com","* Invalid Password. Ex. Abc@123, And Min 6 Character ");
        $regex = array("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$/" , "/^\S*(?=\S{6,})(?=\S*[\W])(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/");

        $err[0]=val($ele[0],$err[0],$regex[0]);
        $err[1]=val($ele[1],$err[1],$regex[1]);

        if(!empty($ele[0]) && !empty($ele[1])){
            $sql="SELECT email FROM admin WHERE email = '$ele[0]' AND password='$ele[1]'";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                $popup = '  <div id="alertMsg" class="alert alert-success">
                                <span id="alertClose" class="closebtn" onclick="this.parentElement.style.display=&#39;none&#39;;">&times;</span> 
                                Login Successfully
                            </div>';
                while($row = $result->fetch_array()){
                    $_SESSION['User'] = $row[0];
                    //$row[0];
                }
                $login_time=date('d M, Y  g:i:s ');
                $update = "UPDATE admin SET last_login = '$login_time'";
                $result = $conn->query($update) or Die("Updating Error");
                header("Refresh: 0.8; url=../admin/home.php");
            }else{
                $popup = '  <div id="alertMsg" class="alert alert-danger">
                                <span id="alertClose" class="closebtn" onclick="this.parentElement.style.display=&#39;none&#39;;">&times;</span> 
                                Invalid Email Address or Password.
                            </div>';
            }
        }
    }
    if($conn != null){
        $conn->close();
        //echo "Connection Closed <br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <title>Admin Login | E-Commerce</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/adminScript.js"></script>
</head>
<body>
    <?php echo $popup; ?>
    <!-- <div id="alertMsg" class="alert">
            <span id="alertClose" class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    </div> -->
    <div class="box">
        <div class="box-header">
            <h1>Login</h1>
        </div>
        <form id="logForm" name="LoginForm" action="index.php" method="post">
            <div class="box-input-group">
                <input class="box-input-field" type="text" id="txtLoginEml" name="txtEml" value="<?php echo $ele[0]; ?>">
                <span id="errEml" class="err"><?php echo $err[0]; ?></span>
                <label>Email</label>
            </div>
            <div class="box-input-group">
                <input class="box-input-field" type="password" id="txtLoginPwd" name="txtPwd" value="<?php echo $ele[1]; ?>">
                <span id="errPwd" class="err"><?php echo $err[1]; ?></span>
                <label>Password</label>
            </div>
            <button type="submit" name="btnLogin" id="btnLogin">Login</button>
        </form>
        <div class="footer-box">
            <p class="footer-box-text">
                <a id="linkPortal" href="../index.php">Open E-Commerce Portal</a>
            </p>
        </div>
    </div>
    <footer>
        <p class="footer-text">
            &copy; <?php echo date("Y"); ?> E-Commerce Portal. All rights reserved | Design by <a target="_blank" href="https://github.com/dupadhyay3">spyD3R</a>
        </p>
    </footer>
</body>
</html>