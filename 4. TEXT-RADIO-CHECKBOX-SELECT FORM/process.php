<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
        
        if(isset($_POST['name'])) $name =  $_POST['name'] ;
        if(isset($_POST['phone'])) $phone =  $_POST['phone'] ;
        if(isset($_POST['email'])) $email =  $_POST['email'] ;
        if(isset($_POST['password'])) $password =  $_POST['password'];
        if(isset($_POST['message'])) $message =  $_POST['message']  ;
        if(isset($_POST['province'])) $province =  $_POST['province'] ; 
        if(isset($_POST['checkbox_listsubject'])) {
            $listSubject = $_POST['checkbox_listsubject'];
            $listSubjectValue = implode("|",$listSubject);
            $subject =  $listSubjectValue;                  
           }
        if(isset($_POST['gender'])) $gender =  $_POST['gender']  ;
    ?>
        <tr>
            <td><?php   echo $name  //name; ?></td>
            <td><?php   echo $email //email; ?></td>
            <td><?php  echo $password //password; ?></td>
            <td><?php  echo $phone //number; ?></td>
            <td><?php echo $message //message; ?></td>
            <td><?php  echo $province //province; ?></td>
            <td>
                <?php 
                   // subjects
           echo $subject;

                ?>
            </td>
            <td><?php echo $gender // gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>