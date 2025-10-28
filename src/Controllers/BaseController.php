<?php

namespace TicketManager\Controllers;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class BaseController
{
    protected Environment $twig;
    protected array $config;

    public function __construct(Environment $twig, array $config)
    {
        $this->twig = $twig;
        $this->config = $config;
    }

    protected function render(string $template, array $data = []): Response
    {
        $data = array_merge($data, [
            'app_name' => $this->config['app_name'],
            'app_version' => $this->config['app_version'],
            'user' => $this->getCurrentUser(),
        ]);

        $content = $this->twig->render($template, $data);
        return new Response($content);
    }

    protected function json(array $data, int $status = 200): JsonResponse
    {
        return new JsonResponse($data, $status);
    }

    protected function redirect(string $url): Response
    {
        return new Response('', 302, ['Location' => $url]);
    }

    protected function isAuthenticated(): bool
    {
        return isset($_SESSION['user']) && !empty($_SESSION['user']);
    }

    protected function getCurrentUser(): ?array
    {
        return $_SESSION['user'] ?? null;
    }

    protected function requireAuth(): void
    {
        if (!$this->isAuthenticated()) {
            throw new \Exception('Authentication required');
        }
    }

    protected function validateCsrfToken(Request $request): bool
    {
        $token = $request->request->get('_token');
        $sessionToken = $_SESSION['_token'] ?? null;
        
        return $token && $sessionToken && hash_equals($sessionToken, $token);
    }

    protected function generateCsrfToken(): string
    {
        if (!isset($_SESSION['_token'])) {
            $_SESSION['_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['_token'];
    }

    protected function validateRequest(Request $request, array $rules): array
    {
        $errors = [];
        
        foreach ($rules as $field => $rule) {
            $value = $request->request->get($field);
            $fieldErrors = $this->validateField($value, $rule);
            
            if (!empty($fieldErrors)) {
                $errors[$field] = $fieldErrors;
            }
        }
        
        return $errors;
    }

    private function validateField($value, array $rules): array
    {
        $errors = [];
        
        foreach ($rules as $rule) {
            switch ($rule) {
                case 'required':
                    if (empty($value)) {
                        $errors[] = 'This field is required';
                    }
                    break;
                    
                case 'email':
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = 'Please enter a valid email address';
                    }
                    break;
                    
                case 'min:6':
                    if (strlen($value) < 6) {
                        $errors[] = 'This field must be at least 6 characters long';
                    }
                    break;
            }
        }
        
        return $errors;
    }
}
