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

//Sms Campaigns Route
Route::get('/sms_campaigns', function () {
    return view('Campaigns.Sms_camp.sms_campaigns');
});
Route::get('/view_sms_campaigns', function () {
    return view('Campaigns.Sms_camp.view_sms_campaigns');
});

Route::get('/create_sms_campaigns', function () {
    return view('Campaigns.Sms_camp.create_sms_campaigns');
});

// Contacts Route
Route::get('/all_contacts', function () {
    return view('Contacts.all_contacts');
});
Route::get('/edit_contacts', function () {
    return view('Contacts.edit_contacts');
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
Route::get('/add_user', function () {
    return view('Contacts.add_user');
});
Route::get('/contacts', function () {
    return view('Contacts.contacts');
});

Route::get('/manage_list_contact', function () {
    return view('Contacts.Manage_Contact.manage_list_contact');
});

Route::get('/multiple_contact_list', function () {
    return view('Contacts.Manage_Contact.multiple_contact_list');
});

Route::get('/manage_list_import', function () {
    return view('Contacts.Manage_Contact.managelist_import');
});

Route::get('/managelist_selectfile', function () {
    return view('Contacts.Manage_Contact.Managelist_Selectfile.managelist_selectfile');
});

Route::get('/manage_list_zoho_crm', function () {
    return view('Contacts.Manage_Contact.manage_list_zoho_crm');
});

Route::get('/manage_list_zoho_other_devices', function () {
    return view('Contacts.Manage_Contact.manage_list_zoho_other_devices');
});

Route::get('/managelist_signupform', function () {
    return view('Contacts.Manage_Contact.managelist_signupform');
});

Route::get('/choose_signup_form', function () {
    return view('Contacts.Manage_Contact.choose_signup_form');
});
Route::get('/untitled_signup_form', function () {
    return view('Contacts.Manage_Contact.untitled_signup_form');
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


// Reportss Route
Route::get('/campaign_based_Reportss', function () {
    return view('Reportss.campaign_based_Reportss');
});
Route::get('/google_analytics', function () {
    return view('Reportss.google_analytics');
});
Route::get('/campaign_based_Reportss', function () {
    return view('Reportss.campaign_based_Reportss');
});
Route::get('/list_based_Reportss', function () {
    return view('Reportss.list_based_Reportss');
});
Route::get('/sms_campaign_based_Reportss', function () {
    return view('Reportss.sms_campaign_based_Reportss');
});


// Segments Route
Route::get('/segments', function () {
    return view('Contacts.Segment.segment');
});
Route::get('/bulk_segment', function () {
    return view('Contacts.Segment.bulk_segment');
});

Route::get('/manage_topics', function () {
    return view('Manage_topics.manage_topics');
});
Route::get('/sync_services', function () {
    return view('Sync_services.sync_services');
});

Route::get('/signup_forms', function () {
    return view('Signup_form.signup_forms');
});
Route::get('/create_signup_forms', function () {
    return view('Signup_form.create_signup_form');
});

Route::get('/edit_signup_form', function () {
    return view('Signup_form.edit_signup_form');
});
Route::get('/contact_scoring', function () {
    return view('Contact_scoring.contact_scoring');
});

Route::get('/contact_tags', function () {
    return view('Contacts.contact_tags');
});
Route::get('/ecommerce', function () {
    return view('Ecommerce.ecommerce');
});

Route::get('/sent_campaigns', function () {
    return view('Reportsss.sent_campaigns');
});

Route::get('/google_analytics', function () {
    return view('Reportsss.google_analytics');
});

Route::get('/campaigns_based_report', function () {
    return view('Reportsss.campaigns_based_report
    ');
});

Route::get('/list_based_report', function () {
    return view('Reportsss.list_based_report

    ');
});

Route::get('/sms_campaigns_based_report', function () {
    return view('Reportsss.sms_campaigns_based_report');
});


// Libraries part
Route::get('/images', function () {
    return view('Libraries.images');
});
Route::get('/upload_from_computer1', function () {
    return view('Libraries.upload_from_computer1');
});
Route::get('/attachments', function () {
    return view('Libraries.attachments');
});
Route::get('/email_templates', function () {
    return view('Libraries.email_templates');
});
Route::get('/form_templates', function () {
    return view('Libraries.form_templates');
});

Route::get('/predesigned_templates1', function () {
    return view('Libraries.predesigned_templates_1');
});
Route::get('/workflow_templates', function () {
    return view('Libraries.workflow_templates');
});

// Automation part
Route::get('/auto_responders', function () {
    return view('Automation.auto_responders');
});
Route::get('/workflows', function () {
    return view('Automation.workflows');
});
Route::get('/create_workflows', function () {
    return view('Automation.create_workflows');
});

// Reportss part
Route::get('/campaigns_based_report', function () {
    return view('Reportss.campaigns_based_report');
});
Route::get('/google_analytics', function () {
    return view('Reportss.google_analytics');
});
Route::get('/list_based_report', function () {
    return view('Reportss.list_based_report');
});
Route::get('/sent_campaigns', function () {
    return view('Reportss.sent_campaigns');
});
Route::get('/sms_campaigns_based_report', function () {
    return view('Reportss.sms_campaigns_based_report');
});
