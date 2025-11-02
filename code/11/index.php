
<!-- filepath: c:\wamp64\www\11\book_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Book Details Form</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $book_name = htmlspecialchars($_POST['book_name']);
    $author_name = htmlspecialchars($_POST['author_name']);
    $publisher_name = htmlspecialchars($_POST['publisher_name']);
    $category = htmlspecialchars($_POST['category']);
    $synopsis = htmlspecialchars($_POST['synopsis']);

    echo "<h2>Book Details Submitted:</h2>";
    echo "<strong>Book Name:</strong> $book_name<br>";
    echo "<strong>Author Name:</strong> $author_name<br>";
    echo "<strong>Publisher Name:</strong> $publisher_name<br>";
    echo "<strong>Category:</strong> $category<br>";
    echo "<strong>Synopsis:</strong> $synopsis<br><hr>";
}
?>
<form method="post" action="">
    <label>Book Name:</label>
    <input type="text" name="book_name" required><br><br>

    <label>Author Name:</label>
    <input type="text" name="author_name" required><br><br>

    <label>Publisher Name:</label>
    <input type="text" name="publisher_name" required><br><br>

    <label>Category:</label>
    <input type="text" name="category" required><br><br>

    <label>Synopsis:</label><br>
    <textarea name="synopsis" rows="4" cols="40" required></textarea><br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>
</body>
</html>