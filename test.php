<?php
include "User.php";
$user1 = new User("A","123");
 echo $user1->isValid("B","1234");
 echo "<br>";
 echo $user1->isValid("A","123");
