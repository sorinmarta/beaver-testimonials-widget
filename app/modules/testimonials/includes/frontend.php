<div class="sm-testimonials-wrap">
    <div class="sm-testimonial-column sm-testimonial-first-column">
        <div class="sm-testimonial-names">
            <div class="sm-testimonial-name-wrap sm-shadow-class sm-testimonial-active" testimonial-heading="<?php echo $settings->one_content_heading; ?>" testimonial-paragraph="<?php echo esc_html($settings->one_content_text); ?>">
                <p><?php echo $settings->one_customer_name;?></p>
                <img src="<?php echo wp_get_attachment_image_url($settings->one_logo); ?>" alt="<?php echo $settings->one_customer_name;?>">
            </div>
            <div class="sm-testimonial-name-wrap sm-shadow-class" testimonial-heading="<?php echo $settings->two_content_heading; ?>" testimonial-paragraph="<?php echo esc_html($settings->two_content_text); ?>">
                <p><?php echo $settings->two_customer_name;?></p>
                <img src="<?php echo wp_get_attachment_image_url($settings->two_logo, array(89,39)); ?>" alt="<?php echo $settings->two_customer_name;?>">
            </div>
            <div class="sm-testimonial-name-wrap sm-shadow-class" testimonial-heading="<?php echo $settings->three_content_heading; ?>" testimonial-paragraph="<?php echo esc_html($settings->three_content_text); ?>">
                <p><?php echo $settings->three_customer_name;?></p>
                <img src="<?php echo wp_get_attachment_image_url($settings->three_logo, array(89,39)); ?>" alt="<?php echo $settings->three_customer_name;?>">
            </div>
            <div class="sm-testimonial-name-wrap sm-shadow-class" testimonial-heading="<?php echo $settings->four_content_heading; ?>" testimonial-paragraph="<?php echo esc_html($settings->four_content_text); ?>">
                <p><?php echo $settings->four_customer_name;?></p>
                <img src="<?php echo wp_get_attachment_image_url($settings->four_logo, array(89,39)); ?>" alt="<?php echo $settings->four_customer_name;?>">
            </div>
        </div>
    </div>
    <div class="sm-testimonial-column">
        <div class="sm-testimonial-contents sm-shadow-class">
            <h3></h3>
            <p></p>
        </div>
    </div>
</div>