<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'title' => 'Home',
                'slug' => 'home',
                'seo_title' => 'Best Assignment Writing Services by UK Top Writers',
                'seo_description' => 'ResearchMyAssignment provides high quality assignment help, essay writing and proofreading services to students. We have a team of qualified writers who will help you to score good grades in your exam.',
                'seo_keywords' => 'assignment help, essay writing, proofreading services, UK writers, academic writing',
                'content' => 'Welcome to our assignment writing services.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'About Us',
                'slug' => 'about',
                'seo_title' => 'About Us | ResearchMyAssignment',
                'seo_description' => 'We at ResearchMyAssignment.com offers Writing Services that help you to fulfil your best quality and research work as per your requirements of the Client.',
                'seo_keywords' => 'about us, research my assignment, writing services, academic help',
                'content' => 'Learn more about our company and services.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Services',
                'slug' => 'services',
                'seo_title' => 'Professional writing and editing services | ResearchMyAssignment',
                'seo_description' => 'Get affordable assistance with all types of assignments, including writing, dissertations, editing, and proofreading. ResearchMyAssignment is here to assist them',
                'seo_keywords' => 'writing services, editing services, dissertation help, assignment writing',
                'content' => 'Explore our comprehensive range of academic services.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Order Now',
                'slug' => 'order-now',
                'seo_title' => 'Order Assignment Help Now | ResearchMyAssignment',
                'seo_description' => 'Place your order for professional assignment writing services. Get expert help with essays, dissertations, and academic projects.',
                'seo_keywords' => 'order assignment, place order, assignment help, academic writing order',
                'content' => 'Place your order for professional academic assistance.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy',
                'seo_title' => 'Privacy Policy | ResearchMyAssignment',
                'seo_description' => 'Read our privacy policy to understand how we collect, use, and protect your personal information.',
                'seo_keywords' => 'privacy policy, data protection, personal information',
                'content' => 'Our privacy policy and data protection measures.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Terms & Conditions',
                'slug' => 'terms-services',
                'seo_title' => 'Terms & Conditions | ResearchMyAssignment',
                'seo_description' => 'Read our terms and conditions for using our assignment writing services.',
                'seo_keywords' => 'terms and conditions, service terms, agreement',
                'content' => 'Terms and conditions for our services.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Disclaimer',
                'slug' => 'disclaimer',
                'seo_title' => 'Disclaimer | ResearchMyAssignment',
                'seo_description' => 'Important disclaimer information about our assignment writing services.',
                'seo_keywords' => 'disclaimer, service disclaimer, academic writing disclaimer',
                'content' => 'Important disclaimer information.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Thank You',
                'slug' => 'thanks',
                'seo_title' => 'Thank You | ResearchMyAssignment',
                'seo_description' => 'Thank you for choosing our assignment writing services. Your order has been received.',
                'seo_keywords' => 'thank you, order confirmation, assignment order',
                'content' => 'Thank you for your order.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('pages')->insert($pages);
    }
}
