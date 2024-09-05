<?php

namespace Salad\Dressing\ImageBanner\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;

use Salad\Core\Application;
use Salad\Core\Database;
use Salad\Core\BaseComponent;
use App\Models\User;

class TwigExtension extends AbstractExtension
{

    private $App;
    private $db;
    protected $user;

    public function __construct()
    {
      $this->App = Application::$app;
      $this->db = new Database();
      $this->user = new User;
    }
    
    public function getFunctions(): array
    {
      return [
        new TwigFunction('get_image_banners', [$this, 'getImageBanners']),
      ];
    }


    public function getImageBanners()
    {
      return "test";
    }
    
}
