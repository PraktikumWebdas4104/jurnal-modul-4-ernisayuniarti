<h1>FORM LOGIN</h1>
  <form action="#" method="post">  
  Username = <input type="text" name="username"><br/><br/>
  Password = <input type="password" name="password"><br/><br/>
  <br/>
  <input type="submit" name="login" value="login">
  </form>

<?php 
if (isset($_POST['login'])) {
  $username=$_POST['username'];
  $password=$_POST['password'];

  if ($username=="admin"&&$password=="admin") {
    echo "LOGIN BERHASIL";
?>

  <a href="proses.php"> LINK KE PROSES </a>

<?php 
  }else{
    echo "LOGIN GAGAL";
  }
}
?>
