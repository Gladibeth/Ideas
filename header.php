<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='ie=edge' http-equiv='X-UA-Compatible'>
  <meta content='#fff' name=' theme-color'>
  <meta content='<?php bloginfo('description'); ?>' name='description'>
  <meta content='camiones hino, hino colombia, camiones hino colombia, camiones hino precios, camiones hino en venta, concesionario hino, hino bogota, hino' name='keywords'>
  <meta content='website' property='og:type'>
  <meta content='<?php wp_title('|', true, 'right'); ?>' property='og:title'>
  <meta content='<?php bloginfo('description'); ?>' property='og:description'>
  <meta content='<?php echo get_template_directory_uri(); ?>/assets/img/logos/hino_logo.png' property='og:image'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/animate/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css' rel='stylesheet'>
<?php wp_head(); ?>
</head>

  <style>
	
  .deplegable-1 li ul {
    background: #242424;
display:none;
position:absolute;
min-width:140px;
}
  .deplegable-1 li:hover > ul {
display: block;
    z-index: 1000;
    min-width: 16rem;
    padding: 0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;

}
    .deplegable-1 > li {
float:left;
}
    .deplegable-1 li a {

display:block;

padding:10px 12px;
}
	  .deplegable-1 li a.serie:hover{
		  font-weight: 600;
		  text-decoration: underline;
	  }
	  .deplegable-1 li a.serie{
		  padding:5px 12px;
	  }
    .deplegable-1 li ul li {
position:relative;
		
}
 
.deplegable-1 li ul li ul {
right: -159px;
top:0;
}

	  
	
  .deplegable-1 li ul {
    background: #242424;
display:none;
position:absolute;
min-width:140px;
	  
}
	  
	  
	  
 

  </style>
  
  
<body class="id-<?php the_id();?>">
	<div class="main-content__global">
  <div class="search_container">

    <form action="<?php bloginfo('url'); ?>" method="get" class="search-form">
    <input type=search name=s placeholder="Buscar...">
    <div class="close"></div>
      </form>
  </div>
  <nav class='navbar navbar-expand-lg'>
    <div class='container-fluid'>
      <a class='navbar-brand' href='<?php bloginfo('url'); ?>'>
        <img alt='Hino Grupo Toyota' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/hino_logo.png'>
      </a>
      <button aria-controls='hinoNavbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-bs-target='#hinoNavbar' data-bs-toggle='collapse' type='button'>
        <i class='fa fa-bars'></i>
      </button>
      <div class='collapse navbar-collapse' id='hinoNavbar'>
        <ul class='navbar-nav deplegable-1'>
      <li class="nav-item dropdown ">
         <a class="nav-link  dropdown-toggle" href="<?php bloginfo('url'); ?>/vehiculos" data-toggle="dropdown">VEHÍCULOS  </a>
        <ul class="dropdown-menu">
          <?php $wcatTerms = get_terms('tipo-de-vehiculo', array('hide_empty' => 0,'orderby' => 'id', 'parent' =>0)); 
                  foreach($wcatTerms as $wcatTerm) : ?>
          <li class="main-li__flex">
            <a class=""  href='<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>'><strong><?php echo $wcatTerm->name ?> </strong></a>

			  
			  
          
			  <?php $args =  array( 'post_type' => 'vehiculo', 'posts_per_page' => -1,
                           'tax_query' => array('relation'=>'AND', // 'AND' 'OR' ...
                                          array(
                                                'taxonomy' => 'tipo-de-vehiculo',
                                                'field'           => 'slug',
                                                'terms'           => 'buses',
                                           
                                                'parent'          => 0,
                                                'operator'        => 'IN',
                                                'orderby' => 'id',
                                              )),
                                          );  ?>
                            <?php $loop = new WP_Query( $args ); ?>  

