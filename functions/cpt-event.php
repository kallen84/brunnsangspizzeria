<?php
// register custom post type for teams.
function create_post_type_event() {

	// define labels for custom post type
	$labels = array(
		'name' => 'Event',
		'singular_name' => 'Event',
		'edit_item' => 'Redigera Event',
		'view_item' => 'Visa Event',
		'not_found' => 'Ingen Event hittad',
		'not_found_in_trash' => 'Ingen Event hittad i papperskorgen',
	);

	$args = array (
		'labels' => $labels,
		'public' => true,
        'supports' => array( 
            'title',   
            'thumbnail'),
        'menu_icon' => 'dashicons-calendar-alt',
	);

	register_post_type('Event', $args);
}

add_action('init', 'create_post_type_event');

/**
 * This function creates a metabox to the custom post type
 * @return custom post type with team info
 */
function create_meta_box_event() {
    add_meta_box(
		'event_meta_box_text',
		'Event text:',
		'create_info_metabox_eventtext',
		'Event',
		'normal',
		'default'
	);

    add_meta_box(
		'event_meta_box_date',
		'Event Datum:',
		'create_info_metabox_eventdate',
		'Event',
		'normal',
		'default'
	);
}

add_action('add_meta_boxes', 'create_meta_box_event');

/**
 * This function will add the metabox to the custom post type
 * @return custom post type with team info
 */ 
function event_meta_box_text($post) {
	echo 'Infon skrivs in här';
}

function event_meta_box_date($post) {
	echo 'Infon skrivs in här';
}

/**
 * This function will create the output of the metabox event-date
 * @return input-field in the metabox.
 */ 
function create_info_metabox_eventtext($post) {
    	// add nonce for security
		wp_nonce_field('bp_metabox_nonce', 'bp_nonce');
		$content = get_post_meta($post->ID, 'media_insert', true );
		$editor_id = 'media_insert';
		$settings = array(
				'textarea_rows' => 10,
				'media_buttons' => false,
		); 
?>
        <p><strong>Event text</strong></p>
<?php   
		wp_editor( $content, $editor_id, $settings );
}

/**
 * This function will create the output of the metabox event-date
 * @return input-field in the metabox.
 */ 
function create_info_metabox_eventdate($post) {
    	// add nonce for security
		wp_nonce_field('bp_metabox_nonce', 'bp_nonce');
		// retrive the metadata values if they exist 
		$datepicker = get_post_meta($post->ID, 'datepicker', true);
        
?>            
        <form action="" method="post">
			<p>Fyll i datum för eventet t ex November 30, 2017</p>
            <p>
				
                <label for="datepicker"><strong>Event Datum</strong></label>
                <input type="text" id="datepicker" name="datepicker" size="26" value="<?php echo esc_attr( $datepicker ); ?>" placeholder="Skriv in datum" />
            </p>
        </form>
<?php 
}

// Stores the meta data
function save_post_meta($post_id) {
	if(!isset($_POST['bp_nonce']) ||
		!wp_verify_nonce($_POST['bp_nonce'],
		'bp_metabox_nonce')) return;  
	
	if(isset($_POST['datepicker'])) {
		update_post_meta($post_id, 'datepicker', $_POST['datepicker']);
	}
    if(isset($_POST['media_insert'])) {
		update_post_meta($post_id, 'media_insert', $_POST['media_insert']);
	}

}
add_action('save_post', 'save_post_meta');

