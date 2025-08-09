<?php

use Illuminate\Support\Facades\Route;

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

// Front-end routes
Route::get('/', 'FrontController@home')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/services', 'FrontController@services')->name('services');
Route::get('/order-now', 'FrontController@orderNow')->name('order-now');
Route::post('/order-now', 'FrontController@storeOrderNow')->name('ordernow.store');
Route::post('/home', 'FrontController@storeOrder')->name('order.store'); 
Route::get('/blogs', 'FrontController@blogs')->name('blogs');
Route::get('/free-samples', 'FrontController@freeSamples')->name('free-samples');
Route::get('/academic-writing-services', 'FrontController@academicWritingServices')->name('academic-writing-services');
Route::get('/other-services', 'FrontController@otherServices')->name('other-services');
Route::post('/subscribe-newsletter', 'FrontController@subscribeNewsletter')->name('subscribe-newsletter');

// Legal pages
Route::get('/privacy', 'FrontController@privacy')->name('privacy');
Route::get('/terms-services', 'FrontController@termsServices')->name('terms-services');
Route::get('/disclaimer', 'FrontController@disclaimer')->name('disclaimer');
Route::get('/refund-policy', 'FrontController@refundPolicy')->name('refund-policy');


// Additional pages from template
Route::get('/whyus', 'FrontController@whyUs')->name('whyus');
Route::get('/guarantees', 'FrontController@guarantees')->name('guarantees');
Route::get('/testimonial', 'FrontController@testimonial')->name('testimonial');
Route::get('/faq', 'FrontController@faq')->name('faq');
Route::get('/contactus', 'FrontController@contactUs')->name('contactus');
Route::post('/contactus', 'FrontController@storeContactUs')->name('contactus.store');
Route::get('/basic-subjects', 'FrontController@basicSubjects')->name('basic-subjects');
Route::get('/management-subjects', 'FrontController@managementSubjects')->name('management-subjects');
Route::get('/editing-and-proofreading', 'FrontController@editingAndProofreading')->name('editing-and-proofreading');
Route::get('/other-subjects', 'FrontController@otherSubjects')->name('other-subjects');
Route::get('/spss-help', 'FrontController@spssHelp')->name('spss-help');

// More template pages
Route::get('/course-work', 'FrontController@courseWork')->name('course-work');
Route::get('/cv-writing', 'FrontController@cvWriting')->name('cv-writing');
Route::get('/report-writing', 'FrontController@reportWriting')->name('report-writing');
Route::get('/essay-writing', 'FrontController@essayWriting')->name('essay-writing');
Route::get('/assignment-writing', 'FrontController@assignmentWriting')->name('assignment-writing');
Route::get('/writers', 'FrontController@writers')->name('writers');
Route::get('/literature-review-writing', 'FrontController@literatureReviewWriting')->name('literature-review-writing');
Route::get('/dissertation-topic-outline', 'FrontController@dissertationTopicOutline')->name('dissertation-topic-outline');
Route::get('/dissertation-proposal-writing', 'FrontController@dissertationProposalWriting')->name('dissertation-proposal-writing');
Route::get('/dissertation-thesis-writing', 'FrontController@dissertationThesisWriting')->name('dissertation-thesis-writing');
Route::get('/dissertation-part-chapter-writing', 'FrontController@dissertationPartChapterWriting')->name('dissertation-part-chapter-writing');
Route::get('/dissertation-editing-improvement-proofreading', 'FrontController@dissertationEditingImprovementProofreading')->name('dissertation-editing-improvement-proofreading');
Route::get('/dissertation-statistical-services', 'FrontController@dissertationStatisticalServices')->name('dissertation-statistical-services');
Route::get('/editing-proofreading-improvement-service', 'FrontController@editingProofreadingImprovementService')->name('editing-proofreading-improvement-service');
Route::get('/model-answer-writing', 'FrontController@modelAnswerWriting')->name('model-answer-writing');
Route::get('/exam-notes', 'FrontController@examNotes')->name('exam-notes');
Route::get('/accounting-subject', 'FrontController@accountingSubject')->name('accounting-subject');
Route::get('/finance-subject', 'FrontController@financeSubject')->name('finance-subject');
Route::get('/assignment-help', 'FrontController@assignmentHelp')->name('assignment-help');
Route::get('/poster-service', 'FrontController@posterService')->name('poster-service');
Route::get('/presentations-service', 'FrontController@presentationsService')->name('presentations-service');

