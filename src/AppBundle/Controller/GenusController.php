<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 8/13/2016
 * Time: 7:42 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response("Under the Sea!");
    }
}