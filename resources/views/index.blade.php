<!DOCTYPE HTML>
<html>
<head>
	@include('html-config.head')
</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Bienvenida</a></li>
							<li><a href="#one">¿Quién soy?</a></li>
							<li><a href="#two">¿Qué hago?</a></li>
							<li><a href="#three">Sígueme</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Kuzaikun</h1>
							<p>Desarrollo web y aplicaciones.<br/>
							   ¡Aventúrate a mi sitio!</p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Muéstrame</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Adrián Nájera</h2>
									<p>La vida debe ser programada a base de buenas vibras.
									<br/>¡Te invito a que conozcas un poco de mi!</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">Más nformación</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Experiencia</h2>
							<p>Tengo experiencia en aplicaciones web con varias tecnologías. Me gusta mucho descubrir herramientas y aportar conocimiento a quien lo necesite. Estas son algunas características de mis desarrollos.</p>
							<div class="features">
								<section>
									<span class="icon major fa-code"></span>
									<h3>Desarrollo de aplicaciones</h3>
									<p>¡Me gusta programar! En diversos lenguajes, usando los mejores frameworks para aportar valor al cliente.</p>
								</section>
								<section>
									<span class="icon major fa-lock"></span>
									<h3>Seguridad</h3>
									<p>Los frameworks de desarrollo empresarial ofrecen en gran medida la seguridad que se requiere en la web.</p>
								</section>
								<section>
									<span class="icon major fa-cog"></span>
									<h3>Soporte técnico</h3>
									<p>Experiencia en mantenimiento correctivo y preventivo a equipos de cómputo, laptops y desktops.</p>
								</section>
								<section>
									<span class="icon major fa-desktop"></span>
									<h3>Diseño de páginas web</h3>
									<p>Posiciono tu negocio en los primeros lugares con tu nueva web ¡Descubre el lado motivante del internet!</p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="generic.html" class="button">Ver portafolio</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Mantente en contacto</h2>
							<p>¿Te interesa contactarme? Ayúdame llenando el siguiente formulario para poder comunicarme a la brevedad contiigo.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Nombre</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Mensaje</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Envíar mensaje</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Email</h3>
											<a href="#">arien02.contacto@gmail.com</a>
										</li>
										<li>
											<h3>Teléfono</h3>
											<span>(044) 55 24 19 49 57</span>
										</li>
										<li>
											<h3>Redes sociales</h3>
											<ul class="icons">
												<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			@include('layouts.footer')
			@include('html-config.scripts')
	</body>
</html>
