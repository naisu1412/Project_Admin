<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('pages/admin/index');
});

Route::get('login', function () {
    return view('pages/login');
});


Route::get('default_form', function () {
    return view('pages/admin/create');
});


Route::get('formsTemp', function () {
    return view('pages/FormsTrial-temp');
});

Route::get('indexTemp', function(){
        return view('index-temp');
});


Route::get('chart/chartJS', function(){
        return view('pages/admin/adminPages/charts/chartJS');
});

Route::get('UI/general', function(){
        return view('pages/admin/adminPages/uiElements/general');
});

Route::get('UI/icons', function(){
        return view('pages/admin/adminPages/uiElements/icons');
});

Route::get('UI/buttons', function(){
        return view('pages/admin/adminPages/uiElements/buttons');
});

Route::get('UI/sliders', function(){
        return view('pages/admin/adminPages/uiElements/sliders');
});

Route::get('UI/timeline', function(){
        return view('pages/admin/adminPages/uiElements/timeline');
});

Route::get('UI/modals', function(){
        return view('pages/admin/adminPages/uiElements/modals');
});

Route::get('forms/general', function(){
        return view('pages/admin/adminPages/forms/generalElements');
});


Route::get('forms/advanced', function(){
        return view('pages/admin/adminPages/forms/advancedElements');
});

Route::get('forms/DBiConcept', function(){
        return view('pages/admin/adminPages/forms/DB_iConcept');
});


Route::get('forms/editors', function(){
        return view('pages/admin/adminPages/forms/editors');
});

Route::get('forms/iConceptForms/pb_addons', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_addons');
});

Route::get('forms/iConceptForms/pb_ads', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_ads');
});

Route::get('forms/iConceptForms/pb_application_service_providers', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_application_service_providers');
});

Route::get('forms/iConceptForms/pb_bookings', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_bookings');
});

Route::get('forms/iConceptForms/pb_booking_feedbacks', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_booking_feedbacks');
});

Route::get('forms/iConceptForms/pb_checkouts', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_checkouts');
});

Route::get('forms/iConceptForms/pb_cms_posts', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_cms_posts');
});

Route::get('forms/iConceptForms/pb_payments', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_payments');
});

Route::get('forms/iConceptForms/pb_pets', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_pets');
});

Route::get('forms/iConceptForms/pb_previous_works', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_previous_works');
});

Route::get('forms/iConceptForms/pb_profiles', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_profiles');
});


Route::get('forms/iConceptForms/pb_questionaires', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_questionaires');
});

Route::get('forms/iConceptForms/pb_questionaire_items', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_questionaire_items');
});

Route::get('forms/iConceptForms/pb_schedules', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_schedules');
});
Route::get('forms/iConceptForms/pb_services', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_services');
});

Route::get('forms/iConceptForms/pb_service_tasks', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_service_tasks');
});


Route::get('forms/iConceptForms/pb_tasks', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_tasks');
});


Route::get('forms/iConceptForms/pb_task_users', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_task_users');
});


Route::get('forms/iConceptForms/pb_templates', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_templates');
});


Route::get('forms/iConceptForms/pb_users', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_users');
});


Route::get('forms/iConceptForms/pb_user_logs', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_user_logs');
});


Route::get('forms/iConceptForms/pb_vouchers', function(){
        return view('pages/admin/adminPages/forms/DB_iConceptTables/pb_vouchers');
});



Route::get('tables/simple', function(){
        return view('pages/admin/adminPages/tables/simpleTables');
});

Route::get('tables/data', function(){
        return view('pages/admin/adminPages/tables/dataTables');
});



Route::get('mailbox/readMail', function(){
        return view('pages/admin/adminPages/mailbox/read-mail');
});



Route::get('mailbox/', function(){
        return view('pages/admin/adminPages/mailbox/mailbox');
});


Route::get('mailbox/compose', function(){
        return view('pages/admin/adminPages/mailbox/compose');
});


Route::get('widgets', function(){
        return view('pages/admin/adminPages/widgets');
});

Route::get('calendar', function(){
        return view('pages/admin/adminPages/calendar');
});

Route::get('layouts/topNav', function(){
        return view('pages/admin/adminPages/layouts/top-Nav');
});


Route::get('layouts/fixed', function(){
        return view('pages/admin/adminPages/layouts/fixed');
});


Route::get('layouts/boxed', function(){
        return view('pages/admin/adminPages/layouts/boxed');
});

Route::get('layouts/collapsedSidebar', function(){
        return view('pages/admin/adminPages/layouts/collapsed-sidebar');
});



Route::get('examples/blankPage', function(){
        return view('pages/admin/adminPages/examples/blankPage');
});

Route::get('examples/Error_404', function(){
        return view('pages/admin/adminPages/examples/Error_404');
});



Route::get('examples/Error_500', function(){
        return view('pages/admin/adminPages/examples/Error_500');
});



Route::get('examples/invoice', function(){
        return view('pages/admin/adminPages/examples/invoice');
});


Route::get('examples/login', function(){
        return view('pages/admin/adminPages/examples/login');
});

Route::get('examples/pacePage', function(){
        return view('pages/admin/adminPages/examples/pacePage');
});

Route::get('examples/profile', function(){
        return view('pages/admin/adminPages/examples/profile');
});


Route::get('examples/register', function(){
        return view('pages/admin/adminPages/examples/register');
});






