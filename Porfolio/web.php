<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Calculator;
use App\classes\Auth;

$home=new Home();

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        $home->index();
    }
    elseif ($_GET['page']=='about')
    {
        $home->about();
    }
    elseif ($_GET['page']=='detail')
    {
        $home->detail($_GET['id']);
    }
    elseif ($_GET['page']=='cv')
    {
        $home->cv();
    }
    elseif ($_GET['page']=='project')
    {
        $home->project();
    }
    elseif ($_GET['page']=='calculator')
    {
        $home->calculator();
    }
    elseif ($_GET['page']=='login')
    {
        $home->login();
    }
    elseif ($_GET['page']=='logout')
    {
        $home->logout();
    }
}

elseif (isset($_POST['addition_btn']))
{
    $claculator=new Calculator($_POST);
    $claculator->getSub();
}
elseif (isset($_POST['subtraction_btn']))
{
    $claculator=new Calculator($_POST);
    $claculator->getSub();
}
elseif (isset($_POST['multiplication_btn']))
{
    $claculator=new Calculator($_POST);
    $claculator->getMulti();
}
elseif (isset($_POST['division_btn']))
{
    $claculator=new Calculator($_POST);
    $claculator->getDivided();
}
elseif (isset($_POST['login_btn']))
{
    $auth=new Auth($_POST);
    $auth->loginCheck();
}

