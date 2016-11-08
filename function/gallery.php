<?php
/* Gallery  */
add_filter( 'post_gallery', 'my_custom_gallery', 10, 2 );
function my_custom_gallery( $output, $attr) {
    global $post;

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) :
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    endif;
    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'columns'    => 0,
        'size'       => 'full',
        'include'    => ''
    ), $attr));
    $id = intval($id);
    if ( !empty($include) ) {
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }
    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }
    $output .= '<div class="gallery-scroller">';
    $i = 1;
    foreach ( $attachments as $id => $attachment ) :
        $attimg = wp_get_attachment_image( $id, $size );
        $atturl = wp_get_attachment_image_src( $id, $size );
        $output .= '<img src="'.$atturl[0].'" alt="Demo image" id="'.$i.'" />';
        $i++;
    endforeach;
    $output .= '</div>';
    return $output;
}
