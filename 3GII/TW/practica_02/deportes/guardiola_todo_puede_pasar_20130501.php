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
    <title>PlaceHolder - DEPORTES. Guardiola, sobre el Barça-Bayern: “Todo puede pasar”</title>
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
				<img class="img_noticia_destacada" src="./guardiola_todo_puede_pasar_20130501/imagen_01.jpg"  
					 alt="guardiola_todo_puede_pasar_20130501"/>
				<figcaption> Pep Guardiola </figcaption>
			</figure>
			<hgroup>
				<h2 onmouseover="ventanaNoticiasRelacionadas(4)"> DEPORTES. Guardiola, sobre el Barça-Bayern: “Todo puede pasar” </h2>
				<h3> Autor: sportyou </h3>
			</hgroup>
			<p class="cont_noticia"> Pep Guardiola no quiere aventurar un resultado para el partido de vuelta de semifinales de Champions 
				League entre el Barcelona, su equipo de toda la vida, y el Bayern, al que entrenará la próxima temporada. 
				<cite>“Juegan dos equipos fantásticos, todo puede pasar. Son equipos que han tenido un dominio extraordinario en 
				sus ligas, lo que han conseguido esta temporada es muy merecido. Estoy muy impaciente”</cite>, explicó el catalán 
				en el transcurso de una conferencia sobre liderazgo ofrecida en Bogotá que recoge el diario <strong>‘El tiempo’</strong>.<br/><br/>
				<cite>“Soy muy malo pronosticando…”</cite>, añadió.<br/><br/>
				El que será entrenador del Bayern vio la semifinal del Madrid y no le sorprendió la actitud de los blancos. 
				<cite>“Nunca en el Bernabéu uno puede decir que algo se acaba hasta que el árbitro pita el final. Lo digo por 
				experiencia”</cite>.<br/><br/>
				Sobre el momento del fútbol español, que ha sido opacado por el alemán en la máxima competición de clubes, 
				recordó la importancia de lo conseguido por la Selección española. <cite>“El fútbol español, gracias a dos personas 
				importantísimas como Luis Aragonés y Vicente del Bosque, ha llegado a niveles altísimos”</cite>, comentó.<br/><br/>
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
