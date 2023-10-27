<?php


namespace App\classes;


class Cv
{
    public $cvDatas=[];
    public function __construct()
    {
        $this->cvDatas=[
            'image'=>'assets/img/profile2.jpg',
            'name'=>'Mosaeb Bin Mozib',
            'address'=>'Block-B,Lutfur Rahman <br/>Sarak,Nuthullabad,Barisal',
            'email'=>'mosaeb598@gmail.com',
            'mobile'=>'01302692330',

            'language'=>'Fluent in English and Bangla',

            'hobbies1'=>'Travelling',
            'hobbies2'=>'Playing Cricket',
            'hobbies3'=>'Swimming',
            'hobbies4'=>'Hangout with Family and Friends',

            'programming'=>'C++,Python,Java,PHP,JavaScript',
            'database'=>'MySQL, PL/SQL',
            'framework'=>'Laravel,Bootstrap,Veu.js',
            'dev_tools'=>'VSCode,GitHub,PhpStorme',
            'ms_office'=>'MS word, MS Excel,PowerPoint',

            'Objectives'=>'To pursue a job opportunity in a competitive environment that will challenge me to push my boundaries and expand my knowledge in the field of computer science and also in other domains while allowing me to add value to the dynamics of the company.',

            'company'=>'American International University Bangladesh.',
            'post'=>'Teaching Assistant',
            'description'=>'Teaching assistant for "Web Technologies" course in the summer 2021-22. The main Responsibility was to assist the students with their lab task and additionally to assist the course teacher to prepare course materials.',

            'university'=>'American International University Bangladesh, Dhaka',
            'cgpa'=>'3.26',
            'passed1'=>'2023',

            'college'=>'Govt Syed Hatem Ali College, Barishal',
            'gpa1'=>'4.58',
            'group1'=>'Science',
            'passed2'=>'2017',

            'school'=>'Barishal Zilla School,Barishal',
            'gpa2'=>'5.00',
            'group2'=>'Science',
            'passed3'=>'2015',

            't_name1'=>'Sifat Rahman Ahona',
            't_name2'=>'Md. Al-Amin',
            't_versity_name'=>'American International University Bangladesh',
            't_designation1'=>'Assistant Professor, Computer Science',
            't_designation2'=>'Lecturer, Computer Science',
            't_email1'=>'ahona@aiub.edu',
            't_email2'=>'alamin@aiub.edu',
            't_address'=>'408/1, Kuratorli, Khilkhet, Dhaka 1229'
        ];
    }
    public function getCvData()
    {
        return $this->cvDatas;
    }
}