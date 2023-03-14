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

Route::get('/next', function () {
    return view('Campaigns.Email_camp.next1');
});
Route::get('/create_campaign', function () {
    return view('Campaigns.create_campaign');
});

Route::get('/ab_testing', function () {
    return view('Campaigns.A/b_testing.ab_testing');
});
Route::get('/ab_next1', function () {
    return view('Campaigns.A/b_testing.ab_next1');
});
Route::get('/ab_next2', function () {
    return view('Campaigns.A/b_testing.ab_next2');
});
Route::get('/predesigned_template', function () {
    return view('Campaigns.A/b_testing.predesigned_template');
});

Route::get('/basic_template', function () {
    return view('Campaigns.A/b_testing.basic_template');
});

Route::get('/upload_from_computer', function () {
    return view('Campaigns.A/b_testing.upload_from_computer');
});
Route::get('/import_from_cloud', function () {
    return view('Campaigns.A/b_testing.import_from_cloud');
});
Route::get('/recently_sent', function () {
    return view('Campaigns.A/b_testing.recently_sent');
});
Route::get('/rss_testing', function () {
    return view('Campaigns.Rss_testing.rss_testing');
});

Route::get('/zoho_regular_campaign', function () {
    return view('Campaigns.Zoho_meeting.Zoho_regular_campaign');
});
Route::get('/zoho_a/b_testing', function () {
    return view('Campaigns.Zoho_meeting.Zoho_ab_testing');
});
Route::get('/coupon_regular_campaign', function () {
    return view('Campaigns.Coupon.coupon_regular_campaign');
});
Route::get('/coupon_a/b_testing', function () {
    return view('Campaigns.Coupon.coupon_ab_testing');
});

Route::get('/coupon_next1', function () {
    return view('Campaigns.Coupon.coupon_next1');
});

Route::get('/coupon_next2', function () {
    return view('Campaigns.Coupon.coupon_next2');
});


Route::get('/zoho_forms_regular_campaign', function () {
    return view('Campaigns.Zoho_forms.zoho_forms_regular_campaign');
});

Route::get('/zoho_ab_testing_campaign', function () {
    return view('Campaigns.Zoho_forms.zoho_ab_testing_campaign');
});

Route::get('/zoho_forms1', function () {
    return view('Campaigns.Zoho_forms.zoho_forms1');
});

Route::get('/zoho_forms_ab_next1', function () {
    return view('Campaigns.Zoho_forms.zoho_forms_ab_next1');
});
Route::get('/zoho_forms_ab_next2', function () {
    return view('Campaigns.Zoho_forms.zoho_forms_ab_next2');
});
Route::get('/social_campaigns', function () {
    return view('Campaigns.Social_camp.social_campaigns');
});
Route::get('/page_campaigns', function () {
    return view('Campaigns.Social_camp.page_campaigns');
});
Route::get('/post_campaigns', function () {
    return view('Campaigns.Social_camp.post_campaigns');
});

Route::get('/regular_based_post_campaigns', function () {
    return view('Campaigns.Social_camp.regular_based_post_campaigns');
});
Route::get('/rss_based_post_campaigns', function () {
    return view('Campaigns.Social_camp.rss_based_post_campaigns');
});
Route::get('/sms_campaigns', function () {
    return view('Campaigns.Sms_camp.sms_campaigns');
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
