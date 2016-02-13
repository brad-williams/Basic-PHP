<html>
<head>
<title>PHP Example</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<h1>PHP Example</h1>

<!-- If the form has already been submitted properly -->
<? if (isset($_POST[gender] && !isnull($_POST[gender]))) {
echo "<p>You are $_POST['gender']</p>";
} else {
// Or else display the form
echo '<p>Please take our survey below!</p>
<form action="index.php" method="post">
<p>Select your gender:<br />
M<input type="radio" name="gender" value="male"><br />
F<input type="radio" name="gender" value="female">
</p>
</form>';} ?>
</body>
</html>'