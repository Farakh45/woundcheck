<?php
/**
 * Expert Hotel Booking
 * Customizer Custom Controls
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	// Define a custom control class for radio buttons with images
	class Expert_Hotel_Booking_Image_Radio_Control extends WP_Customize_Control {

	    // Render the content of the custom control
	    public function render_content() {
	 
	        // Check if choices are available
	        if (empty($this->choices))
	            return;
	 
	        // Generate a unique name for the radio button group
	        $name = '_customize-radio-' . $this->id;
	        ?>
	        <!-- Display control title -->
	        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	        <!-- Container for radio button options -->
	        <ul class="controls" id='expert-hotel-booking-custom-container'>
	            <?php
	            // Loop through choices and render radio buttons with images
	            foreach ($this->choices as $value => $label) :
	                // Determine the selected class based on current value
	                $class = ($this->value() == $value) ? 'expert-hotel-booking-selected-img expert-hotel-booking-selector-img ' : 'expert-hotel-booking-selector-img';
	                ?>
	                <!-- Display each radio button option -->
	                <li style="display: inline;">
	                    <label>
	                        <!-- Radio input -->
	                        <input <?php $this->link(); ?> style='display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
	                          	$this->link();
	                          	checked($this->value(), $value);
	                          	?> />
	                        <!-- Image for the radio button -->
	                        <img src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
	                    </label>
	                </li>
	                <?php
	            endforeach;
	            ?>
	        </ul>
	        <?php
	    } 
	}	
}
