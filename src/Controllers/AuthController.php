<?php

namespace TicketManager\Controllers;

use TicketManager\Models\User;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends BaseController
{
    public function login(Request $request)
    {
        if ($request->getMethod() !== 'POST') {
            return $this->json(['error' => 'Method not allowed'], 405);
        }

        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $errors = $this->validateRequest($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        if (!empty($errors)) {
            return $this->json(['errors' => $errors], 400);
        }

        // Mock authentication
        if ($email === 'admin@ticketmanager.com' && $password === 'admin123') {
            $user = new User([
                'id' => '1',
                'email' => $email,
                'name' => 'Admin User',
                'role' => 'admin',
                'createdAt' => date('c'),
            ]);
        } elseif ($email === 'user@ticketmanager.com' && $password === 'user123') {
            $user = new User([
                'id' => '2',
                'email' => $email,
                'name' => 'Regular User',
                'role' => 'user',
                'createdAt' => date('c'),
            ]);
        } else {
            return $this->json(['error' => 'Invalid credentials'], 401);
        }

        $_SESSION['user'] = $user->toArray();
        
        return $this->json([
            'success' => true,
            'user' => $user->toArray(),
            'redirect' => '/dashboard'
        ]);
    }

    public function register(Request $request)
    {
        if ($request->getMethod() !== 'POST') {
            return $this->json(['error' => 'Method not allowed'], 405);
        }

        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $confirmPassword = $request->request->get('confirmPassword');

        $errors = $this->validateRequest($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        if ($password !== $confirmPassword) {
            $errors['confirmPassword'] = ['Passwords do not match'];
        }

        if (!empty($errors)) {
            return $this->json(['errors' => $errors], 400);
        }

        // Check if user already exists
        $existingUser = User::findByEmail($email);
        if ($existingUser) {
            return $this->json(['error' => 'User already exists'], 400);
        }

        // Create new user
        $user = User::create([
            'email' => $email,
            'name' => $name,
            'role' => 'user',
        ]);

        $user->save();
        $_SESSION['user'] = $user->toArray();

        return $this->json([
            'success' => true,
            'user' => $user->toArray(),
            'redirect' => '/dashboard'
        ]);
    }

    public function logout(Request $request)
    {
        session_destroy();
        return $this->json(['success' => true, 'redirect' => '/']);
    }
}
