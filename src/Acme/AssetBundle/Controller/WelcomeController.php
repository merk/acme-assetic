<?php
/**
 * Created by Amal Raghav <amal.raghav@gmail.com>
 * Date: 01/05/11
 */

namespace Acme\AssetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @extra:Route("/", name="_welcome")
     * @extra:Template
     */
    public function indexAction()
    {
        return array();
    }
}
