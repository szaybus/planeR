<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScheduleController extends Controller
{
    /**
     * @Route("/schedule", name="schedule")
     */
    public function index()
    {
        return $this->render('schedule/index.html.twig', [
            'controller_name' => 'ScheduleController',
        ]);
    }
}
