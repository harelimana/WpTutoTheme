<?php
get_header();
?>

<?php while (have_posts()) :
    the_post();
    ?>
    <div>
        <h1><?php echo  get_the_title(); ?> est la page d'accueil ou la liste d'article non filtrée</h1>
        <p>
            <?php
            echo get_the_content();
            ?>
        </p>
    </div>
    <?php
endwhile; ?>
<?php get_footer(); ?>

