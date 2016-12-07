<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
</head>
<body>

	<form action="rezultate.php" method="POST">
		<div class="input-field col s12">
		    <select single>
		      <option value="" disabled selected>Choose your option</option>
		      <option value="1">Option 1</option>
		      <option value="2">Option 2</option>
		      <option value="3">Option 3</option>
		    </select>
		    <label>Materialize Multiple Select</label>
		  </div>

		<h2>Fill in the fields correctly</h2>
		<h3>Capital of  Great Britan</h3>
		<select name="cGB">
		  <option>Cicur</option>
		  <option>Hingeshti</option>
		  <option>London</option>
		  <option>Stauceni</option>
		</select><br>

		<h3>Capital of  Great Moldova</h3>
		<select name="cMD">
		  <option>Cucuruzeshti</option>
		  <option>Balti</option>
		  <option>London</option>
		  <option>Chisinau</option>
		</select><br>

		<h3>Capital of  Cucuruzeshti</h3>
		<select name="cCC">
		  <option>Stepanovka</option>
		  <option>Managvat</option>
		  <option>Sirri</option>
		  <option>Valcer</option>
		</select><br>

		<button type="submit">button</button>
	</form>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>