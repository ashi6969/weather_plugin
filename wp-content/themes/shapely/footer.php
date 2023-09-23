<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<?php get_sidebar( 'footer' ); ?>
</footer><!-- #colophon -->
<div style="background-color:#6431C7;"><br></div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function($) {
    $('#weather-widget-form2').on('submit', function(e) {
        e.preventDefault();
        var location = $('#weather-location2').val();
        $.ajax({
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            type: 'POST',
            data: {
                action: 'get_weather_data',
                location: location
            },
            success: function(response) {
                console.log(response);
                var data = JSON.parse(response);
                if (!data.error) {
                    $('#weather-widget-result2').html('temperature is  ' + data.main.temp + '°C <br>' + 'sunrise on  ' + data.sys.sunrise);
                     // Display temperature (customize as needed)
                } else {
                    $('#weather-widget-result2').html('Error: ' + data.error);
                }
            },
            error: function() {
                $('#weather-widget-result2').html('Error: Unable to fetch data.');
            }
        });
    });
});

</script>

</body>
</html>
<?php

