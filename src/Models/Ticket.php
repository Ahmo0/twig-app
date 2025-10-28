<?php

namespace TicketManager\Models;

class Ticket
{
    public string $id;
    public string $title;
    public string $description;
    public string $status;
    public string $priority;
    public ?string $assignee;
    public string $createdBy;
    public string $createdAt;
    public string $updatedAt;
    public ?string $dueDate;
    public array $tags;

    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->status = $data['status'] ?? 'open';
        $this->priority = $data['priority'] ?? 'medium';
        $this->assignee = $data['assignee'] ?? null;
        $this->createdBy = $data['createdBy'] ?? '';
        $this->createdAt = $data['createdAt'] ?? date('c');
        $this->updatedAt = $data['updatedAt'] ?? date('c');
        $this->dueDate = $data['dueDate'] ?? null;
        $this->tags = $data['tags'] ?? [];
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'priority' => $this->priority,
            'assignee' => $this->assignee,
            'createdBy' => $this->createdBy,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'dueDate' => $this->dueDate,
            'tags' => $this->tags,
        ];
    }

    public static function findById(string $id): ?self
    {
        $tickets = self::getAllTickets();
        return $tickets[$id] ?? null;
    }

    public static function findAll(array $filters = []): array
    {
        $tickets = self::getAllTickets();
        
        if (empty($filters)) {
            return $tickets;
        }
        
        return array_filter($tickets, function($ticket) use ($filters) {
            if (!empty($filters['status']) && $ticket->status !== $filters['status']) {
                return false;
            }
            if (!empty($filters['priority']) && $ticket->priority !== $filters['priority']) {
                return false;
            }
            if (!empty($filters['assignee']) && $ticket->assignee !== $filters['assignee']) {
                return false;
            }
            return true;
        });
    }

    public function save(): bool
    {
        $tickets = self::getAllTickets();
        $this->updatedAt = date('c');
        $tickets[$this->id] = $this;
        return self::saveAllTickets($tickets);
    }

    public function delete(): bool
    {
        $tickets = self::getAllTickets();
        unset($tickets[$this->id]);
        return self::saveAllTickets($tickets);
    }

    public static function create(array $data): self
    {
        $ticket = new self($data);
        $ticket->id = uniqid();
        $ticket->createdAt = date('c');
        $ticket->updatedAt = date('c');
        return $ticket;
    }

    public function isOverdue(): bool
    {
        if (!$this->dueDate) {
            return false;
        }
        
        $dueDate = new \DateTime($this->dueDate);
        $now = new \DateTime();
        
        return $dueDate < $now && !in_array($this->status, ['resolved', 'closed']);
    }

    public function getStatusColor(): string
    {
        return match($this->status) {
            'open' => 'status-open',
            'in-progress' => 'status-in-progress',
            'resolved' => 'status-resolved',
            'closed' => 'status-closed',
            default => 'status-open',
        };
    }

    public function getPriorityColor(): string
    {
        return match($this->priority) {
            'high' => 'priority-high',
            'medium' => 'priority-medium',
            'low' => 'priority-low',
            default => 'priority-medium',
        };
    }

    private static function getAllTickets(): array
    {
        $file = __DIR__ . '/../../data/tickets.json';
        if (!file_exists($file)) {
            return self::getMockTickets();
        }
        
        $data = json_decode(file_get_contents($file), true);
        $tickets = [];
        
        foreach ($data as $id => $ticketData) {
            $tickets[$id] = new self($ticketData);
        }
        
        return $tickets;
    }

    private static function saveAllTickets(array $tickets): bool
    {
        $file = __DIR__ . '/../../data/tickets.json';
        $dir = dirname($file);
        
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        $data = [];
        foreach ($tickets as $id => $ticket) {
            $data[$id] = $ticket->toArray();
        }
        
        return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT)) !== false;
    }

    private static function getMockTickets(): array
    {
        $mockData = [
            [
                'id' => '1',
                'title' => 'Website Login Issue',
                'description' => 'Users are unable to log in to the website. Getting 500 error.',
                'status' => 'open',
                'priority' => 'high',
                'assignee' => 'John Doe',
                'createdBy' => 'admin',
                'createdAt' => '2024-01-15T10:30:00Z',
                'updatedAt' => '2024-01-15T10:30:00Z',
                'dueDate' => '2024-01-20T17:00:00Z',
                'tags' => ['bug', 'authentication'],
            ],
            [
                'id' => '2',
                'title' => 'Feature Request: Dark Mode',
                'description' => 'Add dark mode toggle to the application interface.',
                'status' => 'in-progress',
                'priority' => 'medium',
                'assignee' => 'Jane Smith',
                'createdBy' => 'user',
                'createdAt' => '2024-01-14T14:20:00Z',
                'updatedAt' => '2024-01-16T09:15:00Z',
                'dueDate' => '2024-01-25T17:00:00Z',
                'tags' => ['feature', 'ui'],
            ],
            [
                'id' => '3',
                'title' => 'Database Performance',
                'description' => 'Database queries are running slowly on the reports page.',
                'status' => 'resolved',
                'priority' => 'high',
                'assignee' => 'Mike Johnson',
                'createdBy' => 'admin',
                'createdAt' => '2024-01-10T08:45:00Z',
                'updatedAt' => '2024-01-16T16:30:00Z',
                'dueDate' => '2024-01-18T17:00:00Z',
                'tags' => ['performance', 'database'],
            ],
            [
                'id' => '4',
                'title' => 'Mobile Responsiveness',
                'description' => 'Fix mobile layout issues on the dashboard page.',
                'status' => 'closed',
                'priority' => 'medium',
                'assignee' => 'Sarah Wilson',
                'createdBy' => 'user',
                'createdAt' => '2024-01-08T11:15:00Z',
                'updatedAt' => '2024-01-12T14:20:00Z',
                'dueDate' => '2024-01-15T17:00:00Z',
                'tags' => ['mobile', 'responsive'],
            ],
        ];

        $tickets = [];
        foreach ($mockData as $data) {
            $tickets[$data['id']] = new self($data);
        }

        // Save mock data
        self::saveAllTickets($tickets);
        
        return $tickets;
    }
}
