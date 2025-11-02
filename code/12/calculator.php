<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator Web Service</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f9f9faff, #353cc4ff);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            text-align: center;
            width: 320px;
        }
        input, select, button {
            margin: 10px 0;
            padding: 10px;
            width: 90%;
            border: none;
            border-radius: 8px;
            font-size: 16px;
        }
        input {
            background: #fff;
            color: #333;
        }
        select {
            background: #f1f1f1;
        }
        button {
            background-color: #6c63ff;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #5145cd;
        }
        .result {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculator Web Service</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation" required>
                <option value="">Select Operation</option>
                <option value="add">Addition (+)</option>
                <option value="sub">Subtraction (-)</option>
                <option value="mul">Multiplication (×)</option>
                <option value="div">Division (÷)</option>
            </select><br>
            <button type="submit" name="calculate">Calculate</button>
        </form>

        <?php
        // PHP Logic - Calculator Web Service
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = "";

            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        break;
                    case "sub":
                        $result = $num1 - $num2;
                        break;
                    case "mul":
                        $result = $num1 * $num2;
                        break;
                    case "div":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $result = "Error: Division by zero";
                        }
                        break;
                    default:
                        $result = "Invalid Operation Selected";
                        break;
                }
                echo "<div class='result'>Result: $result</div>";
            } else {
                echo "<div class='result'>Please enter valid numbers!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
