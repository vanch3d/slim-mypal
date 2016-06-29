<?php
namespace App\Action;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeAction
{
    private $view;
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");

        $route = $request->getAttribute('route');
        $name = $route->getName();
        $this->view->render($response, 'home.twig',array('route' => $name));
        return $response;
    }

    public function showUserOSCE(Request $request, Response $response, $args)
    {
        $this->logger->info("OSCE page action dispatched");

        $route = $request->getAttribute('route');
        $name = $route->getName();
        $this->view->render($response, 'osce-user.twig',array('route' => $name));
        return $response;
    }

    public function showCohortOSCE(Request $request, Response $response, $args)
    {
        $this->logger->info("OSCE page action dispatched");

        $route = $request->getAttribute('route');
        $name = $route->getName();
        $this->view->render($response, 'osce-cohort.twig',array('route' => $name));
        return $response;
    }

}
