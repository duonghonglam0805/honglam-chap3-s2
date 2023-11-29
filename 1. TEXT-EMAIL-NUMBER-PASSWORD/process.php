<?php include_once "templates/header.php"; ?>
<ul class="list-group">
    <?php
    // YOUR CODE HERE
    ?>
    <li class="list-group-item"><?php if (isset($_POST["name"])) echo $_POST["name"]; // name ?></li>
    <li class="list-group-item"><?php if (isset($_POST["email"])) echo $_POST["email"]; // email ?></li>
    <li class="list-group-item"><?php if (isset($_POST["password"])) echo $_POST["password"]; // password ?></li>
    <li class="list-group-item"><?php if (isset($_POST["number"])) echo $_POST["number"]; // number ?></li>
    <li class="list-group-item"><?php if (isset($_POST["message"])) echo $_POST["message"]; // message ?></li>
</ul>
<?php include_once "templates/footer.php"; ?>