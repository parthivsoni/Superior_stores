<?php
session_start();

session_destroy();

// var myJsonString = JSON.stringify(myArray);
echo "<script> window.open('log-in.php?logged_out=You have logged out, come back soon!','_self')

</script>";

?>
