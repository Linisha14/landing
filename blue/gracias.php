<?php
if(isset( $_POST['fname'])  && isset( $_POST['telefono'])  && isset( $_POST['email']))
{
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->

<!-- Mirrored from manhattan.mustachethemes.com/blue/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Oct 2013 19:24:58 GMT -->
<head>
	<!-- Google Code for Registro Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1006168864;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "YzubCJCAxQcQoNbj3wM";
var google_conversion_value = 1;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1006168864/?value=1&amp;label=YzubCJCAxQcQoNbj3wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>University Landing Page - mustachethemes - Blue Color</title>
	<meta name="description" content="description">
	<meta name="author" content="mustachethemes">
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <!-- Fav and touch icons
	================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="52x52" href="img/apple-touch-icon-57x57.html">
    
	<!-- Custom styles 
	================================================== -->
	<link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/color/blue.css" rel="stylesheet" media="screen">
	<!--[if IE 8 ]><link href="css/ie8.css" rel="stylesheet" media="screen"><![endif]-->
	
	<!-- Scripts Libs 
	================================================== -->
	<script type="text/javascript" src="js/jquery.min.js"></script> <!-- 1.9.1 -->
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements 
	================================================== -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
	<!-- Header-->
   <!-- Header-->
    <header>
    		<!-- Top Bar -->
            <div class="top">
                <div class="container">
                    <div class="row-fluid">   
                    	 <div class="span6">
                	<ul class="social-header">
                    	   <li  class="tooltip_hover"><a href="https://plus.google.com/u/0/s/eforcers" class="google socialicon"></a></li>
                        <li  class="tooltip_hover"><a href="http://www.linkedin.com/company/eforcerssa" class="linkedin socialicon"></a></li>
                        <li  class="tooltip_hover"><a href="http://blog.eforcers.com/" class="blog"></a></li>
                        <li class="tooltip_hover"><a href="http://www.youtube.com/user/eforcers" class="youtube socialicon"></a></li>
                        <li  class="tooltip_hover"><a href="https://www.facebook.com/eforcers" class="facebook socialicon"></a></li>
                        <li  class="tooltip_hover"><a href="https://twitter.com/eforcers" class="twitter socialicon"></a></li>                       
                       
                </div>
                
            
            </div>
                         
                    </div>
                    
                </div>
            </div>
            <!-- End Top Bar -->
            
            <!-- Nav-->
            <nav>
            	<div class="container">
                	<div class="row-fluid">
                        	
                            <!-- Logo-->
                        	<div class="span3">
                            	<a href="http://www.eforcers.com/"><img src="img/blue/logo.png
                                " class="logo animated delay1 fadeInDown" alt="logo"></a>
                            </div>
                            <!-- End Logo-->
                            
                            <!-- Intro Text-->
                            <div class="span9">
                            	<h1 class="animated delay2 fadeInDown">Ll&aacute;menos al teléfono (571) 3788269
<br>Cel: 3187126370</br>
empresas@eforcers.com </h1>
                            </div>
                            <!-- End Intro Text-->
                            
                	</div>
            	</div>            
            </nav>
            <!-- End Nav-->
            
            <!-- Slider -->
            <div class="slider" style="height: 296px;">
            
            
            	<div class="container"> 
                	<div class="row-fluid">
                    
                    	<div class="span6 offset6">
                        	<!-- Form -->
                           
						   <?php 

										// Varios destinatarios
										//$para  = 'empresas@eforcers.com ,alejandro.abella@ilikewebsites.com';
										$para='empresas@eforcers.com, danilo.pineda@ilikewebsites.com';
										// subject
										$titulo = 'Eforces Landing page';
										// message
										$mensaje = '
										<html>
										<head> 
										<title>Eforces Landing Page</title>
										</head>
										<body>
										  <h1>Eforces Landing Page</h1>
											<p>
												<div><b>Nombre:</b> <span>'. $_POST['fname'] .'</span></div>
												<div><b>E-mail:</b> <span>'. $_POST['email'] .'</span></div>
												<div><b>Telefono:</b> <span>'. $_POST['telefono'] .'</span></div>
												<div><b>Horario:</b> <span>'. $_REQUEST['horario'] .'</span></div>
											</p>
										</body>
										</html>
										';
										$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
										$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										if( mail($para, $titulo, $mensaje, $cabeceras))
										{
										 
										 echo '
										 
											<div class="form">
											<h2 class="animated delay3 bounceIn">Gracias por cont&aacute;ctarnos </h2>
											
											<div  id="loading" class="alert">
												Le agradecemos haber diligenciado correctamente sus datos. Estaremos en cont&aacute;cto con usted.
											</div>
											<div id="response"></div>
											
											<form id="contact" method="post" action="gracias.php"> 
												
											</form>  ';
													}
										
										
										else {
										
										echo '<div class="form">
											<h2 class="animated delay3 bounceIn">Ocurrio un problema con el envio del correo  </h2>
											
											<div  id="loading" class="alert">
												Por favor intentelo de nuevo.
											</div>
											<div id="response"></div>
											
											<form id="contact" method="post" action="gracias.php"> 
												
											</form> ';
										}

										?>
						   
						   
                        	
                                <div class="clear"></div>          
                                             
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slider -->
    
    </header>
    <!-- End Header-->
   
    
    
    <!--Footer-->
    <footer>
    	<div class="container">
        
        	<div class="row-fluid">
            	<div class="span6">
                	<h6><img src="img/iconos_logos_03.png"></h6>
                </div>
                
                <div class="span6">
                	<ul class="social">
                    	<li title="Linkedin" class="tooltip_hover"><a href="#" class="linkedin socialicon"></a></li>
                        <li title="Youtube" class="tooltip_hover"><a href="#" class="youtube socialicon"></a></li>
                        <li title="Facebook" class="tooltip_hover"><a href="#" class="facebook socialicon"></a></li>
                        <li title="Twitter" class="tooltip_hover"><a href="#" class="twitter socialicon"></a></li>                       
                    </ul>
                </div>
                
            
            </div>
            
        </div>
    
    </footer>
    
       
    
    <!--End Footer-->

	<!-- ======================= JQuery libs =========================== -->                 
        <!-- Bootstrap.js-->
        <script src="js/bootstrap.js"></script>   
    
    	<script type="text/javascript" src="js/jquery.fitvids.min.js"></script>
    	<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    
		<!-- carrousell -->
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="js/jcarousellite_1.0.1.pack.js"></script>
		
		<!-- custom -->
		<script type="text/javascript" src="js/scripts.js"></script>
	
	<!-- ======================= End JQuery libs =========================== --> 

  </body>

<!-- Mirrored from manhattan.mustachethemes.com/blue/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Oct 2013 19:25:10 GMT -->
</html>
<?php 
}
else
{

echo'Usted esta intentando ingresar de forma invalida a esta pagina por favor vuelva a intentarlo';

}?>
