




<!-- footer -->
<footer class="footer" role="contentinfo">

  <div class="footer_top">
    <div class="container">
      <form method="post" action="https://newsletter.infomaniak.com/external/submit" class="inf-form" target="_blank"><input type="email" name="email" style="display:none" /><input type="hidden" name="key" value="eyJpdiI6IkgrSFMzMW5nZmtmVmxDWjdKSVhuOVwvc1ZiakVVbTVLaWl0TlJubmZqQUI4PSIsInZhbHVlIjoiYld4bWJKMEJLcWhaMXZRWGx6TmVaaXF2amI0YmZTYmRqcFBKTzB1NWpxcz0iLCJtYWMiOiIzNzA3MjlhNmUwZDM0ZWE3YzQ4YWM1MjIzMDQyMDg2Y2Y1YmFlMzhkOGI3M2QzMDE4NTNkYzg3M2U3MDM3ODdjIn0="><input type="hidden" name="webform_id" value="4179">
        <div class="inf-success" style="display:none">
          <h4>Votre inscription a été enregistrée avec succès !</h4>
          <p> <a href="#" class="inf-btn">«</a> </p>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h3>Newsletter</h3>
            <p>
              Inscrivez-vous à notre newsletter <br>et recevez 3-4 fois par an maximum <br>les informations du festival <br>et de la saison JazzContreBand.
            </p>
          </div>
          <div class="col-sm-4 form_col">
            <div class="inf-content">
              <div class="inf-input inf-input-text">
                <input type="text" name="inf[2]" data-inf-meta = "2" data-inf-error = "Merci de renseigner une chaine de caractère" placeholder="Prénom" >
              </div>
              <div class="inf-input inf-input-text">
                <input type="text" name="inf[3]" data-inf-meta = "3" data-inf-error = "Merci de renseigner une chaine de caractère" placeholder="Nom" >
              </div>
            </div>
          </div>
          <div class="col-sm-4 form_col">
            <div class="inf-input inf-input-text">
              <input type="text" name="inf[1]" data-inf-meta = "1" data-inf-error = "Merci de renseigner une adresse email" required="required" placeholder="Email" >
            </div>
            <div class="inf-submit"> <input class="button" type="submit" name="" value="S'inscrire">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="container">

    <p>
      &copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?> | Website by <a href="//webfactor.ch" title="Webfactor">Webfactor</a>

      <?php if (is_user_logged_in()) : ?>
        | <a class="logout" href="<?php echo wp_logout_url(site_url('/')); ?>">Déconnexion</a>
      <?php else: ?>
        | <a class="login" href="<?php echo  site_url('/login'); ?>">Connexion Membres</a>
      <?php endif; ?>
    </p>

  </div>

  			<div class="stripes_top"></div>
  <div id="footer_bg"></div>
</footer>
<!-- /footer -->














<?php if (!is_user_logged_in()) : ?>
  <div class="loginformcontainer">
    <div>
      <div class="loginform black_box insideform">
        <h3>Connexion</h3>
        <?php wp_login_form(); ?>
        <p class="forgottenpassword">- Mot de passe oublié -</p>
      </div>
    </div>

    <div class="lostpasswd black_box insideform">
      <h3>Mot de passe oublié</h3>
      <p>Entrez votre adresse email pour recevoir votre nouveau mot de passe</p>
      <form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
        <div class="username">
          <label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
          <input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" />
        </div>
        <div class="login_fields">
          <?php do_action('login_form', 'resetpass'); ?>
          <input type="submit" name="user-submit" value="<?php _e('Réinitialiser mon mot de passe'); ?>" class="user-submit" tabindex="1002" />
          <?php $reset = $_GET['reset']; if ($reset == true) {
    echo '<p>Un message a été envoyé sur votre adresse email.</p>';
} ?>
          <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>?reset=true" />
          <input type="hidden" name="user-cookie" value="1" />
        </div>
      </form>
      <p class="notforgotten">- Pas oublié? Connexion -</p>
    </div>
  </div>
<?php endif; ?>



<?php $tdu  =  get_template_directory_uri() ; ?>

<script type="text/javascript" src="<?php echo $tdu; ?>/js/lib/underscore-min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/lib/moment.min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/lib/clndr.min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/lib/jquery.justifiedGallery.min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/lib/featherlight.min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/lib/featherlight.gallery.min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/lib/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/scripts.js?v=<?php echo wf_version(); ?>"></script>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114588276-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-114588276-1');
</script>


</body>
</html>
