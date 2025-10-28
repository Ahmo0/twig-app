<?php

namespace TicketManager\Controllers;

use Symfony\Component\HttpFoundation\Request;

class LandingController extends BaseController
{
    public function index(Request $request)
    {
        $data = [
            'csrf_token' => $this->generateCsrfToken(),
            'features' => $this->getFeatures(),
            'stats' => $this->getStats(),
        ];

        return $this->render('landing.html.twig', $data);
    }

    private function getFeatures(): array
    {
        return [
            [
                'icon' => 'ticket',
                'title' => 'Smart Ticket Management',
                'description' => 'Organize and track all your support tickets in one place with intelligent categorization and prioritization.'
            ],
            [
                'icon' => 'bar-chart',
                'title' => 'Advanced Analytics',
                'description' => 'Get insights into your support performance with detailed analytics and reporting dashboards.'
            ],
            [
                'icon' => 'shield',
                'title' => 'Secure & Reliable',
                'description' => 'Enterprise-grade security with 99.9% uptime guarantee and data encryption at rest and in transit.'
            ],
            [
                'icon' => 'zap',
                'title' => 'Lightning Fast',
                'description' => 'Built for speed with modern architecture and optimized performance for handling thousands of tickets.'
            ],
            [
                'icon' => 'users',
                'title' => 'Team Collaboration',
                'description' => 'Work together seamlessly with real-time updates, comments, and assignment management.'
            ],
            [
                'icon' => 'check-circle',
                'title' => 'Automated Workflows',
                'description' => 'Streamline your processes with automated ticket routing, status updates, and notifications.'
            ]
        ];
    }

    private function getStats(): array
    {
        return [
            ['number' => '10K+', 'label' => 'Tickets Resolved'],
            ['number' => '99.9%', 'label' => 'Uptime'],
            ['number' => '50+', 'label' => 'Happy Customers'],
            ['number' => '24/7', 'label' => 'Support']
        ];
    }
}
