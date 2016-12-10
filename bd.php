session_start();
mysql_connect ("localhost","user","password");
mysql_select_db ("reg");

$login = @$_SESSION['login']; 
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
