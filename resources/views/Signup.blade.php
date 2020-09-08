<!DOCTYPE html>
<html>
<head>
	<title>Signup User</title>
</head>
<body>

	<h1>Signup user page</h1>

	<form method="post">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>Employer name</td>
				<td><input type="text" name="name" value=" text"></td>
			</tr>
            <tr>
				<td>Company name</td>
				<td><input type="text" name="companyname" value="text"></td>
			</tr>

            <tr>
				<td>Contact no</td>
				<td><input type="text" name="contactno" value="text"></td>
			</tr>

            <tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="text"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>