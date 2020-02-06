<?php get_header(); ?>
<div class="container">
      <main class="py-4">

            <article <?php post_class(); ?> >
                  <div class="post-header">

                  <?php  the_title('<h1>', '</h1>'); ?>

                  <?php

                  /*
                  
                        Пример интеграциии элемента в страницу записи

                  */
                        if( current_user_can('editor') || current_user_can('administrator') ) { 

                              echo "<div class='alert alert-info'><h5>Для администратора:</h5><hr>";
                  
                              if (has_post_thumbnail($post->ID) ) {
                                    get_template_part( 'admin', 'istories' );
                                    get_template_part( 'admin', 'ipost' );
                              }
                  
                              echo "</div>";
                  
                        } 

                  /*

                        Конец интеграциии
                  
                  */
                        
                        if (has_post_thumbnail($post->ID) ) { 
                              $featuredImage = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
                              $featuredImageCaption = get_the_post_thumbnail_caption($post->ID); ?>

                              <figure class="row featured-caption">
                                    <div class="figure-image" style="background-image:url(<?php echo $featuredImage; ?>);"></div>

                                    <figcaption class="figure-caption"><?php echo $featuredImageCaption; ?></figcaption>

                              </figure>

                        <?php } ?>

                  </div>

                  <div class="post-content">

                        <?php the_content(); ?>

                  </div>

                  <div class="post-footer">

                        <?php if (has_tag()) { ?>
                              <div class="post-footer-tag">
                                    <?php the_tags('', '') ?>
                              </div>
                        <?php } ?>

                  </div>
            </article>  

      </main>
</div>
<?php get_footer(); ?>