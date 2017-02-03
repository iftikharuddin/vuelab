<!DOCTYPE html>
<html>
<head>
	<title>Vue Learning</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="app">
	<input type="text" v-on:input="cssClass = $event.target.value" name="">
	<p :class="cssClass">Class: {{cssClass}}</p>
</div>
	<script type="text/javascript" src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
	<script type="text/javascript" src="script.js"></script>

</body>
</html>