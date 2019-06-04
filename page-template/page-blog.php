<?php
/*
    Template Name: Blog
*/
?>

<?php get_header(); ?>

<section class="blog-page">
    <div class="container">
        <div class="row">

            <div class="col-sm-8">
            
            <?php
            /// vamos criar uma query para pegar 3 posts da categoria novidades:

                $minha_query = new WP_Query( array( 
                    'posts_per_page' => 3,
                ) );
                
                if ( $minha_query->have_posts() ) { 
                    while ( $minha_query->have_posts() ) {
                        $minha_query->the_post(); ?>

                    <div class="card mb-3">
                        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <?php if (has_post_thumbnail()) { ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3"></a>
                            <?php	} ?>

                            <div class="card-body">
                                <?php// posted_on(); posted_by(); ?>
                                <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <?php //the_content(); ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink();?>" class="btn btn-primary">Ver post completo &#187;</a>
                            </div>

                            <div class="card-footer text-muted">
                            <?php the_tags(__('Tags: '), ', ', '<br />'); ?>
                            <?php _e('Categoria: '); ?> <?php the_category(', ') ?> | 
                            <?php comments_popup_link(__('Nenhum comentário &#187;'), __('1 Comentário &#187;'), __('% Comentários &#187;')); ?>
                            </div>

                        </article>
                    </div>

                <?php } ?>
            <?php wp_reset_postdata();
                } 
            ?>
                <div class="my-5">
                    <div class="pagina_anterior text-dark text-left"><?php previous_post_link('Página Anterior'); ?> </div>                
                    <div class="pagina_proxima text-dark text-right"> <?php next_post_link('Próxima Página'); ?> </div>                
                </div>
            </div>


            <div class="col-sm-4">
                <?php  get_sidebar(); ?>
            </div>

        </div>
    </div>
</section>

<?php  get_footer(); ?>