<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = new Course();
        $course->id = "1";
        $course->name = "Data Science Fundamentals";
        $course->slug = "data-science-essentials";
        $course->semester = "10";
        $course->credit = "160";
        $course->course_duration_id = "1";
        $course->sub_category_id = "1";
        $course->meta_keywords = "data science, machine learning, Python, statistics, data analysis";
        $course->meta_description = "Dive into the core concepts of data science, covering topics such as machine learning algorithms, statistical analysis, data manipulation with Python, and practical data analysis techniques to extract insights from complex datasets.";
        $course->save();

        $course = new Course();
        $course->id = "2";
        $course->name = "Financial Management for Entrepreneurs";
        $course->slug = "financial-management-for-entrepreneurs";
        $course->semester = "8";
        $course->credit = "140";
        $course->course_duration_id = "2";
        $course->sub_category_id = "2";
        $course->meta_keywords = "financial management, entrepreneurship, budgeting, accounting, investment";
        $course->meta_description = "Gain a comprehensive understanding of financial management principles tailored for entrepreneurs, covering topics such as budgeting, accounting basics, financial analysis, and investment strategies to support business growth and sustainability";
        $course->save();


        
        $course = new Course();
        $course->id = "3";
        $course->name = "Introduction to Artificial Intelligence";
        $course->slug = "introduction-to-artificial-intelligence";
        $course->semester = "8";
        $course->credit = "145";
        $course->course_duration_id = "2";
        $course->sub_category_id = "3";
        $course->meta_keywords = "artificial intelligence, machine learning, neural networks, AI applications";
        $course->meta_description = "Explore the fascinating world of artificial intelligence and machine learning in this introductory course, where you'll learn about neural networks, AI algorithms, and real-world applications of AI technology across various industries.";
        $course->save();
    }
}
