<?php include("header.php"); ?>

<style>
 #table{
	 margin-top: 50px; 
	 margin-left: 5% ;
	 border: 4px solid black; 
	 border-radius: 25px;
	 border-collapse: separate;
	}
 #boxc1{
	background-color: antiquewhite; 
	opacity: 1;
	border-top-left-radius: 20px;
	border-top-right-radius: 20px;
	}

 #boxc2{
	background-color: lightskyblue; 
	opacity: 0.9;

	}
	
 #boxc3{
	background-color: palegreen; 
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	}
	
	
</style>


<table id="table" width="500" height="400" border="1" style="margin-top: 50px; margin-left: auto; margin-right: auto; border-radius: 20px">
  <tbody>
    <tr>
       <td id="boxc1" colspan="3" style="border:none; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'"><font size="7" color="red" align="center">Login</td>
    </tr>
    <tr>
      <td id="boxc2" align="center"><strong>Username</strong></td>
      <td id="boxc2"><input type="text" id="username" name="username"></td>
    </tr>
    <tr>
      <td id="boxc2" align="center"><strong>Password</strong></td>
      <td id="boxc2"><input type="password" id="password" name="password"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Login" style="background-color: white; font-size: 20px; width: 100px; color: blue"></td>
    </tr>
  </tbody>
</table>


