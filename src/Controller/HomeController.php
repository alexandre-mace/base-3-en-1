<?php

namespace App\Controller;

use App\Repository\BaseEntityRepository;
use App\Repository\SiteHistoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(
        BaseEntityRepository $baseEntityRepository,
        SiteHistoryRepository $siteHistoryRepository
    )
    {
        $baseEntities = $baseEntityRepository->findAll();
        $siteHistory = $siteHistoryRepository->findAll() ? $siteHistoryRepository->findAll()[0] : null;

        return $this->render('home/index.html.twig', [
            'baseEntities' => array_reverse($baseEntities),
            'siteHistory' => $siteHistory
        ]);
    }
}
