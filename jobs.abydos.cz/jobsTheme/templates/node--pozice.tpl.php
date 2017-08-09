
  <div class="logo">
  <img src="/sites/all/themes/jobsTheme/images/logo.png" class="logoImg" alt="abyLogo" />
  </div>

  <nav id="customNav" class="navbar navbar-fixed">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
          <span class="glyphicon glyphicon-menu-hamburger"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mMenu" id="bs-example-navbar-collapse-1">
            <?php $main_menu_tree = menu_tree_all_data('main-menu', null, 3);
                render_menu_tree($main_menu_tree);?>
        </div><!-- /.navbar-collapse -->
        <?php print render($content['field_volna_mista_menu']); ?>
      </div><!-- /.container-fluid -->
  </nav>
  <div class="slider">
       <img src="/sites/all/themes/jobsTheme/images/slider_pokus2-min.png" class="img-res" alt="abySlider" />
  </div>

  <div class="container-fluid">
    <div class="maxwidth">
    <div class="row wrapp">
      <div class="col-md-6 col-sm-6 col-xs-12">
          <?php print render($content['field_nazev_pozice']); ?>
          <?php print render($content['field_okam_nastup']); ?>
          <?php print render($content['field_text_k_pozici']); ?>

          <?php print render($content['field_nadpis_info']); ?>
          <?php print render($content['field_info_pozice']); ?>

          <?php print render($content['field_nadpis_poz']); ?>
          <?php print render($content['field_info_poz']); ?>

          <?php print render($content['field_nadpis_nab']); ?>
          <?php print render($content['field_info_nab']); ?>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
          <?php print render($content['field_pravy_bok']); ?>
      </div>
    </div>

<div class="row odkazy">
  <div class="col-md-6 col-sm-6 col-xs-12">
      <?php print render($content['field_odpnp']); ?>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php print render($content['field_zpnv']); ?>
</div>
</div>
</div>
<div class="footer row">
  <div class="followus">
    <div id="fb-root"></div>
<div class="fb-like" data-href="https://www.facebook.com/Abydos-1634479583481691/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
  </div>
  <div class="copyright">
    <h4> &copy; Abydos 1997 - <?php echo date("Y"); ?></h4>
  </div>
</div>



</div>

  <!-- end of container-fluid -->
