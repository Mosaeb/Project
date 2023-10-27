<?php


namespace App\classes;


class Service
{
    public $services=[];

    public function __construct()
    {
        $this->services=[
            0=>[
                'id'=>1,
                'name'=>'Ecommerce website',
                'description'=>'With an eCommerce website, you can provide customers with a seamless shopping experience, allowing them to effortlessly browse, select and purchase products that capture their interest. You can sell your own creations or dropship products from your online store. The best eCommerce websites make the buying experience as easy as possible by offering product pages with robust imagery, enticing product descriptions and multiple payment options for you to set up your own online marketplace.',
                'image'=>'assets/img/service/Ecommerce.jpg',
                'image1'=>'assets/img/detail/Ecommerce.webp'
            ],
            1=>[
                'id'=>2,
                'name'=>'Blog website',
                'description'=>'Starting a blog provides a platform to share written, visual and digital content about your interests. Once you’re up and running, you might even see opportunities for monetization, such as affiliate marketing, display advertising and selling ad space. You can also share directly from your blog to your social media platforms and accounts.',
                'image'=>'assets/img/service/blog.jpg',
                'image1'=>'assets/img/detail/blog.webp'
            ],
            2=>[
                'id'=>3,
                'name'=>'Portfolio website',
                'description'=>'If you’re a photographer,developer, artist or writer, a portfolio website can help you reach and impress potential employers or clients and act almost as your art resume. Portfolio websites typically include images, videos or clips that show off your best work. A portfolio website also allows you to establish your own personal branding, giving visitors a glimpse into your personality, interests and values.',
                'image'=>'assets/img/service/portfolio.jpg',
                'image1'=>'assets/img/detail/portfolio.webp'
            ],
            3=>[
                'id'=>4,
                'name'=>'Travel website',
                'description'=>'A travel website helps vacationers plan their dream trips. They provide information on attractions, accommodations and adventures in a specific city or town. They often include breathtaking photography and engaging videos that encourage visitors to book their trip.',
                'image'=>'assets/img/service/travel.jpg',
                'image1'=>'assets/img/detail/travel.webp'
            ],
            4=>[
                'id'=>5,
                'name'=>'Business website',
                'description'=>'Even if you don\'t plan on selling anything in an online store, a website is still helpful for establishing an online presence,  building your brand and advancing your entrepreneurship goals. When building a business website, whether for B2B or B2C, focus on the needs of your customers and explain how your company will solve their unique challenges. These law firm website examples show how a website can be used both to showcase your business and attract new clients.',
                'image'=>'assets/img/service/business.jpg',
                'image1'=>'assets/img/detail/businness.webp'
            ],
            5=>['id'=>6,
                'name'=>'Entertainment website',
                'description'=>'Entertainment websites are among the most highly visual and interactive types of websites, designed to evoke emotion and deliver high-quality digital experiences.',
                'image'=>'assets/img/service/entertainment.jpg',
                'image1'=>'assets/img/detail/entertainment.webp'
            ],
            6=>[
                'id'=>7,
                'name'=>'School website',
                'description'=>'These online resources aren’t just for primary schools and universities. School websites can also offer online teaching and information about businesses that teach things like music or foreign languages. An ideal school website design will serve as an online database for students, parents and faculty. You can also incorporate educational technology and provide online lessons or assignments for students. It’ll also encourage prospective students to enroll.',
                'image'=>'assets/img/service/school.jpg',
                'image1'=>'assets/img/detail/school.webp'
            ],
            7=>[
                'id'=>8,
                'name'=>'News and Magazine website',
                'description'=>'News and magazine websites offer visitors a wide range of informative and engaging content. These websites cover diverse topics such as current events, politics, business, entertainment and sports. Whether it\'s breaking news, in-depth features or expert analysis, news and magazine websites strive to deliver timely information to their audiences.',
                'image'=>'assets/img/service/news.jpg',
                'image1'=>'assets/img/detail/news.webp'
            ],
        ];
    }

    public function getAllService()
    {
        return $this->services;
    }
    public function getServiceById($id)
    {
        foreach ($this->services as $service)
        {
            if ($service['id']==$id)
            {
                return $service;
            }
        }
    }
}