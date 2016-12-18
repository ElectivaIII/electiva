<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/favicon.png">
  </head>
  <body>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo Yii::app()->baseUrl.'/site/index' ;?>">DGM Automotores</a>

      <div class="nav-collapse collapse pull-right">
			<?php $this->widget('zii.widgets.CMenu',array(
				'htmlOptions'=>array("class"=>"nav"),
				'items'=>array(
					array('label'=>'Inicio', 'url'=>array('/site/index')),
          array('label'=>'Autos', 'url'=>array('/autos/index')),
          array('label'=>'Repuestos', 'url'=>array('/contactos/create')),
          array('label'=>'Agendamiento', 'url'=>array('/agendamientos/create')),
					array('label'=>'¿Quiénes somos?', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'Contactos', 'url'=>array('/contactenos/create')),
          array('label'=>'Subir imagenes', 'url'=>array('/imagenForm'),'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>


      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>
<?php if(isset($this->breadcrumbs) and $this->breadcrumbs!==array()):?>
<div class="container">
	<div class="row-fluid">
		<div class="span12">
          <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'htmlOptions'=>array('style' => "margin: 10px 0;" ),
          	'links'=>$this->breadcrumbs,
          )); ?><!-- breadcrumbs -->
		</div>
	</div>
</div>
<?php endif?>


<?php echo $content;?>

  
<footer class="footer bg-ft clearfix pd4">
    <div class="container">
        <!--footer container-->
        <div class="row-fluid">
            <div class="span3">
                <section>
                    <h4><span>Cont&aacute;ctenos</span></h4>
                    <p>DGM Automotores<br>
                        Casa Central <br>
                        Avda. Mariscal López 2801/99 y Reclus<br>
                        <strong>Tel&eacute;fono:</strong> <a href="tel:(021) 6190000" class="tele">(021) 6190000</a><br>
                        <strong>Fax:</strong> (021) 582 750<br>
                        <span class="overflow"><strong>email:</strong> <a href="mailto:email@domain.com">dgmautomotores@gmail.com</a></span> </p>
                </section>
                <!--close section-->

                <section>
                    <h4><span>S&iacute;guenos</span></h4>
                    <div class="social">
                      <a href="https://www.facebook.com/DGMAutomotoresPY" target="blank"><i class="icon-facebook facebook"></i></a>
                      <a href="https://twitter.com/xfranm" target="blank"><i class="icon-twitter twitter"></i></a>
                      <a href="https://www.linkedin.com/nhome/" target="blank"><i class="icon-linkedin linkedin"></i></a>
                      <a href="https://mail.google.com/mail/u/0/#inbox" target="blank"><i class="icon-google-plus google-plus"></i></a>
                    </div>
                </section>
                <!--close section-->
            </div>
            <!-- close .span3 -->

            <!--section containing newsletter signup and recent images-->
            <div class="span5">
                <section>
                    <h4><span>Mant&eacute;ngase actualizado</span></h4>
                    <p>Mant&eacute;ngase siempre informado de todas nuestras novedades.</p>
                        <form action="#" method="post">
                    <div class="input-append append-fix custom-append row-fluid">
                      <input type="email" class="span8" placeholder="Email" name="email">
                            <button class="btn btn-primary">Reg&iacute;strate</button>

                    </div></form>
                    <!--close input-append-->
                </section>
                <!--close section-->
            </div>
            <!-- close .span5 -->

            <!--section containing blog posts-->
            <div class="span4">
                <section>
                    <h4><span>Sucursales</span></h4>
                    <p><strong>Complejo San Lorenzo</strong><br>
                     Avda. Mcal. López y Victor Cáceres <br>
                     Tel.: (021) 6190000  <br><br>
                    <strong>CENTRAL DE TELEMARKETING</strong><br>
                    6190351 / 6190353 / 6190400 / 6190401 <br>
                    6190402 / 6190403 / 6190404
                    </p>
                </section>
            </div>
            <!-- close .span4 -->
        </div>
        <!-- close .row-fluid-->
    </div>
    <!-- close footer .container-->
</footer>


 <section class="footer-credits">
    <div class="container">
        <ul class="clearfix">
            <li>© 2016 DGM Automotores. Desarrollado por DGM Automotores. Todos los derechos reservados.</li>
            <li>Electiva III</li>
        </ul>
    </div>
    <!--close footer-credits container-->
</section>

  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
  </body>
</html>
