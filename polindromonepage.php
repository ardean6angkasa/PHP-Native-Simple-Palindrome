<!DOCTYPE html>
<html>

<head>
    <title>Palindrome Checker</title>
</head>

<body>
    <h1>Palindrome Checker</h1>
    <form action="" method="post">
        Enter a word or phrase: <input type="text" name="inputString" required>
        <input type="submit" value="Check">
    </form>

    <?php
    function isPalindrome($str)
    {
        $str = str_replace(' ', '', $str);
        $str = strtolower($str);
        return $str === strrev($str);
    }

    if (isset($_POST['inputString'])) {
        $inputString = $_POST['inputString'];

        if (isPalindrome($inputString)) {
            echo "<p>'$inputString' is a palindrome!</p>";
        } else {
            echo "<p>'$inputString' is not a palindrome.</p>";
        }
    } else {
        echo "<p>Please enter a word or phrase to check.</p>";
    }
    ?>
</body>

</html>