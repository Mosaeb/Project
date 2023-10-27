<?php


namespace App\classes;
use App\classes\Service;
use App\classes\Cv;
use App\classes\About;
use App\classes\Project;


class Home
{
    public $service,$services,$singleService,$cv,$cvs,$about,$abouts,$project,$projects;

    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        $this->service=new Service();
        $this->services=$this->service->getAllService();
        return view('home',['services'=>$this->services]);
    }
    public function detail($id)
    {
        if (isset($_SESSION['user_id']))
        {
            $this->service=new Service();
            $this->singleService=$this->service->getServiceById($id);
            return view('detail',['service'=>$this->singleService]);
        }
        else
        {
            header("Location: web.php?page=login");
        }

    }

    public function cv()
    {
        if (isset($_SESSION['user_id']))
        {
            $this->cv=new Cv();
            $this->cvs=$this->cv->getCvData();
            return view('cv',['cvs'=>$this->cvs]);
        }
        else
        {
            header("Location: web.php?page=login");
        }

    }

    public function about()
    {
        if (isset($_SESSION['user_id']))
        {
            $this->about=new About();
            $this->abouts=$this->about->getAllAbout();
            return view('about',['abouts'=>$this->abouts]);
        }
        else
        {
            header("Location: web.php?page=login");
        }

    }
    public function project()
    {
        if (isset($_SESSION['user_id']))
        {
            $this->project= new Project();
            $this->projects=$this->project->getAllProject();
            return view('project',['projects'=>$this->projects]);
        }
        else
        {
            header("Location: web.php?page=login");
        }

    }

    public function calculator()
    {
        if (isset($_SESSION['user_id']))
        {
            return view('calculator');
        }
        else
        {
            header("Location: web.php?page=login");
        }
    }

    public function login()
    {
       return view('login');
    }
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
       header("Location: web.php?page=home");
    }
}