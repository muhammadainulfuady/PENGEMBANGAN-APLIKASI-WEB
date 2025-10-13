<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
  	body {
  		background-color: orange;
  	}

  	fieldset {
  		background-color: grey;
  		padding: 10px;
  	}

  	fieldset td {
  		padding: 10px;
  	}

  	fieldset legend {
  		background-color: lightblue;
  		display: inline-block;
  		padding: 10px;
  		border-radius: 10px;
  		color: green;
  		font-weight: bold;
  	}
    td {
      background-color: lightblue;
      padding: 10px;
    }
  </style>
</head>
<body>
  <h1>Register</h1>
  <div>
    <form action="processData.php" method="post" >
      <fieldset>
        <legend>Person Details</legend>
        <table border="1">
          <tr>
            <td><label for="username">Username</label></td>
            <td><input type="text" id="username" name="username"></td> 
          </tr>
          <tr>
            <td><label for="email">Email address</label></td>
            <td><input type="email" id="email" name="email"></td>
          </tr>
          <tr>
            <td><label for="password">Password</label></td>
            <td><input type="text" id="password" name="password"></td>
          </tr>
          <tr>
            <td><label for="address">Street Address</label></td>
            <td><textarea id="address" name="address" rows="3"></textarea></td>
          </tr>
          <tr>
            <td><label for="state">State</label></td>
            <td>
              <select id="state" name="state">
                <option value="queensland">Queensland</option>
                <option value="nsw">New South Wales</option>
                <option value="victoria">Victoria</option>
                <option value="tasmania">Tasmania</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label>
            </td>
          </tr>
          <tr>
            <td><label for="vegetarian">Vegetarian?</label></td>
            <td><input type="checkbox" id="vegetarian" name="vegetarian" value="yes"></td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="date">Masukkan tahun lahir</label>
              <input type="date" name="date" id="date">
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;">
              <input type="submit" value="Submit">
              <input type="reset" value="Reset">
            </td>
          </tr>
        </table>
      </fieldset>
      <?php  ?>
    </form>
  </div>
</body>
</html>