<?php

namespace BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackendBundle\Entity\Ligas;
use BackendBundle\Form\LigasType;

/**
 * Ligas controller.
 *
 * @Route("/ligas")
 */
class LigasController extends Controller {

    /**
     * Lists all Ligas entities.
     *
     * @Route("/", name="ligas_index")
     * @Method("GET")
     */
    public function indexAction() {
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            throw $this->createAccessDeniedException("You don't have access to this page!");
        }
        $em = $this->getDoctrine()->getManager();
        $ligas = $em->getRepository('BackendBundle:Ligas')->findAll();

        return $this->render('ligas/index.html.twig', array(
                    'ligas' => $ligas,
        ));
    }

    /**
     * Creates a new Ligas entity.
     *
     * @Route("/new", name="ligas_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            throw $this->createAccessDeniedException("You don't have access to this page!");
        }

        $porciones = explode("-", $request->request->get('datefilter'));
        $liga = new Ligas();
        $form = $this->createForm('BackendBundle\Form\LigasType', $liga);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $liga->setInicio(new \DateTime(trim($porciones[0])));
            $liga->setFin(new \DateTime(trim($porciones[1])));

            $em = $this->getDoctrine()->getManager();
            $em->persist($liga);
            $em->flush();

            return $this->redirectToRoute('ligas_show', array('id' => $liga->getId()));
        }

        return $this->render('ligas/new.html.twig', array(
                    'liga' => $liga,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ligas entity.
     *
     * @Route("/{id}", name="ligas_show")
     * @Method("GET")
     */
    public function showAction(Ligas $liga) {
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            throw $this->createAccessDeniedException("You don't have access to this page!");
        }
        $deleteForm = $this->createDeleteForm($liga);
            
        return $this->render('ligas/show.html.twig', array(
                    'liga' => $liga,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ligas entity.
     *
     * @Route("/{id}/edit", name="ligas_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ligas $liga) {
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            throw $this->createAccessDeniedException("You don't have access to this page!");
        }

        $deleteForm = $this->createDeleteForm($liga);
        $editForm = $this->createForm('BackendBundle\Form\LigasType', $liga);
        $editForm->handleRequest($request);

        //Si va a editar armamos la variable periodo para mostarlo en la vista         
        $periodo = ($liga->getInicio()->format("m/d/Y")) . "-" . ($liga->getFin()->format("m/d/Y"));

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            //dump($liga); die;
            //Si vamos a almacenar en la BD tratamos a porciones y las asignamos  a las respectivas fechas
            $porciones = explode("-", $request->request->get('datefilter'));
            $liga->setInicio(new \DateTime(trim($porciones[0])));
            $liga->setFin(new \DateTime(trim($porciones[1])));

            $em = $this->getDoctrine()->getManager();
            $em->persist($liga);
            $em->flush();

            return $this->redirectToRoute('ligas_show', array('id' => $liga->getId()));
        }

        return $this->render('ligas/edit.html.twig', array(
                    'liga' => $liga,
                    'periodo' => $periodo,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ligas entity.
     *
     * @Route("/{id}", name="ligas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ligas $liga) {
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            throw $this->createAccessDeniedException("You don't have access to this page!");
        }
        $form = $this->createDeleteForm($liga);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($liga);
            $em->flush();
        }

        return $this->redirectToRoute('ligas_index');
    }

    /**
     * Creates a form to delete a Ligas entity.
     *
     * @param Ligas $liga The Ligas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ligas $liga) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('ligas_delete', array('id' => $liga->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
