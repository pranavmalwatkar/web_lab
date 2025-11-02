
<html>
<head>
  <title>Get Textbox Value using jQuery</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#btnGetValue").click(function() {
        // Get the value of the textbox
        var inputValue = $("#myTextbox").val();

        // Display the value in an alert box
        alert("Textbox value is: " + inputValue);
      });
    });
  </script>
</head>

<body>
  <h2>Get Value of Textbox using jQuery</h2>

  <label for="myTextbox">Enter something:</label>
  <input type="text" id="myTextbox" placeholder="Type here...">
  
  <button id="btnGetValue">Get Value</button>
</body>
</html>
