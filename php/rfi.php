<html>
<img src="../images/government.jpg" alt="Government Image" height="400" width="400">
<?php
     if ( isset( $_GET['gender'] ) ) {
      include( $_GET['gender'] . '.php' );
   }
?>
<title> Welcome To Government Website </title>
<h1> Welcome to Government Website </h1>
<h2> Sign up as a Citizen Page </h2>
<form method="get">
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  Gender:   
<select name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
   </select>
<br/>
<br/>
   <input type="submit">
</form>
</html>
