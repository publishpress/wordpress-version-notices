<?php
/**
 * Plugin Name: Dumb Plugin
 * Plugin URI: https://publishpress.com/
 * Description: Dumb plugin for testing the library
 * Author: PublishPress
 * Author URI: https://publishpress.com
 * Version: 0.1.0
 *
 * Copyright (c) 2020 PublishPress
 *
 * GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     PublishPress
 * @category    Core
 * @author      PublishPress
 * @copyright   Copyright (C) 2020 PublishPress. All rights reserved.
 */

if (!defined('PP_PRO_ADS_LOADED')) {
    // @todo: Load only in the admin
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'publishpress' . DIRECTORY_SEPARATOR
        . 'wordpress-pro-plugins-ads' . DIRECTORY_SEPARATOR . 'includes.php';

    add_filter(\PPProAds\Module\TopBanner\Module::SETTINGS_FILTER, function ($settings) {
        $settings['dumb-plugin'] = [
            'message'    => 'You\'re using the Dumb Plugin Free. %sUpgrade to Pro%s',
            'link'       => 'http://example.com/upgrade',
            'conditions' => [
                [
                    'page' => 'pp-modules-settings',
                ]
            ]
        ];

        return $settings;
    });

    do_action('pp_pro_ads_init');
}
