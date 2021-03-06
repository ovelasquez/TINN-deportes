<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use BackendBundle\Entity\OrganizacionCampeonatoDisciplina;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrganizacionCampeonatoDisciplinaRepository
 *
 * @author Mariana
 */
class OrganizacionCampeonatoDisciplinaRepository extends EntityRepository {

    //put your code here

    public function findAllWithDisciplinaByOrganizacion($org) {

        $query = $this->getEntityManager()
                ->createQuery("SELECT  r,d  FROM BackendBundle:OrganizacionCampeonatoDisciplina r "
                . "LEFT JOIN BackendBundle:Disciplinas d WITH r.disciplina=d.id WHERE r.organizacion=:org  ORDER BY d.nombre ASC");
        $query->setParameter('org', $org);
        $entities = $query->getResult();

        return $entities;
    }

    public function findAllDisciplinasByCampeonatoDisciplina($org) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT  ocd, cd  FROM BackendBundle:OrganizacionCampeonatoDisciplina ocd "
                . "LEFT JOIN BackendBundle:CampeonatoDisciplina cd WITH ocd.disciplina=cd.disciplina "
                . "WHERE ocd.organizacion=:org  ORDER BY cd.id ASC");
        $query->setParameter('org', $org);
        $entities = $query->getResult();

        return $entities;
    }


    public function findAllOrganizacionesByCampeonato($campeonato) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
           select ocd.organizacion_id from campeonato_disciplina cp 
           left join organizacion_campeonato_disciplina ocd on ocd.disciplina_id=cp.disciplina_id
           where cp.campeonato_id=:campeonato 
           group by ocd.organizacion_id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('campeonato' => $campeonato));
         
        return $stmt->fetchAll();
    }

}
