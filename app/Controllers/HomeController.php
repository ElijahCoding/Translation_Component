<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class HomeController extends Controller
{
    public function index(Request $request, Response $response, $args)
    {
        dump($this->c->translator->trans('headers.welcome'));

        return $this->c->view->render($response, 'home/index.twig', [
            'appName' => $this->c->settings['app']['name'],
        ]);
    }
}
