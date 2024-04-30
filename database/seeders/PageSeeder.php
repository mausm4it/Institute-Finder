<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $page = new Page();
        $page->title = "About Us";
        $page->slug = "about-us";
        $page->description = "**Welcome to CollegeConnect**

        At CollegeConnect, we understand that finding the right college can be a daunting task. With thousands of options worldwide, each offering unique programs, campuses, and cultures, the search process can feel overwhelming. That's where we come in.
        
        **Our Mission**
        
        Our mission at CollegeConnect is simple: to empower students and their families with the tools and information they need to make informed decisions about higher education. We strive to simplify the college search process, providing comprehensive listings, insightful guides, and personalized recommendations tailored to each student's interests and goals.
        
        **What We Offer**
        
        1. **Extensive College Database**: Our platform boasts an extensive database of colleges and universities from around the globe. Whether you're interested in Ivy League institutions, small liberal arts colleges, or international universities, we have you covered.
        
        2. **Detailed Profiles**: Each college in our database features a detailed profile, offering information on academic programs, campus life, admission requirements, financial aid options, and more. We believe in providing students with a holistic view of each institution to help them make well-informed decisions.
        
        3. **Customized Search Tools**: Our advanced search tools allow students to filter colleges based on their preferences, including location, major, campus size, and extracurricular offerings. Whether you're looking for a bustling urban campus or a quiet rural retreat, we'll help you find the perfect fit.
        
        4. **Expert Guidance**: Navigating the college admissions process can be complex, but you don't have to do it alone. Our team of experienced counselors and advisors is here to offer personalized guidance and support every step of the way. From selecting the right schools to crafting standout application essays, we're here to help you succeed.
        
        5. **Community and Resources**: Join our thriving community of students, parents, and educators to connect, share insights, and ask questions. Additionally, access our library of resources, including articles, blogs, and webinars covering topics ranging from test preparation to campus visits.
        
        **Get Started Today**
        
        Ready to embark on your college search journey? Visit CollegeConnect today to explore our comprehensive listings, access valuable resources, and connect with our team of experts. With CollegeConnect by your side, finding the perfect college has never been easier. Let's start your academic adventure together!";

        $page->meta_keywords = "college search, higher education, university listings, academic programs, campus life, admissions, financial aid, expert guidance";
        $page->meta_description = "Empowering students with comprehensive college listings, expert guidance, and personalized recommendations to simplify the college search process. Join us today!";
        
        $page->save();









        //terms and codition
        $page = new Page();
        $page->title = "Terms & Condition";
        $page->slug = "terms-and-condition";
        $page->description = "Certainly! Here's an example of terms and conditions for a college listing provider like CollegeConnect:

            ---
            
            **Terms and Conditions**
            
            Welcome to CollegeConnect! These terms and conditions outline the rules and regulations for the use of our website.
            
            By accessing this website, we assume you accept these terms and conditions. Do not continue to use CollegeConnect if you do not agree to all the terms and conditions stated on this page.
            
            **License to Use**
            
            Unless otherwise stated, CollegeConnect and/or its licensors own the intellectual property rights for all material on our website. All intellectual property rights are reserved. You may view and/or print pages from  for your own personal use, subject to restrictions set in these terms and conditions.
            
            **User Content**
            
            Our website allows you to post, link, store, share, and otherwise make available certain information, text, graphics, videos, or other material. You are responsible for the Content you post on CollegeConnect.
            
            By posting Content, you grant CollegeConnect a non-exclusive, worldwide, irrevocable, sub-licensable license to use, reproduce, adapt, publish, translate, and distribute it in any and all media.
            
            **Limitation of Liability**
            
            In no event shall CollegeConnect, nor any of its officers, directors, and employees, be held liable for anything arising out of or in any way connected with your use of this website, whether such liability is under contract, tort, or otherwise. CollegeConnect, including its officers, directors, and employees, shall not be held liable for any indirect, consequential, or special liability arising out of or in any way related to your use of this website.
            
            **Indemnification**
            
            You hereby indemnify to the fullest extent CollegeConnect from and against any and all liabilities, costs, demands, causes of action, damages, and expenses (including reasonable attorney’s fees) arising out of or in any way related to your breach of any of the provisions of these terms.
            
            **Termination**
            
            We may terminate or suspend access to our website immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the terms.
            
            **Governing Law**
            
            These terms will be governed by and construed in accordance with the laws of [Your Country], and you submit to the non-exclusive jurisdiction of the state and federal courts located in [Your Country] for the resolution of any disputes.
            
            **Changes to This Agreement**
            
            We reserve the right to modify these terms and conditions at any time. Your continued use of the site after any such changes constitutes your acceptance of the new terms and conditions. 
            
            If you have any questions about these Terms and Conditions, please contact us.
            
            ---
            
            Remember, it's crucial to adapt these terms to comply with your jurisdiction's laws and the specific nature of your service. It's also advisable to have a legal professional review them to ensure they meet your needs and are enforceable.";

        $page->meta_keywords = "college search, higher education, university listings, academic programs, campus life, admissions, financial aid, expert guidance";
        $page->meta_description = "Empowering students with comprehensive college listings, expert guidance, and personalized recommendations to simplify the college search process. Join us today!";
        
        $page->save();




        //Advertise With Us

        $page = new Page();
        $page->title = "Advertise With Us";
        $page->slug = "advertise-with-us";
        $page->description = "**Advertise With CollegeConnect**

        Are you looking to reach a diverse audience of students, parents, and educators interested in higher education? Partner with CollegeConnect and showcase your brand to our engaged community!
        
        **Why Advertise With Us?**
        
        1. **Targeted Audience**: Our platform attracts students and parents actively searching for college information, making it an ideal space to promote your products or services related to education, test preparation, financial aid, and more.
        
        2. **Brand Visibility**: Gain exposure to a broad audience of prospective students and their families. With our extensive reach and user-friendly interface, your brand will stand out among competitors.
        
        3. **Customized Solutions**: We offer flexible advertising solutions tailored to your specific needs and budget. Whether you're interested in banner ads, sponsored content, or targeted email campaigns, we'll work with you to create a strategy that delivers results.
        
        4. **Measurable Results**: Track the performance of your campaigns with detailed analytics and reporting. Monitor impressions, clicks, and conversions in real-time to optimize your advertising efforts and maximize ROI.
        
        **How to Advertise**
        
        Partnering with CollegeConnect is easy! Simply reach out to our advertising team to discuss your goals and explore available opportunities. Whether you're looking to raise brand awareness, drive traffic to your website, or generate leads, we'll help you craft a customized advertising strategy that meets your objectives.
        
        **Get Started Today**
        
        Don't miss out on the opportunity to connect with our engaged audience of students, parents, and educators. Contact us now to learn more about our advertising options and start reaching your target market with CollegeConnect!
        
        *Email: example@collegeconnect.com*
        
        *Phone: +0000000000*
        
        Join the CollegeConnect advertising network and take your brand to new heights!";
        $page->meta_keywords = "college search, higher education, university listings, academic programs, campus life, admissions, financial aid, expert guidance";
        $page->meta_description = "Empowering students with comprehensive college listings, expert guidance, and personalized recommendations to simplify the college search process. Join us today!";
        
        $page->save();

    }
}