<?php	
	session_start();  
  
	ini_set('display_errors', true);
	error_reporting(E_ALL);
						
	require_once "../php/Comentario.class.inc";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/noticias.css">
    <title>PlaceHolder - DEPORTES. Bryant: “Necesitamos a Gasol para llegar donde queremos”</title>
    <meta name="description" content="Noticia deportiva del portal PlaceHolder">
    <meta name="author" content="German Martinez Maldonado">
	<script type="text/javascript" src="../js/scriptNoticias.js"></script>
	<noscript>
		Este navegador no es compatible con los scripts que se necesitan ejecutar para el correcto funcionamiento de la páginas, por favor actualice la versión de su navegador a una más reciente que sea compatible
		<br><br>
	</noscript>
</head>

<body>
    
<aside id="publi_sup">
    <a href="http://www.pnsd.msc.es/">
        <img class="img_publicidad_superior" src="../publicidad/publicidad_antidrogas.jpg" alt="publicidad_antidrogas"/>
    </a>
</aside>

<aside id="publi_izq">
    <a href="http://www.samsung.com/es/#home-appliances-home">
        <img class="img_publicidad_lateral" src="../publicidad/publicidad_samsung.jpg" alt="publicidad_samsung"/>
    </a>
</aside>

<aside id="publi_der">
    <a href="http://www.donuts.es/">
        <img class="img_publicidad_lateral" src="../publicidad/publicidad_donuts.jpg" alt="publicidad_donuts"/>
    </a>
</aside>

