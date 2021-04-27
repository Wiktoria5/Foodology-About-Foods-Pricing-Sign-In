<?php
// Template name: Home page

get_header(); ?>

<section class="commitment">
    <div class="container">
        <div class="commitment__header">
            <h6><?php the_field('commitment-subtitle'); ?></h6>
            <h2><?php the_field('commitment-title'); ?></h2>
            <p><?php the_field('commitment-description'); ?></p>
        </div>
        <div class="commitment__body">

            <?php
                $block = get_field('block');	
                            
                if( $block ): ?>

            <div class="commitment__body--block-left">
                <img src="<?php echo $block['image']; ?>" alt="<?php echo $block['image']['alt']; ?>">
                <h3><?php echo $block['title']; ?></h3>
                <p><?php echo $block['description']; ?></p>
            </div>
            <?php endif; ?>

            <?php
                $block_1 = get_field('block_1');	
                            
                if( $block_1 ): ?>

            <div class="commitment__body--block-right">
                <img src="<?php echo $block_1['image']; ?>" alt="<?php echo $block_1['image']['alt']; ?>">
                <h3><?php echo $block_1['title']; ?></h3>
                <p><?php echo $block_1['description']; ?></p>
            </div>
            <?php endif; ?>

            <?php
                $devilery = get_field('devilery');	
                            
                if( $devilery ): ?>

            <div class="commitment__body--text">
                <h3><?php echo $devilery['title']; ?></h3>
                <p class="description"><?php echo $devilery['description']; ?></p>
                <p class="price"><?php echo $devilery['price']; ?></p>
                <p class="delivery"><?php echo $devilery['desciprtion-after-price']; ?></p>
                <a href=""><?php echo $devilery['button']; ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="process">
    <div class="container">
        <div class="process__header">
            <h6><?php the_field('subtitle'); ?></h6>
            <h2><?php the_field('title'); ?></h2>
        </div>

        <div class="process__body">
            <div class="process__body__text">

                <?php
                $block_process1 = get_field('block_process1');	
                            
                if( $block_process1 ): ?>

                <div class="process__body__text--column">
                    <h4><?php echo $block_process1['title1']; ?></h4>
                    <p><?php echo $block_process1['description1']; ?></p>
                    <hr>
                </div>
                <?php endif; ?>

                <?php
                $block_process2 = get_field('block_process2');	
                            
                if( $block_process2 ): ?>

                <div class="process__body__text--column">
                    <h4><?php echo $block_process2['title2']; ?></h4>
                    <p><?php echo $block_process2['description2']; ?></p>
                    <hr>
                </div>
                <?php endif; ?> 

                <?php
                $block_process3 = get_field('block_process3');	
                            
                if( $block_process3 ): ?>

                <div class="process__body__text--column">
                    <h4><?php echo $block_process3['title3']; ?></h4>
                    <p><?php echo $block_process3['description3']; ?></p>
                    <hr>
                </div>
                <?php endif; ?> 
            </div>
            <div class="process__body--photo">
                <img src="<?php the_field('photo'); ?>" alt="photo">
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="testimonials__body">

            <?php
                $testimonial_left = get_field('testimonial_left');	
                            
                if( $testimonial_left ): ?>
                <div class="testimonials__body--photo">
                <img src="<?php echo $testimonial_left['photo']; ?>" alt="<?php echo $testimonial_left['photo']['alt']; ?>">
                <div class="user">
                    <p class="user--name"><?php echo $testimonial_left['name']; ?></p>
                    <p class="user--info"><?php echo $testimonial_left['profession']; ?></p>
                </div>
                </div>
                <?php endif; ?>
                
                
            <?php
                $testimonial_right = get_field('testimonial_right');	
                            
                if( $testimonial_right ): ?>

                <div class="testimonials__body--text">
                <h6><?php echo $testimonial_right['subtitle']; ?></h6>
                <h2><?php echo $testimonial_right['title']; ?></h2>
                <img src="<?php echo $testimonial_right['photo']; ?>" alt="<?php echo $testimonial_right['photo']['alt']; ?>">
                <h4><?php echo $testimonial_right['title_2']; ?></h4>
                <p><?php echo $testimonial_right['description']; ?></p>
                </div>
                <?php endif; ?>  
        </div>
    </div>
</section>
<section class="product">
    <div class="container">
        <div class="product__header">
            <h6><?php the_field('product_subtitle'); ?></h6>
            <h2><?php the_field('product_title'); ?></h2>
            <p><?php the_field('product_description'); ?></p>
        </div>
        <div class="product__body">
            <div class="product__body--img">
                <img src="<?php the_field('product_img'); ?>" alt="product_img">"
            </div>
            <div class="product__body__slider">

            <?php
                $product_slider_header = get_field('product_slider_header');	
                            
                if( $product_slider_header ): ?>

                <div class="product__body__slider--text">
                    <h3><?php echo $product_slider_header['product_slider_title']; ?></h3>
                    <p class="description"><?php echo $product_slider_header['product_slider_description']; ?></p>
                </div>   

                <?php endif; ?> 
                <div class="product__body__slider__slider">
                    <div class="product__body__slider__slider__slide">
                        <div class="product__body____slider__slider--block">
                            <div class="block--text">
                                <h4>Main Course</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block--photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/symbol_fish.png"
                                    alt="symbol">
                            </div>
                        </div>
                        <div class="product__body____slider__slider--block">
                            <div class="block--text">
                                <h4>Dessert</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block--photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/symbol_dessert.png"
                                    alt="symbol">
                            </div>
                        </div>
                        <div class="product__body____slider__slider--block">
                            <div class="block--text">
                                <h4>Appetizer</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block--photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/symbol_appetizer.png"
                                    alt="symbol">
                            </div>
                        </div>
                    </div>
                    <div class="product__body__slider__slider__slide">
                        <div class="product__body____slider__slider--block">
                            <div class="block--text">
                                <h4>Main Course</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block--photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/symbol_fish.png"
                                    alt="symbol">
                            </div>
                        </div>
                        <div class="product__body____slider__slider--block">
                            <div class="block--text">
                                <h4>Dessert</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block--photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/symbol_dessert.png"
                                    alt="symbol">
                            </div>
                        </div>
                        <div class="product__body____slider__slider--block">
                            <div class="block--text">
                                <h4>Appetizer</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block--photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/symbol_appetizer.png"
                                    alt="symbol">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="subscribe">
    <div class="container">
        <div class="subscribe__photo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo_banner.png" alt="banner">
        </div>
        <div class="subscribe__text">
            <h6><?php the_field('subscribe_subtitle'); ?></h6>
            <h2><?php the_field('subscribe_title'); ?></h2>
            <p><?php the_field('subsctibe_description'); ?></p>
            <a href=""><?php the_field('subscribe_button'); ?></a>
        </div>
    </div>
</section>

<?php get_footer();