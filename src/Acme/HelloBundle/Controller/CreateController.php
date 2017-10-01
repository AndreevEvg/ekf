<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\HelloBundle\Entity\Faces;
use Acme\HelloBundle\Entity\Kids;
use Acme\HelloBundle\Form\Faces\FacesType;
use Acme\HelloBundle\Form\Kids\KidsType;

class CreateController extends Controller{
    
    public function indexAction(){


        return $this->render('AcmeHelloBundle:Create:index.html.twig');
    }
    
    //Создать запись сотрудников
    public function createRecordFacesAction(Request $request){
        
        $faces = new Faces();     
        
        $form = $this->createForm(new FacesType(), $faces);
        
        if ($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($faces);
                $em->flush();

                return $this->redirect($this->generateUrl('create_faces'));
            }
        }
        
        return $this->render('AcmeHelloBundle:Create:createRecordFaces.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    //Создать запись детей
    public function createRecordKidsAction(Request $request){
        
        $kids = new Kids();     
        
        $form = $this->createForm(new KidsType(), $kids);
        
        if ($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($kids);
                $em->flush();

                return $this->redirect($this->generateUrl('create_kids'));
            }
        }
        
        return $this->render('AcmeHelloBundle:Create:createRecordKids.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}