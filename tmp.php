<!DOCTYPE html>
<form action="#" method="post">
 <input type="file" size="80px" id="abc" name="profimg"></td>
 <input type="submit" name="submit" value="Submit Here">                   
</form>

<?php
if(isset($_POST['submit']))
{
    echo strval($_FILES["profimg"]["name"]);
}
?>
</ht