<?php
$con = mysqli_connect("localhost", "root", "", "iplogger");
$num1 = rand(1, 99);
$num2 = rand(1, 99);
$answer = $num1 + $num2;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["answer"] == $_POST["realanswer"]) {
        $con->query("TRUNCATE TABLE `log`");
        echo "successfully erased the list!<br>";
    } else {
        echo "wrong!<br>";
    }
}
?>
solve this captcha to prove that you are a human.
<form method="post" action="erase.php">
    <label for="answer"><?= $num1 . "+" . $num2 . "=" ?></label>
    <input type="text" name="answer" placeholder="answer" required>
    <input type="hidden" name="realanswer" value="<?= $answer ?>">
    <br>
    <input type="submit" value="submit">
</form>