<section id="cuerpo">
    <header>
        <a href="../index.php">
            <img id="img_cabecera" src="../index/cabecera.jpg" alt="cabecera"/>
        </a>
    </header>
    
    <nav>
        <a href="../nacional.html">
            <img src="../index/nacional.jpg" alt="nacional"/>
        </a>
        
        <a href="../internacional.html">
            <img src="../index/internacional.jpg" alt="internacional"/>
        </a>
        
        <a href="../economia.html">
            <img src="../index/economia.jpg" alt="economia"/>
        </a>
        
        <a href="../deportes.html">
            <img src="../index/deportes.jpg" alt="deportes"/>
        </a>
    </nav>
    
	<section id="cabecera_secciones">
		<img id="img_cabecera_secciones" src="../index/deportes.jpg" alt="deportes"/>
	</section>
   
	<section id="noticia_destacada">
		<article class="deportes">
			<figure id="figura_noticia_destacada">
				<img class="img_noticia_destacada" src="./bryan_necesitamos_a_gasol_20130501/imagen_01.jpg"  
					 alt="bryan_necesitamos_a_gasol_20130501"/>
				<figcaption> Kobe Bryant y Pau Gasol </figcaption>
			</figure>
			<hgroup>
				<h2 onmouseover="ventanaNoticiasRelacionadas(4)"> DEPORTES. Bryant: “Necesitamos a Gasol para llegar donde queremos” </h2>
				<h3> Autor: sportyou </h3>
			</hgroup>
			<p class="cont_noticia"> Después de una temporada con más penas que alegrías, varios miembros de Los Angeles Lakers comparecieron 
				ante la prensa antes de empezar las vacaciones. Kobe Bryant, Pau Gasol y Dwight Howard fueron los jugadores 
				más buscados y ninguno dejó indiferente con sus comentarios.<br/><br/>
				<cite>“Me gustaría ver a nuestros chicos volver <strong>[a jugar aquí]</strong>. Pau ha sido nuestro chico. Dwight <strong>[Howard]</strong> 
				obviamente, pero ha habido todos esos rumores alrededor de Pau diciendo que se iba y para mí no hay duda de 
				que le necesitamos para llegar donde queremos”</cite>, explicó Kobe cuando fue preguntado por la plantilla de la 
				próxima temporada.<br/><br/>
				<cite>“Acabamos muy fuerte, pero por desgracia los playoffs acabaron muy pronto contra San Antonio. Pero al 
				margen de todo eso tuvimos una plaza en los playoffs y no fue fácil. Siempre tendré en mi mente y en mi 
				corazón lo duro que peleamos y como nos agrupamos para poder hacerlo”</cite>, analizó Pau Gasol la campaña.<br/><br/>
				<cite>“Ha sido una temporada muy dura para todo el mundo. Ha sido como una pesadilla. Fue como uno de esos 
				sueños que no te gustan, en los que intentas mantenerte alejado del malo, pero por alguna razón el malo 
				siempre está ahí y no se va a marchar. Así es como me siento. En cada partido hemos peleado. He aprendido 
				mucho este año, como por ejemplo a manejar las lesiones o jugar junto a Kobe <strong>[Bryant]</strong>, Pau <strong>[Gasol]</strong>, Steve 
				<strong>[Nash]</strong> y Antawn <strong>[Jamison]</strong>. Son muchas cosas que he aprendido para mi futuro”</cite>, comentó Dwight Howard sobre 
				lo que ha significado para él este año en los Lakers.<br/><br/>
        </article>
	</section>

	<section id="bloque_lateral">
		<article class="deportes">
			<h1> NOTICIAS RELACIONADAS </h1>
		</article>
			
        <article class="deportes">
			<a href="./gasol_seguir_lakers_depende_20130501.php">
				<figure>
					<img class="img_noticia_relacionada" src="./gasol_seguir_lakers_depende_20130501/imagen_01.jpg"
						 alt="gasol_seguir_lakers_depende_20130501"/>
					<figcaption> Kobe Bryant y Pau Gasol, en el banquillo. </figcaption>
				</figure>
				<h2> DEPORTES. Gasol: "Seguir en los Lakers no depende de mí y entiendo la situación" </h2>
            </a>
            <h3> Autor: EFE </h3>
            <p> Su futuro peligra por "la entrada en vigor del nuevo impuesto de lujo que el equipo tiene que 
				considerar de forma seria", declaró. Aprecia el hecho de que la franquicia haya hecho todo lo 
				posible para que él siguiese con el equipo. </p>
        </article>
			
        <article class="deportes">
			<a href="./barca_clasifica_final_four_20130425.php">
				<figure>
					<img class="img_noticia_relacionada" src="./barca_clasifica_final_four_20130425/imagen_01.jpg"
						 alt="barca_clasifica_final_four_20130425"/>
					<figcaption> Los azulgrana derrotaron al Panathinaikos en una durísima eliminatoria (3-2). </figcaption>
				</figure>
				<h2> DEPORTES. El Barça se clasifica para la Final Four y se cita con el Real Madrid </h2>
            </a>
            <h3> Autor: EFE </h3>
            <p> El Barcelona Regal se ha clasificado para la Final Four de Londres después de derrotar en el 
				quinto partido de la serie de cuartos de la Euroliga al Panathinaikos por 64-53. Los azulgrana 
				se medirán al Real Madrid por un puesto en la gran final del torneo continental. </p>
        </article>
	</section>
		
	<section id="publicidad_interior">
		<aside class="publi_interior">
			<a href="http://es.playstation.com/ps3/">
				<img class="img_publicidad_interior" src="../publicidad/publicidad_sony.jpg" alt="publicidad_sony"/>
			</a>
		</aside>
				
		<aside class="publi_interior">
			<a href="http://www.xbox.com/es-ES">
				<img class="img_publicidad_interior" src="../publicidad/publicidad_xbox.jpg" 
					 alt="publicidad_xbox"/>
			</a>
		</aside>
		
		<aside class="publi_interior">
			<a href="http://www.nintendo.com/wiiu/es">
				<img class="img_publicidad_interior" src="../publicidad/publicidad_nintendo.jpg" 
					 alt="publicidad_nintendo"/>
			</a>
		</aside>
	</section>
		    
    <section id="opinion_lectores">
		<h1> OPINIONES DE LOS LECTORES</h1>
		
		<?php
			if(isset($_SESSION['usuario']))
				$usuario = $_SESSION['usuario'];
			else
				$usuario = "USUARIO NO REGISTRADO";
				
			$noticia = basename($_SERVER['PHP_SELF'],'.php');
			$ruta = "../deportes/".basename($_SERVER['PHP_SELF'])."#final";
			 
		?>
		
		<form action='../php/insertaComentario.php' method=post >
			<fieldset>
				<legend> <h3> Introduzca un nuevo comentario: </h3> </legend>
						
				<label for='comentarioUsuario'> Sesión actual del usuario: <?php print($usuario) ?> </label>
				<input type='hidden' id='comentarioUsuario' name='comentarioUsuario' value='<?php print($usuario) ?>'/>
				<br><br>
				<label for='textoComentario'> Comentario (máximo 200 caracteres): </label><br>
				<textarea id='textoComentario' name='textoComentario' cols='65' rows='3' maxlength='255' onblur="validaComentario()"></textarea>
				<input type='hidden' id='nombreNoticia' name='nombreNoticia' value='<?php print($noticia) ?>' />
				<input type='hidden' id='rutaNoticia' name='rutaNoticia' value='<?php print($ruta) ?>' />
				<br><br>
				<input type="button" id="botonValidar" value="Validar datos" onclick="validarFormulario()"/>
				<input type="reset" id="botonReiniciar" value="Borrar datos" onclick="reactivaCampos()"/>
				<input type="submit" id="botonEnviar" value="Enviar datos" disabled="true"/>
				
			</fieldset>

		</form>
	
		<br><h3> Comentarios sobre las noticias: </h3>
		
		<?php Comentario::mostrarComentarios(Comentario::getComentarios($noticia)); ?>
		<p id="final"></p>
    </section>

 <footer>
	 <h2> INFORMACIÓN DE CONTACTO </h2>
	 <p> <address> C/ Periodista Daniel Saucedo Aranda, s/n, 18071, Granada </address> </br>
		 <strong> Teléfono: </strong> 958 24 28 02 </br>
		 <strong> Correo electrónico: </strong> <a href="mailto:contacto@placeholder.com"> contacto@placeholder.com </a> </br></br>
		 <strong> <a href="../formulario.html"> Suscribirse a la versión impresa de PlaceHolder </strong> </a> </br></br>
		 <strong> <a href="../descripcion.pdf"> Cómo se hizo. </strong> </a>
	 </p>
 </footer>

</section>

</body>
</html>
