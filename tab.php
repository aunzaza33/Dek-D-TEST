
<div class ="tab">
             <ul>
                <?php 
                    if (isset($_GET['ปกติ'])||(!isset($_GET['ปกติ'])&&(!isset($_GET['รูปภาพ']))&&(!isset($_GET['โพลล์']))&&!isset($_GET['โต้วาที']))) { 
                ?>
                <li class="active"><a href="index Dek-D Test.php?ปกติ">ปกติ</a></li>
                <?php } 
                   else if (!isset($_GET['ปกติ'])) { 
                ?>
                <li><a href="index Dek-D Test.php?ปกติ">ปกติ</a></li>
                <?php }?>
                <?php 
                    if (isset($_GET['รูปภาพ'])) { 
                ?>
                <li class="active"><a href="index Dek-D Test.php?รูปภาพ">รูปภาพ</a></li>
                <?php } 
                    if (!isset($_GET['รูปภาพ'])) { 
                ?>
                <li><a href="index Dek-D Test.php?รูปภาพ">รูปภาพ</a></li>
                <?php }?>
                <?php 
                    if (isset($_GET['โพลล์'])) { 
                ?>
                <li class="active"><a href="index Dek-D Test.php?โพลล์">โพลล์</a></li>
                <?php } 
                    if (!isset($_GET['โพลล์'])) { 
                ?>
                <li><a href="index Dek-D Test.php?โพลล์">โพลล์</a></li>
                <?php }?>
                <?php 
                    if (isset($_GET['โต้วาที'])) { 
                ?>
                <li class="active"><a href="index Dek-D Test.php?โต้วาที">โต้วาที</a></li>
                <?php } 
                    if (!isset($_GET['โต้วาที'])) { 
                ?>
                <li><a href="index Dek-D Test.php?โต้วาที">โต้วาที</a></li>
                <?php }?>
            </ul>
    </div>

<?php 