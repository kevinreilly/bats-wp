<?php
/**
 * Plugin Name: Core Functions
 * Author: Kevin Reilly
 */
 
 function next_show(){
	echo '<div class="show-date">';
	$today = date('Ymd');
	$post_type = get_post_type();
	if ($post_type == 'special'){
		$post_type = get_field('day');
	}
	else if ($post_type == 'sport'){
		$post_type = get_field('day');
	}
	else{}
	$post_type = ucwords($post_type);

	$date1 = get_field('date_1');
	$date2 = get_field('date_2');
	$date3 = get_field('date_3');
	$date4 = get_field('date_4');
	$date5 = get_field('date_5');
	$date6 = get_field('date_6');
	$date7 = get_field('date_7');
	$date8 = get_field('date_8');
	$date9 = get_field('date_9');
	$date10 = get_field('date_10');
	$date11 = get_field('date_11');
	$date12 = get_field('date_12');
	$timeall = get_field('time_all');
	$time1 = get_field('time_1');
	$time2 = get_field('time_2');
	$time3 = get_field('time_3');
	$time4 = get_field('time_4');
	$time5 = get_field('time_5');
	$time6 = get_field('time_6');
	$time7 = get_field('time_7');
	$time8 = get_field('time_8');
	$time9 = get_field('time_9');
	$time10 = get_field('time_10');
	$time11 = get_field('time_11');
	$time12 = get_field('time_12');
	$times = array($time1,$time2,$time3,$time4,$time5,$time6,$time7,$time8,$time9,$time10,$time11,$time12);
	for ($i=0;$i<12;$i++){
		if ($times[$i] == ''){
			$times[$i] = $timeall;
		}
	}
	
	global $nextshow;
		
	if ($today <= $date1){
		$m = substr($date1, 4, 2);
		$d = substr($date1, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date1 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '1';
		echo $date1 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date2){
		$m = substr($date2, 4, 2);
		$d = substr($date2, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date2 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '2';
		echo $date2 .', '. $times[$nextshow-1];	
	}
	else if ($today <= $date3){
		$m = substr($date3, 4, 2);
		$d = substr($date3, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date3 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '3';
		echo $date3 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date4){
		$m = substr($date4, 4, 2);
		$d = substr($date4, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date4 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '4';
		echo $date4 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date5){
		$m = substr($date5, 4, 2);
		$d = substr($date5, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date5 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '5';
		echo $date5 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date6){
		$m = substr($date6, 4, 2);
		$d = substr($date6, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date6 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '6';
		echo $date6 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date7){
		$m = substr($date7, 4, 2);
		$d = substr($date7, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date7 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '7';
		echo $date7 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date8){
		$m = substr($date8, 4, 2);
		$d = substr($date8, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date8 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '8';
		echo $date8 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date9){
		$m = substr($date9, 4, 2);
		$d = substr($date9, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date9 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '9';
		echo $date9 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date10){
		$m = substr($date10, 4, 2);
		$d = substr($date10, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date10 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '10';
		echo $date10 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date11){
		$m = substr($date11, 4, 2);
		$d = substr($date11, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date11 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '11';
		echo $date11 .', '. $times[$nextshow-1];
	}
	else if ($today <= $date12){
		$m = substr($date12, 4, 2);
		$d = substr($date12, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date12 = $post_type . ', ' . $m . ' ' . $d;
		$nextshow = '11';
		echo $date12 .', '. $times[$nextshow-1];
	}
	echo '</div>';
}
 
?>

<?php

// use widgets_init action hook to execute custom function
add_action( 'widgets_init', 'jm_box_widget' );

 //register our widget
function jm_box_widget() {
    register_widget( 'jm_box_widget_my_info' );
}

//boj_widget_my_info class
class jm_box_widget_my_info extends WP_Widget {

    //process the new widget
    function jm_box_widget_my_info() {
        $widget_ops = array(
            'classname' => 'jm_box_widget_class',
            'dates' => 'Post Widget.'
            );
        $this->WP_Widget( 'jm_box_widget_my_info', 'Box Widget', $widget_ops );
    }

     //build the widget settings form
    function form($instance) {
        $defaults = array( 'dates' => '', 'postname' => '' );
        $instance = wp_parse_args( (array) $instance, $defaults );
        $dates = $instance['dates'];
        $postname = $instance['postname'];

        ?>
    <p>Post:
            <select id="<?php echo $this->get_field_id( 'postname' ); ?>" name="<?php echo $this->get_field_name( 'postname' ); ?>">
            	<?php
				
				$args = array (
					'post_type' => array('friday','saturday','special','sport'),
					'posts_per_page' => -1
				);
				
				$query = new WP_Query( $args );
				
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						
						$postid = get_the_ID();
						$posttitle = get_the_title();
						?>
						
						<option <?php if ( $posttitle == $instance['postname'] ) echo 'selected="selected"'; ?> value="<?php echo $postid; ?>"><?php echo $posttitle; ?></option>
                        
						<?php
					}
				}
				else {
					
				}
				wp_reset_postdata();
				?>
            </select>
        </p>
        <p>Dates: <textarea name="<?php echo $this->get_field_name( 'dates' ); ?>" / ><?php echo esc_attr( $dates ); ?></textarea></p>
        <?php
    }

    //save the widget settings
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['dates'] = strip_tags( $new_instance['dates'] );
        $instance['postname'] = ( $new_instance['postname'] );
        return $instance;
    }

    //display the widget
    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        $dates = empty( $instance['dates'] ) ? '&nbsp;' : $instance['dates'];
        $postname = empty( $instance['postname'] ) ? '&nbsp;' : $instance['postname']; 

        $postimage = get_the_post_thumbnail($postname);
		
		echo '<div class="show_dates">'. $dates .'</div>';
		echo '<div class="show_widget">';
		echo '<div class="show_image"><a href="'. get_permalink($postname) .'">'. $postimage .'</a></div>';
		
		if (get_field('show_type',$postname) == 'longform'){
			echo '<a class="inline" href="#longform"><img class="show_type" src="wp-content/themes/responsive/core/images/longform.png" /></a>';
		}
		else if (get_field('show_type',$postname) == 'shortform'){
			echo '<a class="inline" href="#shortform"><img class="show_type" src="wp-content/themes/responsive/core/images/shortform.png" /></a>';
		}
		else {}
		
		echo '<div class="show_status">'. get_field('show_status',$postname) .'</div>';
		echo '<div class="show_name"><a href="'. get_permalink($postname) . '">'. get_the_title($postname) .'</a></div>';
		echo '<div class="show_description">'. get_field('show_description',$postname) .'</div>';
		echo '<div class="show_more"><a href="'. get_permalink($postname) .'">Tell me more&nbsp;&raquo;</a></div>';
		echo '</div>';
		
        echo $after_widget;
    }
}

?>



<?php

// use widgets_init action hook to execute custom function
add_action( 'widgets_init', 'single_news_widget' );

 //register our widget
function single_news_widget() {
    register_widget( 'single_news_widget_my_info' );
}

//boj_widget_my_info class
class single_news_widget_my_info extends WP_Widget {

    //process the new widget
    function single_news_widget_my_info() {
        $widget_ops = array(
            'classname' => 'single_news_widget_class',
            'dates' => 'Single News Widget.'
            );
        $this->WP_Widget( 'single_news_widget_my_info', 'Single News Widget', $widget_ops );
    }

     //build the widget settings form
    function form($instance) {
        $defaults = array( 'dates' => '', 'postname' => '' );
        $instance = wp_parse_args( (array) $instance, $defaults );
        $dates = $instance['dates'];
        $postname = $instance['postname'];

        ?>
    <p>News Post:
            <select id="<?php echo $this->get_field_id( 'postname' ); ?>" name="<?php echo $this->get_field_name( 'postname' ); ?>">
            	<?php
				
				$args = array (
					'post_type' => array('news'),
				);
				
				$query = new WP_Query( $args );
				
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						
						$postid = get_the_ID();
						$posttitle = get_the_title();
						?>
						
						<option <?php if ( $posttitle == $instance['postname'] ) echo 'selected="selected"'; ?> value="<?php echo $postid; ?>"><?php echo $posttitle; ?></option>
                        
						<?php
					}
				}
				else {
					
				}
				wp_reset_postdata();
				?>
            </select>
        </p>
        <p style="display:none;"><textarea name="<?php echo $this->get_field_name( 'dates' ); ?>" / ><?php echo esc_attr( $dates ); ?></textarea></p>
        <?php
    }

    //save the widget settings
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['dates'] = strip_tags( $new_instance['dates'] );
        $instance['postname'] = ( $new_instance['postname'] );
        return $instance;
    }

    //display the widget
    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        $dates = empty( $instance['dates'] ) ? '&nbsp;' : $instance['dates'];
        $postname = empty( $instance['postname'] ) ? '&nbsp;' : $instance['postname'];  ?>

        <div class="random-news">
				
					<?php $imageurl = wp_get_attachment_url( get_post_thumbnail_id($postname) ); ?>
                    
                    <h4 style="margin-bottom:10px;"><strong>BATS News</strong></h4>
                            
                    <?php if($imageurl){ ?>
                        <a href="<?php echo  site_url(); ?>/about-us/news-announcements"><img style="margin-bottom:10px;" src="<?php echo $imageurl ?>" /></a>
                    <?php } ?>
                    
                    <h3><a href="<?php echo  site_url(); ?>/about-us/news-announcements"><?php echo get_the_title($postname) ?></a></h3>
                                        
                    <?php echo get_field('excerpt', $postname); ?>
                    
                    <p><a href="<?php echo  site_url(); ?>/about-us/news-announcements">Read more&nbsp;&raquo;</a></p>
                
                </div>
		<?php
        echo $after_widget;
    }
}

?>



<?php

// use widgets_init action hook to execute custom function
add_action( 'widgets_init', 'two_col_widget' );

 //register our widget
function two_col_widget() {
    register_widget( 'two_col_widget_my_info' );
}

//boj_widget_my_info class
class two_col_widget_my_info extends WP_Widget {

    //process the new widget
    function two_col_widget_my_info() {
        $widget_ops = array(
            'classname' => 'two_col_widget_class',
            'dates' => 'Two Col Widget.'
            );
        $this->WP_Widget( 'two_col_widget_my_info', 'Two Col Widget', $widget_ops );
    }

     //build the widget settings form
    function form($instance) {
        $defaults = array( 'title' => '', 'col1' => '', 'col2' => '' );
        $instance = wp_parse_args( (array) $instance, $defaults );
        $title = $instance['title'];
        $col1 = $instance['col1'];
		$col2 = $instance['col2'];

        ?>
    	<p>Title: <textarea name="<?php echo $this->get_field_name( 'title' ); ?>" / ><?php echo esc_attr( $title ); ?></textarea></p>
        <p>Column One: <textarea name="<?php echo $this->get_field_name( 'col1' ); ?>" / ><?php echo esc_attr( $col1 ); ?></textarea></p>
        <p>Column Two: <textarea name="<?php echo $this->get_field_name( 'col2' ); ?>" / ><?php echo esc_attr( $col2 ); ?></textarea></p>
        <?php
    }

    //save the widget settings
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = ( $new_instance['title'] );
        $instance['col1'] = ( $new_instance['col1'] );
		$instance['col2'] = ( $new_instance['col2'] );
        return $instance;
    }

    //display the widget
    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        $title = empty( $instance['title'] ) ? '&nbsp;' : $instance['title'];
        $col1 = empty( $instance['col1'] ) ? '&nbsp;' : $instance['col1'];
		$col2 = empty( $instance['col2'] ) ? '&nbsp;' : $instance['col2']; 

        ?>
        
        <div class="two-col">
        <div class="grid col-940">
        	<h3><?php echo $title; ?></h3>
        </div>
        
        <div class="grid col-460">
        	<p><?php echo $col1; ?></p>
        </div>
        
        <div class="grid col-460 fit">
        	<p><?php echo $col2; ?></p>
        </div>
        <div class="clear"></div>
        </div>
        
        <?php
		
        echo $after_widget;
    }
}

?>

<?php

 function all_shows(){
	$today = date('Ymd');
	$post_type = get_post_type();
	$post_type = ucwords($post_type);
	
	global $date1;
	global $date2;
	global $date3;
	global $date4;
	global $date5;

	$date1 = get_field('date_1');
	$date2 = get_field('date_2');
	$date3 = get_field('date_3');
	$date4 = get_field('date_4');
	$date5 = get_field('date_5');
			
		$m = substr($date1, 4, 2);
		$d = substr($date1, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$m = $months[$m-1];
		$date1 = $post_type . ', ' . $m . ' ' . $d;

		$m = substr($date2, 4, 2);
		$d = substr($date2, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$m = $months[$m-1];
		$date2 = $post_type . ', ' . $m . ' ' . $d;	

		$m = substr($date3, 4, 2);
		$d = substr($date3, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$m = $months[$m-1];
		$date3 = $post_type . ', ' . $m . ' ' . $d;

		$m = substr($date4, 4, 2);
		$d = substr($date4, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$m = $months[$m-1];
		$date4 = $post_type . ', ' . $m . ' ' . $d;

		$m = substr($date5, 4, 2);
		$d = substr($date5, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$m = $months[$m-1];
		if ($m != ''){
			$date5 = $post_type . ', ' . $m . ' ' . $d;
		}
		else {}
}
 
?>

<?php

 function next_student_show(){
	$today = date('Ymd');
	$post_type = get_post_type();
	$post_type = ucwords($post_type);
	
	global $date1;
	global $date2;
	global $date3;
	global $date4;
	global $date5;
	global $date6;
	global $date7;
	global $date8;
	global $date9;
	global $date10;
	global $nextshow;
	
	$date1 = get_field('date_1');
	$date2 = get_field('date_2');
	$date3 = get_field('date_3');
	$date4 = get_field('date_4');
	$date5 = get_field('date_5');
	$date6 = get_field('date_6');
	$date7 = get_field('date_7');
	$date8 = get_field('date_8');
	$date9 = get_field('date_9');
	$date10 = get_field('date_10');
	
	if ($today <= $date1){
		$date1 = DateTime::createFromFormat('Ymd', get_field('date_1'));
		$date1 = $date1->format('l, M j');
		$date1 = $date1 .', '. get_field("time_1");
		$nextshow = '1';
	}
	else if ($today <= $date2){
		$date2 = DateTime::createFromFormat('Ymd', get_field('date_2'));
		$date2 = $date2->format('l, M j');
		$date2 = $date2 .', '. get_field("time_2");
		$nextshow = '2';
	}
	else if ($today <= $date3){
		$date3 = DateTime::createFromFormat('Ymd', get_field('date_3'));
		$date3 = $date3->format('l, M j');
		$date3 = $date3 .', '. get_field("time_3");
		$nextshow = '3';
	}
	else if ($today <= $date4){
		$date4 = DateTime::createFromFormat('Ymd', get_field('date_4'));
		$date4 = $date4->format('l, M j');
		$date4 = $date4 .', '. get_field("time_4");
		$nextshow = '4';
	}
	else if ($today <= $date5){
		$date5 = DateTime::createFromFormat('Ymd', get_field('date_5'));
		$date5 = $date5->format('l, M j');
		$date5 = $date5 .', '. get_field("time_5");
		$nextshow = '5';
	}
	else if ($today <= $date6){
		$date6 = DateTime::createFromFormat('Ymd', get_field('date_6'));
		$date6 = $date6->format('l, M j');
		$date6 = $date6 .', '. get_field("time_6");
		$nextshow = '6';
	}
	else if ($today <= $date7){
		$date7 = DateTime::createFromFormat('Ymd', get_field('date_7'));
		$date7 = $date7->format('l, M j');
		$date7 = $date7 .', '. get_field("time_7");
		$nextshow = '7';
	}
	else if ($today <= $date8){
		$date8 = DateTime::createFromFormat('Ymd', get_field('date_8'));
		$date8 = $date8->format('l, M j');
		$date8 = $date8 .', '. get_field("time_8");
		$nextshow = '8';
	}
	else if ($today <= $date9){
		$date9 = DateTime::createFromFormat('Ymd', get_field('date_9'));
		$date9 = $date9->format('l, M j');
		$date9 = $date9 .', '. get_field("time_9");
		$nextshow = '9';
	}
	else if ($today <= $date10){
		$date10 = DateTime::createFromFormat('Ymd', get_field('date_10'));
		$date10 = $date10->format('l, M j');
		$date10 = $date10 .', '. get_field("time_10");
		$nextshow = '10';
	}
}
 
?>


<?php
function currentMonth($type){
	$today = date('Ymd');
	$date = DateTime::createFromFormat('Ymd', $today);
	$year = $date->format('Y');
	$month = $date->format('m');
	$day = $date->format('d');

	if($month == '01'){
		$prevMonth = '12';
		$prevYear = $year - 1;
	}
	else {
		$prevMonth = $month;
		$prevYear = $year;
	}

	$nextMonth = $month + 1;
	$nextMonth = sprintf("%02s", $nextMonth);
	
	$sub_month_start = $prevYear.$prevMonth.'01';
	$add_month_end = $year.$nextMonth.'31';

	$current_month_start = $year.$month.'01';
	$current_month_end = $year.$month.'31';
	
	$args = array(
		'post_type' => $type,
		'posts_per_page' => 10,
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => 'publish_start_date',
				'value' => array($sub_month_start, $add_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
			array(
				'key' => 'publish_end_date',
				'value' => array($sub_month_start, $add_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
		),
	);
	
	$the_query = new WP_Query( $args );
	
	if( $the_query->have_posts() ){
		while ( $the_query->have_posts() ){ $the_query->the_post();
			$post_type = get_post_type();
			if ($post_type == 'special'){
				$post_type = get_field('day');
			}
			else if ($post_type == 'sport'){
				$post_type = get_field('day');
			}
			else{}
			$post_type = ucwords($post_type);
			
			echo '<div class="grid col-300 empty-check">';
			echo '<div class="show-third">';
			echo '<a href="'. get_permalink() .'">';
			the_post_thumbnail();
			echo '</a>';
			
			show_type();
			
			$shows = array();
			
			for($i=1;$i<=10;$i++){
				$shows[$i] = get_field('date_'. $i);
			}
			
			$show_x = DateTime::createFromFormat('Ymd', $shows[1]);
			$first_show = $show_x->format('l, M j');
			
			echo '<span class="first-show">Starting '. $first_show .'</span>';
			
			echo '<div class="show-title"><a href="'. get_permalink() .'">'. get_the_title() . '</a></div>';
			
			echo the_field('show_description');
			
			echo '<br /><a class="show-more" href="'. get_permalink() .'">Tell me more&nbsp;&raquo;</a>';
			
			foreach($shows as $show){
				if($show){
					if($today <= $show && $show <= $current_month_end){
						$show1 = DateTime::createFromFormat('Ymd', $show);
						$show = $show1->format('l, M j');
						echo '<p class="show-show">'. $show .'</p>';
					}
				}
			}
			
			echo '</div></div>';
		}
	}wp_reset_query();
}
?>



<?php
function nextMonth($type){
	$today = date('Ymd');
	$date = DateTime::createFromFormat('Ymd', $today);
	$year = $date->format('Y');
	$month = $date->format('m');
	$day = $date->format('d');
	
	if($month == '12'){ $month = '1'; }
	else { $month++; }
	
	$month_2 = DateTime::createFromFormat('n', $month);
	$month = $month_2->format('m');

	if($month == '01'){
		$prevMonth = '12';
		$prevYear = $year - 1;
	}
	else {
		$prevMonth = $month;
		$prevYear = $year;
	}

	$nextMonth = $month + 1;
	$nextMonth = sprintf("%02s", $nextMonth);

	$prevMonth = $month - 1;
	$prevMonth = sprintf("%02s", $prevMonth);
	
	$sub_month_start = $prevYear.$prevMonth.'01';
	$add_month_end = $year.$nextMonth.'31';

	$current_month_start = $year.$month.'01';
	$current_month_end = $year.$month.'31';
	
	$next_month_start = $year.$month.'01';
	$next_month_end = $year.$month.'31';
	
	$args = array(
		'post_type' => $type,
		'posts_per_page' => 10,
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => 'publish_start_date',
				'value' => array($sub_month_start, $add_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
			array(
				'key' => 'publish_end_date',
				'value' => array($sub_month_start, $add_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
		),
		'orderby' => 'publish_end_date'
	);
	
	$the_query = new WP_Query( $args );
	
	if( $the_query->have_posts() ){
		while ( $the_query->have_posts() ){ $the_query->the_post();
			$post_type = get_post_type();
			if ($post_type == 'special'){
				$post_type = get_field('day');
			}
			else if ($post_type == 'sport'){
				$post_type = get_field('day');
			}
			else{}
			$post_type = ucwords($post_type);
			
			echo '<div class="grid col-300 empty-check">';
			echo '<div class="show-third">';
			echo '<a href="'. get_permalink() .'">';
			the_post_thumbnail();
			echo '</a>';
			
			show_type();
			
			$shows = array();
			
			for($i=1;$i<=10;$i++){
				$shows[$i] = get_field('date_'. $i);
			}
			
			$show_x = DateTime::createFromFormat('Ymd', $shows[1]);
			$first_show = $show_x->format('l, M j');
			
			echo '<span class="first-show">Starting '. $first_show .'</span>';
			
			echo '<div class="show-title"><a href="'. get_permalink() .'">'. get_the_title() . '</a></div>';
			
			echo the_field('show_description');
			
			echo '<br /><a class="show-more" href="'. get_permalink() .'">Tell me more&nbsp;&raquo;</a>';
			
			foreach($shows as $show){
				if($show){
					if($next_month_start <= $show && $show <= $next_month_end){
						$show1 = DateTime::createFromFormat('Ymd', $show);
						$show = $show1->format('l, M j');
						echo '<p class="show-show">'. $show .'</p>';
					}
				}
			}
			
			echo '</div></div>';
		}
	}wp_reset_query();
}
?>



<?php
function laterMonth($type, $months){
	
	$today = date('Ymd');
	$date = DateTime::createFromFormat('Ymd', $today);
	$year = $date->format('Y');
	$month = $date->format('m');
	$day = $date->format('d');
	
	$month = $month + $months;
	
	if($month > 12){
		$month = $month - 12;
	}
	
	$month_2 = DateTime::createFromFormat('n', $month);
	$month = $month_2->format('m');

	if($month == '01'){
		$prevMonth = '12';
		$prevYear = $year - 1;
	}
	else {
		$prevMonth = $month;
		$prevYear = $year;
	}

	$nextMonth = $month + 1;
	$nextMonth = sprintf("%02s", $nextMonth);

	$prevMonth = $month - 1;
	$prevMonth = sprintf("%02s", $prevMonth);
	
	$sub_month_start = $prevYear.$prevMonth.'01';
	$add_month_end = $year.$nextMonth.'31';
	
	$next_month_start = $year.$month.'01';
	$next_month_end = $year.$month.'31';
	
	$args = array(
		'post_type' => $type,
		'posts_per_page' => 5,
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => 'publish_start_date',
				'value' => array($sub_month_start, $add_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
			array(
				'key' => 'publish_end_date',
				'value' => array($sub_month_start, $add_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
		)
	);
	
	$currentShows = array();
	
	$the_query = new WP_Query( $args );
	
	if( $the_query->have_posts() ){
		while ( $the_query->have_posts() ){ $the_query->the_post();
			$post_type = get_post_type();
			if ($post_type == 'special'){
				$post_type = get_field('day');
			}
			else if ($post_type == 'sport'){
				$post_type = get_field('day');
			}
			else{}
			$post_type = ucwords($post_type);
			
			echo '<div class="grid col-300 empty-check">';
			echo '<div class="show-third">';
			echo '<a href="'. get_permalink() .'">';
			the_post_thumbnail();
			echo '</a>';
			
			show_type();
			
			$shows = array();
			
			for($i=1;$i<=13;$i++){
				$shows[$i] = get_field('date_'. $i);
			}
			
			$show_x = DateTime::createFromFormat('Ymd', $shows[1]);
			$first_show = $show_x->format('l, M j');
			
			echo '<span class="first-show">Starting '. $first_show .'</span>';
			
			echo '<div class="show-title"><a href="'. get_permalink() .'">'. get_the_title() . '</a></div>';
			
			echo the_field('show_description');
			
			echo '<br /><a class="show-more" href="'. get_permalink() .'">Tell me more&nbsp;&raquo;</a>';
			
			foreach($shows as $show){
				if($show){
					if($next_month_start <= $show && $show <= $next_month_end){
						$show1 = DateTime::createFromFormat('Ymd', $show);
						$show = $show1->format('l, M j');
						echo '<p class="show-show">'. $show .'</p>';
					}
				}
			}
			
			echo '</div></div>';
		}
	}wp_reset_query();
}
?>





<?php /*
function laterMonth2($type){
	$today = date('Ymd');
	$date = DateTime::createFromFormat('Ymd', $today);
	$year = $date->format('Y');
	$month = $date->format('m');
	$day = $date->format('d');
	
	if($month == '12'){ $month = '2'; }
	else if($month == '11'){ $month = '1'; }
	else { $month +2; }
	
	$month_2 = DateTime::createFromFormat('n', $month);
	$month = $month_2->format('m');
	
	$next_month_start = $year.$month.'01';
	$next_month_end = $year.$month.'31';
	
	$args = array(
		'post_type' => $type,
		'posts_per_page' => 10,
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => 'publish_start_date',
				'value' => array($next_month_start, $next_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
			array(
				'key' => 'publish_end_date',
				'value' => array($next_month_start, $next_month_end),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
		)
	);
	
	$the_query = new WP_Query( $args );
	
	if( $the_query->have_posts() ){
		while ( $the_query->have_posts() ){ $the_query->the_post();
			$post_type = get_post_type();
			if ($post_type == 'special'){
				$post_type = get_field('day');
			}
			else if ($post_type == 'sport'){
				$post_type = get_field('day');
			}
			else{}
			$post_type = ucwords($post_type);
			
			echo '<div class="grid col-300 empty-check">';
			echo '<div class="show-third">';
			echo '<a href="'. get_permalink() .'">';
			the_post_thumbnail();
			echo '</a>';
			
			show_type();
			
			$shows = array();
			
			for($i=1;$i<=10;$i++){
				$shows[$i] = get_field('date_'. $i);
			}
			
			$show_x = DateTime::createFromFormat('Ymd', $shows[1]);
			$first_show = $show_x->format('l, M j');
			
			echo '<span class="first-show">Starting '. $first_show .'</span>';
			
			echo '<div class="show-title"><a href="'. get_permalink() .'">'. get_the_title() . '</a></div>';
			
			echo the_field('show_description');
			
			echo '<br /><a class="show-more" href="'. get_permalink() .'">Tell me more&nbsp;&raquo;</a>';
			
			foreach($shows as $show){
				if($show){
					if($next_month_start <= $show && $show <= $next_month_end){
						$show1 = DateTime::createFromFormat('Ymd', $show);
						$show = $show1->format('l, M j');
						echo '<p class="show-show">'. $show .'</p>';
						
						echo '<!--'. $next_month_start .' '. $next_month_end .'-->';
					}
				}
			}
			
			echo '</div></div>';
		}
	}wp_reset_query();
} */
?>



<?php function monthBanner($x){
	echo '<div class="banner">';
	$today = date('Ymd', strtotime("+". $x ." month"));
	
	$now = DateTime::createFromFormat('Ymd', $today);
	$m = $now->format('F');
	$y = $now->format('Y');
	
	echo '<h3>'. $m .' '. $y .'</h3>';
	echo '</div>';
}
?>



<?php function randomQuote1(){
	echo '<div class="grid col-940">';
	echo '<div class="player-quote">';
	$args=array('post_type'=>'quotes', 'category_name'=>'member', 'orderby'=>'rand', 'posts_per_page'=>'1');	
	
	$quotes=new WP_Query($args);
	
	while ($quotes->have_posts()) : $quotes->the_post();
		echo the_post_thumbnail();
		echo '<div class="quote-content">'. get_the_content() .'</div>';
		echo '<div class="quote-name">'. get_the_title() .'</div>';
		echo '<div class="clear"></div>';
		global $rand_id;
		$rand_id = get_the_ID();
	endwhile;
	wp_reset_postdata();
	echo '</div></div>';
}?>

<?php function randomQuote2(){
	global $rand_id;
	echo '<div class="grid col-940">';
	echo '<div class="player-quote">';
	$args=array('post_type'=>'quotes', 'category_name'=>'member', 'orderby'=>'rand', 'posts_per_page'=>'1', 'post__not_in' => array($rand_id));	
	
	$quotes=new WP_Query($args);
	
	while ($quotes->have_posts()) : $quotes->the_post();
		echo the_post_thumbnail();
		echo '<div class="quote-content">'. get_the_content() .'</div>';
		echo '<div class="quote-name">'. get_the_title() .'</div>';
		echo '<div class="clear"></div>';
	endwhile;
	wp_reset_postdata();
	echo '</div></div>';
}?>




<?php
function upcoming_shows(){
	echo '<div class="show-date">';
	$today = date('Ymd');
	$post_type = get_post_type();
	$post_type = ucwords($post_type);

	$date1 = get_field('date_1');
	$date2 = get_field('date_2');
	$date3 = get_field('date_3');
	$date4 = get_field('date_4');
	$date5 = get_field('date_5');
	
	global $nextshow;
		
	if ($today <= $date1){
		$m = substr($date1, 4, 2);
		$d = substr($date1, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date1 = $post_type . ', ' . $m . ' ' . $d;
		echo $date1;
		$nextshow = '1';
	}
	else if ($today <= $date2){
		$m = substr($date2, 4, 2);
		$d = substr($date2, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date2 = $post_type . ', ' . $m . ' ' . $d;
		echo $date2;
		$nextshow = '2';	
	}
	else if ($today <= $date3){
		$m = substr($date3, 4, 2);
		$d = substr($date3, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date3 = $post_type . ', ' . $m . ' ' . $d;
		echo $date3;
		$nextshow = '3';
	}
	else if ($today <= $date4){
		$m = substr($date4, 4, 2);
		$d = substr($date4, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date4 = $post_type . ', ' . $m . ' ' . $d;
		echo $date4;
		$nextshow = '4';
	}
	else if ($today <= $date5){
		$m = substr($date5, 4, 2);
		$d = substr($date5, 6, 2);
		$d1 = substr($d, -2, 1);
		$d2 = substr($d, -1);
		if($d1 == '0'){$d = $d2;}else{}
		$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$m = $months[$m-1];
		$date5 = $post_type . ', ' . $m . ' ' . $d;
		echo $date5;
		$nextshow = '5';
	}
	echo '</div>';
}
?>

<?php 

function show_type(){
	
	$show_type = get_field('show_type');

	if ($show_type == 'shortform'){
		echo '<a class="inline" href="#shortform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/shortform.png" /></a>';
	}
	else {
		echo '<a class="inline" href="#longform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/longform.png" /></a>';
	}

}

?>

<?php 

function show_type_text(){
	
	$show_type = get_field('show_type');

	if ($show_type == 'shortform'){
		echo '<a class="inline" href="#shortform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/shortform.png" />&nbsp;<span>Shortform</span></a>';
	}
	else {
		echo '<a class="inline" href="#longform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/longform.png" />&nbsp;<span>Longform</span></a>';
	}

}

?>


<?php

// use widgets_init action hook to execute custom function
add_action( 'widgets_init', 'foundation_widget' );

 //register our widget
function foundation_widget() {
    register_widget( 'foundation_widget_my_info' );
}

//boj_widget_my_info class
class foundation_widget_my_info extends WP_Widget {

    //process the new widget
    function foundation_widget_my_info() {
        $widget_ops = array(
            'classname' => 'foundation_widget_class',
            'dates' => 'Foundation 1 Widget.'
            );
        $this->WP_Widget( 'foundation_widget_my_info', 'Foundation 1 Widget', $widget_ops );
    }

     //build the widget settings form
    function form($instance) {
        $defaults = array( 'level' => '' );
        $instance = wp_parse_args( (array) $instance, $defaults );
        $level = $instance['level'];

        ?>
    <p>Level:
            <select id="<?php echo $this->get_field_id( 'level' ); ?>" name="<?php echo $this->get_field_name( 'level' ); ?>">
				<option value="f1">1</option>
                <option value="f2">2</option>
            </select>
        </p>
        <?php
    }

    //save the widget settings
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['level'] = ( $new_instance['level'] );
        return $instance;
    }

    //display the widget
    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        $level = empty( $instance['level'] ) ? '&nbsp;' : $instance['level']; 
		
		wp_reset_postdata();

		$today = date('Ymd');
	
		$args = array(
			'post_type' => 'class',
			'meta_query' => array(
				array(
					'key' => 'class_type',
					'value' => $level,
					'compare' => '='
				),
				array(
					'key'		=> 'start_date',
					'compare'	=> '>=',
					'value'		=> $today,
				),
			),
			'meta_key' => 'end_date',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
			'posts_per_page' => 1
		);
		
		$myposts = get_posts($args);
		
		foreach($myposts as $post): setup_postdata($post);
			
			echo the_title();
			echo the_permalink();
			echo get_the_ID();
			
		endforeach;
		
        echo $after_widget;
    }
}

?>

<?php 
function shows_quote_func( $atts ) {
     $args = array(
			'post_type' => 'quotes',
			'category_name' => 'shows',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
				<div class="grid random_quote_widget_class">
                <?php echo the_content(); ?>
                </div>
                </div>
			<?php }} wp_reset_postdata();
}
add_shortcode('shows-quote', 'shows_quote_func');
?>

<?php 
function about_quote_func( $atts ) {
     $args = array(
			'post_type' => 'quotes',
			'category_name' => 'about',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
				<div class="grid random_quote_widget_class">
                <?php echo the_content(); ?>
                </div>
                </div>
                
			<?php }} wp_reset_postdata();
}
add_shortcode('about-quote', 'about_quote_func');
?>

<?php 
function member_quote_func( $atts ) {
     $args = array(
			'post_type' => 'quotes',
			'category_name' => 'member',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
				<div class="grid random_quote_widget_class">
                <?php echo the_content(); ?>
                </div>
                </div>
                
			<?php }} wp_reset_postdata();
}
add_shortcode('member-quote', 'member_quote_func');
?>

<?php 
function otg_quote_func( $atts ) {
     $args = array(
			'post_type' => 'quotes',
			'category_name' => 'otg',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
				<div class="grid random_quote_widget_class">
                <?php echo the_content(); ?>
                </div>
                </div>
                
			<?php }} wp_reset_postdata();
}
add_shortcode('otg-quote', 'otg_quote_func');
?>

<?php 
function school_quote_func( $atts ) {
     $args = array(
			'post_type' => 'quotes',
			'category_name' => 'school',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
				<div class="grid random_quote_widget_class">
                <?php echo the_content(); ?>
                </div>
                </div>
                
			<?php }}; wp_reset_postdata();
}
add_shortcode('school-quote', 'school_quote_func');
?>

<?php 
function support_quote_func( $atts ) {
     $args = array(
			'post_type' => 'quotes',
			'category_name' => 'support',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
                    <div class="random_quote_widget_class">
                    <?php echo the_content(); ?>
                    </div>
                </div>
			<?php }}; wp_reset_postdata();
}
add_shortcode('support-quote', 'support_quote_func');
?>

<?php 
function show_video_func( $atts ) {
     $args = array(
			'post_type' => 'video',
			'meta_key' => 'category',
			'meta_value' => 'show',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
                    <div class="videoWrapper">
                        <?php echo the_content(); ?>
                    </div>
                </div>
                
			<?php }} wp_reset_postdata();
}
add_shortcode('show-video', 'show_video_func');
?>

<?php 
function otg_video_func( $atts ) {
     $args = array(
			'post_type' => 'video',
			'meta_key' => 'category',
			'meta_value' => 'otg',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post(); ?>
                <div class="widget-wrapper noborder">
                    <div class="videoWrapper">
                        <?php echo the_content(); ?>
                    </div>
                </div>
                
			<?php }} wp_reset_postdata();
}
add_shortcode('otg-video', 'otg_video_func');
?>


<?php 
function news_func( $atts ) {
	
     $args = array(
			'post_type' => 'news',
			'posts_per_page' => 1,
			'orderby' => 'rand'
		);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post();
		?>
            	<!--<?php the_ID(); ?>-->
                <div class="random-news">
				
					<?php $imageurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                    
                    <h3 style="margin-bottom:10px;">BATS News</h3>
                            
                    <?php if($imageurl){ ?>
                        <a href="<?php echo  site_url(); ?>/about-us/news-announcements"><img style="margin-bottom:10px;" src="<?php echo $imageurl ?>" /></a>
                    <?php } ?>
                    
                    <h3><a href="<?php echo  site_url(); ?>/about-us/news-announcements"><?php echo get_the_title() ?></a></h3>
                                        
                    <?php echo get_field('content'); ?>
                
                </div>
                
              <?php }
			  } else {}
			  wp_reset_postdata();
}
add_shortcode('news', 'news_func');
?>


<?php 
function foundation_func( $atts ) {
	
	$today = date('Ymd');
	
    $args = array(
		'post_type' => 'class',
		'meta_query' => array(
			array(
				'key' => 'class_type',
				'value' => 'f1',
				'compare' => '='
			),
			array(
				'key'		=> 'start_date',
				'compare'	=> '>=',
				'value'		=> $today,
			),
		),
		'meta_key' => 'end_date',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
		'posts_per_page' => 1
	);
		
		$the_query = new WP_Query($args);
		
		if($the_query->have_posts()){ ?>
        	<div class="foundation-widget">
				<h4><strong>Start Improvising</strong></h4>
            
			<?php while($the_query->have_posts()){
				$the_query->the_post(); ?>
				
                <a href="<?php echo get_permalink(); ?>">Foundation 1</a>
                <?php the_field('sidebar_text'); ?>
                
                <a href="<?php echo get_field('sign_up_link'); ?>" target="_blank"><img src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/small-sign-up-button.png" /></a>
                <br />
			<?php } ?>
            <a href="<?php echo site_url(); ?>/school/foundation-1">See all Foundation 1 classes&nbsp;&raquo;</a>
            </div>
			<?php } wp_reset_postdata();
}
add_shortcode('foundation', 'foundation_func');
?>

<?php 
function joinForm() {
	$url = 'http://bats.wpengine.com/';
	return '
    <div id="sf_widget_constantcontact-11" class="grid widget_sf_widget_constantcontact widget_no_title"><div class="widget-wrapper"><form id="sf_widget_constantcontact_11_form" onsubmit="return sf_widget_constantcontact_11_submit(this);"><input type="hidden" name="grp" value="Upcoming Shows &amp; BATS News"><h3>Join the BATS Community</h3>
<p style="margin-bottom:10px;">Stay on the BATS radar! <br>Join our mailing list to hear the latest, receive special offers, and get the lowdown on upcoming shows and classes.</p><input type="text" name="eml" class="input" placeholder="Email Address"><input type="submit" class="subm" value="SIGN UP"></form><script>function sf_widget_constantcontact_11_submit(n){for(var a=n.querySelectorAll("input"),i=0,eml=false,val=["action=constantcontactadd"];i<a.length;i++)if(a[i].name){if(!(a[i].name!="eml"||!a[i].value)) eml=true;val.push(a[i].name+"="+encodeURIComponent(a[i].value));}if(!eml){alert("Please enter an email address");return false;}var xml=new XMLHttpRequest();xml.open("POST","http://www.improv.org/wp-admin/admin-ajax.php",true);xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");xml.onreadystatechange=function(){if(this.readyState==4){if(this.status==200){if(this.responseText) alert(this.responseText); else setTimeout("window.location=$url;",100);} else alert(this.statusText);}};xml.send(val.join(String.fromCharCode(38)));return false;}</script></div></div>';
}
add_shortcode('joinForm', 'joinForm');
?>



<?php function currentStudent() {
	
	$today = date('Ymd');
	$date = DateTime::createFromFormat('Ymd', $today);
	$date = $date->format('F');
	
	$args = array (
		'post_type' => 'sunday',
		'name'      => $date
	);
	
	// The Query
	$query = new WP_Query( $args );
	
	// The Loop
	if ( $query->have_posts() ) { 
		
		echo '<div class="grid col-300 not-empty">';
			echo '<div class="show-third student-shows-box">';
			
				$today = date('Ymd');
				$date = DateTime::createFromFormat('Ymd', $today);
				echo '<div class="student-box-top">'. $date->format('F, Y');
				echo '<h3><a href="'. site_URL() .'/shows/student-shows">Student Shows</a></h3>';
				echo '<p>See the future of improv &mdash; <a href="'. site_URL() .'/school">BATS School</a> students come out to play!</p>';
				echo '<p><a href="'. site_URL() .'/shows/student-shows">All student shows&nbsp;&raquo;</a></p>';
				
				echo '</div>';
			
		
		while ( $query->have_posts() ) {
			$query->the_post();
																	
			echo '<div class="student-list">';
																																												
			$today = date('Ymd');
			for($i=1;$i<7;$i++){
				$date = get_field('date_'. $i);
				
				if($date > $today){
					echo '<div class="student-show-item">';
					$date = DateTime::createFromFormat('Ymd', get_field('date_'. $i));
					echo $date->format('l, M j, ');
					echo get_field('time_'. $i);
					echo '</div>';
				}
			}
																															
			echo '</div><div class="clear"></div>';
		}
		
			echo '</div>';
		echo '</div>';
	}
	else {
		// no posts found
	}
	
	// Restore original Post Data
	wp_reset_postdata();
	
} ?>