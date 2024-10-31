<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <?php 
        global $post;
        $info_label_1 = get_post_meta($post->ID, 'info_label_1', true); 
        $info_label_2 = get_post_meta($post->ID, 'info_label_2', true); 
        $info_label_3 = get_post_meta($post->ID, 'info_label_3', true); 
        $info_label_4 = get_post_meta($post->ID, 'info_label_4', true); 
        $info_label_5 = get_post_meta($post->ID, 'info_label_5', true); 
        $info_label_6 = get_post_meta($post->ID, 'info_label_6', true); 
        $info_label_7 = get_post_meta($post->ID, 'info_label_7', true); 
        $info_label_8 = get_post_meta($post->ID, 'info_label_8', true); 
        $info_value_1 = get_post_meta($post->ID, 'info_value_1', true); 
        $info_value_2 = get_post_meta($post->ID, 'info_value_2', true); 
        $info_value_3 = get_post_meta($post->ID, 'info_value_3', true); 
        $info_value_4 = get_post_meta($post->ID, 'info_value_4', true); 
        $info_value_5 = get_post_meta($post->ID, 'info_value_5', true); 
        $info_value_6 = get_post_meta($post->ID, 'info_value_6', true); 
        $info_value_7 = get_post_meta($post->ID, 'info_value_7', true); 
        $info_value_8 = get_post_meta($post->ID, 'info_value_8', true); 
        $roll = get_post_meta($post->ID, 'roll', true); 
        $registration = get_post_meta($post->ID, 'registration', true); 
        $subject_name_1 = get_post_meta($post->ID, 'subject_name_1', true); 
        $subject_name_2 = get_post_meta($post->ID, 'subject_name_2', true); 
        $subject_name_3 = get_post_meta($post->ID, 'subject_name_3', true); 
        $subject_name_4 = get_post_meta($post->ID, 'subject_name_4', true); 
        $subject_name_5 = get_post_meta($post->ID, 'subject_name_5', true); 
        $subject_name_6 = get_post_meta($post->ID, 'subject_name_6', true); 
        $subject_name_7 = get_post_meta($post->ID, 'subject_name_7', true); 
        $subject_name_8 = get_post_meta($post->ID, 'subject_name_8', true); 
        $subject_name_9 = get_post_meta($post->ID, 'subject_name_9', true); 
        $subject_name_10 = get_post_meta($post->ID, 'subject_name_10', true); 
        $subject_name_11 = get_post_meta($post->ID, 'subject_name_11', true); 
        $subject_name_12 = get_post_meta($post->ID, 'subject_name_12', true); 
        $subject_name_13 = get_post_meta($post->ID, 'subject_name_13', true); 
        $subject_name_14 = get_post_meta($post->ID, 'subject_name_14', true); 
        $subject_name_15 = get_post_meta($post->ID, 'subject_name_15', true); 
        $subject_name_16 = get_post_meta($post->ID, 'subject_name_16', true); 
        $subject_name_17 = get_post_meta($post->ID, 'subject_name_17', true); 
        $subject_name_18 = get_post_meta($post->ID, 'subject_name_18', true); 
        $subject_name_19 = get_post_meta($post->ID, 'subject_name_19', true); 
        $subject_name_20 = get_post_meta($post->ID, 'subject_name_20', true); 
        $subject_no_1 = get_post_meta($post->ID, 'subject_no_1', true); 
        $subject_no_2 = get_post_meta($post->ID, 'subject_no_2', true); 
        $subject_no_3 = get_post_meta($post->ID, 'subject_no_3', true); 
        $subject_no_4 = get_post_meta($post->ID, 'subject_no_4', true); 
        $subject_no_5 = get_post_meta($post->ID, 'subject_no_5', true); 
        $subject_no_6 = get_post_meta($post->ID, 'subject_no_6', true); 
        $subject_no_7 = get_post_meta($post->ID, 'subject_no_7', true); 
        $subject_no_8 = get_post_meta($post->ID, 'subject_no_8', true); 
        $subject_no_9 = get_post_meta($post->ID, 'subject_no_9', true); 
        $subject_no_10 = get_post_meta($post->ID, 'subject_no_10', true); 
        $subject_no_11 = get_post_meta($post->ID, 'subject_no_11', true); 
        $subject_no_12 = get_post_meta($post->ID, 'subject_no_12', true); 
        $subject_no_13 = get_post_meta($post->ID, 'subject_no_13', true); 
        $subject_no_14 = get_post_meta($post->ID, 'subject_no_14', true); 
        $subject_no_15 = get_post_meta($post->ID, 'subject_no_15', true); 
        $subject_no_16 = get_post_meta($post->ID, 'subject_no_16', true); 
        $subject_no_17 = get_post_meta($post->ID, 'subject_no_17', true); 
        $subject_no_18 = get_post_meta($post->ID, 'subject_no_18', true); 
        $subject_no_19 = get_post_meta($post->ID, 'subject_no_19', true); 
        $subject_no_20 = get_post_meta($post->ID, 'subject_no_20', true); 
        $total = get_post_meta($post->ID, 'total', true); 
    ?>   
    <div id="rrf-single-result-item-<?php the_ID(); ?>" class="rrf-single-result-item">
        <h3><?php _e('Basic info', 'resultpress'); ?></h3> 
        <table class="result-press">
            <tr>
                <td><?php _e('Name', 'resultpress'); ?></td>
                <td><?php the_title(); ?></td>
            </tr>           
            
            <?php if($info_label_1 && $info_value_1) : ?>
            <tr>
                <td><?php echo $info_label_1; ?></td>
                <td><?php echo $info_value_1; ?></td>
            </tr>
            <?php endif; ?>
            
            <?php if($info_label_2 && $info_value_2) : ?>
            <tr>
                <td><?php echo $info_label_2; ?></td>
                <td><?php echo $info_value_2; ?></td>
            </tr>
            <?php endif; ?>
            
            <?php if($info_label_3 && $info_value_3) : ?>
            <tr>
                <td><?php echo $info_label_3; ?></td>
                <td><?php echo $info_value_3; ?></td>
            </tr>
            <?php endif; ?>
            
            <?php if($info_label_4 && $info_value_4) : ?>
            <tr>
                <td><?php echo $info_label_4; ?></td>
                <td><?php echo $info_value_4; ?></td>
            </tr>
            <?php endif; ?>
            
            <?php if($info_label_5 && $info_value_5) : ?>
            <tr>
                <td><?php echo $info_label_5; ?></td>
                <td><?php echo $info_value_5; ?></td>
            </tr>
            <?php endif; ?>
            
            <?php if($info_label_6 && $info_value_6) : ?>
            <tr>
                <td><?php echo $info_label_6; ?></td>
                <td><?php echo $info_value_6; ?></td>
            </tr>
            <?php endif; ?>
            
            <?php if($info_label_7 && $info_value_7) : ?>
            <tr>
                <td><?php echo $info_label_7; ?></td>
                <td><?php echo $info_value_7; ?></td>
            </tr>
            <?php endif; ?>
            
            <?php if($info_label_8 && $info_value_8) : ?>
            <tr>
                <td><?php echo $info_label_8; ?></td>
                <td><?php echo $info_value_8; ?></td>
            </tr>
            <?php endif; ?>
            
            <tr>
                <td><?php _e('Roll', 'resultpress'); ?></td>
                <td><?php echo $roll; ?></td>
            </tr>
            
            <?php if($registration) : ?>
            <tr>
                <td><?php _e('Registration', 'resultpress'); ?></td>
                <td><?php echo $registration; ?></td>
            </tr>
            <?php endif; ?>
            
            <tr>
                <td><?php _e('GPA', 'resultpress'); ?></td>
                <td><?php echo $total; ?></td>
            </tr>       
        </table>
        
        <h3><?php _e('Marksheet', 'resultpress'); ?></h3>

        <table class="result-press">
            <tr>
                <th>Subject</th>
                <th>Grade</th>
            </tr>

            <?php if($subject_name_1 && $subject_no_1) : ?>
            <tr>
                <td><?php echo $subject_name_1; ?></td>
                <td><?php echo $subject_no_1; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_2 && $subject_no_2) : ?>
            <tr>
                <td><?php echo $subject_name_2; ?></td>
                <td><?php echo $subject_no_2; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_3 && $subject_no_3) : ?>
            <tr>
                <td><?php echo $subject_name_3; ?></td>
                <td><?php echo $subject_no_3; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_4 && $subject_no_4) : ?>
            <tr>
                <td><?php echo $subject_name_4; ?></td>
                <td><?php echo $subject_no_4; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_5 && $subject_no_5) : ?>
            <tr>
                <td><?php echo $subject_name_5; ?></td>
                <td><?php echo $subject_no_5; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_6 && $subject_no_6) : ?>
            <tr>
                <td><?php echo $subject_name_6; ?></td>
                <td><?php echo $subject_no_6; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_7 && $subject_no_7) : ?>
            <tr>
                <td><?php echo $subject_name_7; ?></td>
                <td><?php echo $subject_no_7; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_8 && $subject_no_8) : ?>
            <tr>
                <td><?php echo $subject_name_8; ?></td>
                <td><?php echo $subject_no_8; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_9 && $subject_no_9) : ?>
            <tr>
                <td><?php echo $subject_name_9; ?></td>
                <td><?php echo $subject_no_9; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_10 && $subject_no_10) : ?>
            <tr>
                <td><?php echo $subject_name_10; ?></td>
                <td><?php echo $subject_no_10; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_11 && $subject_no_11) : ?>
            <tr>
                <td><?php echo $subject_name_11; ?></td>
                <td><?php echo $subject_no_11; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_12 && $subject_no_12) : ?>
            <tr>
                <td><?php echo $subject_name_12; ?></td>
                <td><?php echo $subject_no_12; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_13 && $subject_no_13) : ?>
            <tr>
                <td><?php echo $subject_name_13; ?></td>
                <td><?php echo $subject_no_13; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_14 && $subject_no_14) : ?>
            <tr>
                <td><?php echo $subject_name_14; ?></td>
                <td><?php echo $subject_no_14; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_15 && $subject_no_15) : ?>
            <tr>
                <td><?php echo $subject_name_15; ?></td>
                <td><?php echo $subject_no_15; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_16 && $subject_no_16) : ?>
            <tr>
                <td><?php echo $subject_name_16; ?></td>
                <td><?php echo $subject_no_16; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_17 && $subject_no_17) : ?>
            <tr>
                <td><?php echo $subject_name_17; ?></td>
                <td><?php echo $subject_no_17; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_18 && $subject_no_18) : ?>
            <tr>
                <td><?php echo $subject_name_18; ?></td>
                <td><?php echo $subject_no_18; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_19 && $subject_no_19) : ?>
            <tr>
                <td><?php echo $subject_name_19; ?></td>
                <td><?php echo $subject_no_19; ?></td>
            </tr>
            <?php endif; ?>

            <?php if($subject_name_20 && $subject_no_20) : ?>
            <tr>
                <td><?php echo $subject_name_20; ?></td>
                <td><?php echo $subject_no_20; ?></td>
            </tr>
            <?php endif; ?>
        </table>        
    </div>
<?php endwhile; ?>

<?php else : ?>

<h3><i class="icomoon icomoon-angry"></i> <?php _e('Nothing found, please try again!', 'resultpress'); ?></h3>

<?php endif; ?>