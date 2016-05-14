<?php
// instantiate aod theme customization register
function aod_theme_customizer( $wp_customize ) {
  // remove default static_front_page register
  $wp_customize->remove_section( 'static_front_page' );

// SITE TITLE & TAGLINE - no need for code since this is default :)

// HERO
  // hero text
  $wp_customize->add_setting( 'aod_hero_text', array(
    'default'     => 'Attention!',
  ) );
  $wp_customize->add_control( 'aod_hero_text', array(
    'label'     => 'Hero / Attention Text',
    'section'     => 'aod_hero',
    'priority'    => 1,
  ) );
  // hero hyperlink text
  $wp_customize->add_setting( 'aod_hero_link_text', array(
    'default'     => 'Learn More',
  ) );
  $wp_customize->add_control( 'aod_hero_link_text', array(
    'label'     => 'Hero / Attention Hyperlink Text',
    'section'     => 'aod_hero',
    'priority'    => 2,
  ) );
  // hero hyperlink
  $wp_customize->add_setting( 'aod_hero_link', array(
    'default'     => 'http:// ...',
  ) );
  $wp_customize->add_control( 'aod_hero_link', array(
    'label'     => 'Hero / Attention Hyperlink',
    'section'     => 'aod_hero',
    'priority'    => 3,
  ) );
  // hero display button
  $wp_customize->add_setting('aod_hero_display', array(
        'default'     => 0,
      ));
    $wp_customize->add_control('aod_hero_display', array(
        'settings'    => 'aod_hero_display',
        'label'       => 'Hide Hero',
        'section'     => 'aod_hero',
        'type'        => 'checkbox',
        'priority'    => 4,
    ));
  // description section
  $wp_customize->add_section( 'aod_hero', array(
        'title'     => 'Hero',
        'description'   => 'Hero section',
        'priority'    => 100,
    ) );

// ABBREV. DESCRIPTION
  $wp_customize->add_setting( 'aod_desc_text', array(
    'default'     => 'aod description',
  ) );
  $wp_customize->add_control( 'aod_desc_text', array(
    'label'     => 'Description below title',
    'section'     => 'aod_desc',
    'priority'    => 5,
  ) );
  // description section
  $wp_customize->add_section( 'aod_desc', array(
        'title'     => 'Description',
        'description'   => 'Description section',
        'priority'    => 6,
    ) );

// LANDING PAGE BUTTON BLUE
  // button hyperlink
  $wp_customize->add_setting( 'aod_btnblue_link', array(
    'default'     => 'http:// ...',
  ) );
  $wp_customize->add_control( 'aod_btnblue_link', array(
    'label'     => 'Button link (blue)',
    'section'     => 'aod_btnblue',
    'priority'    => 7,
  ) );
  // button text
  $wp_customize->add_setting( 'aod_btnblue_text', array(
    'default'     => 'Learn more',
  ) );
  $wp_customize->add_control( 'aod_btnblue_text', array(
    'label'     => 'Button text (blue)',
    'section'     => 'aod_btnblue',
    'priority'    => 8,
  ) );
  $wp_customize->add_section( 'aod_btnblue', array(
        'title'     => 'Homepage Button (blue)',
        'description'   => 'Button on home page',
        'priority'    => 9,
    ) );
    // display button
  $wp_customize->add_setting('aod_btnblue_display', array(
        'default'     => 0,
      ));
    $wp_customize->add_control('aod_btnblue_display', array(
        'settings'    => 'aod_btnblue_display',
        'label'       => 'Hide Blue Button',
        'section'     => 'aod_btnblue',
        'type'        => 'checkbox',
        'priority'    => 10,
    ));

// LANDING PAGE BUTTON GREEN
  // button hyperlink
  $wp_customize->add_setting( 'aod_btngreen_link', array(
    'default'     => 'http:// ...',
  ) );
  $wp_customize->add_control( 'aod_btngreen_link', array(
    'label'     => 'Button link (green)',
    'section'     => 'aod_btngreen',
    'priority'    => 11,
  ) );
  // button text
  $wp_customize->add_setting( 'aod_btngreen_text', array(
    'default'     => 'Learn more',
  ) );
  $wp_customize->add_control( 'aod_btngreen_text', array(
    'label'     => 'Button text (green)',
    'section'     => 'aod_btngreen',
    'priority'    => 12,
  ) );
  $wp_customize->add_section( 'aod_btngreen', array(
        'title'     => 'Homepage Button (green)',
        'description'   => 'Button on home page',
        'priority'    => 13,
    ) );
    // display button
  $wp_customize->add_setting('aod_btngreen_display', array(
        'default'     => 0,
      ));
    $wp_customize->add_control('aod_btngreen_display', array(
        'settings'    => 'aod_btngreen_display',
        'label'       => 'Hide Green Button',
        'section'     => 'aod_btngreen',
        'type'        => 'checkbox',
        'priority'    => 14,
    ));

}
add_action( 'customize_register', 'aod_theme_customizer', 11 );