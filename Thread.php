<?php 
    session_start();
    if (isset($_POST['submit'])) {
        $Thread =  $_POST['Thread'];

        if(isset($_POST['data'])){
            $data =  $_POST['data'];
        }

        if (isset($_FILES['txt_file'])) {
        $image_file = $_FILES['txt_file']['name'];
        $type = $_FILES['txt_file']['type'];
        $size = $_FILES['txt_file']['size'];
        $temp = $_FILES['txt_file']['tmp_name'];
        $path = "upload/" . $image_file;
        $directory = "upload/"; 
        move_uploaded_file($temp, 'upload/'.$image_file);
    }
    
    if(isset($_POST['choice'])){
        $choice1=  $_POST['choice'];
        $choice2=  $_POST['choice2'];
        $choice3=  $_POST['choice3'];
    }

    if(isset($_POST['Talk'])){
        $Talk=  $_POST['Talk'];
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dek-D</title>
    <link rel="stylesheet" href="stylemin.css">
</head>
<body>
    <div class="Thread">
        <label style="margin:20px;color:rgb(255, 115, 0);font-size: 30px;"><?php echo $Thread?></label><br>
        <?php if (isset($data)) { ?>
            <label><?php  echo $data ?></label><br>
        <?php } ?>
        <?php if (isset($image_file)) { ?>
            <img  src = <?php echo "upload/".$image_file  ?> id="output" width="250" height="300" style="display: block;margin: 0 auto;"/><br>
        <?php }?>
        <?php if (isset($choice1)) { ?>
            <input type="radio" name="poll" value=<?php echo $choice1?>><?php echo $choice1?><br>
            <input type="radio" name="poll" value=<?php echo $choice2?>><?php echo $choice2?><br>
            <input type="radio" name="poll" value=<?php echo $choice3?>><?php echo $choice3?><br>
            <button  class="btn">Post</button>
        <?php } ?>
        <?php if (isset($Talk)) { ?>
            <label><?php  echo $Talk ?></label>
            <input type="Text" name="Talking" minlength="2" maxlength="50" style="width: 13cm; "placeholder="พูดคุย" required></input><br><br>
            <button  class="btn">Post</button>
        <?php } ?>
        
            <a href="index Dek-D Test.php">กลับไปหน้าตั้งกระทู้</a>
      
</div>
</body>
</html>