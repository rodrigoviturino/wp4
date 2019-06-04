<?php
/*
    Template Name: Page Home
*/
?>

<?php get_header(); ?>

<?php// get_template_part( 'partials/home', 'banner' ); ?>

<main class="home">

    <section class="home__features">
        <div class="container">
            <div class="row">
                <?php get_template_part('partials/home', 'features'); ?>
            </div>
        </div>
    </section>

    <section class="home__app">
        <div class="container">
            <div class="row">
                <?php get_template_part('partials/home', 'app') ?>
            </div>
        </div>
    </section>

    <section class="home__slide">
        <div class="container">
            <div class="row">
                <?php get_template_part('partials/home', 'slide') ?>
            </div>
        </div>
    </section>

    <!-- <section class="home__cta">
        <div class="container">
            <div class="row">
                <?php// get_template_part('partials/home', 'cta') ?>
            </div>
        </div>
    </section> -->

    <section class="home__about">
        <div class="container">
            <div class="row">
                <?php get_template_part('partials/home', 'about') ?>
            </div>
        </div>
    </section>

    <section class="home__contact" id="contact">
        <div class="container">
            <div class="row">
                <?php get_template_part('partials/home', 'contact') ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>