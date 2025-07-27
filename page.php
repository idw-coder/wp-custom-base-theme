<?php get_header(); ?>
<main id="main" class="site-main py-8 flex-grow">
    <div class="container mx-auto px-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
                    <div class="text-gray-800 leading-relaxed">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</main>

<?php get_footer(); ?>