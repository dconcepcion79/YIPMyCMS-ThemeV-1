<?php
/**
 * _s Theme Customizer.
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    class Video_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
    }
}
}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
} 

add_action( 'customize_preview_init', '_s_customize_preview_js' );


    /*-----------------------------------------------------------*
        * header Section
        *-----------------------------------------------------------*/
if ( ! function_exists( 'tpie_main_settings' ) ) {
	function tpie_main_settings( $wp_customize ) {
        $wp_customize->add_section( 'main_settings', array(
                'title'         => __('Main Settings', 'yiptv', 'yiptv'),
                'description'   => __('Common settings for your theme', 'yiptv'),
                'priority'      => 10,
        ) );

        // Regular Logo
        $wp_customize->add_setting( 'regular_logo', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'sanitize_callback'  => 'esc_url_raw',
        ) );
        $wp_customize->add_control(
            new WP_Customize_Image_Control( $wp_customize, 'regular_logo', array(
                'priority'  => 10,
                'label'     => __('Regular Logo', 'yiptv'),
                'section'   => 'main_settings',
                'settings'  => 'regular_logo'
            )
        ) );
        
        $wp_customize->add_setting( 'tpie_header_bg_color', array(
            'default'           => '#6600cc',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        ) );
        $wp_customize->add_control(
            new WP_Customize_Color_Control( $wp_customize, 'tpie_header_bg_color', array(
                'priority' => 90,
                'label'    => __('Header Background Color', 'themespie'),
                'section'  => 'colors',
                'settings' => 'tpie_header_bg_color'
            )
        ) );
        
        $wp_customize->add_setting( 'tpie_nav_links_color', array(
            'default'           => '#000',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        ) );
        $wp_customize->add_control(
            new WP_Customize_Color_Control( $wp_customize, 'tpie_nav_links_color', array(
                'priority' => 90,
                'label'    => __('Navigation Links Color', 'themespie'),
                'section'  => 'colors',
                'settings' => 'tpie_nav_links_color'
            )
        ) );
    }
}
 add_action( 'customize_register', 'tpie_main_settings' );

 /*-----------------------------------------------------------*
        * Images
 *-----------------------------------------------------------*/
if ( ! function_exists( 'tpie_live_sports' ) ) {
	function tpie_live_sports( $wp_customize ) {
          $wp_customize->add_section( 'img1', array(
            'title'     => __('Section 1', 'yiptv'),
            'priority'  => 120,
          
        ) );
        
        $wp_customize->add_setting( 'img1', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'sanitize_callback'  => 'esc_url_raw',
        ) );
        $wp_customize->add_control(
            new WP_Customize_Image_Control( $wp_customize, 'img1', array(
                'priority'  => 10,
                'label'     => __('Section 1', 'yiptv'),
                'section'   => 'img1',
                'settings'  => 'img1'
            )
        ) );
        
        
         $wp_customize->add_section( 'img2', array(
            'title'     => __('Section 2', 'yiptv'),
            'priority'  => 120,
          
        ) );
            $wp_customize->add_setting( 'img2', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'sanitize_callback'  => 'esc_url_raw',
        ) );
        $wp_customize->add_control(
            new WP_Customize_Image_Control( $wp_customize, 'img2', array(
                'priority'  => 10,
                'label'     => __('Section 2', 'yiptv'),
                'section'   => 'img2',
                'settings'  => 'img2'
            )
        ) );
        
         $wp_customize->add_section( 'footer-bg', array(
            'title'     => __('Section 3', 'yiptv'),
            'priority'  => 120,
          
        ) );
            $wp_customize->add_setting( 'footer-bg', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'sanitize_callback'  => 'esc_url_raw',
        ) );
        $wp_customize->add_control(
            new WP_Customize_Image_Control( $wp_customize, 'footer-bg', array(
                'priority'  => 10,
                'label'     => __('Section 3', 'yiptv'),
                'section'   => 'footer-bg',
                'settings'  => 'footer-bg'
            )
        ) );
    
        /*-----------------------------------------------------------*
        * video section
        *-----------------------------------------------------------*/
        $wp_customize->add_section( 'video_section', array(
            'title'     => __('Video upload', 'yiptv'),
            'priority'  => 120,
        ) );

        $wp_customize->add_setting( 'textarea' );
 
            $wp_customize->add_control(
            new Video_Customize_Textarea_Control(
                $wp_customize,
                'textarea',
                array(
                    'label' => 'Textarea',
                    'section' => 'video_section',
                    'settings' => 'textarea'
                )
            )
        );
}
}
add_action( 'customize_register', 'tpie_live_sports' );

function yiptv_customizer_css() { ?>
    <style>
        .navbar { background-color: <?php echo get_theme_mod( 'tpie_header_bg_color' ); ?> }
        .navbar-default .navbar-nav > li > a { color: <?php echo get_theme_mod( 'tpie_nav_links_color' ); ?> }
    </style>
<?php }
add_action( 'wp_head', 'yiptv_customizer_css' );
?>