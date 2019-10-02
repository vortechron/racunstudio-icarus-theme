
  <!-- C A L L  T O  A C T I O N -->
  <section id="call-to-action" class="bg-grey-darkest">
    <div class="container text-center">
      <h2><?= get_option('footer-heading'); ?></h2>
      <div class="title-block">
        <p><?= get_option('footer-subheading'); ?></p>
      </div>
    </div>
  </section>
  <!-- E N D  C A L L  T O  A C T I O N -->

  <!--  F O O T E R  -->
  <footer>
    <div class="container">
      <!-- <div class="row">
        <div class="col-md-3">
          <h5>Seo Ranking</h5>
          <ul>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Affiliate Program</a></li>
            <li><a href="#">Developer API</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Video Tutorials</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Main Tools</h5>
          <ul>
            <li><a href="#">Rank Tracker</a></li>
            <li><a href="#">Backlink Checker</a></li>
            <li><a href="#">Keyword Generator</a></li>
            <li><a href="#">Serp Checker</a></li>
            <li><a href="#">Site Audit</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Blog</h5>
          <ul>
            <li><a href="#">Get High Quality Backlinks</a></li>
            <li><a href="#">Top Google Searches</a></li>
            <li><a href="#">Avoid Google Penalties</a></li>
            <li><a href="#">White Hat SEO Tips</a></li>
            <li><a href="#">Google Trends</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Company</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque, tortor nec mattis feugiat, velit purus euismod odio, quis vulputate velit urna.</p>
          <p><a href="mailto:sales@theseocompany.com" class="external-links">sales@theseocompany.com</a></p>
        </div>
      </div>  -->
      <!-- <div class="divider"></div> -->
      <div class="row">
        <div class="col-md-6 col-xs-12">
            <a href="<?= get_option('facebook-url'); ?>"><i class="icon ion-logo-facebook"></i></a>
            <a href="<?= get_option('instagram-url'); ?>"><i class="icon ion-logo-instagram"></i></a>
            <a href="<?= get_option('twitter-url'); ?>"><i class="icon ion-logo-twitter"></i></a>
            <a href="<?= get_option('youtube-url'); ?>"><i class="icon ion-logo-youtube"></i></a>
          </div>
          <div class="col-md-6 col-xs-12">
            <small><?= (new DateTime())->format('Y') ?> &copy; All rights reserved. Made by Vortechron</small>
          </div>
      </div>
    </div>
  </footer>
  </div>
  <!--  E N D  F O O T E R  -->
    

    <!-- External JavaScripts -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>

  </body>
</html>