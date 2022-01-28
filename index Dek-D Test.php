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
       <h2>ตั้งกระทู้ใหม่</h2>
        <form action="Thread.php" method="post" enctype="multipart/form-data">
            <?php require "tab.php"?>

        <input type="Text" name="Thread" pattern="[A-Za-z|ก-๙]{4,140}" style="width: 13cm; height: 2em;" placeholder ="หัวข้อกระทู้" required> 
        <div class="Edit">
        <?php if (isset($_GET['ปกติ'])) { 
            ?>
                <label style="text-align: left">เนื้อหากระทู้</label><br>
                <textarea name="data" minlength="6" maxlength="2000" style="width: 13cm; height: 20em;" required></textarea><br>
                <?php }?>

        <?php if (isset($_GET['รูปภาพ'])) { 
            ?>
                <label style="text-align: left">รูปภาพ</label><br><br>
                <input type="file" name="txt_file" class="form-control textstyle" require><br><br>       
            <?php }?>

        <?php if (isset($_GET['โพลล์'])) { 
            ?>
                <label style="text-align: left">ตัวเลือกของโพลล์สำรวจ</label><br>
                <input type="Text" name="choice" minlength="2" maxlength="30" style="width: 13cm; "placeholder="ตัวเลือกที่1" required></input><br>
                <input type="Text" name="choice2" minlength="2" maxlength="30" style="width: 13cm; "placeholder="ตัวเลือกที่2" required></input><br>
                <input type="Text" name="choice3" minlength="2" maxlength="30" style="width: 13cm; "placeholder="ตัวเลือกที่3" required></input><br><br>
                <?php }?>
        
        <?php if (isset($_GET['โต้วาที'])) { 
            ?>
                <label style="text-align: left">เนื้อหาการพูดคุย</label><br>
                <input type="Text" name="Talk" minlength="2" maxlength="50" style="width: 13cm; "placeholder="พูดคุย" required></input><br>
                <br>
                <?php }?> 

        <?php  if (!isset($_GET['ปกติ'])&&(!isset($_GET['รูปภาพ']))&&(!isset($_GET['โพลล์']))&&!isset($_GET['โต้วาที'])) {?>
                <label style="text-align: left">เนื้อหากระทู้</label><br>
                <textarea name="data" minlength="6" maxlength="2000" style="width: 13cm; height: 20em;" required></textarea><br>
        <?php }?>
      
                <button type="reset" name="reset" class="btnreset">Reset</button>
                <button type="submit" name="submit" class="btn">Post</button>
            </div>
           </form>
       </div>
</body>
</html>