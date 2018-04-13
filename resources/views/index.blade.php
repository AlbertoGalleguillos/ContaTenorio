<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/materialize.css">    
    <title>Contabilidad Tenorio</title>
</head>
<body>

<nav class="deep-purple">
    <div class="container nav-wrapper">
        <a href="#" class="brand-logo">Contabilidad Tenorio</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        </ul>
    </div>
</nav>

<main>
<br>
<div class="container">
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center">Pyme</span>
                    <ul>
                        <li><i class="material-icons">work</i> Inicio de Actividades Sii<li>
                        <li><i class="material-icons">account_balance</i> Patentes Comerciales<li>
                        <li><i class="material-icons">face</i> Asesorías Personalizadas<li>
                        <li><i class="material-icons">library_books</i> Libros Oficiales<li>
                        <li><i class="material-icons">subject</i> Declaraciones Mensuales<li>
                        <h4 class="center">Pago Único : 3 UF</h4>
                    <ul>
                </div>
                <div class="card-action center">
                    <a class="blue-text" href="#">Contratar</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center">Empresarial</span>
                    <ul>
                        <li><i class="material-icons">work</i> Inicio de Actividades Sii<li>
                        <li><i class="material-icons">account_balance</i> Patentes Comerciales<li>
                        <li><i class="material-icons">face</i> Asesorías Personalizadas<li>
                        <li><i class="material-icons">library_books</i> Libros Oficiales<li>
                        <li><i class="material-icons">subject</i> Declaraciones Mensuales<li>
                        <li><i class="material-icons">timeline</i> Análisis Clientes/Proveedores<li>
                        <li><i class="material-icons">swap_horiz</i> Flujos de Efectivo<li>
                        <li><i class="material-icons">trending_up</i> Planificación y Proyecciones Tributarias<li>
                        <li><i class="material-icons">insert_chart</i> Estado de Resultado<li>
                        <li><i class="material-icons">payment</i> Remuneraciones<li>
                        <h4 class="center">Pago Único: 6 UF</h4>
                    <ul>
                </div>
                <div class="card-action center">
                    <a class="blue-text" href="#">Contratar</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
	<form class="section center" method="POST" action="/contact">
        {{ csrf_field() }}
		<h4>Solicita una evaluación gratuita</h4>
		<div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix">face</i>
				<input name="contact" id="contact" type="text" required>
				<label for="contact">Nombre</label>
			</div>
			<div class="input-field col s12 l6">
				<i class="material-icons prefix">phone</i>
				<input name="phone" id="phone" type="tel" class="validate" required>
				<label for="phone">Teléfono</label>
			</div>
			<div class="input-field col s12 l6">
				<i class="material-icons prefix">email</i>
				<input name="email" id="email" type="email" class="validate" required>
				<label for="email" data-error="Verifique la dirección de correo electrónico" data-success="Correo Válido">Correo</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">mode_edit</i>
				<textarea name="message" id="message" class="materialize-textarea" required></textarea>
				<label for="message">Cuéntanos lo que necesitas</label>
			</div>
			<button class="btn waves-effect waves-light light-blue" type="submit">Enviar
				<i class="material-icons right">send</i>
			</button>
		</div>
	</form>
</div>

</main>
    <footer class="page-footer deep-purple">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                <h5 class="white-text">Contabilidad Tenorio</h5>
                <p class="grey-text text-lighten-4">Contabilidad para todos !</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Desarrollador por <a class="grey-text text-lighten-4" href="#!">Segasi</a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>