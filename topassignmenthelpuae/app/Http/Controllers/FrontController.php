<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class FrontController extends Controller
{
    public function home()
    {
        $page = DB::table('pages')->where('slug', 'home')->first();
        return view('home', compact('page'));
    }

    public function about()
    {
        $page = DB::table('pages')->where('slug', 'about')->first();
        return view('about', compact('page'));
    }

    public function services()
    {
        $page = DB::table('pages')->where('slug', 'services')->first();
        return view('services', compact('page'));
    }

    public function order()
    {
        $page = DB::table('pages')->where('slug', 'home')->first();
        return view('home', compact('page'));
    }

    public function storeOrder(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'deadline' => 'required|date',
            'noword' => 'required|string',
            'file' => 'nullable|file|max:10240', // 10MB max
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/orders'), $filename);
            $filePath = 'uploads/orders/' . $filename;
        }
        
        DB::table('orders')->insert([
            'user_name' => $validatedData['user_name'],
            'user_email' => $validatedData['user_email'],
            'phone' => $validatedData['phone'],
            'deadline' => $validatedData['deadline'],
            'word_count' => $validatedData['noword'],
            'file_path' => $filePath,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('thanks')->with('success', 'Order submitted successfully!');
    }

    public function orderNow()
    {
        $page = DB::table('pages')->where('slug', 'order-now')->first();
        return view('order-now', compact('page'));
    }

    public function storeOrderNow(Request $request)
    {
        \Log::info('Form Data:', $request->all());

        try {
            $validatedData = $request->validate([
                'referencing' => 'required|string|in:Harvard (No Page Numbers),Harvard (With Page Numbers),Footnote,Oxford,OSCOLA,APA,BMJ,Chicago,MHRA,MRA,Open University,Turabian,Vancouver',
                'subject' => 'required|string|in:Accounting,Anthropology,Art & architecture,Biology,Business,Chemistry,Communication,Construction,Criminal Law,Economics,Education,Engineering,Environmental studies,Film studies,Finance,Health,History,Law,Literature,Management,Marketing,Mathematics,Medicine,Music,Nursing,Philosophy,Physics,Political science,Psychology,Public Health,Religious studies,Social Work,Sociology,Statistics,Technology,Theater studies,Women and gender studies,World affairs',
                'academic_level' => 'required|string|in:High School,Diploma,A-Level,Master - Postgraduate,PhD - Postgraduate,G.C.S.E,Undergraduate,Other',
                'word_count' => 'required|string|in:1000 Words (Estimated 2-3 pages),1500 Words (Estimated 3-4 pages),2000 Words (Estimated 5 pages),2500 Words (Estimated over 6 pages),3000 Words (Estimated 7-8 pages),4000 Words (Estimated 10 pages),5000 Words (Estimated 12-13 pages),6000 Words (Estimated 15 pages),8000 Words (Estimated 20 pages),10000 Words (Estimated 25 pages)',
                'deadline' => 'required|string|in:Next Day,2 Days,3 Days,4 Days,5 days,6 days,7 days',
                'email' => 'required|email|max:255',
                'country_code' => 'required|string|in:+44,+1,+61,+91,+971',
                'phone' => 'required|string|max:20',
                'requirements' => 'nullable|string',
                'file_upload' => 'nullable|file|max:10240',
            ]);

            \Log::info('Validated Data:', $validatedData);

            $filePath = null;
            if ($request->hasFile('file_upload')) {
                $file = $request->file('file_upload');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/orders'), $filename);
                $filePath = 'uploads/orders/' . $filename;
                \Log::info('File Path:', [$filePath]);
            }

            DB::table('ordernows')->insert([
                'referencing' => $validatedData['referencing'],
                'subject' => $validatedData['subject'],
                'academic_level' => $validatedData['academic_level'],
                'word_count' => $validatedData['word_count'],
                'deadline' => $validatedData['deadline'],
                'user_email' => $validatedData['email'],
                'country_code' => $validatedData['country_code'],
                'phone' => $validatedData['phone'],
                'requirements' => $validatedData['requirements'],
                'file_path' => $filePath,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            \Log::info('Data inserted successfully');
        } catch (ValidationException $e) {
            \Log::error('Validation Errors:', $e->errors());
            return redirect()->back()->with('error', 'Failed to submit order: ' . implode(', ', array_merge(...array_values($e->errors()))));
        } catch (\Exception $e) {
            \Log::error('Insert Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to submit order: ' . $e->getMessage());
        }

        return redirect()->route('thanks')->with('success', 'Order submitted successfully!');
    }

    // Add other methods like orderNow here


    public function blogs()
    {
        $page = DB::table('pages')->where('slug', 'blogs')->first();
        return view('blogs', compact('page'));
    }

    public function freeSamples()
    {
        $page = DB::table('pages')->where('slug', 'free-samples')->first();
        return view('free-samples', compact('page'));
    }

    public function academicWritingServices()
    {
        $page = DB::table('pages')->where('slug', 'academic-writing-services')->first();
        return view('academic-writing-services', compact('page'));
    }

    public function otherServices()
    {
        $page = DB::table('pages')->where('slug', 'other-services')->first();
        return view('other-services', compact('page'));
    }

    public function privacy()
    {
        $page = DB::table('pages')->where('slug', 'privacy')->first();
        return view('privacy', compact('page'));
    }

    public function termsServices()
    {
        $page = DB::table('pages')->where('slug', 'terms-services')->first();
        return view('terms-services', compact('page'));
    }

    public function disclaimer()
    {
        $page = DB::table('pages')->where('slug', 'disclaimer')->first();
        return view('disclaimer', compact('page'));
    }

    public function whyUs()
    {
        $page = DB::table('pages')->where('slug', 'whyus')->first();
        return view('whyus', compact('page'));
    }

    public function guarantees()
    {
        $page = DB::table('pages')->where('slug', 'guarantees')->first();
        return view('guarantees', compact('page'));
    }

    public function testimonial()
    {
        $page = DB::table('pages')->where('slug', 'testimonial')->first();
        return view('testimonial', compact('page'));
    }

    public function faq()
    {
        $page = DB::table('pages')->where('slug', 'faq')->first();
        return view('faq', compact('page'));
    }

    public function contactUs()
    {
        $page = DB::table('pages')->where('slug', 'contactus')->first();
        return view('contactus', compact('page'));
    }

    public function storeContactUs(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'code' => 'required|string',
            'message' => 'required|string',
        ]);

        DB::table('contacts')->insert([
            'first_name' => $validatedData['fname'],
            'last_name' => $validatedData['lname'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'country' => $validatedData['code'],
            'message' => $validatedData['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('thanks')->with('success', 'Your message has been sent successfully!');
    }

    public function basicSubjects()
    {
        $page = DB::table('pages')->where('slug', 'basic-subjects')->first();
        return view('basic-subjects', compact('page'));
    }

    public function managementSubjects()
    {
        $page = DB::table('pages')->where('slug', 'management-subjects')->first();
        return view('management-subjects', compact('page'));
    }

    public function editingAndProofreading()
    {
        $page = DB::table('pages')->where('slug', 'editing-and-proofreading')->first();
        return view('editing-and-proofreading', compact('page'));
    }

    public function otherSubjects()
    {
        $page = DB::table('pages')->where('slug', 'other-subjects')->first();
        return view('other-subjects', compact('page'));
    }

    public function spssHelp()
    {
        $page = DB::table('pages')->where('slug', 'spss-help')->first();
        return view('spss-help', compact('page'));
    }

    public function courseWork()
    {
        $page = DB::table('pages')->where('slug', 'course-work')->first();
        return view('course-work', compact('page'));
    }


    public function cvWriting()
    {
        $page = DB::table('pages')->where('slug', 'cv-writing')->first();
        return view('cv-writing', compact('page'));
    }

    public function reportWriting()
    {
        $page = DB::table('pages')->where('slug', 'report-writing')->first();
        return view('report-writing', compact('page'));
    }

    public function essayWriting()
    {
        $page = DB::table('pages')->where('slug', 'essay-writing')->first();
        return view('essay-writing', compact('page'));
    }
public function assignmentWriting()
    {
        $page = DB::table('pages')->where('slug', 'assignment-writing')->first();
        return view('assignment-writing', compact('page'));
    }

    public function writers()
    {
        $page = DB::table('pages')->where('slug', 'writers')->first();
        return view('writers', compact('page'));
    }

    public function literatureReviewWriting()
    {
        $page = DB::table('pages')->where('slug', 'literature-review-writing')->first();
        return view('literature-review-writing', compact('page'));
    }

    public function dissertationTopicOutline()
    {
        $page = DB::table('pages')->where('slug', 'dissertation-topic-outline')->first();
        return view('dissertation-topic-outline', compact('page'));
    }

    public function dissertationProposalWriting()
    {
        $page = DB::table('pages')->where('slug', 'dissertation-proposal-writing')->first();
        return view('dissertation-proposal-writing', compact('page'));
    }

    public function dissertationThesisWriting()
    {
        $page = DB::table('pages')->where('slug', 'dissertation-thesis-writing')->first();
        return view('dissertation-thesis-writing', compact('page'));
    }

    public function dissertationPartChapterWriting()
    {
        $page = DB::table('pages')->where('slug', 'dissertation-part-chapter-writing')->first();
        return view('dissertation-part-chapter-writing', compact('page'));
    }

    public function dissertationEditingImprovementProofreading()
    {
        $page = DB::table('pages')->where('slug', 'dissertation-editing-improvement-proofreading')->first();
        return view('dissertation-editing-improvement-proofreading', compact('page'));
    }

    public function dissertationStatisticalServices()
    {
        $page = DB::table('pages')->where('slug', 'dissertation-statistical-services')->first();
        return view('dissertation-statistical-services', compact('page'));
    }

    public function editingProofreadingImprovementService()
    {
        $page = DB::table('pages')->where('slug', 'editing-proofreading-improvement-service')->first();
        return view('editing-proofreading-improvement-service', compact('page'));
    }

    public function modelAnswerWriting()
    {
        $page = DB::table('pages')->where('slug', 'model-answer-writing')->first();
        return view('model-answer-writing', compact('page'));
    }

    public function examNotes()
    {
        $page = DB::table('pages')->where('slug', 'exam-notes')->first();
        return view('exam-notes', compact('page'));
    }

    public function accountingSubject()
{
    $page = DB::table('pages')->where('slug', 'accounting-subject')->first();
    return view('accounting-subject', compact('page'));
}

public function financeSubject()
{
    $page = DB::table('pages')->where('slug', 'finance-subject')->first();
    return view('finance-subject', compact('page'));
}
public function assignmentHelp()
{
    $page = DB::table('pages')->where('slug', 'assignment-help')->first();
    return view('assignment-help', compact('page'));
}

    public function posterService()
    {
        $page = DB::table('pages')->where('slug', 'poster-service')->first();
        return view('poster-service', compact('page'));
    }

    public function presentationsService()
    {
        $page = DB::table('pages')->where('slug', 'presentations-service')->first();
        return view('presentations-service', compact('page'));
    }

    // Subject-specific methods
    public function nursingAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'nursing-assignment-help')->first();
        return view('nursing-assignment-help', compact('page'));
    }

    public function mathematicsAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'mathematics-assignment-help')->first();
        return view('mathematics-assignment-help', compact('page'));
    }

    public function physicsAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'physics-assignment-help')->first();
        return view('physics-assignment-help', compact('page'));
    }

    public function chemistryAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'chemistry-assignment-help')->first();
        return view('chemistry-assignment-help', compact('page'));
    }

    public function biologyAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'biology-assignment-help')->first();
        return view('biology-assignment-help', compact('page'));
    }

    public function englishAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'english-assignment-help')->first();
        return view('english-assignment-help', compact('page'));
    }

    public function historyAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'history-assignment-help')->first();
        return view('history-assignment-help', compact('page'));
    }

    public function geographyAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'geography-assignment-help')->first();
        return view('geography-assignment-help', compact('page'));
    }

    public function psychologyAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'psychology-assignment-help')->first();
        return view('psychology-assignment-help', compact('page'));
    }

    public function marketingAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'marketing-assignment-help')->first();
        return view('marketing-assignment-help', compact('page'));
    }

    public function operationsAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'operations-assignment-help')->first();
        return view('operations-assignment-help', compact('page'));
    }

    public function strategyPlanningAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'strategy-planning-assignment-help')->first();
        return view('strategy-planning-assignment-help', compact('page'));
    }

    public function businessDevelopmentEssays()
    {
        $page = DB::table('pages')->where('slug', 'business-development-essays')->first();
        return view('business-development-essays', compact('page'));
    }

    public function computerAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'computer-assignment-help')->first();
        return view('computer-assignment-help', compact('page'));
    }

    public function electronicsAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'electronics-assignment-help')->first();
        return view('electronics-assignment-help', compact('page'));
    }

    public function mechanicalAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'mechanical-assignment-help')->first();
        return view('mechanical-assignment-help', compact('page'));
    }

    public function operatingSystemAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'operating-system-assignment-help')->first();
        return view('operating-system-assignment-help', compact('page'));
    }

    public function itManagementAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'it-management-assignment-help')->first();
        return view('it-management-assignment-help', compact('page'));
    }

    public function biotechnologyAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'biotechnology-assignment-help')->first();
        return view('biotechnology-assignment-help', compact('page'));
    }

    public function statisticsAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'statistics-assignment-help')->first();
        return view('statistics-assignment-help', compact('page'));
    }

    public function scienceAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'science-assignment-help')->first();
        return view('science-assignment-help', compact('page'));
    }

    public function socialScienceAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'social-science-assignment-help')->first();
        return view('social-science-assignment-help', compact('page'));
    }

    public function humanitiesAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'humanities-assignment-help')->first();
        return view('humanities-assignment-help', compact('page'));
    }

    public function artsAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'arts-assignment-help')->first();
        return view('arts-assignment-help', compact('page'));
    }

    public function projectAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'project-assignment-help')->first();
        return view('project-assignment-help', compact('page'));
    }

    public function caseStudiesAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'case-studies-assignment-help')->first();
        return view('case-studies-assignment-help', compact('page'));
    }

    public function essayAssignmentHelp()
    {
        $page = DB::table('pages')->where('slug', 'essay-assignment-help')->first();
        return view('essay-assignment-help', compact('page'));
    }

    public function essayHelpAndCustomEssays()
    {
        $page = DB::table('pages')->where('slug', 'essay-help-and-custom-essays')->first();
        return view('essay-help-and-custom-essays', compact('page'));
    }

    public function assignmentHelpUsa()
    {
        $page = DB::table('pages')->where('slug', 'assignment-help-usa')->first();
        return view('assignment-help-usa', compact('page'));
    }

    public function uk()
    {
        $page = DB::table('pages')->where('slug', 'uk')->first();
        return view('uk', compact('page'));
    }

    public function london()
    {
        $page = DB::table('pages')->where('slug', 'london')->first();
        return view('london', compact('page'));
    }

    public function discount()
    {
        $page = DB::table('pages')->where('slug', 'discount')->first();
        return view('discount', compact('page'));
    }

    public function news()
    {
        $page = DB::table('pages')->where('slug', 'news')->first();
        return view('news', compact('page'));
    }

    public function thanks()
    {
        $page = DB::table('pages')->where('slug', 'thanks')->first();
        return view('thanks', compact('page'));
    }

    // Updated method for newsletter subscription
    public function subscribeNewsletter(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email|max:255',
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email address is too long.',
        ]);

        try {
            // Check if email already exists
            $existingEmail = DB::table('subscribe')
                ->where('email', $request->email)
                ->first();

            if ($existingEmail) {
                return redirect()->back()->with('error', 'This email is already subscribed to our newsletter.');
            }

            // Insert the email into subscribe table
            DB::table('subscribe')->insert([
                'email' => $request->email,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Return success message
            return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
        } catch (\Exception $e) {
            // Log the error (optional, requires logging setup)
            \Log::error('Newsletter subscription failed: ' . $e->getMessage());

            // Return error message
            return redirect()->back()->with('error', 'An error occurred while subscribing. Please try again later.');
        }
    }
}
