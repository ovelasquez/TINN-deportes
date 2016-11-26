<?php

namespace BackendBundle\Entity;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackendBundle\Entity\Disciplinas;

class LoadDisciplinasData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $disciplina = new Disciplinas();
       $disciplina->setNombre("Ajedrez Masculino");
              $disciplina->setLogo("cropped/ajedrez.png");
       $manager->persist($disciplina);

  $disciplina = new Disciplinas();
       $disciplina->setNombre("Ajedrez Femenino");
              $disciplina->setLogo("cropped/ajedrez.png");
       $manager->persist($disciplina);

 $disciplina = new Disciplinas();
       $disciplina->setNombre("Atletismo Masculino");
              $disciplina->setLogo("cropped/atletismo.png");
       $manager->persist($disciplina);

 $disciplina = new Disciplinas();
       $disciplina->setNombre("Atletismo Femenino");
              $disciplina->setLogo("cropped/atletismo.png");
       $manager->persist($disciplina);

 $disciplina = new Disciplinas();
       $disciplina->setNombre("Baloncesto Masculino");
              $disciplina->setLogo("cropped/Basketball,.png");
       $manager->persist($disciplina);

$disciplina = new Disciplinas();
       $disciplina->setNombre("Baloncesto Femenino");
              $disciplina->setLogo("cropped/Basketball,.png");
       $manager->persist($disciplina);

$disciplina = new Disciplinas();
       $disciplina->setNombre("Béisbol");
              $disciplina->setLogo("cropped/BaseBall.png");
       $manager->persist($disciplina);      

$disciplina = new Disciplinas();
       $disciplina->setNombre("Ciclismo Masculino");
              $disciplina->setLogo("cropped/Cycling.png");
       $manager->persist($disciplina);

$disciplina = new Disciplinas();
       $disciplina->setNombre("Ciclismo Femenino");
              $disciplina->setLogo("cropped/Cycling.png");
       $manager->persist($disciplina);

$disciplina = new Disciplinas();
       $disciplina->setNombre("Esgrima Masculino");
              $disciplina->setLogo("cropped/esgrima.png");
       $manager->persist($disciplina);

$disciplina = new Disciplinas();
       $disciplina->setNombre("Esgrima Femenino");
              $disciplina->setLogo("cropped/esgrima.png");
       $manager->persist($disciplina);

 $disciplina = new Disciplinas();
       $disciplina->setNombre("Fútbol Masculino");
              $disciplina->setLogo("cropped/futbol.png");
       $manager->persist($disciplina);

 $disciplina = new Disciplinas();
       $disciplina->setNombre("Fútbol Femenino");
              $disciplina->setLogo("cropped/futbol.png");
       $manager->persist($disciplina);

 $disciplina = new Disciplinas();
       $disciplina->setNombre("Fútbol Sala Masculino");
              $disciplina->setLogo("cropped/futbol-sala.png");
       $manager->persist($disciplina);

 $disciplina = new Disciplinas();
       $disciplina->setNombre("Fútbol Sala Femenino");
              $disciplina->setLogo("cropped/futbol-sala.png");
       $manager->persist($disciplina);

$disciplina = new Disciplinas();
       $disciplina->setNombre("Judo Masculino");
              $disciplina->setLogo("cropped/judo.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Judo Femenino");
              $disciplina->setLogo("cropped/judo.png");
       $manager->persist($disciplina);

	   $disciplina = new Disciplinas();
       $disciplina->setNombre("Karate Do Masculino");
              $disciplina->setLogo("cropped/karate.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Karate Do Femenino");
              $disciplina->setLogo("cropped/karate.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("kickingball");
              $disciplina->setLogo("cropped/kickingball.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Levantamiento de Pesas Masculino");
              $disciplina->setLogo("cropped/pesas.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Levantamiento de Pesas Femenino");
              $disciplina->setLogo("cropped/pesas.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Lucha Olimpica Masculino");
              $disciplina->setLogo("cropped/lucha.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Lucha Olimpica Femenino");
              $disciplina->setLogo("cropped/lucha.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Natación Masculino");
              $disciplina->setLogo("cropped/natacion.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Natación Femenino");
              $disciplina->setLogo("cropped/natacion.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Sóftbol Masculino");
              $disciplina->setLogo("cropped/softboll.png");
       $manager->persist($disciplina);

      $disciplina = new Disciplinas();
       $disciplina->setNombre("Sóftbol Femenino");
              $disciplina->setLogo("cropped/softboll.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Taekwondo Masculino");
              $disciplina->setLogo("cropped/taekwondo.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Taekwondo Femenino");
              $disciplina->setLogo("cropped/taekwondo.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Tenis Masculino");
              $disciplina->setLogo("cropped/tenis.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Tenis Femenino");
              $disciplina->setLogo("cropped/tenis.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Tenis de Mesa Masculino");
              $disciplina->setLogo("cropped/tenis-mesa.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Tenis de Mesa Femenino");
              $disciplina->setLogo("cropped/tenis-mesa.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Voleibol de Arena Masculino");
              $disciplina->setLogo("cropped/voleibol-arena.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Voleibol de Arena Femenino");
              $disciplina->setLogo("cropped/voleibol-arena.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Voleibol Masculino");
              $disciplina->setLogo("cropped/voleibol.png");
       $manager->persist($disciplina);

       $disciplina = new Disciplinas();
       $disciplina->setNombre("Voleibol Femenino");
              $disciplina->setLogo("cropped/voleibol.png");
       $manager->persist($disciplina);

       $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}