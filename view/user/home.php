<?php
require_once 'cdn.html'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/JPG" href="https://i.blogs.es/4331c9/cifrar/1024_2000.jpg">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<a href="home.php"><img src="https://i.blogs.es/8b0d3c/clave/1366_2000.jpg" alt="UTC"></a>
			</div>
			<nav>
				<ul>
					<li><a href="home.php">Inicio</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				</ul>
			</nav>
		</div>

		

	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenido!</h1>
			</div>

			<div class="articulo" style="background: #fff;">
				<article>
					<h1 id="inicio">Encriptar: qué es, para qué sirve y cómo cifrar tus archivos</h1>
					<p>Vamos a explicarte qué es exactamente encriptar datos en la informática, o como se dice realmente, cifrar los datos. Lo vamos a hacer intentando explicarlo todo de una manera sencilla, de forma que incluso si no tienes grandes conocimientos informáticos puedas entender la finalidad y el funcionamiento general de estas técnicas.</p>

					<p>Vamos a empezar explicándote bien qué significa exactamente cifrar o encriptar algo, Luego, te diremos para qué sirve exactamente cifrar los mensajes u otros datos a través de la red, y terminaremos con unos consejos simples para que sepas cómo funciona el cifrado de tus principales aplicaciones y hasta qué punto debes preocuparte por él.</p>
					<img src="https://i.blogs.es/4331c9/cifrar/1024_2000.jpg"
					align="center"
					width="80%">

					<br><br>

					<h2 id="significado">Qué significa cifrar o encriptar algo</h2>

					<p>Cifrar una información significa ocultar el contenido de un mensaje a simple vista, de manera que haga falta una interacción concreta para poder desvelar ese contenido. El contenido de este mensaje pueden ser archivos, datos, mensajes o cualquier tipo de información que se te ocurra. En el contexto de Internet, cualquier contenido que envíes desde tu ordenador a la red puede ser cifrado.</p>


					<p>Pero el cifrado ya existía mucho antes de Internet. De hecho, el primer método criptográfico era conocido como Escítala, y fue utilizado hace 2.500 años. Desde entonces, casi todas las grandes civilizaciones han utilizado algún método para encriptar sus mensajes, desde los romanos hasta los que vinieron después, y una de las razones por las que los Aliados ganaron la Segunda Guerra Mundial fue debido a que Alan Turing consiguió romper el cifrado de la máquina Enigma usada por los Nazis.

					</p>

					<p>Volviendo a Internet, piensa en la red de redes como un servicio postal en el que todas las cartas van sin sobre, y que cualquiera puede leer su contenido para leerlo espiándote o para meter en los mensajes algún tipo de malware. En este contexto, la mejor manera de proteger el mensaje es cifrarlos. No sería exactamente como meter las cartas que envías en sobres, sino más bien modificando su contenido.

					</p>

					<p>En el mundo criptográfico, cifrar es un procedimiento que utiliza un algoritmo matemático. Estos algoritmos modifican el texto, de manera que sólo sabiendo el mismo algoritmo se puede descifrar para saber qué es lo que se dice.

					</p>

					<p>En nuestro ejemplo de antes, sería como mandar las cartas con un texto que no puedes entender. A simple vista, parece una secuencia incomprensible de letras, números y símbolos sin sentido. Pero si tuvieras el algoritmo de cifrado, podrías saber que a determinada letra la sustituye otra, que este símbolo significa esto y lo otro, y en definitiva, podrías volver a modificar el contenido de la carta para saber lo que significa realmente.

					</p>

					<p>Estas claves de cifrado para el algoritmo pueden ser de dos maneras diferentes. Puede darse el caso de que el algoritmo de cifrado utilice la misma clave para cifrar y descifrar el mensaje, a lo cuál se le llama criptografía simétrica. Pero también puede que la clave de cifrado y la de descifrado sean distintas para mejorar la seguridad en el caso de que una se filtre, algo que se conoce como criptografía híbrida.

					</p>

					<p>También tienes que tener en cuenta que el algoritmo de cifrado puede cambiar el tipo de caracteres del mensaje o incluso el alfabeto para que sea mas difícil de entender. El cifrado de por sí no es un método definitivo que vuelve los documentos totalmente secretos, y en ocasiones habrá que complementarlo con otras técnicas o tecnologías de seguridad para conseguir comunicaciones realmente privadas.

					</p>
					<img src="https://i.blogs.es/8b0d3c/clave/1366_2000.jpg"
					align="center"
					width="80%">
				</article>
			</div>

			<aside style="position: fixed; right: 6%; top: 27%;">
				<div class="widget">
					<h3>Articulos Relacionados</h3>
					<ul>
						<li><a href="#inicio">Encriptar: qué es, para qué sirve y cómo cifrar tus archivos</a></li>
						<li><a href="#significado">Qué significa cifrar o encontrar algo</a></li>
					</ul>
				</div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="wrapp">
			<p>Copyright ©. Francisco Adrian Salas Sandoval</p>
		</div>
	</footer>
</body>
</html>