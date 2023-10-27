<?php


namespace App\classes;
use App\classes\User;

class Auth
{
    public $userName,$password,$user,$users,$status;
    public function __construct($post)
    {
        $this->userName=$post['user_name'];
        $this->password=$post['password'];
    }

    public function loginCheck()
    {
        $this->user=new User();
        $this->users=$this->user->getAllUser();
        $this->status='fail';

        foreach ($this->users as $user)
        {
            if ($user['user_name']==$this->userName && $user['password']==$this->password)
            {
                $this->status='success';
            }
        }
        if ($this->status=='success')
        {
            session_start();

            $_SESSION['user_id']=$user['id'];
            $_SESSION['user_name']=$user['name'];

            header("Location: web.php?page=home");
        }
        else
        {
            header("Location: web.php?page=login&&message=sorry.. Invalid username and password!!!");
        }
    }
}
