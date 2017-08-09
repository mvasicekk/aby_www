
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
<div class="container-fluid">
  <div class="maxwidth">
<div class="row">
  <?php print render($content['field_kt_nadpis']); ?>
</div>
<div class="row">
      <?php print render($content['field_kt_firma']); ?>
      <?php print render($content['field_kt_adresa']); ?>
      <?php print render($content['field_kt_stat']); ?>

</div>
<div class="row kt_second">
      <?php print render($content['field_kt_tel']); ?>
      <?php print render($content['field_kt_fax']); ?>
      <?php print render($content['field_kt_mail']); ?>
</div>
<div class="row kt_map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2555.937291316528!2d12.2824846514501!3d50.16230941586465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a0fa8e3b50dae9%3A0x22b51409116c56e8!2sHazlov+247%2C+351+32+Hazlov!5e0!3m2!1scs!2scz!4v1495530761978" width="774" height="255" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="row kt_maptext">
  <?php print render($content['field_kt_map_text']); ?>
</div>
<div class="row kt">
    <?php print render($content['field_kt_osoby']); ?>
    <?php print render($content['field_kt_osoby2']); ?>
</div>
</div>

<div class="maxwidth">
<div class="row volnaMista">
    <h3 class="nadpisVolnaMista">Volná místa – Vyberte si svou pozici</h3>
      <div class="pozice">
        <?php print render($content['field_pozice']); ?>
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
<!-- end of container-fluid -->
</div>
