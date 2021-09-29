<?php 

$server = "localhost";
$user = "root";
$pass = "root";
$database = "database";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('La connexion a échouée.')</script>");
}
session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: client.php");
	} else {
		echo "<script>alert('Email ou mot de passe incorrect.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://kit.fontawesome.com/c79ef9f9bb.js" crossorigin="anonymous"></script>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap');
        </style>
	<title>Login Form - Pure Coding</title>
	<style type="text/css">
	.body-connexion {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(13.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.connexion {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}

.connexion .login-text {
    color: #24262b;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}

.connexion .login-email .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}

.connexion .login-email .input-group input {
    width: 100%;
    height: 100%;
    border: 2px solid #fab1a0;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}

.connexion .login-email .input-group input:focus, .connexion .login-email .input-group input:valid {
    border-color: #ff947c;
}

.connexion .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #fab1a0;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

.connexion .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #ff947c;
}

.login-register-text {
    color: #24262b;
    font-weight: 600;
}

.login-register-text a {
    text-decoration: none;
    color: #fab1a0;
}
@media(max-width:430px){
        .connexion {
            width: 300px;
        }
        .connexion .login-social {
            display: block;
        }
        .connexion .login-social a {
            display: block;
        }
   
        
    }

</style>
</head>
<body>
	<!---------------------header----------------------->

	<header>
    
	<div class="logo"><a href="#">BeautéMelly</a></div>
   
	<input type="checkbox" id="chk">
	<label for="chk" class="show-menu-btn">
		<i class="fas fa-bars"></i>
	</label>

	<ul class="menu">
		
	<li id="left"><a href="../index.php"><i class="fas fa-home"></i><strong> Acceuil</strong></a></li>
            <li id="left"><a href="produit.php"><i class="fas fa-shopping-bag"></i><strong> Produits</strong></a></li>
            <li id="left"><a href="marque.php"><i class="far fa-gem"></i><strong> Marques</strong></a></li>
            <li id="left"><a href="magazine.php"><i class="far fa-newspaper"></i><strong> Magazine</strong></a></li>
		<label for="chk" class="hide-menu-btn">
			<i class="fas fa-times"></i>
		</label>
		
	</ul>
	<ul class="profile">
		<li><a href="connexion.php"><i class="fas fa-user"></i><strong> S'identifier</strong></a></li>
	</ul>
</header>

<nav class="navbarre">
			<div class="divsearch">
			<div class="search">
				 <input class="search-txt" type="text" name="box" placeholder="Rechercher un produit...">
				 <a  class="search-btn"href="#"><i class="fas fa-search"></i></a>
			</div>
		</div>
	   </nav>




<div  class="body-connexion">
<!----------------------connexion---------------------->
	<div class="connexion">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Connexion</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Mot de passe" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">S'identifier</button>
			</div>
			<p class="login-register-text">Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous</a>.</p>
		</form>
	</div>
</div>
  <!--footer--------------------------------------------->
  <?php include("footer.php"); ?>
</body>
</html>