<?php
  $con = mysqli_connect('localhost','root','','YOUR DB NAME');
  if(mysqli_connect_errno($con))
{
		echo 'Failed to connect';
}

?>
