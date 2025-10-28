<?php

namespace TicketManager\Controllers;

use TicketManager\Models\Ticket;
use Symfony\Component\HttpFoundation\Request;

class AnalyticsController extends BaseController
{
    public function index(Request $request)
    {
        $this->requireAuth();

        $tickets = Ticket::findAll();
        $analytics = $this->calculateAnalytics($tickets);

        return $this->json([
            'success' => true,
            'analytics' => $analytics
        ]);
    }

    private function calculateAnalytics(array $tickets): array
    {
        $now = new \DateTime();
        $overdueCount = 0;

        foreach ($tickets as $ticket) {
            if ($ticket->isOverdue()) {
                $overdueCount++;
            }
        }

        return [
            'totalTickets' => count($tickets),
            'openTickets' => count(array_filter($tickets, fn($t) => $t->status === 'open')),
            'inProgressTickets' => count(array_filter($tickets, fn($t) => $t->status === 'in-progress')),
            'resolvedTickets' => count(array_filter($tickets, fn($t) => $t->status === 'resolved')),
            'closedTickets' => count(array_filter($tickets, fn($t) => $t->status === 'closed')),
            'highPriorityTickets' => count(array_filter($tickets, fn($t) => $t->priority === 'high')),
            'overdueTickets' => $overdueCount,
        ];
    }
}
