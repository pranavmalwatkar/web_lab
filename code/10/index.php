<!DOCTYPE html>
<html>
<head>
    <title>Text Formatter</title>
</head>
<body>
    <h2>Text Formatter</h2>
    <?php
    // Prefill values from cookies if available
    $userText = isset($_COOKIE['userText']) ? htmlspecialchars($_COOKIE['userText']) : '';
    $textColor = isset($_COOKIE['textColor']) ? $_COOKIE['textColor'] : '#000000';
    $fontChoice = isset($_COOKIE['fontChoice']) ? $_COOKIE['fontChoice'] : 'Arial';
    $fontSize = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] : '16';
    ?>
    <form action="display.php" method="post">
        Enter your text:<br>
        <textarea name="userText" rows="5" cols="40"><?php echo $userText; ?></textarea><br><br>

        Select Text Color:
        <input type="color" name="textColor" value="<?php echo $textColor; ?>"><br><br>

        Select Font:
        <select name="fontChoice">
            <option value="Arial" <?php if($fontChoice=='Arial') echo 'selected'; ?>>Arial</option>
            <option value="Verdana" <?php if($fontChoice=='Verdana') echo 'selected'; ?>>Verdana</option>
            <option value="Times New Roman" <?php if($fontChoice=='Times New Roman') echo 'selected'; ?>>Times New Roman</option>
            <option value="Courier New" <?php if($fontChoice=='Courier New') echo 'selected'; ?>>Courier New</option>
        </select><br><br>

        Font Size:
        <input type="number" name="fontSize" value="<?php echo $fontSize; ?>"> px<br><br>

        Save preferences for next visit?
        <input type="radio" name="save" value="yes"> Yes
        <input type="radio" name="save" value="no" checked> No<br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
