<?php

namespace TicketManager;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Application
{
    private Router $router;
    private Environment $twig;
    private array $config;

    public function __construct()
    {
        $this->config = $this->loadConfig();
        $this->router = new Router();
        $this->twig = $this->setupTwig();
        $this->setupRoutes();
    }

    public function run(): void
    {
        $request = Request::createFromGlobals();
        $response = $this->handleRequest($request);
        $response->send();
    }

    private function handleRequest(Request $request): Response
    {
        try {
            $route = $this->router->match($request->getPathInfo());
            
            if (!$route) {
                return new Response('Not Found', 404);
            }

            $controller = $route['controller'];
            $action = $route['action'];
            $params = $route['params'] ?? [];

            if (!class_exists($controller)) {
                return new Response('Controller not found', 500);
            }

            $controllerInstance = new $controller($this->twig, $this->config);
            
            if (!method_exists($controllerInstance, $action)) {
                return new Response('Action not found', 500);
            }

            return $controllerInstance->$action($request, $params);

        } catch (\Exception $e) {
            error_log($e->getMessage());
            return new Response('Internal Server Error', 500);
        }
    }

    private function setupTwig(): Environment
    {
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        return new Environment($loader, [
            'cache' => __DIR__ . '/../var/cache',
            'debug' => $this->config['debug'] ?? false,
        ]);
    }

    private function setupRoutes(): void
    {
        // Landing page
        $this->router->addRoute('GET', '/', 'TicketManager\\Controllers\\LandingController', 'index');
        
        // Auth routes
        $this->router->addRoute('POST', '/auth/login', 'TicketManager\\Controllers\\AuthController', 'login');
        $this->router->addRoute('POST', '/auth/register', 'TicketManager\\Controllers\\AuthController', 'register');
        $this->router->addRoute('POST', '/auth/logout', 'TicketManager\\Controllers\\AuthController', 'logout');
        
        // Dashboard
        $this->router->addRoute('GET', '/dashboard', 'TicketManager\\Controllers\\DashboardController', 'index');
        
        // Ticket routes
        $this->router->addRoute('GET', '/api/tickets', 'TicketManager\\Controllers\\TicketController', 'index');
        $this->router->addRoute('POST', '/api/tickets', 'TicketManager\\Controllers\\TicketController', 'create');
        $this->router->addRoute('PUT', '/api/tickets/{id}', 'TicketManager\\Controllers\\TicketController', 'update');
        $this->router->addRoute('DELETE', '/api/tickets/{id}', 'TicketManager\\Controllers\\TicketController', 'delete');
        $this->router->addRoute('PATCH', '/api/tickets/{id}/status', 'TicketManager\\Controllers\\TicketController', 'updateStatus');
        
        // Analytics
        $this->router->addRoute('GET', '/api/analytics', 'TicketManager\\Controllers\\AnalyticsController', 'index');
    }

    private function loadConfig(): array
    {
        return [
            'debug' => $_ENV['APP_DEBUG'] ?? true,
            'app_name' => 'Ticket Manager',
            'app_version' => '1.0.0',
        ];
    }
}
