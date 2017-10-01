<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\HelloBundle\Entity\Faces;
use Acme\HelloBundle\Entity\Kids;
use Acme\HelloBundle\Form\Faces\FacesType;
use Acme\HelloBundle\Form\Kids\KidsType;
use Doctrine\DBAL\Query\QueryBuilder;

class ReportsController extends Controller{
    
    //Отчеты
    public function reportsAction(){
        
        //Отчет по сотрудникам
        $faces = $this->getDoctrine()
            ->getRepository('AcmeHelloBundle:Faces')
            ->findFacesOver();
        
        //Отчет по количеству детей у сотрудников
        $kids = $this->getDoctrine()
            ->getRepository('AcmeHelloBundle:Kids')
            ->findKidsOver();
        
        return $this->render('AcmeHelloBundle:Reports:reports.html.twig', [
            'faces' => $faces,
            'kids' => $kids,
        ]);
    }
    
}

