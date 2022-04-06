<?php global $qwetheme_options; ?>



<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4"><?php if($qwetheme_options['titleone']){echo esc_attr($qwetheme_options['titleone']); } ?></h2>
                <p><?php if($qwetheme_options['descriptionsone']){echo esc_attr($qwetheme_options['descriptionsone']); } ?></p>
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
                <p><?php if($qwetheme_options['descriptionstwo']){echo esc_attr($qwetheme_options['descriptionstwo']); } ?></p>
              </div>
              <h2 class="footer-heading mb-4"><?php if($qwetheme_options['titlefour']){echo esc_attr($qwetheme_options['titlefour']); } ?></h2>
              
              <?php if($qwetheme_options['mailformwidgets']) echo do_shortcode(esc_attr($qwetheme_options['mailformwidgets'])); ?>
              </div>

             
			  
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa-solid fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
