<?php

namespace TicketManager\Controllers;

use TicketManager\Models\Ticket;
use Symfony\Component\HttpFoundation\Request;

class TicketController extends BaseController
{
    public function index(Request $request)
    {
        $this->requireAuth();

        $filters = [
            'status' => $request->query->get('status', ''),
            'priority' => $request->query->get('priority', ''),
            'assignee' => $request->query->get('assignee', ''),
        ];

        $tickets = Ticket::findAll($filters);
        
        return $this->json([
            'success' => true,
            'tickets' => array_map(fn($ticket) => $ticket->toArray(), $tickets)
        ]);
    }

    public function create(Request $request)
    {
        $this->requireAuth();

        if ($request->getMethod() !== 'POST') {
            return $this->json(['error' => 'Method not allowed'], 405);
        }

        $errors = $this->validateRequest($request, [
            'title' => ['required'],
            'description' => ['required'],
            'priority' => ['required'],
        ]);

        if (!empty($errors)) {
            return $this->json(['errors' => $errors], 400);
        }

        $ticket = Ticket::create([
            'title' => $request->request->get('title'),
            'description' => $request->request->get('description'),
            'priority' => $request->request->get('priority'),
            'assignee' => $request->request->get('assignee'),
            'dueDate' => $request->request->get('dueDate'),
            'tags' => explode(',', $request->request->get('tags', '')),
            'createdBy' => $this->getCurrentUser()['id'],
        ]);

        $ticket->save();

        return $this->json([
            'success' => true,
            'ticket' => $ticket->toArray()
        ]);
    }

    public function update(Request $request, array $params)
    {
        $this->requireAuth();

        if ($request->getMethod() !== 'PUT') {
            return $this->json(['error' => 'Method not allowed'], 405);
        }

        $ticket = Ticket::findById($params['id']);
        if (!$ticket) {
            return $this->json(['error' => 'Ticket not found'], 404);
        }

        $ticket->title = $request->request->get('title', $ticket->title);
        $ticket->description = $request->request->get('description', $ticket->description);
        $ticket->priority = $request->request->get('priority', $ticket->priority);
        $ticket->assignee = $request->request->get('assignee', $ticket->assignee);
        $ticket->dueDate = $request->request->get('dueDate', $ticket->dueDate);
        $ticket->tags = explode(',', $request->request->get('tags', implode(',', $ticket->tags)));

        $ticket->save();

        return $this->json([
            'success' => true,
            'ticket' => $ticket->toArray()
        ]);
    }

    public function delete(Request $request, array $params)
    {
        $this->requireAuth();

        if ($request->getMethod() !== 'DELETE') {
            return $this->json(['error' => 'Method not allowed'], 405);
        }

        $ticket = Ticket::findById($params['id']);
        if (!$ticket) {
            return $this->json(['error' => 'Ticket not found'], 404);
        }

        $ticket->delete();

        return $this->json(['success' => true]);
    }

    public function updateStatus(Request $request, array $params)
    {
        $this->requireAuth();

        if ($request->getMethod() !== 'PATCH') {
            return $this->json(['error' => 'Method not allowed'], 405);
        }

        $ticket = Ticket::findById($params['id']);
        if (!$ticket) {
            return $this->json(['error' => 'Ticket not found'], 404);
        }

        $status = $request->request->get('status');
        $validStatuses = ['open', 'in-progress', 'resolved', 'closed'];
        
        if (!in_array($status, $validStatuses)) {
            return $this->json(['error' => 'Invalid status'], 400);
        }

        $ticket->status = $status;
        $ticket->save();

        return $this->json([
            'success' => true,
            'ticket' => $ticket->toArray()
        ]);
    }
}
