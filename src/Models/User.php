<?php

namespace TicketManager\Models;

class User
{
    public string $id;
    public string $email;
    public string $name;
    public string $role;
    public string $createdAt;

    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->role = $data['role'] ?? 'user';
        $this->createdAt = $data['createdAt'] ?? date('c');
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'name' => $this->name,
            'role' => $this->role,
            'createdAt' => $this->createdAt,
        ];
    }

    public static function findById(string $id): ?self
    {
        $users = self::getAllUsers();
        return $users[$id] ?? null;
    }

    public static function findByEmail(string $email): ?self
    {
        $users = self::getAllUsers();
        foreach ($users as $user) {
            if ($user->email === $email) {
                return $user;
            }
        }
        return null;
    }

    public function save(): bool
    {
        $users = self::getAllUsers();
        $users[$this->id] = $this;
        return self::saveAllUsers($users);
    }

    public function delete(): bool
    {
        $users = self::getAllUsers();
        unset($users[$this->id]);
        return self::saveAllUsers($users);
    }

    private static function getAllUsers(): array
    {
        $file = __DIR__ . '/../../data/users.json';
        if (!file_exists($file)) {
            return [];
        }
        
        $data = json_decode(file_get_contents($file), true);
        $users = [];
        
        foreach ($data as $id => $userData) {
            $users[$id] = new self($userData);
        }
        
        return $users;
    }

    private static function saveAllUsers(array $users): bool
    {
        $file = __DIR__ . '/../../data/users.json';
        $dir = dirname($file);
        
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        $data = [];
        foreach ($users as $id => $user) {
            $data[$id] = $user->toArray();
        }
        
        return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT)) !== false;
    }

    public static function create(array $data): self
    {
        $user = new self($data);
        $user->id = uniqid();
        $user->createdAt = date('c');
        return $user;
    }
}
