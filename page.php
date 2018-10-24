<?php get_header(); 

    while(have_posts()) {
        the_post();?>
    

  <div class="container container--narrow page-section">

        <?php 
            $parentClassId = wp_get_post_parent_id(get_the_ID());
            if($parentClassId > 0){ ?>
                <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parentClassId); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentClassId); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
                </div>
         <?php   } ?>

                             
                         <?php

                            $testArray = get_pages(array(
                                'child_of' => get_the_ID()
                            ));

                            if($parentClassId or $testArray)  {?>
                            
                            <div class="page-links">
                        <h2 class="page-links__title"><a href="<?php echo get_permalink($parentClassId); ?>"><?php echo get_the_title($parentClassId) ?></a></h2>
                        <ul class="min-list">

                            <?php    if($parentClassId){
                                    $findChildrenOf = $parentClassId; 
                                } else{
                                    $findChildrenOf =get_the_ID();
                                }
    
                                    wp_list_pages(array(
                                        'title_li' => NULL,
                                        'child_of' => $findChildrenOf
                                    ));
                            }
                        
                            
                            ?>
                        </ul>
                    </div>

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

  </div>

    <?php }
    get_footer();
?>