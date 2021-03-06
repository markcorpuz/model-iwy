<?php
/* SETUP CHILD | 1.0.0 | 201229 | partials/archive.php
---------------------------------------------------------------------------------------------------- */
/**
 * Archive partial
 *
 * @package      Setup Child
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '<article class="module post-summary">';

	// FEATURED IMAGE
	setup_child_image();
	//setup_child_image_nolink();
	//setup_child_bgimage();
	//setup_child_bgimage_nolink();
	//setup_child_bgimage_wtitle();
	//setup_child_bgimage_wtitle_nolink();

	echo '<div class="items info">';

		// OVERLINE
		setup_child_overline();
		//setup_child_overline_nolink();
		
		// TITLE
		setup_child_title();
		//setup_child_title_nolink();

		// AUTHOR
		//setup_child_author();
		//setup_child_author_nolink();
		//setup_child_author_by();
		//setup_child_author_by_nolink();
		//setup_child_author_icon();
		//setup_child_author_icon_nolink();
		//setup_child_author_gravatar();
		
		// DATE
		//setup_child_date();
		//setup_child_date_mdy();
		//setup_child_date_day_mdy();
		//setup_child_date_mdy_time();

		// DATE & AUTHOR
		setup_child_dateauthor();
		//setup_child_dateauthor_nolink();

		// EXCERPT
		setup_child_excerpt();
		//setup_child_excerpt_maxwords();

		// ADMIN
		//setup_child_edit();
		setup_child_edit_date_modified();

	echo '</div>';

echo '</article>';
