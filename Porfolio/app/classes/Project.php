<?php


namespace App\classes;


class Project
{
    public $projects=[];
    public function __construct()
    {
        $this->projects=[
            'p_name1'=>'Object oriented Programming with Java',
            'p_name2'=>'Web Technologies',
            'p_name3'=>'Advanced DataBase Management System',
            'p_name4'=>'Telecommunication Engineering',
            'p_name5'=>'Machine Learning',

            'p_title1'=>'Student Management System',
            'p_title2'=>'Etickets Management System',
            'p_title3'=>'Blood-Bank Management System',
            'p_title4'=>'Microwave link budget between two planes',
            'p_title5'=>'Precdictiong Data Scientist\'s Salary with KNN,SVM and NBC method',

            'p_description1'=>'It\'s a Student Management System application which was built for my Java Project.',
            'p_description2'=>'It\'s a Etickets Management System application which was built for my web tenologies course.',
            'p_description3'=>'It\'s a Blood-Bank Management System application which was built for my ADMS Course.',
            'p_description4'=>'It\'s a Microwave link budget between two planes application which was built for my Telecomminucation Engineering Course.',
            'p_description5'=>'It\'s a Final term project for research purpose python(KNN) which was built for my Machine learningCourse.',
        ];
    }
    public function getAllProject()
    {
        return $this->projects;
    }
}