<?php

namespace CategoryNameGenerator\Provider\en_US;

class Category extends \Faker\Provider\Base
{
    protected static $categoryNames = [
        'Tutorials and How-to Guides',
        'Latest Industry News',
        'Current Events',
        'Controversial Subjects',
        'Checklists: Do you have all that you need to ____?',
        'Listicles',
        'Infographics',
        'Case Studies',
        'Profiles',
        'Interviews',
        'Advice from the Experts',
        'Reviews',
        'Comparisons',
        'Video Blogs',
        'MP3s',
        'Resources',
        'Problem and Solutions',
        'Share What Others are Saying',
        'A Glance “Behind the Curtain”',
        'Inspirational Stories',
        'Parody Posts',
        'Funny Posts',
        'Quizzes',
        'Surveys and Polls',
        'Local News (Non-Business)',
        'Presentations and SlideShare',
        'Frequently Asked Questions (FAQs)',
        'Questions You Should be Asking',
        'Twitter Posts',
        'Contests',
        'Screencasts',
        'Time-Saving Posts (how to)',
        'Find Funny Videos for Blog Posts',
        'Conference Posts',
        'Event Summaries',
        'Top Take-Aways From Whatever',
        'Think Out Loud Posts',
        'Rants',
        'Pop-Culture Commentary',
        'Beginner’s Guides',
        '“Metrics to Measure” Guides',
        'Recent Tools You Use',
        'Free Giveaways',
        'Guest Bloggers',
        'Debates',
        'Transcript Posts',
        'Myth vs Fact',
        'Monthly Updates and Stats',
        'Preview Posts',
        'Answer “Why?”',
        'Search Twitter for Inspiration',
        'Cheatsheets',
        'Criticisms and Open Letters',
        'Share Recent Travel Experiences',
        'Gallery/Album Posts',
        'Auto-Biographical Post',
        'Share Recipes',
        'Curate or Summarize Someone Else’s Work.',
        'Holidays',
        'Thankful Posts',
        'Show Your Response to an Interesting Customer Question',
        'Create a Glossary',
        'Share Who is Important to Follow',
        'Best Sources of Inspiration',
        'Recount the History of Your Blog or Business',
        'Aspirations for Your Blog/Business',
        'Best Mobile Apps for your Industry',
        'Roundups',
        'Get thoughts from Newbies',
        'Memes',
        'Charity/Awareness posts',
        'Recycle Old Posts'
    ];

    protected static $professions = [
        'Accountant',
        'Teacher',
        'Technician',
        'Laborer',
        'Physical',
        'Commercial Banker',
        'Engineer',
        'Lawyer',
        'Psychologist',
        'Pharmacist',
        'Dietitian',
        'Research Analyst',
        'Midwife',
        'Mechanic',
        'Dentist',
        'Electrician',
        'Consultant',
        'Investment Banker',
        'Programmer'
    ];

    protected static $administrators = [       
        'Super Admin',
        'Admin',
        'Manager',
    ];



    /**
     * A random Category Name.
     * @return string
     */
    public function categoryName()
    {
        return static::randomElement(static::$categoryNames);
    }

    /**
     * A random Profession Name.
     * @return string
     */
    public function profession()
    {
        return static::randomElement(static::$professions);
    }

    /**
     * A random Administrator Profession Name.
     * @return string
     */
    public function administrator($index)
    {
        //return static::randomElement(static::$administrators);
        return $administrators[$index];
    }
}
