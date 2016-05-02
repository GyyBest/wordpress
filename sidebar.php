<div class="sidebar">

<ul>

<?php if( function_exists('dynamic_sidebar')&&dynamic_sidebar() ) : else : ?>
	<li id="search"><h2><?php _e('Search'); ?></h2>
	<?php include(TEMPLATEPATH . '/searchform.php'); ?>
	</li>

	<li id="calendar"><h2><?php _e('Calendar'); ?></h2>
		<?php get_calendar(); ?>
	</li>

	<?php wp_list_pages('depth=3&title_li=<h2>Pages</h2>'); ?>
	<li>
		<h2><?php _e('Categories'); ?></h2>
		<ul>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>

		</ul>
	</li>

	<li><h2><?php _e('Archives'); ?></h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
			<!--call the archives lists monthly-->
		</ul>
	</li>

	<li><h2><?php _e('Blogroll'); ?></h2>
		<ul>
			<?php wp_list_bookmarks($arg); ?>
			<!--This syntax doesn't work.I don't know why????Can anybody help me to solve its-->

			<li><h2><?php _e('Meta'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li>
						<?php wp_loginout(); ?>
					</li>
					<?php wp_meta(); ?>
				</ul>
			</li>
		</ul>
	</li>
<?php endif; ?>	
</ul>
</div>