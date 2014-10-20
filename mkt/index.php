<?php get_header(); ?>

<section id="mosaico">
	<div class="container_12">
        <?  query_posts("showposts=4&cat=2");
		$classes = array(
			0=>'big',
			1=>'small',
			2=>'small',
			3=>'big'
		);
		$i = 0;
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article <?php post_class($classes[$i++%4]); ?>><a href="<?php the_permalink(); ?>">
			<div class="hover">Saiba mais</div>
        	<figure>
            	<?php if(has_post_thumbnail()) { the_post_thumbnail('destaques');} ?>
                
                <figcaption>
                	<hgroup>
                        <h1><?php echo limit_words(get_the_title(), '2'); ?></h1>
                        <h2><?php echo limit_words(get_the_content(), '6'); ?></h2>
                    </hgroup>
                </figcaption>
            </figure>
        </a></article>
        
        <? endwhile; endif; ?>
    </div>
</section>

<section id="featured">
	<div class="container_12">
    	<section class="newest">
            <h1>Últimas</h1>
            
            <?php
				$args = array( 'numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'date');
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post);
			?>
            <article><a href="<?php the_permalink(); ?>">
            	<div class="hover">+</div>
                <figure>
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(array(230,190));} ?>
                    
                    <figcaption>
                        <header>
                            <hgroup>
                                <h3><?php echo limit_words(get_the_title(), '2'); ?></h3>
                                <h4><?php echo limit_words(get_the_content(), '10'); ?></h4>
                            </hgroup>
                            
                        	<p><time><?php the_time(' j \d\e F \d\e Y'); ?></time></p>
                        </header>
                    </figcaption>
                </figure>
            </a></article>
            
            <?php endforeach; ?>
    	</section>

        <section class="feature">
        	<h1>Lorem</h1>
        
            <?php
				$args = array( 'numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'date', 'cat' => '3');
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post);
			?>
            
            <article><a href="<?php the_permalink(); ?>">
            	<div class="hover">+</div>
                <figure>
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(array(230,190));} ?>
                    
                    <figcaption>
                        <h4><?php echo limit_words(get_the_content(), '10'); ?></h4>
                        
                        <p><time><?php the_time(' j \d\e F \d\e Y'); ?></time></p>
                    </figcaption>
                </figure>
            </a></article>
            
            <?php endforeach; ?>
        </section>
        
        <section class="feature">
        	<h1>Ipsum</h1>
        	
            <?php
				$args = array( 'numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'date', 'cat' => '4');
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post);
			?>
            
            <article><a href="<?php the_permalink(); ?>">
            	<div class="hover">+</div>
                <figure>
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(array(230,190));} ?>
                    
                    <figcaption>
                        <h4><?php echo limit_words(get_the_content(), '10'); ?></h4>
                        
                        <p><time><?php the_time(' j \d\e F \d\e Y'); ?></time></p>
                    </figcaption>
                </figure>
            </a></article>
            
            <?php endforeach; ?>
        </section>
</section>

<?php get_footer(); ?>