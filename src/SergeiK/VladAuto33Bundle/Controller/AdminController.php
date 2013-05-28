<?php

namespace SergeiK\VladAuto33Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SergeiK\VladAuto33Bundle\Entity\Car;
use SergeiK\VladAuto33Bundle\Form\CarType;
use SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver;
use SergeiK\VladAuto33Bundle\Entity\PricesWithDriver;
use SergeiK\VladAuto33Bundle\Entity\Photo;
use SergeiK\VladAuto33Bundle\Entity\Booking;
use SergeiK\VladAuto33Bundle\Form\BookingType;
use Doctrine\ORM\Query\Expr;

class AdminController extends Controller
{
    public function indexAction()
    {
        $booking = $this->getDoctrine()->getEntityManager()
                        ->getRepository('SergeiKVladAuto33Bundle:Booking')
                        ->getActiveBookings();
        return $this->render('SergeiKVladAuto33Bundle:Admin:index.html.twig', array(
            'booking'   => $booking,
            'archive'   => false
        ));
    }

    public function bookingArchiveAction()
    {
        $rp = $this->getDoctrine()->getEntityManager()->getRepository('SergeiKVladAuto33Bundle:Booking');
        $query = $rp->createQueryBuilder('b')
            ->orderBy('b.start_date', 'ASC')
            ->getQuery();
        $booking = $query->getResult();
        return $this->render('SergeiKVladAuto33Bundle:Admin:index.html.twig', array(
            'booking'   => $booking,
            'archive'   => true
        ));
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
            $car->getPricesWithDriver()->setCar($car);
            $car->getPricesForWedding()->setCar($car);
            $car->getAdditions()->setCar($car);

            //dealing with photos------------------------------------------
            foreach($car->getPhotos() as $photo)
            {
                $photo->setCar($car);
            }
            //-------------------------------------------------------------

            $em->persist($car);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('admin_cars_list'));
    }

    public function editcarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository('SergeiKVladAuto33Bundle:Car')->findOneBy(array(
            'id'    => $id
        ));
        $bookings = $em->getRepository('SergeiKVladAuto33Bundle:Car')->getBookings($id);
        if(!$car)
        {
            $this->createNotFoundException("The car was not found!");
        }

        $form = $this->createForm(new CarType(), $car);
        $delete_form = $this->createDeleteForm($id);

        return $this->render('SergeiKVladAuto33Bundle:Admin:newcar.html.twig', array(
            'form'          => $form->createView(),
            'id'            => $id,
            'car'           => $car,
            'delete_form'   => $delete_form->createView(),
            'bookings'      => $bookings
        ));
    }

    public function saveCarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $car = new Car();
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
            if($car->getPricesWithDriver()->getCar() == null)
            {
                $car->getPricesWithDriver()->setCar($car);
            }
            if($car->getPricesWithoutDriver()->getCar() == null)
            {
                $car->getPricesWithoutDriver()->setCat($car);
            }
            if($car->getPricesForWedding()->getCar() == null)
            {
                $car->getPricesForWedding()->setCar($car);
            }
            if($car->getAdditions()->getCar() == null)
            {
                $car->getAdditions()->setCar($car);
            }

            //dealing with photos--------------------------------------------------------
            foreach($car->getPhotos() as $photo)
            {
                if($photo->getCar() === null)
                {
                    $photo->setCar($car);
                }
                $em->persist($photo);
            }
            //---------------------------------------------------------------------------

            $em->persist($car);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('admin_cars_list'));
    }

    public function deleteCarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository('SergeiKVladAuto33Bundle:Car')->findOneBy(array(
            'id'    => $id
        ));

        if($car === null)
        {
            $this->createNotFoundException("Car was not found");
        }

        $em->remove($car);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_cars_list'));
    }

    public  function editBookingAction($id)
    {
        $booking = $this->getDoctrine()
            ->getManager()
            ->getRepository('SergeiKVladAuto33Bundle:Booking')
            ->findOneBy(array(
                'id'    => $id
        ));

        if(!$booking)
        {
            $this->createNotFoundException("Booking was not found");
        }


        $query = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('SergeiKVladAuto33Bundle:Car')
            ->createQueryBuilder('c')
            ->where('c.published = :pub')
            ->setParameter('pub', '1')
            ->orderBy('c.name', 'ASC')
            ->getQuery();
        $cars = $query->getResult();

        $form = $this->createForm(new BookingType(), $booking);
        $delete_form = $this->createDeleteForm($booking->getId());
        return $this->render('SergeiKVladAuto33Bundle:Admin:editBooking.html.twig', array(
            'form'  => $form->createView(),
            'booking'   => $booking,
            'cars'      => $cars,
            'delete_form'   => $delete_form->createView()
        ));
    }

    public function saveBookingAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $booking = $em->getRepository('SergeiKVladAuto33Bundle:Booking')->findOneBy(array(
            'id'    => $id
        ));
        if(!$booking)
        {
            $this->createNotFoundException("The booking was not found");
        }

        $form = $this->createForm(new BookingType(), $booking);
        $form->bindRequest($this->getRequest());
        if($form->isValid())
        {
            $active = $this->getRequest()->get('active');
            if($active)
            {
                $booking->setActive(true);
            }
            else
            {
                $booking->setActive(false);
            }

            $active = $this->getRequest()->get('checked');
            if($active)
            {
                $booking->setChecked(true);
            }
            else
            {
                $booking->setChecked(false);
            }
            $em->persist($booking);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('admin_index'));
    }

    public function deleteBookingAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $booking = $em->getRepository('SergeiKVladAuto33Bundle:Booking')->findOneBy(array(
            'id'    => $id
        ));
        if(!$booking)
        {
            $this->createNotFoundException("The booking was not found");
        }
        $em->remove($booking);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_index'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id'=>$id))
            ->add('id', 'hidden')
            ->getForm();
    }
}
