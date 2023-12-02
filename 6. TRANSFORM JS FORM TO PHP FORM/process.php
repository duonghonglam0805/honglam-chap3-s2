<?php 
if (isset($_POST['password'])){
    if ($_POST['password']==="1234"){
        echo "This is sensitive data visible only if the user knows the correct password";
    }
}
?>