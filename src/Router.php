<?php

namespace TicketManager;

use Symfony\Component\HttpFoundation\Request;

class Router
{
    private array $routes = [];

    public function addRoute(string $method, string $path, string $controller, string $action, array $params = []): void
    {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'controller' => $controller,
            'action' => $action,
            'params' => $params,
        ];
    }

    public function match(string $pathInfo): ?array
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        
        foreach ($this->routes as $route) {
            if ($route['method'] !== $requestMethod) {
                continue;
            }

            $pattern = $this->convertToRegex($route['path']);
            
            if (preg_match($pattern, $pathInfo, $matches)) {
                array_shift($matches); // Remove full match
                
                $params = [];
                $paramNames = $this->extractParamNames($route['path']);
                
                foreach ($paramNames as $index => $name) {
                    if (isset($matches[$index])) {
                        $params[$name] = $matches[$index];
                    }
                }

                return [
                    'controller' => $route['controller'],
                    'action' => $route['action'],
                    'params' => $params,
                ];
            }
        }

        return null;
    }

    private function convertToRegex(string $path): string
    {
        // Convert {param} to named capture groups
        $pattern = preg_replace('/\{([^}]+)\}/', '([^/]+)', $path);
        return '#^' . $pattern . '$#';
    }

    private function extractParamNames(string $path): array
    {
        preg_match_all('/\{([^}]+)\}/', $path, $matches);
        return $matches[1] ?? [];
    }
}
