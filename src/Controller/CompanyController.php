<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyController extends AbstractController
{
    public function getCompanies () {
        $companies = [
          [
              'id' => '4f6cf35x-2c4y-483z-a0a9-158621f77a21',
              'name' => 'Яндекс',
              'description' => 'Огромная компания'
          ],
          [
              'id' => '5f6cf35x-2c4y-483z-a0a9-158621f77a21',
              'name' => 'Google',
              'description' => 'Huge company'
          ],
          [
              'id' => '6f6cf35x-2c4y-483z-a0a9-158621f77a21',
              'name' => 'Amazon',
              'description' => 'Big company'
          ]
        ];
        return $this->json($companies);
    }

    public function getCompany ($id) {
        $company = [
            [
                'id' => $id,
                'name' => 'Яндекс',
                'description' => 'Огромная компания'
            ]
        ];
        return $this->json($company);
    }

    public function createCompany () {
        return $this->json('Компания успешно создана');
    }

    public function updateCompany ($id) {
        return $this->json('Компания с идентификатором '.$id.' успешно изменена');
    }

    public function deleteCompany ($id) {
        return $this->json('Компания с идентификатором '.$id.' успешно удалена');
    }
}
