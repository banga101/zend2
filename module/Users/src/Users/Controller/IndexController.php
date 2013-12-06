<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05.12.13
 * Time: 16:26
 */
namespace Users\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction(){
        $view = new ViewModel();
        return $view;
    }
    public function registerAction(){
        $view = new ViewModel();
        $view ->setTemplate('users/index/new-user');
    }
    public function loginAction(){
        $view = new ViewModel();
        $view -> setTemplate('users/index/login');
    }
}