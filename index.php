<?php get_header(); ?>

  <!-- E N D  N A V B A R -->
  
  <!-- H E R O -->
  <video-bg :sources="['<?= get_template_directory_uri() .'/video/landing.mp4'; ?>']">
  <!-- If you want to add content here, a slot is waiting! -->
  <section id="hero">
  <!-- <div class="parallax-window" data-parallax="scroll">

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="<?= get_template_directory_uri() .'/video/landing.mp4'; ?>" type="video/mp4">
    </video>
  </div> -->

    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 text-center hero-content text-white" v-parallax="0.2">
          <span v-scroll-reveal><?= get_option('feature-subheading'); ?></span>
          <h1 v-scroll-reveal><?= get_option('feature-heading'); ?></h1>
          <p v-scroll-reveal class="text-white"><?= get_option('feature-content'); ?></p>
        </div>
      </div>
    </div>
  </section>
  </video-bg>

  <!-- E N D  H E R O -->

  <!-- E N D  M A R K E T I N G -->
  <?php
$loop = new WP_Query( array(
    'post_type' => 'project',
    'posts_per_page' => -1
  )
);

$counter = 1;
?>

<?php while ( $loop->have_posts() ) : 

$loop->the_post(); 

$counter++;

$type = $counter % 2 == 0 ? 'left' : 'right';
?>
  <?php if ($type == 'left') : ?>
  <section id="marketing" >
    <div class="container">
      <div class="row flex items-center">
        <div class="col-md-5">

          <div class="content-box">
            <span v-scroll-reveal><?= get_field('subtitle'); ?></span>
            <h2 v-scroll-reveal><?= the_title(); ?></h2>
            <p  ><?= the_content(); ?></p>
            <?php
              $link = get_field('button');
            ?>
            <?php if (isset($link['title'])) : ?>
            <a target="<?= $link['target'] ?>" href="<?= $link['url'] ?>" class="btn btn-regular"><?= $link['title'] ?></a>
            <?php endif; ?>
          </div>

        </div>
        <div class="col-md-7" >
          <div v-parallax="0.1">

            <?= the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php else : ?>
  <section id="testimonials">
    <div class="container">
      <div class="row flex items-center">
        <div class="col-md-7">
          <div v-parallax="0.1">

            <?= the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
          </div>
        </div>
        <div class="col-md-5">
        

          <div class="content-box">
            <span v-scroll-reveal><?= get_field('subtitle'); ?></span>
            <h2 v-scroll-reveal><?= the_title(); ?></h2>
            <p><?= the_content(); ?></p>
            <?php
              $link = get_field('button');
            ?>
            <?php if (isset($link['title'])) : ?>
            <a target="<?= $link['target'] ?>" href="<?= $link['url'] ?>" class="btn btn-regular"><?= $link['title'] ?></a>
            <?php endif; ?>
          </div>

        </vue-aos>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
<?php endwhile; wp_reset_query(); ?>
  <!-- E N D  M A R K E T I N G -->

  <!-- T E S T I M O N I A L S -->
  <section id="teams">
    <div class="container">
      <div class="title-block">
        <h2 v-scroll-reveal><?= get_option('team-heading'); ?></h2>
        <p v-scroll-reveal><?= get_option('team-subheading'); ?></p>
      </div>
      <div class="row">
      <?php
$loop = new WP_Query( array(
    'post_type' => 'team',
    'posts_per_page' => -1
  )
);
?>

<?php while ( $loop->have_posts() ) : 

$loop->the_post(); 
?>
        <div class="col-md-6">
          <div class="testimonial-box mb-12" v-parallax="0.1">
            <div class="row personal-info">
              <div class="col-md-2 col-xs-2">
                <div class="profile-picture review-one">
          <?= the_post_thumbnail('large', ['class' => 'img-fluid rounded-full']); ?>
                  
                </div>
              </div>
              <div class="col-md-10 col-xs-10">
                <h6  v-scroll-reveal><?= the_title(); ?></h6>
                <small><?= get_field('role'); ?></small>
              </div>
            </div>
            <p><?= the_content(); ?></p>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </section>
  <!-- E N D  T E S T I M O N I A L S -->
  <!-- P R I C I N G -->
  <!-- <section id="pricing">
    <div class="container">
      <div class="title-block">
        <h2>Plans and Pricing</h2>
        <p>The best software to develop perfect content and advertising strategies to increase leads and sales.</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="pricing-box">
            <h3 class="demo">Demo Version</h3>
            <h6>Free</h6>
            <small>forever</small>
            <p>Demo gives you full access to all features for 7 days</p>
            <div class="divider-light"></div>
            <ul>
              <li><i class="icon ion-md-checkmark-circle-outline demo"></i>Marketing plan</li>
              <li><i class="icon ion-md-checkmark-circle-outline demo"></i>Seo reporting tool</li>
              <li><i class="icon ion-md-checkmark-circle-outline demo"></i>Keywords explorer</li>
              <li><i class="icon ion-md-checkmark-circle-outline demo"></i>Competitive analysis</li>
              <li><i class="icon ion-md-checkmark-circle-outline demo"></i>Five projects - <span class="demo">¡New!</span></li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn btn-demo">Demo version</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pricing-box">
            <h3>Standard Version</h3>
            <h6>$9</h6>
            <small>per month</small>
            <p>Outrank your competitors with this amazing software</p>
            <div class="divider-light"></div>
            <ul>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Marketing plan</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Seo reporting tool</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Keywords explorer</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Competitive analysis</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Unlimited projects - <span>¡New!</span></li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn btn-buy">Buy now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pricing-box">
            <h3>Agency Version</h3>
            <h6>$29</h6>
            <small>per month</small>
            <p>For agencies and businesses with extensive web presence</p>
            <div class="divider-light"></div>
            <ul>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Marketing plan</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Seo reporting tool</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Keywords explorer</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Competitive analysis</li>
              <li><i class="icon ion-md-checkmark-circle-outline"></i>Unlimited projects - <span>¡New!</span></li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn btn-buy">Buy now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- E N D  P R I C I N G -->
<?php get_footer(); ?>