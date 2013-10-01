<?php

namespace SergeiK\VladAuto33Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SergeiK\VladAuto33Bundle\Form\BookingType;
use SergeiK\VladAuto33Bundle\Entity\Booking;
use Doctrine\ORM\EntityRepository;

class PublicController extends Controller
{
    /*
     * index page routing
     */
    public function indexAction()
    {
        $booking = new Booking();

        //$this->getRequest()->setLocale("ru");

        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository("SergeiKVladAuto33Bundle:Car")->findBy(
            array(
                "published" => 1
            ), null, 4
        );

        $news = $em->getRepository("SergeiKVladAuto33Bundle:News")->findBy(
            array(
                "publish" => 1
            ), null, 4
        );

        $form = $this->createForm(new BookingType(), $booking);
        return $this->render("SergeiKVladAuto33Bundle:Public:index.html.twig", array(
            'form'  => $form->createView(),
            'cars'  => $cars,
            'news'  => $news
        ));
    }

    /*
     * no dirver article
     */
    public function nodriverAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:nodriver.html.twig");
    }

    /*
     * with driver article
     */

    public function withdriverAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:withdriver.html.twig");
    }

    /*
     * cars article
     */
    public function carsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository('SergeiKVladAuto33Bundle:Car')->findBy(array(
            'published' => 1
        ));
        return $this->render("SergeiKVladAuto33Bundle:Public:cars.html.twig", array(
            'cars'  => $cars
        ));
    }

    /*
     * procession article
     */
    public function processionAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:procession.html.twig");
    }

    /*
     * rent conditions article
     */
    public function conditionsAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:conditions.html.twig");
    }

    /*
     * contacts article
     */
    public function contactsAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:contacts.html.twig");
    }

    /*
     * show one car
     */
    public function showCarAction($id)
    {        
		$em = $this->getDoctrine()->getManager();
        $car = $em->getRepository('SergeiKVladAuto33Bundle:Car')->findOneBy(array(
            'id'        => $id,
            'published' => 1
        ));

        if($car === null)
        {
            throw $this->createNotFoundException("Car was not found");
        }

        return $this->render("SergeiKVladAuto33Bundle:Public:showCar.html.twig", array(
            'car'   => $car
        ));
    }

    public function bookingAction()
    {
        $booking = new Booking();
        $form = $this->createForm(new BookingType(), $booking);
        $form->bind($this->getRequest());

        if(!$form->isValid())
        {
            $rp = $this->getDoctrine()->getEntityManager()->getRepository('SergeiKVladAuto33Bundle:Car');
            $query = $rp->createQueryBuilder('c')
                ->where('c.published = :pub')
                ->setParameter('pub', '1')
                ->orderBy('c.name', 'ASC')
                ->getQuery();
            $cars = $query->getResult();

            return $this->render("SergeiKVladAuto33Bundle:Public:booking.html.twig", array(
                'form'      => $form->createView(),
                'cars'      => $cars
            ));
        }
        else
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);
            $em->flush();

            
            $msg = \Swift_Message::newInstance()
                ->setSubject("Car reservation")
                ->setFrom('avangardauto33@gmail.com')
                ->setTo('sergeikutanov@gmail.com')
                ->setBody($this->renderView('SergeiKVladAuto33Bundle:Public:reservation_email.html.twig', array(
                    'booking'   => $booking
            )));
            $this->get('mailer')->send($msg);

            return $this->render("SergeiKVladAuto33Bundle:Public:booking_confirmation.html.twig", array(
                'booking'   => $booking
            ));
        }
    }
}
