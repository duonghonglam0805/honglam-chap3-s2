<?php include_once "templates/header.php" ?>
<?php
    // YOUR CODE HERE 
    if (isset($_POST["color"])) $color =  $_POST["color"] ;
    if(isset($_POST["number"])) $range = $_POST["number"];
    if(isset($_POST["date"])) $date  =  $_POST["date"]
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php  echo $color //color; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php   echo $range//range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $date //date; ?></span>
    </div>

<?php include_once "templates/footer.php"?>