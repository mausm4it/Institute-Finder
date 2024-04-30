<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //blog1
        $blog = new Blog();
        $blog->id = "1";
        $blog->title = "Navigating Higher Ed: A Comprehensive Guide to College Applications";
        $blog->slug = "navigating-higher-ed-college-applications";
        $blog->blog_image = "blog_image/blog1.jpg";
        $blog->blog_category_id = "1";
        $blog->publish = "1";
        $blog->summary = "Learn the ins and outs of the college application process,
         from selecting the right schools to crafting compelling essays";
        $blog->content = "This blog series will break down each step of applying to college, 
        offering practical tips and advice to help students successfully navigate this important journey";
        $blog->meta_keywords = "This blog series will break down each step of applying to college, 
        offering practical tips and advice to help students successfully navigate this important journey";
        $blog->meta_description = "This blog series will break down each step of applying to college, 
        offering practical tips and advice to help students successfully navigate this important journey";
        $blog->save();


        //blog2
        $blog = new Blog();
        $blog->id = "2";
        $blog->title = "Decoding Financial Aid: Understanding Your Options for College Funding";
        $blog->slug = "decoding-financial-aid-college-funding";
        $blog->blog_image = "blog_image/blog2.jpg";
        $blog->publish = "1";
        $blog->blog_category_id = "1";
        $blog->summary = "Unravel the complexities of financial aid, 
        scholarships, and grants to make college more affordable.";
        $blog->content = "This series will provide clarity on the various forms of financial assistance available to students,
         empowering them to make informed decisions about financing their college education.";
        $blog->meta_keywords = "This series will provide clarity on the various forms of financial assistance available to students, 
        empowering them to make informed decisions about financing their college education.";
        $blog->meta_description = "This series will provide clarity on the various forms of financial assistance available to students,
        empowering them to make informed decisions about financing their college education.";
        $blog->save();


        //blog3
        $blog = new Blog();
        $blog->id = "3";
        $blog->title = "College Life Unplugged: A Student's Guide to Thriving on Campus";
        $blog->slug = "college-life-unplugged-campus-guide";
        $blog->blog_image = "blog_image/blog3.jpg";
        $blog->blog_category_id = "2";
        $blog->publish = "1";
        $blog->summary = "Discover strategies for academic success, 
        social integration, and personal well-being in the college environment.";
        $blog->content = "From time management tips to campus resources, this blog series will equip students
         with the knowledge and skills they need to thrive both academically and personally during their college years.";
        $blog->meta_keywords = "From time management tips to campus resources, this blog series will equip students with the knowledge and 
        skills they need to thrive both academically and personally during their college years.";
        $blog->meta_description = "From time management tips to campus resources, this blog series will equip students with the knowledge and 
        skills they need to thrive both academically and personally during their college years.";
        $blog->save();



        //blog4
        $blog = new Blog();
        $blog->id = "4";
        $blog->title = "Beyond the Classroom: Exploring Experiential Learning Opportunities in College";
        $blog->slug = "beyond-classroom-experiential-learning-college";
        $blog->blog_image = "blog_image/blog4.jpg";
        $blog->blog_category_id = "2";
        $blog->publish = "1";
        $blog->summary = " Explore internship programs, study abroad opportunities, 
        and other hands-on experiences to enrich your college education.";
        $blog->content = "This series will highlight the value of experiential learning in college and provide guidance on how students can leverage these opportunities to 
        enhance their skills, broaden their perspectives, and prepare for their future careers.";
        $blog->meta_keywords = "This series will highlight the value of experiential learning in college and provide guidance on how students can leverage these opportunities to 
        enhance their skills, broaden their perspectives, and prepare for their future careers.";
        $blog->meta_description = "This series will highlight the value of experiential learning in college and provide guidance on how students can leverage these opportunities to 
        enhance their skills, broaden their perspectives, and prepare for their future careers.";
        $blog->save();


        //blog5
        $blog = new Blog();
        $blog->id = "5";
        $blog->title = "College Survival Guide: Tips and Tricks for Navigating Freshman Year";
        $blog->slug = "college-survival-guide-freshman-year";
        $blog->blog_image = "blog_image/blog5.jpg";
        $blog->blog_category_id = "3";
        $blog->publish = "1";
        $blog->summary = "Get practical advice on making a smooth transition to college life and overcoming common challenges faced by incoming freshmen.";
        $blog->content = "From adjusting to dormitory living to managing academic expectations, this blog series will offer valuable insights and 
        actionable tips to help freshmen navigate their first year of college with confidence.";
        $blog->meta_keywords = "From adjusting to dormitory living to managing academic expectations, this blog series will offer valuable insights 
        and actionable tips to help freshmen navigate their first year of college with confidence.";
        $blog->meta_description = "From adjusting to dormitory living to managing academic expectations, this blog series will offer valuable insights and 
        actionable tips to help freshmen navigate their first year of college with confidence.";
        $blog->save();
    }
}