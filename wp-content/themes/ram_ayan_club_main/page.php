<?php get_header(); ?>
<section class="blog-single-section py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <h3 class="fw-normal"><?php the_title(); ?></h3>
                <div class="fw-light text-color text-start"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>	