<ul class="list-ul" style="text-transform: uppercase;">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <li>
                    <a href='<?php the_permalink();?>'><?php the_title();?></a>
          
                 
                  </li>
                <?php endwhile; ?>
    </ul>


           
            
              </li>
						  <div class="despegables-list" >
				
					  <?php if($wcatTerm->slug == 'camion'):  ?>
  <?php  $wsubargs1 = array( 'hierarchical' => 3, 'show_option_none' => '','hide_empty' => 0, 'parent' => $wcatTerm->term_id, 'taxonomy' => 'tipo-de-vehiculo', 'posts_per_page' => 3);
                    $wsubcats1 = get_categories($wsubargs1);
                    foreach ($wsubcats1 as $wsc1):
                    ?>



                  
						
						<?php if($wcatTerm->slug == 'camion'):  ?>
  <?php  $wsubargs1 = array( 'hierarchical' => 3, 'show_option_none' => '','hide_empty' => 0, 'parent' => $wcatTerm->term_id, 'taxonomy' => 'tipo-de-vehiculo', 'posts_per_page' => 3);
              
                    ?>



  <li>
                    <a class="serie" href='<?php echo get_term_link(  $wsc1->slug,  $wsc1->taxonomy );?>'><?php echo $wsc1->name;?></a>

                    <?php $args =  array( 'post_type' => 'vehiculo', 'posts_per_page' => -1,
                           'tax_query' => array('relation'=>'AND', // 'AND' 'OR' ...
                                          array(
                                                'taxonomy' => 'tipo-de-vehiculo',
                                                'field'           => 'slug',
                                                'terms'           => $wsc1->slug,
                                           
                                                'parent'          => 0,
                                                'operator'        => 'IN',
                                                'orderby' => 'id',
                                              )),
                                          );  ?>
                            <?php $loop = new WP_Query( $args ); ?>  

                       
    <ul>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <li style="text-transform: uppercase;">
                    <a href='<?php the_permalink();?>'><?php the_title();?></a>
          
                 
                  </li>
                <?php endwhile; ?>
    </ul>
              
                  </li>
            

<?php else: ?>
               
            
<?php $args =  array( 'post_type' => 'vehiculo', 'posts_per_page' => 5,
                           'tax_query' => array('relation'=>'AND', // 'AND' 'OR' ...
                                          array(
                                                'taxonomy' => 'tipo-de-vehiculo',
                                                'field'           => 'slug',
                                                'terms'           => 'buses',
                                           
                                                'parent'          => 0,
                                                'operator'        => 'IN',
                                                'orderby' => 'id',
                                              )),
                                          );  ?>
                            <?php $loop = new WP_Query( $args ); ?>  

                       
    
       

                   
							  
    
   
              <?php endif; ?>
					
               
            <?php endforeach;?>
					  <?php endif; ?>
			
			  </div>
			
            <?php endforeach;?>
            </ul>
      </li>
     
			<li class="nav-item dropdown ">
			 <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href='<?php bloginfo('url'); ?>/postventa'>Posventa  </a>
			<ul class="dropdown-menu">
			  <li class="main-li__flex" style="border-bottom: 1px solid transparent;">
				  <a class="dropdown-item dropdown-item__type"  href='<?php bloginfo('url'); ?>/taller'>TALLER</a>
			  </li>
				<li class="main-li__flex">
				  <a class="dropdown-item dropdown-item__type"  href='<?php bloginfo('url'); ?>/agendar-cita'>LATONERÍA Y PINTURA</a>
			  </li>
				<li class="main-li__flex">
				  <a class="dropdown-item dropdown-item__type"  href='<?php bloginfo('url'); ?>/cotizacion-repuestos'>REPUESTOS</a>
			  </li>
			</ul>
				  
			<li class='nav-item'>
				<a class='nav-link' href='<?php bloginfo('url'); ?>/connect'>hino connect</a>
			</li>
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url'); ?>/blog'>Blog</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url'); ?>/nosotros'>Nosotros</a>
          </li>
      
      <?php if ( is_home() ) { ?>
        <li class='nav-item'>
        <a class='nav-link' href='#GoogleMaps'>Ubicación</a>
        </li>

      <?php } else { ?>
      <li class='nav-item'>
        <a class='nav-link not_border' href='<?php bloginfo('url');?>/#GoogleMaps'>Ubicación</a>
        </li>
      <?php } ?>

          
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url'); ?>/contacto'>Contacto</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>
              <img alt='Yokomotor' class='navbar-secondary-logo' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/yokomotor_logo.png'>
            </a>
          </li>
          <li class='nav-item'>
            <div class='nav-link'>
        <div id="search">
          <div class="icon">
            <div class="rtoc"></div>
            <div class="rod"></div>
          </div>
        </div>

            </div>
          </li>
          <li class='nav-item d-lg-none navbar-socialmedia'>
            <ul>
              <li>
                <a target="_blank" href='https://www.facebook.com/Yokomotor-Hino-312963756077868/'>
                  <img alt='Hino Facebook' src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.svg'>
                </a>
              </li>
              <li>
                <a target="_blank" href='https://www.instagram.com/yokomotorhino/?hl=es'>
                  <img alt='Hino Instagram' src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg'>
                </a>
              </li>
            </ul>
          </li>
      
      <li class='nav-item nav-search__mobile'>
        <form class="example" action="<?php bloginfo('url'); ?>" method="get">
          <input type="text" placeholder="Buscar..." name="s">
          <button class="nav-search__btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </li>
    
        </ul>
      </div>
    </div>
  </nav>
  
	 <?php 
