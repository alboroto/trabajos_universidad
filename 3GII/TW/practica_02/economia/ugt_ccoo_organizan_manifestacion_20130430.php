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
    <title>PlaceHolder - ECONOMIA. UGT y CC.OO. organizan mañana una manifestación para reclamar una nueva política económica y decir 'no' a la austeridad</title>
    <meta name="description" content="Noticia económica del portal PlaceHolder">
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
		<img id="img_cabecera_secciones" src="../index/economia.jpg" alt="economia"/>
	</section>
   
	<section id="noticia_destacada">
		<article class="economia">
			<hgroup>
				<h2 onmouseover="ventanaNoticiasRelacionadas(3)"> ECONOMIA. UGT y CC.OO. organizan mañana una manifestación para reclamar una nueva política económica 
					 y decir 'no' a la austeridad </h2>
				<h3> Autor: lainformacion.com </h3>
			</hgroup>
			<p class="cont_noticia"> UGT y CC.OO. han organizado para mañana, Día Internacional del Trabajo, más de 80 manifestaciones 
				conjuntas en toda España, cuya marcha central tendrá lugar en Madrid, para reclamar una nueva política 
				económica, centrada en el crecimiento y el empleo, y decir <strong>'no'</strong> a la austeridad y los recortes.<br/><br/>
				Bajo el lema <strong>'No tienen límite. Lucha por tus derechos'</strong>, los sindicatos llaman a los trabajadores a 
				recorrer las calles de España para demandar un acuerdo social y político en favor del empleo y del 
				crecimiento económico.<br/><br/>
				<cite>"Este día será un grito contra las continuas agresiones a los trabajadores y la falta de alternativas 
				para la creación de empleo y la recuperación económica"</cite>, aseguran desde UGT.<br/><br/>
				Este 1º de mayo es el primero que se celebra tras los recientes Congresos de CC.OO. y UGT, donde Ignacio 
				Fernández Toxo y Cándido Méndez, respectivamente, volvieron a ser reelegidos en sus cargos.<br/><br/>
				Los dos estarán al frente de la manifestación de Madrid, que partirá a mediodía de la Plaza de Neptuno 
				y que finalizará en la Puerta del Sol, donde tendrán lugar los habituales discursos. Además de Méndez y 
				Toxo, intervendrán los secretarios generales de CC.OO.-Madrid, Jaime Cedrún, y de UGT-Madrid, José Ricardo 
				Martínez.<br/><br/>
				El contexto económico y social en el que se celebra este año el Día del Trabajo ha cambiado respecto 
				al de hace un año, pero lo ha hecho a peor, según las centrales sindicales.<br/><br/>
        </article>
	</section>

	<section id="bloque_lateral">
		<article class="economia">
			<h1> NOTICIAS RELACIONADAS </h1>
		</article>
			
		<article class="economia">
			<a href="./despedir_veinte_dias_comun_20130423.php">
				<figure id="figura_noticia_destacada">
					<img class="img_noticia_relacionada" src="./despedir_veinte_dias_comun_20130423/imagen_01.jpg"  
						 alt="despedir_veinte_dias_comun_20130423"/>
					<figcaption> Protesta de trabajadores contra de un Expediente de Regulación de Empleo.
								 </figcaption>
				</figure>
				<h2> ECONOMIA. Despedir con 20 días ya es más común que hacerlo con 45 tras la reforma laboral </h2>
            </a>
            <h3> Autor: Bruno Pérez </h3>
            <p> Los despidos por causas objetivas o como consecuencia de un ERE superaron en 2012 por primera vez 
				en lustros los improcedentes con 45 días de indemnización. La compensación media por despido de los 
				trabajadores españoles ha caído un 20% desde la reforma laboral.</p>
        </article>
			
        <article class="economia">
			<a href="./amnistia_fiscal_recaudacion_millones_20130430.php">
				<h2> ECONOMIA. El botín de la amnistía fiscal generará una recaudación extra de... 250 millones </h2>
            </a>
            <h3> Autor: lainformacion.com </h3>
            <p> Los 40.000 millones de euros en nuevas bases afloradas de los que presumió el ministro de Hacienda 
				generarán un rendimiento fiscal del 0,625%. La supresión de la deducción por compra de vivienda 
				generará un ahorro de 90 millones de euros a las arcas públicas. </p>
        </article>
	</section>
		
	<section id="publicidad_interior">
		<aside class="publi_interior">
			<a href="http://es.playstation.com/ps3/">
				<img class="img_publicidad_interior" src="../publicidad/publicidad_sony.jpg" alt="publicidad_sony"/>
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
			$ruta = "../economia/".basename($_SERVER['PHP_SELF'])."#final";
			 
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
