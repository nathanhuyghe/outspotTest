<!DOCTYPE html>
<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php 
    $name = $_POST["name"];
    if (is_numeric($name) ){  
        $ErrMsg = "Only numeric value is allowed.";  
        echo $ErrMsg;  
    } else {  
        echo $name;  
    }  
?>

</body>
</html>