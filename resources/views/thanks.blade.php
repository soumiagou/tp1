<!DOCTYPE html>
<html>
<head>
	<title>Contact Information</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		h1 {
			text-align: center;
			color: #C71585;
		}
		table {
			margin: 0 auto;
			border-collapse: collapse;
			border: 2px solid #FFC0CB;
		}
		th, td {
			padding: 10px;
			border: 1px solid #FF69B4;
		}
	</style>
</head>
<body>
	<h1>Contact Information</h1>
	<table>
		<tr>
			<th>Name</th>
			<td>{{$req -> name}}</td>
		</tr>
		<tr>
			<th>Address</th>
			<td>{{$req -> address}}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{$req -> email}}</td>
		</tr>
		<tr>
			<th>Message</th>
			<td>{{$req -> message}}</td>
		</tr>
	</table>
</body>
</html>
