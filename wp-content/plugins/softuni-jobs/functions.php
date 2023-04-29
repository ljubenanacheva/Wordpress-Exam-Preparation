<?php

/**
 * This function update the jobs post meta for the view count
 */
function softuni_update_job_views_count ( $job_id ){
    if ( empty( $job_id ) ) {
        return;
    }

    //if ( ! is_single( 'job' ) ) {
     //   return;
    //}

    $view_count = get_post_meta( $job_id, 'views_count', true );

    if ( ! empty( $view_count ) ) {
        $view_count = $view_count + 1;
    }else{
        $view_count = 1;
    }

    update_post_meta( $job_id, 'views_count', $view_count ); 
}