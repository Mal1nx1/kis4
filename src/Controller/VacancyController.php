<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VacancyController extends AbstractController
{
    public function getVacancies ($companyId) {
        $vacancies = [
            [
                'id' => '8f6cf35x-2c4y-483z-a0a9-158621f77a21',
                'name' => 'Верстальщик',
                'description' => 'Нужен верстальщик',
                'minSalary' => 10000,
                'maxSalary' => 40000,
                'minExperience' => 1,
                'maxExperience' => 3,
                'companyId' => $companyId
            ],
            [
                'id' => '9f6cf35x-2c4y-483z-a0a9-158621f77a21',
                'name' => 'Прогер',
                'description' => 'Нужен прогер',
                'minSalary' => 10000,
                'maxSalary' => 40000,
                'minExperience' => 1,
                'maxExperience' => 3,
                'companyId' => $companyId
            ],
        ];
        return $this->json($vacancies);
    }

    public function getVacancy ($id) {
        $vacancy = [
            [
                'id' => $id,
                'name' => 'Верстальщик',
                'description' => 'Нужен верстальщик',
                'minSalary' => 10000,
                'maxSalary' => 40000,
                'minExperience' => 1,
                'maxExperience' => 3,
                'companyId' => '9f6cf35x-2c4y-483z-a0a9-158621f77a21'
            ]
        ];
        return $this->json($vacancy);
    }

    public function createVacancy () {
        return $this->json('Вакансия успешно создана');
    }

    public function updateVacancy ($id) {
        return $this->json('Вакансия с идентификатором '.$id.' успешно изменена');
    }

    public function deleteVacancy ($id) {
        return $this->json('Вакансия с идентификатором '.$id.' успешно удалена');
    }
}
