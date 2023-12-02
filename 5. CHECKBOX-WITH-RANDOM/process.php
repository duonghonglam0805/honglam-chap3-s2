<?php require_once './templates/header.php' ?>
<?php
// CODE HERE 
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
$randomColor = $colors[array_rand($colors)];
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            if(isset($_POST['checkbox_html'])) {
                $randomColor = $colors[array_rand($colors)];
                echo "<span class='bg-$randomColor ' style='padding: 2px ; border-radius: 5px'>" . $_POST['checkbox_html'] . "</span>";
            }
            if(isset($_POST['checkbox_css'])) {
                $randomColor = $colors[array_rand($colors)];
                echo "<span class='bg-$randomColor ' style='padding: 2px ; border-radius: 5px'>" . $_POST['checkbox_css'] . "</span>";}
            if(isset($_POST['checkbox_javascript'])) 
            {
                $randomColor = $colors[array_rand($colors)];
                echo "<span class='bg-$randomColor ' style='padding: 2px ; border-radius: 5px'>" . $_POST['checkbox_javascript'] . "</span>";
            }

            if(isset($_POST['checkbox_php'])){
                $randomColor = $colors[array_rand($colors)];
                echo "<span class='bg-$randomColor ' style='padding: 2px ; border-radius: 5px'>" . $_POST['checkbox_php'] . "</span>";}
             ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>