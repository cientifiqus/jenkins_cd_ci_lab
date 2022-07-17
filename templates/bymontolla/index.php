<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" style="" class=" js no-touch backgroundsize opacity csstransforms csstransitions" slick-uniqueid="6" prefix="og: http://ogp.me/ns#">
	<head>   
		<jdoc:include type="head" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Language" content="es" />	
		<link rel="alternate" hreflang="es" href="http://www.montolla.tk" />					  
		<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/favicon.ico" /> 	
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/default.css" type="text/css" />		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/custom.css" type="text/css" />   		
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>  	
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WCSBTB"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WCSBTB');</script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GA_TRACKING_ID');
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://www.montolla.tk",
  "name": "By Montolla, Diesño pagina web medellin colombia",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+54-300-512-1155",
    "contactType": "Ventas"
  }
}
</script>
	</head>
	<body>
		<?php include_once("analyticstracking.php"); ?>
		<header class="banner navbar navbar-default navbar-static-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="http://montolla.tk">By Montolla</a>
				</div>
				<nav class="navi" role="navigation">
					<jdoc:include type="modules" name="menu" /> 
				</nav>
			</div>
		</header>
		<section class="component">		
		<div class="wrap container" role="document">
			<div class="content row">
				<main id="posts-wrap" class="main col-sm-12" role="main">
					<jdoc:include type="component" />
				</main>
			</div>
		</div>				
		</section>		
		<section class="proyectos">					
			<jdoc:include type="modules" name="proyectos" /> 	
		</section>				
		<section class="tips">					
			<jdoc:include type="modules" name="tips" /> 	
		</section>				
		<section class="consejos">					
			<jdoc:include type="modules" name="consejos" /> 	
		</section>			
		<section class="contacto">					
			<jdoc:include type="modules" name="contacto" /> 	
		</section>			
		<footer class="footer">	               
			<jdoc:include type="modules" name="footer" /> 
		</footer>                
        <!--  
		<header class="banner navbar navbar-default navbar-static-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="http://montolla.tk">By Montolla</a>
				</div>
				<nav class="navi" role="navigation">
					<ul id="menu-primary-navigation" class="navi-main">
						<li class="menu-home"><a href="http://montolla.tk/">Inicio</a></li>
						<li class="active menu-projects"><a href="http://montolla.tk/projects/">Proyectos</a></li>
						<li class="menu-workshops-briefings"><a href="http://montolla.tk/consultoria/">Consultoria</a></li>
						<li class="menu-get-in-touch"><a href="http://montolla.tk/contactanos/">Contactanos</a></li>
						<li id="magic-line" style="width: 58px; left: 119.234px;"></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="wrap container" role="document">
			<div class="content row">
				<main id="posts-wrap" class="main col-sm-12" role="main">
					<div class="home-illustration-wrap">
						<div class="home-illustration">
							<a href="images/arbol.png" rel="lightbox[2146]" title="Homepage" class="cboxElement">
							<img class="alignnone size-full wp-image-2718" src="images/arbol.png" width="315" height="301"></a>
						</div>
						<div class="home-illustration-title">
							Diseño web
						</div>
						<div class="home-illustration-text">
							El diseño de páginas web se trata básicamente de realizar un documento con información hiperenlazado con otros documentos y asignarle una presentación para diferentes dispositivos de salida.
						</div>
					</div>
				</main>
			</div>
		</div>
		<div class="gray-back">
			<div class="wrap container" role="document">
				<div class="content row">
					<main class="main col-sm-12" role="main">
						<div class="projects-template-title">Proyectos Recientes</div>
					</main>
				</div>
			</div>
			<div class="projects-list">
				<div class="box others">
					<a class="project-link" rel="2453" href="http://montolla.tk/projects/ruedasindustriales_com_co/">
						<div class="projects-wrapper">
							<img width="300" height="240" src="images/ruedas/0.png" class="attachment-projects wp-post-image" >
							<div class="projects-info">
								<h4 class="projects-title">Ruedas Industriales</h4>
								<div class="projects-type">
									<p>Comercializadora de llantas y neumaticos</p>
								</div>
							</div>
						</div>
					</a>
					<div class="overlay">
						<a class="expand project-link" rel="2453" href="http://montolla.tk/projects/ruedasindustriales_com_co/">+</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
				<div class="box others">
					<a class="project-link" rel="2444" href="http://montolla.tk/projects/alara_com_co/">
						<div class="projects-wrapper">
							<img width="300" height="240" src="images/alara/0.png" class="attachment-projects wp-post-image" >
							<div class="projects-info">
								<h4 class="projects-title">Alara</h4>
								<div class="projects-type">
									<p>Proteccion radiologica</p>
								</div>
							</div>
						</div>
					</a>
					<div class="overlay">
						<a class="expand project-link" rel="2444" href="http://montolla.tk/projects/alara_com_co/">+</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
				<div class="box others">
					<a class="project-link" rel="2681" href="http://montolla.tk/projects/improto3d_com/">
						<div class="projects-wrapper">
							<img width="300" height="240" src="images/improto/0.png" class="attachment-projects wp-post-image" >
							<div class="projects-info">
								<h4 class="projects-title">Improto</h4>
								<div class="projects-type">
									<p>Impresion 3D, consultoria y aprendisaje</p>
								</div>
							</div>
						</div>
					</a>
					<div class="overlay">
						<a class="expand project-link" rel="2440" href="http://montolla.tk/projects/improto3d_com/">+</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="white-back">
			<div class="wrap container" role="document">
				<div class="projects-template-title home-workshops">Tips de Interes</div>
				<div class="home-workshop-image"><img src="images/tendencias.png"></div>
				<div class="home-workshop-kr">
					<div class="home-workshop-title">Tendencias en el Diseño Web
					</div>
					<div class="home-workshop-date">Un breve articulo acerca de las tendencias mundiales en el Diseño Web
					</div>
					<div class="home-workshop-description">Estamos muy atentos a las tendencias de nuestro sector productivo. Es comprencible que las modas cambien de forma inmediata por un simple evento que agradó y lo cambió todo. Por eso hacemos un seguimiento acerca de lo que se trabaja actualmente y lo que estaría presente en el futuro. Aclaramos que quizá no tengamos la razón, pero es lo que puede suceder gracias a las TENDENCIAS que se ven con más fuerza o crecen rápido actualmente.
					</div>
					<a class="home-workshop-link" rel="20" href="http://montolla.tk/tendencias/">Conoce mas</a>
				</div>
			</div>
		</div>
		<div class="gray-back">
			<div class="wrap container" role="document">
				<div class="content row">
					<main class="main col-sm-12" role="main">
						<div class="projects-template-title">Consejos Utiles</div>
					</main>
				</div>
			</div>
			<div class="home-latest-blog">
				<div class="box others">
					<a class="blog-link" rel="2681" href="http://montolla.tk/tips/">
						<div class="blog-wrapper">
							<img width="300" height="240" src="images/template.png" class="attachment-projects wp-post-image" alt="StevenJohnson">
							<div class="blog-info">
								<h4 class="blog-title">Como maquetar?</h4>
							</div>
						</div>
					</a>
					<div class="overlay">
						<a class="expand blog-link" rel="2681" href="http://montolla.tk/tips/">+</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
				<div class="box others">
					<a class="blog-link" rel="2560" href="http://montolla.tk/tips/">
						<div class="blog-wrapper">
							<img width="300" height="240" src="images/ideas.png" class="attachment-projects wp-post-image">
							<div class="blog-info">
								<h4 class="blog-title">Como posicionar mejor mi pagina?</h4>
							</div>
						</div>
					</a>
					<div class="overlay">
						<a class="expand blog-link" rel="2560" href="http://montolla.tk/tips/">+</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
				<div class="box others last">
					<a class="blog-link" rel="2576" href="http://montolla.tk/tips/">
						<div class="blog-wrapper">
							<img width="300" height="240" src="images/atraer.png" class="attachment-projects wp-post-image" alt="klausimas">
							<div class="blog-info">
								<h4 class="blog-title">Como atraer mas visitantes?</h4>
							</div>
						</div>
					</a>
					<div class="overlay">
						<a class="expand blog-link" rel="2576" href="http://montolla.tk/tips/">+</a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
				<br>
				<a class="allprojects" href="http://montolla.tk/tips/">Verlas Todas</a>
			</div>
		</div>
		<div class="footer-color-wrap">
			<footer class="content-info container" role="contentinfo">
				<div class="row">
					<div class="col-lg-12">
						<div class="howmuch">
							<li id="text-4" class="widget widget_text">
								<h3>Conocenos</h3>
								<div class="textwidget">
									Te podemos ayudar en tu sitio web y otros servicios de consultoria.
								</div>
							</li>
						</div>
						<div class="gotaquestion">
							<a class="anchorfix" id="questions"></a>

							<li id="text-5" class="widget widget_text">
								<h3>Contactanos</h3>
								<div class="textwidget">
									<div class="question-phone">
										Telefono: +57 3217249421 Skype: montollas
									</div>
									<div class="question-mail">
										<a href="mailto:info@montolla.tk">info@montolla.tk</a> 
									</div>
								</div>
							</li>
						</div>
						<div class="social-links">
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="blacky-back">
			<div class="f-menu">
				<ul id="menu-primary-navigation-1" class="menu">
					<li class="active menu-home">
						<a href="http://montolla.tk/">Inicio</a></li>
					<li class="menu-divider">/</li>
					<li class="menu-projects">
						<a href="http://montolla.tk/projects/">Proyectos</a></li>
					<li class="menu-divider">/</li>
					<li class="menu-workshops-briefings">
						<a href="http://montolla.tk/consultoria/">Consultoria</a></li>
					<li class="menu-divider">/</li>
					<li class="menu-get-in-touch">
						<a href="http://montolla.tk/contactanos/">contactanos</a></li>
					<li class="menu-divider">/</li>
				</ul>
			</div>	
			<div class="f-copy">
				By Montolla tk © 2015 Medellin,Colombia. All rights reserved.|<a href="http://montolla.tk/politica/">Política de Uso</a>
			</div>
		</div>	
		-->				
	</body>
</html>