<?php
/**
 * TGM plugin activation.
 */
require_once get_template_directory() . '/inc/tgm/tgm-init.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/functions/theme-setup.php';

/**
 * Style Enqueue etiam.
 */
require get_template_directory() . '/inc/functions/enqueue.php';

/**
 * Pagination etiam.
 */
require get_template_directory() . '/inc/functions/pagination.php';

/**
 * Excerpt etiam.
 */
require get_template_directory() . '/inc/functions/excerpt.php';

/**
 * Widgets etiam.
 */
require get_template_directory() . '/inc/functions/widgets.php';

/**
 * Redux etiam.
 */
require get_template_directory() . '/inc/functions/redux.php';

/**
 * etiam theme option panel.
 */
require get_template_directory() . '/inc/theme-panel.php';

/**
 * etiam theme Custom css.
 */
require get_template_directory() . '/inc/custom-css.php';

/**
 * etiam breadcrumb
 */
require get_template_directory() . '/inc/functions/breadcrumb.php';

/**
 * Comment etiam.
 */
require get_template_directory() . '/inc/functions/comment.php';




