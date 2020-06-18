<?php

namespace App\Controller;

use App\Entity\SiteHistory;
use App\Repository\BaseEntityRepository;
use App\Repository\SiteHistoryRepository;
use App\Repository\SiteLoadingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(
        BaseEntityRepository $baseEntityRepository,
        SiteHistoryRepository $siteHistoryRepository,
        SiteLoadingRepository $siteLoadingRepository
    )
    {
        $baseEntities = $baseEntityRepository->findAll();
        $siteHistory = $siteHistoryRepository->findAll()[0];
        $siteLoading = $siteLoadingRepository->findAll()[0];

        return $this->render('home/index.html.twig', [
            'baseEntities' => $baseEntities,
            'siteHistory' => $siteHistory,
            'siteLoading' => $siteLoading,
        ]);
    }
}
