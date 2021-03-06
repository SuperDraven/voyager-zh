<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::firstOrNew([
            'key'          => 'title',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '网站标题',
                'value'        => 'Site Title',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'description',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '网站描述',
                'value'        => 'Site Description',
                'details'      => '',
                'type'         => 'text',
                'order'        => 2,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'logo',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '网站Logo',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 3,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'admin_bg_image',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '后台背景图',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 9,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'admin_title',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '后台标题',
                'value'        => 'Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'admin_description',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '后台说明',
                'value'        => 'Welcome to Voyager. The Missing Admin for Laravel',
                'details'      => '',
                'type'         => 'text',
                'order'        => 5,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'admin_loader',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '后台载入图标',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 6,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'admin_icon_image',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => '后台图标',
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 7,
            ])->save();
        }

        $setting = Setting::firstOrNew([
            'key'          => 'google_analytics_client_id',
        ]);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Google Analytics Client ID',
                'value'        => '',
                'details'      => '',
                'type'         => 'text',
                'order'        => 9,
            ])->save();
        }
    }
}
