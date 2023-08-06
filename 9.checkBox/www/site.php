<form action="site.php" method="get">
    <label>
        <input type="checkbox" name="fruits[]" value="apple"> 사과
    </label>
    <label>
        <input type="checkbox" name="fruits[]" value="banana"> 바나나
    </label>
    <label>
        <input type="checkbox" name="fruits[]" value="grape"> 포도
    </label>
    <input type="submit">
</form>
<?php
$fruits = $_GET["fruits"];
echo $fruits[0];
?>