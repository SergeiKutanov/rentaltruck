<?php

namespace SergeiK\VladAuto33Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SergeiK\VladAuto33Bundle\Entity\Car;
use SergeiK\VladAuto33Bundle\Form\CarType;
use SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('SergeiKVladAuto33Bundle:Admin:index.html.twig');
    }

    public function carslistAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository('SergeiKVladAuto33Bundle:Car')->findAll();
        return $this->render('SergeiKVladAuto33Bundle:Admin:carslist.html.twig', array(
            'cars'  => $cars
        ));
    }

    public function newcarAction()
    {
        $car = new Car();
        $form = $this->createForm(new CarType, $car);
        return $this->render('SergeiKVladAuto33Bundle:Admin:newcar.html.twig', array(
            'form'  => $form->createView()
        ));
    }

    public function createnewcarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $car = new Car();
        $form = $this->createForm(new CarType(), $car);
        $request = $this->getRequest();
        $form->bind($request);
        if($form->isValid())
        {
            $car->getPricesWithoutDriver()->setCar($car);
            $em->persist($car);
            $em->flush();
            die('valid');
        }
        die('not valid');
        return $this->redirect($this->generateUrl('admin_cars_list'));
    }

    public function editcarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository('SergeiKVladAuto33Bundle:Car')->findOneBy(array(
            'id'    => $id
        ));
        if(!$car)
        {
            $this->createNotFoundException("The car was not found!");
        }

        $form = $this->createForm(new CarType(), $car);

        return $this->render('SergeiKVladAuto33Bundle:Admin:newcar.html.twig', array(
            'form'  => $form->createView(),
            'id'    => $id
        ));
    }

    public function saveCarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository('SergeiKVladAuto33Bundle:Car')->findOneBy(array(
            'id'    => $id
        ));
        if(!$car)
        {
            $this->createNotFoundException("The car was not found");
        }

        $form = $this->createForm(new CarType(), $car);
        $form->bind($this->getRequest());
        if($form->isValid())
        {
            $em->persist($car);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('admin_cars_list'));
    }
}
