<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <?php
    if(isset($_GET["txUSER"])){
    $usr = $_GET["txUSER"];
    if($usr==""){
        echo "<div><h3 style='color:red;padding:5px;'>User Name belum diisikan</h3></div>";
    }
  
    }
    

    ?>
    <form action="Latihan01.php" method="GET">
        <div>
            User name
            <input type="text" id="txUSER" name="txUSER">
</div>
<br>
<div>
            Password
            <input type="password" id="txPASKEY" name="txPASKEY">
</div>
<div>
    <button type="submit"> Login </button>
    <a href="daftar.php"> Daftar</button> 
</div>
</form>
</body>
</html>