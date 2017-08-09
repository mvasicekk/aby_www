<?php //print the variables if needed to allow for individual field theming or breaking them up.
/*
  print '<pre>';
  print_r($variables);
  print '</pre>';
*/
?>
<!-- jelikož mi user-login nenahrává style.css tak musim vse zapisovat zde do <style> </style> -->
<div class="jobsTheme-user-login-form-wrapper">
    <img src="/sites/all/themes/jobsTheme/images/logo.png" class="logoI" alt="abyLogo" />
  <div class="login-wrapper">
    <h2><?php print render($intro_text); ?></h2>

    <?php
      // split the username and password from the submit button so we can put in links above
      print drupal_render($form['name']);
      print drupal_render($form['pass']);
    ?>

    <div class="user-links">
        <span class="passlink">
          <a href="/user/password">Zapomněl/a jste heslo?</a></span>
        </span>
    </div>

    <?php
      print drupal_render($form['form_build_id']);
      print drupal_render($form['form_id']);
      print drupal_render($form['actions']);
    ?>

</div><!--//login-wrapper-->





</div>
