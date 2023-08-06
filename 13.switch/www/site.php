<form action="site.php" method="post">
    <label>
        What's your grade?
        <input type="text" name="grade">
    </label>
    <input type="submit">
</form>
<?php
$grade = $_POST["grade"];
switch (strtoupper($grade)) {
    case "A":
        echo "참 잘했어요";
        break;
    case "B":
        echo "잘했어요";
        break;
    case "C":
        echo "다음에는 노력해보세요";
        break;
    case "F":
        echo "다시 하세요...";
        break;
    default:
        echo "제대로 입력하세요";
        break;
}
?>
