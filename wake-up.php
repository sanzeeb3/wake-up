<?php
/**
 * Plugin Name: Wake Up!
 * Description: Popup when an admin in admin area becomes idle for 30 seconds.
 * Version: 1.0.0
 * Author: Sanjeev Aryal
 * Author URI: http://www.sanjeebaryal.com.np
 * Text Domain: wake-up
 *
 * @package    Wake Up
 * @since      1.0.0
 * @license    GPL-3.0+
 *
 * @link https://stackoverflow.com/a/55469383/5844795
 * @link https://github.com/sanzeeb3/wake-up
 *
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'admin_footer',
	function() {
		?>
			<script>
				let timeout;

				function wakeup_resetTimer(){
					clearTimeout(timeout);

					timeout = setTimeout(function(){
						alert("Wake Up!");
					}, 30000);
				}

				document.onmousemove = wakeup_resetTimer;
				document.onkeypress = wakeup_resetTimer;
			</script>
		<?php
	}
);