$titulocita = get_theme_mod('botones_fixed_citataller');
$titulocitaurl = get_theme_mod('botones_fixed_citatallerurl');
$titulofactura = get_theme_mod('botones_fixed_pagatufactura');
$titulofacturaurl = get_theme_mod('botones_fixed_pagatufacturaurl');
$whatsapp = get_theme_mod('botones_fixed_whatsapp');
$facebook = get_theme_mod('url_facebook');
$instagram = get_theme_mod('url_instagram');
?>
  <div class="fixed-buttons">
    <div class="button-item">
      <a href="<?php echo $titulocitaurl; ?>">
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/technical-support.svg">
        <span><?php echo $titulocita; ?></span>
      </a>
    </div>
    <div class="button-item">
      <a href="<?php echo $titulofacturaurl; ?>" target="_blank">
        <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dollar.svg">
        <span><?php echo $titulofactura; ?></span>
      </a>
    </div>
	  <ul class='navbar-nav deplegable-2 button-item'>
      <li class="nav-item dropdown ">
		    <a class="fixed-buttons__icons " data-toggle="dropdown" >
			 <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/internet.svg">
					<span>Redes</span>
			  </a>
       
        	<ul class="dropdown-menu">
				<li class="main-li__flex">
					<a  target="_blank" class="dropdown-item" href="<?php echo $facebook; ?>">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.png">
			Facebook</a>
	
				</li>
				<li class="main-li__flex">
					<a target="_blank" class="dropdown-item" href="<?php echo $instagram; ?>">
			<img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ig.png">
			Instagram</a>
				</li>
		  	</ul>
		</li>
	</ul>
	 <ul class='navbar-nav deplegable-2 button-item'>
      <li class="nav-item dropdown ">
		  <a lass="fixed-buttons__icons " data-toggle="dropdown" >
			<img alt="" class="whatsapp" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whatsapp.png">
			  
			  </a>
		    
        	<ul class="dropdown-menu">
				<li class="main-li__flex">
				<?php if ( wp_is_mobile() ) : ?>
					<a class="dropdown-item" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>">
					WhatsApp
				  </a>
				<?php else : ?>
				  <a  class="dropdown-item" target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $whatsapp; ?>">
								WhatsApp

				  </a>
				<?php endif; ?>
	
				</li>
				<li class="main-li__flex">
					<a target="_blank" class="dropdown-item" href="tel:<?php echo $whatsapp; ?>">
			Llamar</a>
				</li>
		  	</ul>
		</li>
	</ul>
	
	

  </div>
  
	
	
<style>
	
	
 .deplegable-2 li:hover > ul {
display: block;
    z-index: 1000;
    min-width: 0rem;
    padding: 0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;

}
    .deplegable-2 > li {
float:left;
}
    .deplegable-2 li a {

display: flex;
padding:10px 12px;
}  
	  
	
  .deplegable-2 li ul {
    background: #242424;
display:none;
position:absolute;
min-width:140px;
	  
}
	
.navbar-nav.deplegable-2 .dropdown-menu{
		position: absolute;
	}
	
	.deplegable-2 .main-li__flex:nth-child(1){
		width:100%;
	}
	.deplegable-2 li ul {
	position:absolute;
	left:0;
	right:0;
	margin:auto;
	display:block;
	min-width: 5rem;
		width: 9rem;
	height:auto;
	padding;:5px;
	opacity:0;
	background: #242424;
	transition: all 0.5s ease 3s;
	z-index:-1;

}
.deplegable-2 li:hover ul {
	opacity:1;
	transition: all 0.5s ease 0s;
	z-index:2;
}
	
	@media (min-width: 0px) and (max-width:767px){
		.fixed-buttons .dropdown-item img{
			width: 17px !important;
			height:17px !important;
		}
		.fixed-buttons .dropdown-menu {
    top: -5rem!important;
    transform: translate3d(70px, 0px, 0px)!important;
    left: -6rem !important;
    border-radius: 0;
    box-shadow: none;
    border: none;
    padding: 0;
    transition: 0.8s ease-in-out;
			    width: 7rem;
}
	}

	</style>