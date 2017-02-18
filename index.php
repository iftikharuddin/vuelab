<!DOCTYPE html>
<html>
<head>
	<title>Vue Learning</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="app">
	<ul>
		<h1 v-if="show != show">Good</h1>
		<li v-else="show" v-for="person in persons">{{person.name}} | {{person.age}}</li>
	</ul>
</div>
	<script type="text/javascript" src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
	<script type="text/javascript" src="script.js"></script>

</body>
</html>