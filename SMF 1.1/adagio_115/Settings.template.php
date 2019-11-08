<?php
// Version: 1.1; Settings

function template_options()
{
	global $context, $settings, $options, $scripturl, $txt;

	$context['theme_options'] = array(
		array(
			'id' => 'show_board_desc',
			'label' => $txt[732],
			'default' => true,
		),
		array(
			'id' => 'show_children',
			'label' => $txt['show_children'],
			'default' => true,
		),
		array(
			'id' => 'show_no_avatars',
			'label' => $txt['show_no_avatars'],
			'default' => true,
		),
		array(
			'id' => 'show_no_signatures',
			'label' => $txt['show_no_signatures'],
			'default' => true,
		),
		array(
			'id' => 'show_no_censored',
			'label' => $txt['show_no_censored'],
			'default' => true,
		),
		array(
			'id' => 'return_to_post',
			'label' => $txt['return_to_post'],
			'default' => true,
		),
		array(
			'id' => 'no_new_reply_warning',
			'label' => $txt['no_new_reply_warning'],
			'default' => true,
		),
		array(
			'id' => 'view_newest_first',
			'label' => $txt['recent_posts_at_top'],
			'default' => true,
		),
		array(
			'id' => 'view_newest_pm_first',
			'label' => $txt['recent_pms_at_top'],
			'default' => true,
		),
		array(
			'id' => 'popup_messages',
			'label' => $txt['popup_messages'],
			'default' => true,
		),
		array(
			'id' => 'copy_to_outbox',
			'label' => $txt['copy_to_outbox'],
			'default' => true,
		),
		array(
			'id' => 'auto_notify',
			'label' => $txt['auto_notify'],
			'default' => true,
		),
		array(
			'id' => 'calendar_start_day',
			'label' => $txt['calendar_start_day'],
			'options' => array(
				0 => $txt['days'][0],
				1 => $txt['days'][1],
				6 => $txt['days'][6],
			),
			'default' => true,
		),
		array(
			'id' => 'display_quick_reply',
			'label' => $txt['display_quick_reply'],
			'options' => array(
				0 => $txt['display_quick_reply1'],
				1 => $txt['display_quick_reply2'],
				2 => $txt['display_quick_reply3']
			),
			'default' => true,
		),
		array(
			'id' => 'display_quick_mod',
			'label' => $txt['display_quick_mod'],
			'options' => array(
				0 => $txt['display_quick_mod_none'],
				1 => $txt['display_quick_mod_check'],
				2 => $txt['display_quick_mod_image'],
			),
			'default' => true,
		),
	);
}

