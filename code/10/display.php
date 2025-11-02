<?php
// Check if cookies exist (load preferences)
if(isset($_COOKIE['textColor']) && isset($_COOKIE['fontChoice']) && isset($_COOKIE['fontSize']) && isset($_COOKIE['userText'])) {
    $textColor = $_COOKIE['textColor'];
    $fontChoice = $_COOKIE['fontChoice'];
    $fontSize = $_COOKIE['fontSize'];
    $userText = $_COOKIE['userText'];
} else {
    // Load from form submission
    $textColor = $_POST['textColor'] ?? "#000000";
    $fontChoice = $_POST['fontChoice'] ?? "Arial";
    $fontSize = $_POST['fontSize'] ?? "16";
    $userText = $_POST['userText'] ?? "";
}

// Save preferences in cookies if user chooses "yes"
if(isset($_POST['save']) && $_POST['save'] == "yes") {
    setcookie("textColor", $textColor, time() + (86400 * 30), "/"); // 30 days
    setcookie("fontChoice", $fontChoice, time() + (86400 * 30), "/");
    setcookie("fontSize", $fontSize, time() + (86400 * 30), "/");
    setcookie("userText", $userText, time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formatted Text</title>
</head>
<body>
    <h2>Your Formatted Text</h2>
    <div style="color: <?= htmlspecialchars($textColor) ?>;
                font-family: <?= htmlspecialchars($fontChoice) ?>;
                font-size: <?= intval($fontSize) ?>px;
                border:1px solid #ccc; padding:10px; width:fit-content;">
        <?= nl2br(htmlspecialchars($userText)) ?>
    </div>
    <br>
    <a href="index.php">Back</a>
</body>
</html>
