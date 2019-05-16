<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update User details</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
  <?php
  include('includes/connection.php');
  if(isset($_POST['submit_upt'])){
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mail = $_POST['email'];
    $dob = $_POST['date'];
    $tel = $_POST['telephone'];
    $gender = $_POST['gender'];

    $query = "UPDATE user_table SET username='$username', password='$password', email='$mail', date_of_birth='$dob', telephone='$tel', gender='$gender' WHERE user_id=$user_id";
    if(mysqli_query($mysqli,$query)){
      print 'Update succesful';
    }else{
      print 'Update failed :'.mysqli_error($mysqli);
    }
  }
  if($proceed){
    $user = "SELECT * FROM user_table ORDER BY username ASC";
    $res = mysqli_query($mysqli,$user);
    
  } 
  ?>
  <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1>Update User details</h1>
    <p>
      <label for="username">Select user:  </label>
      <select name="user_id" class="ajax_trigger_user">
        <option>Select user</option>
        <?php
          while($r = mysqli_fetch_assoc($res)){
            print '<option value="'.$r['user_id'].'">'.$r['username'].'</option>';
          }
        ?>
      </select>
    </p>
    <p>
      <label for="username">User Name:	</label>
      <input type="text" name="username" id="textfield">
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </p>
    <p>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
    </p>
    <p>
      <label for="date">Date of Birth:</label>
      <input type="date" name="date" id="date">
    </p>
    <p>
      <label for="textfield2">Telephone Number:</label>
      <input type="text" name="telephone" id="textfield2">
    </p>

    <input type="radio" name = "gender" value = "male" class="radio male" />Male
    <input type="radio" name = "gender" value = "female" class="radio female" />Female

      <p>
        <input type="button" name="button" id="button" value="Button">
        <input type="submit" name="submit_upt" id="submit" value="Submit">
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </form>
</body>
</html>


