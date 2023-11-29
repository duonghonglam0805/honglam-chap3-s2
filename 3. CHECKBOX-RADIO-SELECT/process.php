<?php include_once "templates/header.php" ?>
<?php
// YOUR CODE HERE
if(isset( $_POST['province'])) $province = $_POST['province']; 
if (isset( $_POST['gender'])) $gender = $_POST['gender'];
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province // province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php 
            if ($gender === "Male"){
            ?>
            <img src="<?php echo "images/male.png" ?>" alt="image of male" width="200px" height="200px">
            <?php }else {?>
            <img src="<?php echo "images/female.png" ?>" alt="image of female"  width="200px" height="200px">
                
            <?php }?>

        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php if (isset( $_POST['subject-html'])){echo"<span style='background-color:pink;border-radius:5px ; padding: 5px; ;margin-right: 10px '>".$_POST['subject-html']."</span>";} 
                if (isset( $_POST['subject-css'])) {echo "<span style ='background-color:pink;border-radius:5px ; padding: 5px; margin-right: 10px '>" . $_POST['subject-css'] . "</span>" ;} ; 
                if (isset($_POST['subject-JavaScript']))  { echo "<span style ='background-color:pink;border-radius:5px ; padding: 5px; margin-right: 10px '>". $_POST['subject-JavaScript'] . "</span>" ;};
                if (isset( $_POST['subject-php'])) {echo "<span style ='background-color:pink;border-radius:5px ;mpadding: 5px; argin-right: 10px'>".$_POST['subject-php'] . "</span> ";}; 
            ?>
        </div>
    </div>

<?php include_once "templates/footer.php" // FOOTER ?>