<?php get_header(); ?>

<div class="container mt-32 mb-16">
    <!-- <div class="row mb-2"> -->
        <?php
        $loop = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => -1
            )
        );
        ?>

        <?php while ($loop->have_posts()) :

            $loop->the_post();
            ?>
            <div class="col-md-12">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"><?= the_author_nickname() ?></strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="<?= esc_url(get_permalink())  ?>"><?= the_title(); ?></a>
                        </h3>
                        <div class="mb-1 text-muted"><?= get_the_date('F, j Y', the_ID()) ?></div>
                        <p class="card-text mb-auto"><?= mb_strimwidth(apply_filters( 'the_excerpt', get_the_excerpt() ), 0, 200, '...'); ?></p>
                        <a href="<?= esc_url(get_permalink())  ?>">Continue reading</a>
                    </div>
                    <?= the_post_thumbnail('large', ['class' => 'card-img-right flex-auto d-none d-md-block', 'style' => 'width: 200px; height: 250px;']); ?>
                </div>
            </div>
        <?php

        // End the loop.
        endwhile;

        // Previous/next page navigation.
        the_posts_pagination(
            array(
                'prev_text'          => __('Previous page', 'twentysixteen'),
                'next_text'          => __('Next page', 'twentysixteen'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>',
            )
        );
        ?>
    <!-- </div> -->
</div>

<?php get_footer(); ?>