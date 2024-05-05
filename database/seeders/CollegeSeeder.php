<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\College;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $college = new College();
        $college->name = "Liberty University";
        $college->slug = "liberty-university";
        $college->type_of_college_id = "1";
        $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
        and graduate programs.";
        $college->video_link = "https://www.youtube.com/watch?v=1234567890";
        $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
        organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
         excellence and provides a supportive environment for students to pursue their
          passions and achieve their goals";
        $college->admisstion_current_time = "Prospective students can apply online through the
         university website. Admission requirements vary by program, but all applicants are encouraged 
        to submit their transcripts, standardized test scores, and letters of recommendation.";
        $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
        to eligible students based on academic achievement, extracurricular involvement, and financial need.";
        $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
         to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
        $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
         living. The university also offers dining facilities, study lounges, and recreational amenities.";
        $college->thumbline = "college_thumbline/college1.jpg";
        $college->gallery = "college_gallery/college2.jpg";
        $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
        Career Center provides resources and support to students throughout their job search process.";
        $college->ranking_number = "5";
        $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
        $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
         graduate programs in a supportive and vibrant campus environment.";
         $college->publish = "1";
         $college->views = random_int(1, 5000);

        $college->save();
        $college->campuses()->attach([1,2,3,4,5]);
        $college->courses()->attach([1,2,3]);
        $college->countries()->attach([1]);



        //2


        $college = new College();
        $college->name = "Evergreen University";
        $college->slug = "evergreen-university";
        $college->type_of_college_id = "1";
        $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
        and graduate programs.";
        $college->video_link = "https://www.youtube.com/watch?v=1234567890";
        $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
        organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
         excellence and provides a supportive environment for students to pursue their
          passions and achieve their goals";
        $college->admisstion_current_time = "Prospective students can apply online through the
         university website. Admission requirements vary by program, but all applicants are encouraged 
        to submit their transcripts, standardized test scores, and letters of recommendation.";
        $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
        to eligible students based on academic achievement, extracurricular involvement, and financial need.";
        $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
         to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
        $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
         living. The university also offers dining facilities, study lounges, and recreational amenities.";
        $college->thumbline = "college_thumbline/college2.jpg";
        $college->gallery = "college_gallery/college3.jpg";
        $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
        Career Center provides resources and support to students throughout their job search process.";
        $college->ranking_number = "6";
        $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
        $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
         graduate programs in a supportive and vibrant campus environment.";
         $college->publish = "1";
         $college->views = random_int(1, 5000);
        $college->save();
        $college->campuses()->attach([1,2,3,4,5]);
        $college->courses()->attach([1,2,3]);
        $college->countries()->attach([2]);
        
        
        //3
        $college = new College();
        $college->name = "Pacific Shores College";
        $college->slug = "pacific-shores-college";
        $college->type_of_college_id = "1";
        $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
        and graduate programs.";
        $college->video_link = "https://www.youtube.com/watch?v=1234567890";
        $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
        organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
         excellence and provides a supportive environment for students to pursue their
          passions and achieve their goals";
        $college->admisstion_current_time = "Prospective students can apply online through the
         university website. Admission requirements vary by program, but all applicants are encouraged 
        to submit their transcripts, standardized test scores, and letters of recommendation.";
        $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
        to eligible students based on academic achievement, extracurricular involvement, and financial need.";
        $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
         to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
        $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
         living. The university also offers dining facilities, study lounges, and recreational amenities.";
        $college->thumbline = "college_thumbline/college3.jpg";
        $college->gallery = "college_gallery/college4.jpg";
        $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
        Career Center provides resources and support to students throughout their job search process.";
        $college->ranking_number = "7";
        $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
        $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
         graduate programs in a supportive and vibrant campus environment.";
         $college->publish = "1";
         $college->views = random_int(1, 5000);
        $college->save();
        $college->campuses()->attach([1,2,3,4,5]);
        $college->courses()->attach([1,2,3]);
        $college->countries()->attach([1]);

        //4
        $college = new College();
        $college->name = "Mountainview State University";
        $college->slug = "mountainview-state-university";
        $college->type_of_college_id = "2";
        $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
        and graduate programs.";
        $college->video_link = "https://www.youtube.com/watch?v=1234567890";
        $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
        organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
         excellence and provides a supportive environment for students to pursue their
          passions and achieve their goals";
        $college->admisstion_current_time = "Prospective students can apply online through the
         university website. Admission requirements vary by program, but all applicants are encouraged 
        to submit their transcripts, standardized test scores, and letters of recommendation.";
        $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
        to eligible students based on academic achievement, extracurricular involvement, and financial need.";
        $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
         to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
        $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
         living. The university also offers dining facilities, study lounges, and recreational amenities.";
        $college->thumbline = "college_thumbline/college4.jpg";
        $college->gallery = "college_gallery/college5.jpg";
        $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
        Career Center provides resources and support to students throughout their job search process.";
        $college->ranking_number = "8";
        $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
        $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
         graduate programs in a supportive and vibrant campus environment.";
         $college->publish = "1";
         $college->views = random_int(1, 5000);
        $college->save();
        $college->campuses()->attach([1,2,3,4,5]);
        $college->courses()->attach([1,2,3]);
        $college->countries()->attach([2]);


        //5
        $college = new College();
        $college->name = "Harborview College";
        $college->slug = "harborview-college";
        $college->type_of_college_id = "2";
        $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
        and graduate programs.";
        $college->video_link = "https://www.youtube.com/watch?v=1234567890";
        $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
        organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
         excellence and provides a supportive environment for students to pursue their
          passions and achieve their goals";
        $college->admisstion_current_time = "Prospective students can apply online through the
         university website. Admission requirements vary by program, but all applicants are encouraged 
        to submit their transcripts, standardized test scores, and letters of recommendation.";
        $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
        to eligible students based on academic achievement, extracurricular involvement, and financial need.";
        $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
         to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
        $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
         living. The university also offers dining facilities, study lounges, and recreational amenities.";
        $college->thumbline = "college_thumbline/college5.jpg";
        $college->gallery = "college_gallery/college6.jpg";
        $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
        Career Center provides resources and support to students throughout their job search process.";
        $college->ranking_number = "1";
        $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
        $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
         graduate programs in a supportive and vibrant campus environment.";
         $college->publish = "1";
         $college->views = random_int(1, 5000);
        $college->save();
        $college->campuses()->attach([1,2,3,4,5]);
        $college->courses()->attach([1,2,3]);
        $college->countries()->attach([1]);


        //6

        $college = new College();
        $college->name = "Golden Valley Institute";
        $college->slug = "golden-valley-institute";
        $college->type_of_college_id = "2";
        $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
        and graduate programs.";
        $college->video_link = "https://www.youtube.com/watch?v=1234567890";
        $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
        organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
         excellence and provides a supportive environment for students to pursue their
          passions and achieve their goals";
        $college->admisstion_current_time = "Prospective students can apply online through the
         university website. Admission requirements vary by program, but all applicants are encouraged 
        to submit their transcripts, standardized test scores, and letters of recommendation.";
        $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
        to eligible students based on academic achievement, extracurricular involvement, and financial need.";
        $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
         to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
        $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
         living. The university also offers dining facilities, study lounges, and recreational amenities.";
        $college->thumbline = "college_thumbline/college6.jpg";
        $college->gallery = "college_gallery/college7.jpg";
        $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
        Career Center provides resources and support to students throughout their job search process.";
        $college->ranking_number = "2";
        $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
        $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
         graduate programs in a supportive and vibrant campus environment.";
         $college->publish = "1";
         $college->views = random_int(1, 5000);
        $college->save();
        $college->campuses()->attach([1,2,3,4,5]);
        $college->courses()->attach([1,2,3]);
        $college->countries()->attach([1]);
        //7
        $college = new College();
        $college->name = "Sunset Hills University";
        $college->slug = "sunset-hills-university";
        $college->type_of_college_id = "2";
        $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
        and graduate programs.";
        $college->video_link = "https://www.youtube.com/watch?v=1234567890";
        $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
        organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
         excellence and provides a supportive environment for students to pursue their
          passions and achieve their goals";
        $college->admisstion_current_time = "Prospective students can apply online through the
         university website. Admission requirements vary by program, but all applicants are encouraged 
        to submit their transcripts, standardized test scores, and letters of recommendation.";
        $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
        to eligible students based on academic achievement, extracurricular involvement, and financial need.";
        $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
         to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
        $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
         living. The university also offers dining facilities, study lounges, and recreational amenities.";
        $college->thumbline = "college_thumbline/college7.jpg";
        $college->gallery = "college_gallery/college8.jpg";
        $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
        Career Center provides resources and support to students throughout their job search process.";
        $college->ranking_number = "3";
        $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
        $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
         graduate programs in a supportive and vibrant campus environment.";
         $college->publish = "1";
         $college->views = random_int(1, 5000);
        $college->save();
        $college->campuses()->attach([1,2,3,4,5]);
        $college->courses()->attach([1,2,3]);
        $college->countries()->attach([1]);


         //8
         $college = new College();
         $college->name = "Lakefront Academy";
         $college->slug = "lakefront-academy";
         $college->type_of_college_id = "2";
         $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
         Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
         and graduate programs.";
         $college->video_link = "https://www.youtube.com/watch?v=1234567890";
         $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
         organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
          excellence and provides a supportive environment for students to pursue their
           passions and achieve their goals";
         $college->admisstion_current_time = "Prospective students can apply online through the
          university website. Admission requirements vary by program, but all applicants are encouraged 
         to submit their transcripts, standardized test scores, and letters of recommendation.";
         $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
         to eligible students based on academic achievement, extracurricular involvement, and financial need.";
         $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
          to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
         $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
          living. The university also offers dining facilities, study lounges, and recreational amenities.";
         $college->thumbline = "college_thumbline/college8.jpg";
         $college->gallery = "college_gallery/college9.jpg";
         $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
         Career Center provides resources and support to students throughout their job search process.";
         $college->ranking_number = "4";
         $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
         graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
         $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
          graduate programs in a supportive and vibrant campus environment.";
          $college->publish = "1";
          $college->views = random_int(1, 5000);
         $college->save();
         $college->campuses()->attach([1,2,3,4,5]);
         $college->courses()->attach([1,2,3]);
         $college->countries()->attach([1]);

          //9
          $college = new College();
          $college->name = "Cedarwood College";
          $college->slug = "cedarwood-college";
          $college->type_of_college_id = "2";
          $college->summary = " Liberty University is a private Christian university located in Lynchburg, 
          Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate 
          and graduate programs.";
          $college->video_link = "https://www.youtube.com/watch?v=1234567890";
          $college->about_college = "Liberty University offers a vibrant campus life with numerous student 
          organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic
           excellence and provides a supportive environment for students to pursue their
            passions and achieve their goals";
          $college->admisstion_current_time = "Prospective students can apply online through the
           university website. Admission requirements vary by program, but all applicants are encouraged 
          to submit their transcripts, standardized test scores, and letters of recommendation.";
          $college->schollership = "Liberty University offers a range of scholarships and financial aid options 
          to eligible students based on academic achievement, extracurricular involvement, and financial need.";
          $college->faculty = "The faculty at Liberty University are experts in their respective fields and are dedicated
           to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.";
          $college->hostel = "On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style
           living. The university also offers dining facilities, study lounges, and recreational amenities.";
          $college->thumbline = "college_thumbline/college9.jpg";
          $college->gallery = "college_gallery/college1.jpg";
          $college->placement = "Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university's
          Career Center provides resources and support to students throughout their job search process.";
          $college->ranking_number = "9";
          $college->meta_keywords = "Liberty University, Christian university, undergraduate programs, 
          graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.";
          $college->meta_description = "Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and
           graduate programs in a supportive and vibrant campus environment.";
           $college->publish = "1";
           $college->views = random_int(1, 5000);
          $college->save();
          $college->campuses()->attach([1,2,3,4,5]);
          $college->courses()->attach([1,2,3]);
          $college->countries()->attach([1]);


    }
}