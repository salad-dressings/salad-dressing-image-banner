<?php
namespace Salad\Dressing\ImageBanner\Controllers;

use Salad\Core\Application;
use Salad\Core\Controller;
use Salad\Core\View;

class ImageBannerController extends Controller
{
    protected $App;
    protected $view;

    public function __construct()
    {
        parent::__construct();   
        $this->App = Application::$app;
        $this->view = new View;
        $this->view->addViewPath( __DIR__ .'/../Views');

    }
    
    public function index()
    {
        $css = __DIR__ . '/../Styles/style.css';
        $this->view->render('base_image_banner', ["style" => $css]);
    }
    
}
