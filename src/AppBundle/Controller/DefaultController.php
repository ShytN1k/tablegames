<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }


    /**
     * @Route(
     *     "/{luckyNumber}",
     *     name="cheat_lucky_number",
     *     defaults={"luckyNumber": "36"},
     *     requirements={"luckyNumber":"[0-9]{1,2}"}
     * )
     * @Method("GET")
     */
    public function cheatLuckyNumberAction(Request $request, $luckyNumber)
    {
        return new Response(
            '<html><body>Lucky number: '.$luckyNumber.'</body></html>'
        );
    }
}
