<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use BackendBundle\Entity\Organizaciones;
use AutenticacionBundle\Entity\User;

/**
 * Description of OrganizacionesRepository
 *
 * @author Mariana
 */
class OrganizacionesRepository extends EntityRepository {

    public function findAllUserOrganizacionesByCampeonato($campeonato) {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
          select o.id id, o.nombre universidad, o.abreviatura abreviatura, fs.nombre responsable, fs.username usuario, fs.email email, fs.enabled from organizaciones o
          left join fos_user fs on fs.organizacion=o.id
          where fs.campeonato=:campeonato 
          order by o.nombre asc';
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('campeonato' => $campeonato));       
        return $stmt->fetchAll();
    }
}