function template_settings()
{
	global $context, $settings, $options, $scripturl, $txt;

	$context['theme_settings'] = array(
		array(
			'id' => 'butheader',
			'text' => 'Here you can assign extra buttons which also can be custom pages - a special feature for this theme. Using the type "link" you can add 
	a regular linked button in the main menu with a <b>name</b> and a <b>path</b>. But with the the more powerful "page" type, you can specify a physical <b>file</b> to be fetched
	from inside the "pages" folder in the theme folder itself. 
	<p>These files allow execution of both HTML and PHP code in them, just like SMF tempaltes themselves and will add more pages to your forum easily and within your theme.</p>',
			'type' => 'paragraph',
		),
		array(
			'id' => 'but1_name',
			'label' => 'Custom 1 - name',
			'type' => 'text',
			'bar' => 'Custom page + button 1',
		),
		array(
			'id' => 'but1_link',
			'label' => 'Custom button 1 - link/file',
			'type' => 'text',
		),
		array(
			'id' => 'but1_type',
			'label' => 'type of custom button',
			'options' => array(
				'link' => 'Link',
				'page' => 'Page',
			),
			'default' => true,
		),

		array(
			'id' => 'but2_name',
			'label' => 'Custom button 2 - name',
			'type' => 'text',
			'bar' => 'Custom page + button 2',
		),
		array(
			'id' => 'but2_link',
			'label' => 'Custom button 2 - link/file',
			'type' => 'text',
		),
		array(
			'id' => 'but2_type',
			'label' => 'type of custom button',
			'options' => array(
				'link' => 'Link',
				'page' => 'Page',
			),
			'default' => true,
		),

		array(
			'id' => 'but3_name',
			'label' => 'Custom button 3 - name',
			'type' => 'text',
			'bar' => 'Custom page + button 3',
		),
		array(
			'id' => 'but3_link',
			'label' => 'Custom button 3 - link/file',
			'type' => 'text',
		),
		array(
			'id' => 'but3_type',
			'label' => 'type of custom button',
			'options' => array(
				'link' => 'Link',
				'page' => 'Page',
			),
			'default' => true,
		),

		array(
			'id' => 'but4_name',
			'label' => 'Custom button 4 - name',
			'type' => 'text',
			'bar' => 'Custom page + button 4',
		),
		array(
			'id' => 'but4_link',
			'label' => 'Custom button 4 - link/file',
			'type' => 'text',
		),
		array(
			'id' => 'but4_type',
			'label' => 'type of custom button',
			'options' => array(
				'link' => 'Link',
				'page' => 'Page',
			),
			'default' => true,
		),

		array(
			'id' => 'but5_name',
			'label' => 'Custom button 5 - name',
			'type' => 'text',
			'bar' => 'Custom page + button 5',
		),
		array(
			'id' => 'but5_link',
			'label' => 'Custom button 5 - link/file',
			'type' => 'text',
		),
		array(
			'id' => 'but5_type',
			'label' => 'type of custom button',
			'options' => array(
				'link' => 'Link',
				'page' => 'Page',
			),
			'default' => true,
		),

		array(
			'id' => 'use_tp',
			'label' => 'Support for TP 0.9',
			'bar' => 'Support for mods',
		),
		array(
			'id' => 'number_recent_posts',
			'label' => $txt['number_recent_posts'],
			'description' => $txt['number_recent_posts_desc'],
			'type' => 'number',
			'bar' => 'Normal options',
		),
		array(
			'id' => 'display_who_viewing',
			'label' => $txt['who_display_viewing'],
			'options' => array(
				0 => $txt['who_display_viewing_off'],
				1 => $txt['who_display_viewing_numbers'],
				2 => $txt['who_display_viewing_names'],
			),
		),
		array(
			'id' => 'smiley_sets_default',
			'label' => $txt['smileys_default_set_for_theme'],
			'options' => $context['smiley_sets'],
		),
		array(
			'id' => 'show_modify',
			'label' => $txt[383],
		),
		array(
			'id' => 'show_member_bar',
			'label' => $txt[510],
		),
		array(
			'id' => 'linktree_link',
			'label' => $txt[522],
		),
		array(
			'id' => 'show_profile_buttons',
			'label' => $txt[523],
		),
		array(
			'id' => 'show_mark_read',
			'label' => $txt[618],
		),
		array(
			'id' => 'linktree_inline',
			'label' => $txt['smf105'],
			'description' => $txt['smf106'],
		),
		array(
			'id' => 'show_sp1_info',
			'label' => $txt['smf200'],
		),
		array(
			'id' => 'allow_no_censored',
			'label' => $txt['allow_no_censored'],
		),
		array(
			'id' => 'show_bbc',
			'label' => $txt[740],
		),
		array(
			'id' => 'additional_options_collapsable',
			'label' => $txt['additional_options_collapsable'],
		),
		array(
			'id' => 'enable_news',
			'label' => $txt[379],
		),
		array(
			'id' => 'show_newsfader',
			'label' => $txt[387],
		),
		array(
			'id' => 'newsfader_time',
			'label' => $txt[739],
			'type' => 'number',
		),
		array(
			'id' => 'show_user_images',
			'label' => $txt[384],
		),
		array(
			'id' => 'show_blurb',
			'label' => $txt[385],
		),
		array(
			'id' => 'show_latest_member',
			'label' => $txt[382],
		),
		array(
			'id' => 'use_image_buttons',
			'label' => $txt[521],
		),
		array(
			'id' => 'show_gender',
			'label' => $txt[386],
		),
		array(
			'id' => 'hide_post_group',
			'label' => $txt['hide_post_group'],
			'description' => $txt['hide_post_group_desc'],
		),
	);
}

?>