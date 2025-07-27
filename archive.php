<?php get_header(); ?>
<main id="main" class="site-main py-8 flex-grow">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6"><?php the_archive_title(); ?></h1>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8 pb-4 border-b'); ?>>
                    <h2 class="text-2xl font-semibold text-blue-700 hover:underline">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="mt-2 text-gray-700">
                        <?php the_content(); ?>
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