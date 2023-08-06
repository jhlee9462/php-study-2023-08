<form action="site.php" method="get">
    <label>
        Name : <input type="text" name="name">
    </label>
    <label>
        Age : <input type="number" name="age">
    </label>
    <input type="submit">
</form>
<br>
Your name is <?php echo $_GET["name"] ?>
<br>
Your age is <?php echo $_GET["age"] ?>
