<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * @file
 * Custom theme settings
 *
 * @category  LiteCommerce themes
 * @package   LiteCommerce3 theme
 * @author    Creative Development LLC <info@cdev.ru>
 * @copyright Copyright (c) 2011 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2
 * @link      http://www.litecommerce.com/
 * @since     1.0.0
 */

/**
 * Add custom theme settings
 *
 * @param array &$form       The form
 * @param array &$form_state The form state
 *
 * @hook   form_FORM_ID_alter
 * @return void
 * @since  1.0.0
 */
function lc3_clean_form_system_theme_settings_alter(array &$form, array &$form_state) {

    $form['social_links'] = array(

        '#type'              => 'fieldset',
        '#title'             => t('Social links'),
        '#description'       => t('Enable or disable links to your accounts in social network services'),
        '#weight'            => -10,

        'theme_social_link_facebook' => array(
            '#type'          => 'textfield',
            '#title'         => t('Facebook business page'),
            '#default_value' => theme_get_setting('theme_social_link_facebook'),
            '#description'   => t('Name of your Facebook business page'),
        ),

        'theme_social_link_twitter' => array(
            '#type'          => 'textfield',
            '#title'         => t('Twitter account'),
            '#default_value' => theme_get_setting('theme_social_link_twitter'),
            '#description'   => t('Name of your Twitter account'),
        ),

    );
}
