<?php get_header(); ?>
<main id="main" class="site-main py-8 flex-grow">
    <div class="container mx-auto px-4">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8 border-b pb-4'); ?>>
                    <h2 class="text-2xl font-semibold text-blue-700 hover:underline">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-gray-700 mt-2">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="mt-6">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p>投稿が見つかりませんでした。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>