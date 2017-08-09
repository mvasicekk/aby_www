<div id="bocak"></div>
<div id="wrapper">

<div class="logo">
  <?php if ($logo): ?>
   <div id="logoimg">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    </div>
  <?php endif; ?>
</div>
<?php if($page['vlajky']) : ?>
        <div class="vlajky">
          <?php print render ($page['vlajky']); ?>
        </div>
<?php endif; ?>
<nav>
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-menu-hamburger"></span>
        </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse mMenu" id="bs-example-navbar-collapse-1">
        <div id="menu-container">
        <div id="main-menu">
          <?php
          if (module_exists('i18n')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'menu-clone-main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'menu-clone-main-menu'));
          }
          print drupal_render($main_menu_tree);
          ?>
        </div>
        </div>
      </div><!-- /.navbar-collapse -->
</nav>
<div id="content-container">
  <?php if ($is_front): ?>
<?php if (theme_get_setting('slideshow_display', 'mobile')): ?>
<div id="slideshow">
<?php if(count($node->field_banner)>0){ ?>
  <a href="<?php echo $node->field_banner_odkaz['und'][0]['url']; ?>">
    <img class="imgresponsive" src="<?php echo $base_path."sites/default/files/".$node->field_banner["und"][0]["filename"]; ?>">
  </a>
<?php }else{ ?>
  <div id="slides">
    <div class="slides_container">

<?php if($node->language=="cs"){ ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="<?php print base_path(). 'cs/node/277' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/Den-otevrenych-dveri_Banner_web.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <a href="<?php print base_path(). 'cs/' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-web_naborovy-den.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <a href="<?php print base_path(). 'cs/na_co_cekate' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-web_900x300_cekate.png'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
<a href="<?php print base_path(). 'cs/tata' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_tata.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
        <a href="<?php print base_path(). 'cs/mama' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_mama.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
<a href="<?php print base_path(). 'cs/syn' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_syn1.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
<a href="<?php print base_path(). 'cs/syn2' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_syn2.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
<a href="<?php print base_path(). 'cs/kariera' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/abydos_kariera_zamestnani.jpeg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
<a href="<?php print base_path(). 'cs/node/187' ; ?>"><img class="imgresponsive" src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-dualnistudium.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php } ?>

<?php if($node->language=="ro"){ ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="<?php print base_path(). 'ro/aplicanti' ; ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-web_600x300-ROM.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <a href="<?php print base_path(). 'ro/aplicanti' ; ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_tata-ROM.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <a href="<?php print base_path(). 'ro/aplicanti' ; ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_mama-ROM.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <a href="<?php print base_path(). 'ro/aplicanti' ; ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_syn1-ROM.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <a href="<?php print base_path(). 'ro/aplicanti' ; ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'mobile') . '/images/banner-900x300_syn2-ROM.jpg'; ?>"/></a>
      <div class="carousel-caption">
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

<?php } ?>

    </div>
    <div class="slides_nav">
      <a href="#" class="prev"></a>
      <a href="#" class="next"></a>
    </div>
  </div>
  <?php } ?>
</div>
  <?php endif; ?>
  <?php if ($page['front_welcome']): ?>
    <div id="front-welcome"> <?php print render($page['front_welcome']); ?></div>
  <?php endif; ?>
  <?php endif; ?>

  <div id="content">

  <section id="main" role="main" class="post">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  </div>

</div>

<div class="cistic">
             </div>
<?php if (theme_get_setting('footer_copyright', 'mobile') || theme_get_setting('footer_credits', 'mobile')): ?>
 <div id="footer">
   <?php if (theme_get_setting('footer_copyright', 'mobile')): ?>

   <table class="">
 <tr>
     <td>CZ-35132 Hazlov 247</td>
     <td>+420 354 548 411</td>
     <td>info@abydos.cz</td>
     <td>www.abydos.cz</td>
 </tr>
   </table>

   <?php endif; ?>
 </div>
<?php endif; ?>

</div>
