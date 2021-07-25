<!DOCTYPE html>
<html>
<body>

<?php
function writeMsg() {
  $a = $_GET['hi'];
  echo $a;
}

writeMsg();
?>
<form action="roughwork.php" method="get">
    <button name="hi" value="go">Submit</button>
</form>
</body>
</html>
