<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $camp = array();
        $atletas = array();
        $disc = array();
        $numa = 0;
        $datetime2 = "";
        $datetime1 = "";
        $dias = 0;
        $contCorregir = 0;
        $contAprobado = 0;
        $totalConsumidos = 0;

        if ($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            //$atletas = $em->getRepository('BackendBundle:Atletas')->findAll();
        } elseif ($this->get('security.context')->isGranted('ROLE_LIGA')) {

            $liga = $em->getRepository('BackendBundle:Ligas')->find($user->getLiga());
            //Porcentaje de avance del tiempo de la liga
            $totalDias = $this->TotalDias($liga->getInicio(), $liga->getFin());
            $totalConsumidos = $this->TotalDias($liga->getInicio(), (new \DateTime("now")));
            if ($totalConsumidos > 0)
                $dias = $totalConsumidos * 100 / $totalDias;

            $camp = $em->getRepository('BackendBundle:Campeonatos')->findAll(array("liga" => $liga));
        } elseif ($this->get('security.context')->isGranted('ROLE_ORGANIZACION')) {
            $atletas = $em->getRepository('BackendBundle:Atletas')->findByOrganizacion($user->getOrganizacion());
            //Contammos cuantos atletas estan por corregir y aprobados
            foreach ($atletas as &$valor) {
                if ($valor->getStatus() === "Por Corregir") {
                    $contCorregir++;
                } elseif ($valor->getStatus() === "Aprobado") {
                    $contAprobado++;
                }
            }
            //echo ("total: ".count($atletas)." Aprobados: ".$contAprobado." Corregir: ".$contCorregir); die;
            $disc = $em->getRepository('BackendBundle:OrganizacionCampeonatoDisciplina')->findAllDisciplinasByCampeonatoDisciplina($user->getOrganizacion());
            //dump($disc); die();
//            $ocd=array();
//            foreach ($disc as &$valor) {
//              array_push($ocd,$valor);
//            }  
//                        dump($ocd); die();

            $camp = $em->getRepository('BackendBundle:Campeonatos')->find($this->getUser()->getCampeonato());

            //Tiempo restante del periodo del campeonato 
            //$datetime2 = ($camp->getFin());
            //$datetime1 = ($camp->getInicio());
            // dump($camp->getInicio()); die();

            $datetime2 = new \DateTime('2016-12-16');
            $datetime1 = new \DateTime('2016-11-21');
            $interval = $datetime1->diff($datetime2);
            $totalDias = $interval->format('%R%a');

            $datetime22 = (new \DateTime("now"));
            $datetime11 = ($camp->getInicio());
            $interval = $datetime11->diff($datetime22);
            $totalConsumidos = $interval->format('%R%a');

            if ($totalConsumidos > 0)
                $dias = $totalConsumidos * 100 / $totalDias;
            // if ($dias > 100)  $dias = 100;
        } else {
            throw $this->createAccessDeniedException(":( No tienes acceso para ingresar a esta área!");
        }

        return $this->render('BackendBundle:Default:index.html.twig', array(
                    'camp' => $camp,
                    'atletas' => $atletas,
                    'disc' => $disc,
                    'numa' => count($atletas),
                    'dias' => $dias,
                    'totalConsumidos' => $totalConsumidos,
                    'inicio' => $datetime1,
                    'fin' => $datetime2,
                    'contCorregir' => $contCorregir,
                    'contAprobado' => $contAprobado,
        ));
    }

    /**
     *
     * @Route("/organizacion/{id}", name="default_organizacion")
     * @Method({"GET", "POST"})
     */
    public function organizacionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $universidadesConfirmadas = array();
        $universidadesPorConfirmar = array();
        $universidadesSinUsuario = array();

        $campeonato = $em->getRepository('BackendBundle:Campeonatos')->find(intval($id));
        $organizaciones = $em->getRepository('BackendBundle:OrganizacionCampeonatoDisciplina')->findAllOrganizacionesByCampeonato($campeonato->getId());
        $organizacionesUsuarios = $em->getRepository('BackendBundle:Organizaciones')->findAllUserOrganizacionesByCampeonato($campeonato->getId());
        // dump($organizacionesUsuarios); die();

        foreach ($organizacionesUsuarios as &$valor) {
            if ($valor['enabled'] === "1") {
                array_push($universidadesConfirmadas, $valor);
            } elseif ($valor['enabled'] === "0") {
                array_push($universidadesPorConfirmar, $valor);
            }
        }

        foreach ($organizaciones as &$i) {
            $esta = false;
            foreach ($universidadesConfirmadas as &$j) {
                if ($i['organizacion_id'] === $j['id']) {
                    $esta = true;
                }
            }
            if (!$esta) {
                foreach ($universidadesPorConfirmar as &$k) {
                    if ($i['organizacion_id'] === $k['id']) {
                        $esta = true;
                    }
                }
            }

            if (!$esta) {
                $universidad = $em->getRepository('BackendBundle:Organizaciones')->find($i['organizacion_id']);
                array_push($universidadesSinUsuario, $universidad);
            }
        }

        //dump($universidadesSinUsuario); die();
        return $this->render('BackendBundle:Default:organizacion.html.twig', array(
                    'id' => $id,
                    'campeonato' => $campeonato,
                    'organizaciones' => $organizaciones,
                    'universidadesConfirmadas' => $universidadesConfirmadas,
                    'universidadesPorConfirmar' => $universidadesPorConfirmar,
                    'universidadesSinUsuario' => $universidadesSinUsuario,
        ));
    }

    /**
     *
     * @Route("/organizacionequipo/{id}", name="default_organizacion_equipo")
     * @Method({"GET", "POST"})
     */
    public function organizacionequipoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $estatus = $em->getRepository('BackendBundle:Atletas')->findAllByEstatus($id);
        $organizacion = $em->getRepository('BackendBundle:Organizaciones')->find($id);

       //dump($estatus); die();
        return $this->render('atletas/index.html.twig', array(
                    'organizacion' => $organizacion,
                    'estatus' => $estatus,
        ));
    }

    private function TotalDias($inicio, $fin) {
        $interval = $inicio->diff($fin);
        return($interval->format('%R%a'));
    }

}
