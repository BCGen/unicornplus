<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade components alias
        Blade::component('bs.form_group');
        Blade::component('bs.post');
        Blade::component('bs.post_data');
        Blade::component('bs.patch');
        Blade::component('bs.patch_data');
        Blade::component('bs.card');
        Blade::component('bs.table');

        // Blade includes alias
        Blade::include('bs.input');
        Blade::include('bs.input_r');
        Blade::include('bs.input_title');
        Blade::include('bs.input_title_r');

        Blade::include('bs.textarea');
        Blade::include('bs.textarea_r');
        Blade::include('bs.ta_main_content');
        Blade::include('bs.ta_main_content_r');

        Blade::include('bs.radio');

        Blade::include('bs.th_index');
        Blade::include('bs.th_action');
        Blade::include('bs.th_sort');

        Blade::include('bs.td_index');
        Blade::include('bs.td_action');
        Blade::include('bs.td_action_delete');
        Blade::include('bs.td_sort');


        Blade::include('bs.number');
        Blade::include('bs.number_r');
        Blade::include('bs.number_sort');
        Blade::include('bs.number_sort_r');

        // File
        Blade::include('bs.upload_image');
        Blade::include('bs.upload_image_r');

        Blade::include('bs.upload_file');
        Blade::include('bs.upload_file_r');

        Blade::include('bs.upload_file');
        Blade::include('bs.upload_file_r');

        // Other
        Blade::include('bs.show_image');

        Blade::include('core.show_errors');
        Blade::include('core.show_list');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
