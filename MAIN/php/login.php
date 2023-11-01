<!DOCTYPE html>
<html lang="pt_br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Universe</title>
</head>
<body>
    <img src="../images/UniverseVermelho.png" style="width: 20vw; margin: 10px; padding: 0;">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Cadastre-se</h1>
			<div class="social-container">
				<img src="../images/facebook-app-symbol.png" class="social"><i class="fab fa-facebook-f"></i></img>
				<img src="../images/google.png" class="social"><i class="fab fa-google-plus-g"></i></i>
				<img src="../images/microsoft.png" class="social"><i class="fab fa-linkedin-in"></i></img>
			</div>
			<span>ou use o email para se cadastrar</span>
			<input type="text" placeholder="Nome" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Senha" />
			<button><a href="concadastro.php">Cadastrar</a></button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Login</h1>
			<div class="social-container">
				<img src="../images/facebook-app-symbol.png" class="social"><i class="fab fa-facebook-f"></i></img>
				<img src="../images/google.png" class="social"><i class="fab fa-google-plus-g"></i></i>
				<img src="../images/microsoft.png" class="social"><i class="fab fa-linkedin-in"></i></img>
			</div>
			<span>ou use sua conta</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Senha" />
			<a href="#">Esqueceu sua senha?</a>
			<button><a href="home.php">Entrar</a></button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem Vindo de Volta!</h1>
				<p>Para manter-se conectado, por favor entre com suas informações pessoais </p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá, Amigo!</h1>
				<p>Cadastre-se conosco e vamos trilhar uma jornada juntos!</p>
				<button class="ghost" id="signUp">Cadastrar-se</button>
			</div>
		</div>
	</div>
</div>
</body>


 <script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
 </script>
</html>