<form action="site.php" method="post">
    <label>
        Password : <input type="password" name="password">
    </label>
    <input type="submit">
</form>
<br>
<?php
echo $_POST["password"];
?>
