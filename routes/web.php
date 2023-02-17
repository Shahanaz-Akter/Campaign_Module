<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.dashboard');
});

// Campaigns Route
Route::get('/example', function () {
    return view('Campaigns.example');
});

Route::get('/email_campaigns', function () {
    return view('Campaigns.email_campaigns');
});
Route::get('/social_campaigns', function () {
    return view('Campaigns.social_campaigns');
});
Route::get('/sms_campaigns', function () {
    return view('Campaigns.sms_campaigns');
});

// Contacts Route
Route::get('/all_contacts', function () {
    return view('Contacts.all_contacts');
});
Route::get('/contact_scoring', function () {
    return view('Contacts.contact_scoring');
});
Route::get('/contact_tags', function () {
    return view('Contacts.contact_tags');
});
Route::get('/manage_lists', function () {
    return view('Contacts.manage_lists');
});
Route::get('/manage_topics', function () {
    return view('Contacts.manage_topics');
});
Route::get('/segments', function () {
    return view('Contacts.segments');
});
Route::get('/signup_forms', function () {
    return view('Contacts.signup_forms');
});
Route::get('/sync_services', function () {
    return view('Contacts.sync_services');
});

// Automation Route
Route::get('/sync_services', function () {
    return view('Contacts.sync_services');
});
Route::get('/workflows', function () {
    return view('Contacts.workflows');
});

// Library Route
Route::get('/attachments', function () {
    return view('Libraries.attachments');
});
Route::get('/email_templates', function () {
    return view('Libraries.email_templates');
});
Route::get('/form_templates', function () {
    return view('Libraries.form_templates');
});
Route::get('/images', function () {
    return view('Libraries.images');
});
Route::get('/workflow_templates', function () {
    return view('Libraries.workflow_templates');
});


// Reports Route
Route::get('/campaign_based_reports', function () {
    return view('Reports.campaign_based_reports');
});
Route::get('/google_analytics', function () {
    return view('Reports.google_analytics');
});
Route::get('/campaign_based_reports', function () {
    return view('Reports.campaign_based_reports');
});
Route::get('/list_based_reports', function () {
    return view('Reports.list_based_reports');
});
Route::get('/sms_campaign_based_reports', function () {
    return view('Reports.sms_campaign_based_reports');
});
