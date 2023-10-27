<?php


namespace App\classes;


class About
{
    public $abouts=[];

    public function __construct()
    {
        $this->abouts=[
            'about'=>'Hello there! I\'m MOSAEB BIN MOZIB, a dedicated Full Stack Web Developer based in  Bangladesh. With a passion for turning lines of code into functional, elegant websites, I\'ve embarked on a journey that marries the art of design with the science of development. Specializing in front-end and back-end technologies, I\'ve had the pleasure of crafting websites that not only look great but also perform seamlessly. From responsive user interfaces to dynamic server-side solutions, I\'ve worked on a diverse range of projects. My expertise includes PHP, Java,  JavaScript, Laravel, Veu.js  and I\'ve utilized these skills to bring various web projects to life. My mission is to create web experiences that align with your vision and captivate users. Explore my portfolio to see how I\'ve transformed concepts into digital reality, and let\'s collaborate to make your next web project a reality.',
            'image'=>'assets/img/profile3.jpg'
        ];
    }
    public function getAllAbout()
    {
        return $this->abouts;
    }
}