<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function getUsers () {
        $users = [
            [
                'id' => '4f6cf35x-2c4y-483z-a0a9-158621f77a21',
                'name' => 'Иван',
                'phoneNumber' => '+7777777777',
                'email' => 'example@example.com'
            ],
            [
                'id' => '5f6cf35x-2c4y-483z-a0a9-158621f77a21',
                'name' => 'Федор',
                'phoneNumber' => '+7777777778',
                'email' => 'example2@example.com'
            ],
            [
                'id' => '6f6cf35x-2c4y-483z-a0a9-158621f77a21',
                'name' => 'Степан',
                'phoneNumber' => '+7777777779',
                'email' => 'example3@example.com'
            ]
        ];
        return $this->json($users);
    }

    public function getUsero ($id) {
        $user = [
            'id' => $id,
            'name' => 'Иван',
            'phoneNumber' => '+7777777777',
            'email' => 'example@example.com'
        ];
        return $this->json($user);
    }

    public function createUser () {
        return $this->json('Пользователь успешно создан');
    }

    public function putUser ($id) {
        return $this->json('Пользователь с идентификатором '.$id.' успешно изменен');
    }

    public function deleteUser ($id) {
        return $this->json('Пользователь с идентификатором '.$id.' успешно удален');
    }
}
