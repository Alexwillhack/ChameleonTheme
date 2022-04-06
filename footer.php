<?php global $qwetheme_options; ?>



<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4"><?php if($qwetheme_options['titleone']){echo esc_attr($qwetheme_options['titleone']); } ?></h2>
                <p><?php if($qwetheme_options['title1desc']){echo esc_attr($qwetheme_options['title1desc']); } ?></p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4"><?php if($qwetheme_options['titletwo']){echo esc_attr($qwetheme_options['titletwo']); } ?></h2>
                
                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'list-unstyled',
					'container'      => ''
			
				)
			);
			?>
      </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <form class="mb-5">
              <div class="mb-5">
                <h2 class="footer-heading mb-4"><?php if($qwetheme_options['titlethree']){echo esc_attr($qwetheme_options['titlethree']); } ?> </h2>
                <p><?php if($qwetheme_options['title3desc']){echo esc_attr($qwetheme_options['title3desc']); } ?></p>
              </div>
              <h2 class="footer-heading mb-4"><?php if($qwetheme_options['titlefour']){echo esc_attr($qwetheme_options['titlefour']); } ?></h2>
              
              <?php if($qwetheme_options['mailformwidgets']) echo do_shortcode(esc_attr($qwetheme_options['mailformwidgets'])); ?>
             
              
              
                           
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="fa-brands fa-facebook-f"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="fa-brands fa-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="fa-brands fa-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="fa-brands fa-linkedin-in"></span></a>
            </div>
            </div>
       
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
                  <?php esc_html_e('All rights reserved', 'qwetheme');?> 
            </p>
            </div>
          </div>
          
        </div>  
      </div>
    </footer>

  </div>

<?php wp_footer(); ?>

</body>
</html>
