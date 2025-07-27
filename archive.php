<?php get_header(); ?>

<main id="main" class="site-main">
    <h1 class="archive-title">
        <?php the_archive_title(); ?>
    </h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <div class="entry-meta">
                    <span class="posted-on"><?php the_time('Y-m-d'); ?></span>
                    <span class="byline"> / <?php the_author(); ?></span>
                </div>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>