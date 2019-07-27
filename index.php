<html>
<head>
  <title>use get method</title>
</head>
<body>
 <form action="user.php" method="get">
  <table border="1" align="center" width="60%">
      <tr>
	     <td>NAME</td>
		 <td><input type="text" placeholder="Enter your name" name="name"/></td>
	  </tr>
	  <tr>
	     <td>ADDRESS</td>
		 <td><textarea placeholder="Enter your address" name="address"></textarea></td>
	  </tr>
	  <tr>
	     <td>GENDER</td>
		 <td>male <input type="radio" name="gender" value="Male" /> female <input type="radio" name="gender" value="Female" /></td>
	  </tr>
	  <tr>
	     <td colspan="2" align="center"><input type="submit" value="Submit" /></td>
	  </tr>
</body>
</html>