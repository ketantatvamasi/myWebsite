<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
<script>
    (function($) {
        $(".headingHover1").attr("data-showme","img-1");
        $(".headingHover2").attr("data-showme","img-2");
        $(".headingHover3").attr("data-showme","img-3");
        $(".headingHover4").attr("data-showme","img-4");
        $(".headingHover5").attr("data-showme","img-5");
        $(".headingHover6").attr("data-showme","img-6");
        $(".headingHover7").attr("data-showme","img-7");
        $(".headingHover8").attr("data-showme","img-8");
        $(".headingHover9").attr("data-showme","img-9");
        $(".headingHover10").attr("data-showme","img-10");
        $(".headingHover11").attr("data-showme","img-11");
        $(".headingHover12").attr("data-showme","img-12");
        // alert('hover');
        $('[data-showme]').hover(function(){
            var showme = $(this).attr('data-showme');
            $('.all-img').hide();
            $('.'+ showme).show();
        });

        $(".benefitsBox1").attr("data-showicon","benefitsIcon1");
        $(".benefitsBox2").attr("data-showicon","benefitsIcon2");
        $(".benefitsBox3").attr("data-showicon","benefitsIcon3");
        $(".benefitsBox4").attr("data-showicon","benefitsIcon4");
        $(".benefitsBox5").attr("data-showicon","benefitsIcon5");

        $('[data-showicon]').hover(function(){
            var showIcon = $(this).attr('data-showicon');
                $('.'+showIcon).css("transform", "scale(1.2)");
            }, function(){
                var showIcon = $(this).attr('data-showicon');
                $('.'+showIcon).css("transform", "scale(1)");
        });
    })( jQuery );

</script>
	</body>
</html>