// Subject-specific pages
Route::get('/nursing-assignment-help', 'FrontController@nursingAssignmentHelp')->name('nursing-assignment-help');
Route::get('/mathematics-assignment-help', 'FrontController@mathematicsAssignmentHelp')->name('mathematics-assignment-help');
Route::get('/physics-assignment-help', 'FrontController@physicsAssignmentHelp')->name('physics-assignment-help');
Route::get('/chemistry-assignment-help', 'FrontController@chemistryAssignmentHelp')->name('chemistry-assignment-help');
Route::get('/biology-assignment-help', 'FrontController@biologyAssignmentHelp')->name('biology-assignment-help');
Route::get('/english-assignment-help', 'FrontController@englishAssignmentHelp')->name('english-assignment-help');
Route::get('/history-assignment-help', 'FrontController@historyAssignmentHelp')->name('history-assignment-help');
Route::get('/geography-assignment-help', 'FrontController@geographyAssignmentHelp')->name('geography-assignment-help');
Route::get('/psychology-assignment-help', 'FrontController@psychologyAssignmentHelp')->name('psychology-assignment-help');
Route::get('/marketing-assignment-help', 'FrontController@marketingAssignmentHelp')->name('marketing-assignment-help');
Route::get('/operations-assignment-help', 'FrontController@operationsAssignmentHelp')->name('operations-assignment-help');
Route::get('/strategy-planning-assignment-help', 'FrontController@strategyPlanningAssignmentHelp')->name('strategy-planning-assignment-help');
Route::get('/business-development-essays', 'FrontController@businessDevelopmentEssays')->name('business-development-essays');
Route::get('/computer-assignment-help', 'FrontController@computerAssignmentHelp')->name('computer-assignment-help');
Route::get('/electronics-assignment-help', 'FrontController@electronicsAssignmentHelp')->name('electronics-assignment-help');
Route::get('/mechanical-assignment-help', 'FrontController@mechanicalAssignmentHelp')->name('mechanical-assignment-help');
Route::get('/operating-system-assignment-help', 'FrontController@operatingSystemAssignmentHelp')->name('operating-system-assignment-help');
Route::get('/it-management-assignment-help', 'FrontController@itManagementAssignmentHelp')->name('it-management-assignment-help');
Route::get('/biotechnology-assignment-help', 'FrontController@biotechnologyAssignmentHelp')->name('biotechnology-assignment-help');
Route::get('/statistics-assignment-help', 'FrontController@statisticsAssignmentHelp')->name('statistics-assignment-help');
Route::get('/science-assignment-help', 'FrontController@scienceAssignmentHelp')->name('science-assignment-help');
Route::get('/social-science-assignment-help', 'FrontController@socialScienceAssignmentHelp')->name('social-science-assignment-help');
Route::get('/humanities-assignment-help', 'FrontController@humanitiesAssignmentHelp')->name('humanities-assignment-help');
Route::get('/arts-assignment-help', 'FrontController@artsAssignmentHelp')->name('arts-assignment-help');
Route::get('/project-assignment-help', 'FrontController@projectAssignmentHelp')->name('project-assignment-help');
Route::get('/case-studies-assignment-help', 'FrontController@caseStudiesAssignmentHelp')->name('case-studies-assignment-help');
Route::get('/essay-assignment-help', 'FrontController@essayAssignmentHelp')->name('essay-assignment-help');
Route::get('/essay-help-and-custom-essays', 'FrontController@essayHelpAndCustomEssays')->name('essay-help-and-custom-essays');

// Location-based pages
Route::get('/assignment-help-usa', 'FrontController@assignmentHelpUsa')->name('assignment-help-usa');
Route::get('/uk', 'FrontController@uk')->name('uk');
Route::get('/london', 'FrontController@london')->name('london');

// Other pages
Route::get('/discount', 'FrontController@discount')->name('discount');
Route::get('/news', 'FrontController@news')->name('news');
Route::get('/thanks', 'FrontController@thanks')->name('thanks');
Route::get('/research-assignment', 'FrontController@researchAssignment')->name('research-assignment');
Route::get('/research-paper', 'FrontController@researchPaper')->name('research-paper');
Route::get('/phd-assignment', 'FrontController@phdAssignment')->name('phd-assignment');

Route::get('/newPageUrl', 'FrontController@newPageMethod')->name('newPageRoute');

Route::post('/store-email', 'FrontController@storeEmail')->name('store.email');

// Authentication Routes
Auth::routes();

// Dashboard route (for authenticated users)
Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('auth');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/pages', 'AdminController@pagesIndex')->name('pages.index');
    Route::get('/pages/create', 'AdminController@create')->name('pages.create');
    Route::post('/pages', 'AdminController@store')->name('pages.store');
    Route::get('/pages/{id}', 'AdminController@show')->name('pages.show');
    Route::get('/pages/{id}/edit', 'AdminController@edit')->name('pages.edit');
    Route::put('/pages/{id}', 'AdminController@update')->name('pages.update');
    Route::delete('/pages/{id}', 'AdminController@destroy')->name('pages.destroy');
    Route::resource('orders', 'AdminOrderController');
});

// Redirect /home to dashboard for backward compatibility
Route::get('/home', function () {
    return redirect()->route('dashboard');
});
