<?php

namespace SergeiK\VladAuto33Bundle\Controller;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SergeiK\VladAuto33Bundle\Entity\Rent;
use SergeiK\VladAuto33Bundle\Form\RentType;

/**
 * Rent controller.
 *
 * @Route("/rent")
 */
class RentController extends Controller
{

    /**
     * Lists all Rent entities.
     *
     * @Route("/", name="rent")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SergeiKVladAuto33Bundle:Rent')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Rent entity.
     *
     * @Route("/", name="rent_create")
     * @Method("POST")
     * @Template("SergeiKVladAuto33Bundle:Rent:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Rent();
        $form = $this->createForm(new RentType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rent_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Rent entity.
     *
     * @Route("/new", name="rent_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Rent();
        $form   = $this->createForm(new RentType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Rent entity.
     *
     * @Route("/{id}", name="rent_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SergeiKVladAuto33Bundle:Rent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Rent entity.
     *
     * @Route("/{id}/edit", name="rent_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SergeiKVladAuto33Bundle:Rent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rent entity.');
        }

        $editForm = $this->createForm(new RentType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Rent entity.
     *
     * @Route("/{id}", name="rent_update")
     * @Method("PUT")
     * @Template("SergeiKVladAuto33Bundle:Rent:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SergeiKVladAuto33Bundle:Rent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RentType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rent_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Rent entity.
     *
     * @Route("/{id}", name="rent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SergeiKVladAuto33Bundle:Rent')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rent entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rent'));
    }

    /**
     * Creates a form to delete a Rent entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    /**
     * generates PDF doc
     * @Route("/{id}/print", name="print")
     * @Method("GET")
     * @Template()
     */
    public function printAction($id){
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SergeiKVladAuto33Bundle:Rent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rent entity.');
        }

        require_once('fpdf.php');
        require_once('fpdi.php');

        try{
            $pdf = new \FPDI();
            $pdf->AddPage();
            $pdf->setSourceFile("docs/dog.pdf");
            $tplidx = $pdf->importPage(1);
            $pdf->useTemplate($tplidx, 10, 10, 200);

            $pdf->SetFont('Arial');
            $pdf->SetTextColor(0,0,0);
            $pdf->SetFontSize(8);
            $pdf->SetXY(50, 124);
            $pdf->Write(1, "Ajay Patel");
            $pdf->Output("test.pdf", "D");
        }catch(Exception $ex){
            die('error');
        }

        die("ok");
    }
}
