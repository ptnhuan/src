<?php

namespace Foostart\Excel;

use Illuminate\Support\ServiceProvider;

class ExcelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /*
     * 
     */
    public function excelViewComposer(Request $request) {

        view()->composer('excel::excel*', function ($view) {
            global $request;
            $excel_id = $request->get('id');
            $is_action = empty($excel_id)?'page_add':'page_edit';

            $view->with('sidebar_items', [

                /**
                 * Samples
                 */
                //list
                trans('excel::excel_admin.page_list') => [
                    'url' => URL::route('admin_excel'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('excel::excel_admin.'.$is_action) => [
                    'url' => URL::route('admin_excel.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],

                /**
                 * Categories
                 */
                //list
                trans('excel::excel_admin.page_category_list') => [
                    'url' => URL::route('admin_excel_category'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });
    }
}
