<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $content = $_POST['message'];
  
  $mailto = "mailto:$email?subject=".urlencode($subject)."&body=".urlencode($content);
  echo "<script>window.location.href = '$mailto';</script>";
}
?>
