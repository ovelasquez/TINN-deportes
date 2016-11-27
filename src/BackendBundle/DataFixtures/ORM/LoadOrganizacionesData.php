<?php

namespace BackendBundle\Entity;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackendBundle\Entity\Organizaciones;

class LoadOrganizacionesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental del Yaracuy");
       $deportesTinn->setAbreviatura("UNEY");
       $deportesTinn->setLogo("cropped/UNEY.png");
       $deportesTinn->setRif("G-2000840-7");
       $deportesTinn->setTelefono("02542313983");
       $deportesTinn->setEmail("prodeuney2015@gmail.com");
       $deportesTinn->setResponsable("Msc. Ender David Graterol Hernández");
       $deportesTinn->setDireccion("Zona Industrial “Agustín Rivero Calle 1 Edificio Ciepe 2do Piso");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Colegio Universitario de Caracas");
       $deportesTinn->setAbreviatura("CUC");
       $deportesTinn->setLogo("cropped/CUC.png");
       $deportesTinn->setRif("G-20000080-5");
       $deportesTinn->setTelefono("02122086644");
       $deportesTinn->setEmail("coordinaciondedeportescuc@gmail.com");
       $deportesTinn->setResponsable("Miguel Antonio Alvarez Cadiz");
       $deportesTinn->setDireccion("La Floresta, Avenida Principal,Edif Sucre -Municipio- Chacao-Altamira");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental de Guayana");
       $deportesTinn->setAbreviatura("UNEG");
       $deportesTinn->setLogo("cropped/UNEG.png");
       $deportesTinn->setRif("G-20003343-6");
       $deportesTinn->setTelefono("04148857514");
       $deportesTinn->setEmail("deporte@uneg.edu.ve");
       $deportesTinn->setResponsable("Lcdo. Jesús Bastardo Aliendres");
       $deportesTinn->setDireccion("Av. Las Américas, Edificio General De Seguros");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental Francisco de Miranda");
       $deportesTinn->setAbreviatura("UNEFM");
       $deportesTinn->setLogo("cropped/UNEFM.png");
       $deportesTinn->setRif("G-20005868-4");
       $deportesTinn->setTelefono("02682524918 ");
       $deportesTinn->setEmail("deportesunefm@gmail.com");
       $deportesTinn->setResponsable("Lcdo. Pedro Veliz");
       $deportesTinn->setDireccion("Calle Norte, Entre Avenida Manaure y Calle Toledo, Edificio Rectorado, Santa Ana de Coro, Estado Falcón");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Pedagógica Experimental Libertador");
       $deportesTinn->setAbreviatura("UPEL");
       $deportesTinn->setLogo("cropped/UPEL.png");
       $deportesTinn->setRif("G-20008202-0");
       $deportesTinn->setTelefono("04166300346");
       $deportesTinn->setEmail("rauseor@gmail.com");
       $deportesTinn->setResponsable("Doctor Régulo Rauseo");
       $deportesTinn->setDireccion("Parque Del Oeste, Avenida Sucre Catia, Distrito Capital");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Politecnica Territorial de Yaracuy Aristides Bastidas");
       $deportesTinn->setAbreviatura("UPTYAB");
       $deportesTinn->setLogo("cropped/UPTYAB.png");
       $deportesTinn->setRif("G-20012118-1");
       $deportesTinn->setTelefono("02542313168");
       $deportesTinn->setEmail("ramirezch.danny@gmail.com");
       $deportesTinn->setResponsable("Danny Andrés Ramírez Chacón");
       $deportesTinn->setDireccion("Av. Alberto Ravell, Cruce con Av. José Antonio Páez, Frente a Farmatodo Municipio  Independencia, San Felipe, Estado Yaracuy");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Politecnica Territorial de Paria “ Luis Mariano Rivera");
       $deportesTinn->setAbreviatura("UPTPLMR");
       $deportesTinn->setLogo("cropped/UPTPLMR.png");
       $deportesTinn->setRif("G-20010217-9");
       $deportesTinn->setTelefono("04164980074");
       $deportesTinn->setEmail("krunesr1@gmail.com");
       $deportesTinn->setResponsable("Carlos Alberto Felce Rodriguez");
       $deportesTinn->setDireccion("Carretera Nacional Carùpano-Guiria Sector Charallave Carùpano, Estado - Sucre");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Instituto Universitario de Tecnologia Agro Industrial");
       $deportesTinn->setAbreviatura("IUTAI");
       $deportesTinn->setLogo("cropped/IUTAI.png");
       $deportesTinn->setRif("G-20000243-3");
       $deportesTinn->setTelefono("02763465260");
       $deportesTinn->setEmail("hanchero03@hotmail.com ");
       $deportesTinn->setResponsable("Handersom Perez ");
       $deportesTinn->setDireccion("Avenida Teotimo de Pablo Antiguo Parque Exposicion La Concordia San Cristobal Estado Tachira");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Instituto Universitario de Tecnología del Oeste Mariscal Sucre");
       $deportesTinn->setAbreviatura("IUTOMS");
       $deportesTinn->setLogo("cropped/IUTOMS.png");
       $deportesTinn->setRif("G-00000000-0");
       $deportesTinn->setTelefono("04263108800");
       $deportesTinn->setEmail("coordinaiutoms@gmail.com");
       $deportesTinn->setResponsable("David Silva Prades");
       $deportesTinn->setDireccion("Antiguo Edificio Fosforera- Antimano - Distrito Capital");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Politecnica Territorial del Norte del Tachira Manuela Saenz");
       $deportesTinn->setAbreviatura("UPTNTMS");
       $deportesTinn->setLogo("cropped/UPTNTMS.png");
       $deportesTinn->setRif("G-20009572-5");
       $deportesTinn->setTelefono("04145310955");
       $deportesTinn->setEmail("jesuspabon2009@gmail.com");
       $deportesTinn->setResponsable("Jesus Manuel Rivera Pabon");
       $deportesTinn->setDireccion("Zona Industrial, Antiguo Edificio Conditaca, Al Lado del Seguro Social. La Fría Estado Táchira");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental de las Artes");
       $deportesTinn->setAbreviatura("UNEARTE");
       $deportesTinn->setLogo("cropped/UNEARTE.png");
       $deportesTinn->setRif("G-20008463-4");
       $deportesTinn->setTelefono("04166060246");
       $deportesTinn->setEmail("franciscojlopez@unearte.edu.ve");
       $deportesTinn->setResponsable("Francisco López");
       $deportesTinn->setDireccion("Edificio Unearte, Cruce con Av. México, Con Av. Norte-Sur 25, Urb. El Conde, Parroquia San Agustín, Plaza Morelos");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Misión Sucre");
       $deportesTinn->setAbreviatura("MS");
       $deportesTinn->setLogo("cropped/MS.png");
       $deportesTinn->setRif("G-2003871-3");
       $deportesTinn->setTelefono("04242247007");
       $deportesTinn->setEmail("leonardojvs@yahoo.es");
       $deportesTinn->setResponsable("Leonardo Villamizar");
       $deportesTinn->setDireccion("Sin Información");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Politécnica Territorial del Estado Portugues 'Juan De Jesús Montilla'");
       $deportesTinn->setAbreviatura("UPTPJJM");
       $deportesTinn->setLogo("cropped/UPTPJJM.png");
       $deportesTinn->setRif("G-20010200-4");
       $deportesTinn->setTelefono("02556237538");
       $deportesTinn->setEmail("betcarisa@hotmail.com");
       $deportesTinn->setResponsable("Leonardo Morales");
       $deportesTinn->setDireccion("Av. Circunvalacion Sur Diagonal a la Cruz Roja Acarigua ");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Politécnica Territorial de los Altos Mirandinos “Cecilio Acosta”");
       $deportesTinn->setAbreviatura("UPTAMCA");
       $deportesTinn->setLogo("cropped/UPTAMCA.png");
       $deportesTinn->setRif("G-20011321-9");
       $deportesTinn->setTelefono("02123224828");
       $deportesTinn->setEmail("unidereextensionuniversitaria@gmail.com");
       $deportesTinn->setResponsable("Prof. Ludwig Serni");
       $deportesTinn->setDireccion("Km 23 Carretera Panamericana, Sector Macarena Norte, Parroquia El Vigía, Municipio Guaicaipuro, Estado Miranda");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre(" Universidad Nacional Experimental Politécnica De La Fuerza Armada Nacional");
       $deportesTinn->setAbreviatura("UNEFA");
       $deportesTinn->setLogo("cropped/UNEFA.png");
       $deportesTinn->setRif("G-20006297-5");
       $deportesTinn->setTelefono("04264120498");
       $deportesTinn->setEmail("echunefadep16@gmail.com ");
       $deportesTinn->setResponsable("Prof. Edgar Ramón Charris");
       $deportesTinn->setDireccion("Av. La Estancia con Av. Caracas y Calle Holanda. Chuao. Edif. Sede UNEFA. Frente a Torre Banaven. Municipio Baruta. Parroquia El Cafetal.");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Escuela Nacional de Administración Y Hacienda Pública.");
       $deportesTinn->setAbreviatura("ENAHP");
       $deportesTinn->setLogo("cropped/ENAHP.png");
       $deportesTinn->setRif("G-200105313");
       $deportesTinn->setTelefono("04167178807");
       $deportesTinn->setEmail("deportenahp@gmail.com");
       $deportesTinn->setResponsable("Prof. Miguel Resplandor");
       $deportesTinn->setDireccion("Av. Francisco de Miranda, Edif. Enahp, Los Ruices Estado Miranda.");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental 'Rafael Maria Baralt'");
       $deportesTinn->setAbreviatura("UNERMB");
       $deportesTinn->setLogo("cropped/UNERMB.png");
       $deportesTinn->setRif("G-20000069-4");
       $deportesTinn->setTelefono("04246210834");
       $deportesTinn->setEmail("otonierdavid@gmail.com");
       $deportesTinn->setResponsable("Otonier D. Jimenez M.");
       $deportesTinn->setDireccion("Av. Principal de Cabimas  Diagonal a la Catedral de Cabimas Edif. Control de Estudio Antiguo Banco de Maracaibo.");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Santa María");
       $deportesTinn->setAbreviatura("USM");
       $deportesTinn->setLogo("cropped/USM.png");
       $deportesTinn->setRif("J-00063620-6");
       $deportesTinn->setTelefono("04141120966");
       $deportesTinn->setEmail("direcciondeportesusm@gmail.com");
       $deportesTinn->setResponsable("Ing. Arnold Rivera");
       $deportesTinn->setDireccion("Final Autopista Francisco de Miranda, Distribuidor Metropolitano, Carretera Petare /Santa Lucia, Km 4, Edif. Universidad Santa María");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nueva Esparta");
       $deportesTinn->setAbreviatura("UNE");
       $deportesTinn->setLogo("cropped/UNE.png");
       $deportesTinn->setRif("J-30174387-3");
       $deportesTinn->setTelefono("04143195177");
       $deportesTinn->setEmail("yani.capuzzi@une.edu.ve");
       $deportesTinn->setResponsable("Lic. Yani A. Capuzzi Carafa");
       $deportesTinn->setDireccion("-");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("La Universidad del Zulia");
       $deportesTinn->setAbreviatura("LUZ");
       $deportesTinn->setLogo("cropped/LUZ.png");
       $deportesTinn->setRif("G-20008806-0");
       $deportesTinn->setTelefono("00000000000");
       $deportesTinn->setEmail("egnochavez@yahoo.es");
       $deportesTinn->setResponsable("Egno Chavez");
       $deportesTinn->setDireccion("Núcleo Humanístico, Gimnasio Borjas Romero 1er Piso");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Yacambu");
       $deportesTinn->setAbreviatura("UNY");
       $deportesTinn->setLogo("cropped/UNY.png");
       $deportesTinn->setRif("J-08515699-2");
       $deportesTinn->setTelefono("04245440666");
       $deportesTinn->setEmail("ext.deportes@uny.edu.ve");
       $deportesTinn->setResponsable("Ronny Carrasco");
       $deportesTinn->setDireccion("Urb. La Mora");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Colegio Universitario 'Francisco De Miranda'");
       $deportesTinn->setAbreviatura("CUFM");
       $deportesTinn->setLogo("cropped/CUFM.png");
       $deportesTinn->setRif("G-20000081-3");
       $deportesTinn->setTelefono("04122614277");
       $deportesTinn->setEmail("yanettorcates41@hotmail.com");
       $deportesTinn->setResponsable("Yanet Torcate");
       $deportesTinn->setDireccion("Av. Urdaneta. Esquina de Mijares. Parroquia Altagracia");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental 'Rómulo Gallegos'");
       $deportesTinn->setAbreviatura("UNERG");
       $deportesTinn->setLogo("cropped/UNERG.png");
       $deportesTinn->setRif("G-20003225-1");
       $deportesTinn->setTelefono("04266300731");
       $deportesTinn->setEmail("deportes_unerg@hotmail.com");
       $deportesTinn->setResponsable("Prof. Marisela Trujillo");
       $deportesTinn->setDireccion("Ciudad Universitaria, Av. Universitaria, Vía El Castrero, San Juan de los Morros, Estado Guárico");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental Sur del Lago 'Jesús María Semprum'");
       $deportesTinn->setAbreviatura("UNESUR");
       $deportesTinn->setLogo("cropped/UNESUR.png");
       $deportesTinn->setRif("G-20005799-8");
       $deportesTinn->setTelefono("02755551036");
       $deportesTinn->setEmail("manuelamesty29@gmail.com");
       $deportesTinn->setResponsable("Lic. Manuel Amesty");
       $deportesTinn->setDireccion("Av. 5ta Con Calle 2, Edificio de Dirección General de Desarrollo Socio Educativo y Comunitario");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Centroccidental Lisandro Alvarado");
       $deportesTinn->setAbreviatura("UCLA");
       $deportesTinn->setLogo("cropped/UCLA.png");
       $deportesTinn->setRif("G-20000077-5");
       $deportesTinn->setTelefono("02512591684");
       $deportesTinn->setEmail("deportesucla@ucla.edu.ve");
       $deportesTinn->setResponsable("Domingo Calicchio");
       $deportesTinn->setDireccion("Av. Intercomunal Florencio Jimenez  Nùcleo El Obelisco, Gimnasio Universitario Lisandro Alvarado");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Colegio Universitario 'Prof. Jose Lorenzo Perez Rodriguez'");
       $deportesTinn->setAbreviatura("CUPJLPR");
       $deportesTinn->setLogo("cropped/CUPJLPR.png");
       $deportesTinn->setRif("G-20000544-0");
       $deportesTinn->setTelefono("02122413340");
       $deportesTinn->setEmail("cupjlpr.dirección.@gmail.com");
       $deportesTinn->setResponsable("Prof. Carlos Garcia");
       $deportesTinn->setDireccion("La Urbina, Zona Industrial, Calle 8, Edificio Mercurio, Sotano 1");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental Marítima Del Caribe");
       $deportesTinn->setAbreviatura("UMC");
       $deportesTinn->setLogo("cropped/UMC.png");
       $deportesTinn->setRif("G-20003807-1");
       $deportesTinn->setTelefono("04123882264");
       $deportesTinn->setEmail("lcastillo@umc.edu.ve");
       $deportesTinn->setResponsable("Liliana Castillo");
       $deportesTinn->setDireccion("Umc. Pasillo Camarotes. Ofic. C Y D, Av. El Ejército, Catia la Mar, Edo. Vargas, Venezuela ");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Alejandro de Humboldt");
       $deportesTinn->setAbreviatura("UAH");
       $deportesTinn->setLogo("cropped/UAH.png");
       $deportesTinn->setRif("G-20003807-1");
       $deportesTinn->setTelefono("04149184450");
       $deportesTinn->setEmail("miguelsotomayor06@gmail.com");
       $deportesTinn->setResponsable("Miguel Ángel Sotomayor Pérez");
       $deportesTinn->setDireccion("Rómulo Gallegos, Los Dos Caminos, Parroquia Leoncio Martínez,  Municipio Sucre,Edo.  Miranda");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Instituto Universitario de Tecnología Superior de Oriente");
       $deportesTinn->setAbreviatura("IUTSO");
       $deportesTinn->setLogo("cropped/IUTSO.png");
       $deportesTinn->setRif("J-30669022-0");
       $deportesTinn->setTelefono("04148082218");
       $deportesTinn->setEmail("iutso.direccion@gmail.com");
       $deportesTinn->setResponsable("Lic. Elizabetta Di Niscia");
       $deportesTinn->setDireccion("Avenida Fabricio Ojeda, La  Costanera, Centro Comercial Camino Real. Piso 2 y 3, Parroquia el Carmen, Municipio Simón Bolívar Barcelona- Estado Anzoategui");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Instituto Universitario Latinoamericano de Agroecologia");
       $deportesTinn->setAbreviatura("IALA");
       $deportesTinn->setLogo("cropped/IALA.png");
       $deportesTinn->setRif("G-20008554-1");
       $deportesTinn->setTelefono("04161366666");
       $deportesTinn->setEmail("johancarrillo116@gmail.com");
       $deportesTinn->setResponsable("Johan Carrillo");
       $deportesTinn->setDireccion("Carretera Nacional, Troncal Nº 5, Sector La Marqueseña, Puente Paez- Barinas");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Central de Venezuela");
       $deportesTinn->setAbreviatura("UCV");
       $deportesTinn->setLogo("cropped/UCV.png");
       $deportesTinn->setRif("G-20000062-7");
       $deportesTinn->setTelefono("02126054355");
       $deportesTinn->setEmail("jose.benvenga@hotmail.com");
       $deportesTinn->setResponsable("Jose Benvenga");
       $deportesTinn->setDireccion("Ciudad Universitaria De Caracas");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Politécnica Territorial José Antonio Anzoátegui");
       $deportesTinn->setAbreviatura("UPTJAA");
       $deportesTinn->setLogo("cropped/UPTJAA.png");
       $deportesTinn->setRif("G-20004348-2");
       $deportesTinn->setTelefono("04148919884");
       $deportesTinn->setEmail("paul23alzolay@gmail.com");
       $deportesTinn->setResponsable("Paul Alzolay");
       $deportesTinn->setDireccion("Carretera nacional El Tigre Cd. Bolívar Kilometro 08");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental del Táchira");
       $deportesTinn->setAbreviatura("UNET");
       $deportesTinn->setLogo("cropped/UNET.png");
       $deportesTinn->setRif("G-20004886-7");
       $deportesTinn->setTelefono("02763532754");
       $deportesTinn->setEmail("deportes@unet.edu.ve");
       $deportesTinn->setResponsable("Msc. Edmundo José Duerto Bonilla  ");
       $deportesTinn->setDireccion("Avenida Universidad, Sector Paramillo, San Cristóbal, Estado Táchira, Venezuela.");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Deportiva del Sur");
       $deportesTinn->setAbreviatura("UDS");
       $deportesTinn->setLogo("cropped/UDS.png");
       $deportesTinn->setRif("G-20006469-2");
       $deportesTinn->setTelefono("04269715800");
       $deportesTinn->setEmail("deportes@uideporte.edu.ve");
       $deportesTinn->setResponsable("Msc. Pedro Gonzalez Pompa ");
       $deportesTinn->setDireccion("Av. Universidad Km2 Vía Manrique");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad de Oriente");
       $deportesTinn->setAbreviatura("UDO");
       $deportesTinn->setLogo("cropped/UDO.png");
       $deportesTinn->setRif("G-20000052-0");
       $deportesTinn->setTelefono("02934001011");
       $deportesTinn->setEmail("samil.astorino@gmail.com");
       $deportesTinn->setResponsable("Samil Astorino");
       $deportesTinn->setDireccion("-");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad de Los Andes");
       $deportesTinn->setAbreviatura("ULA");
       $deportesTinn->setLogo("cropped/ULA.png");
       $deportesTinn->setRif("G-40200000-6");
       $deportesTinn->setTelefono("04147260377");
       $deportesTinn->setEmail("ramonzam06@gmail.com");
       $deportesTinn->setResponsable("Prof. Ramón O. Zambrano");
       $deportesTinn->setDireccion("Nucleo Universitario La Hechicera. Merida, Venezuela");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental Simon Rodriguez");
       $deportesTinn->setAbreviatura("UNESR");
       $deportesTinn->setLogo("cropped/UNESR.png");
       $deportesTinn->setRif("G-20000064-3");
       $deportesTinn->setTelefono("0416-6112017");
       $deportesTinn->setEmail("deporteunesr@gmail.com");
       $deportesTinn->setResponsable("Arcenio Manuel Noriega Caraballo");
       $deportesTinn->setDireccion("Avenida Intercomunal Los Jardines del Valle Calle 14 Edificio Unesr Piso 1 Direccion de Deporte Municipio Libertador Distrito Capital");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);
       
       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Católica Andrés Bello");
       $deportesTinn->setAbreviatura("UCAB");
       $deportesTinn->setLogo("cropped/UCAB.png");
       $deportesTinn->setRif("J-00012255-5");
       $deportesTinn->setTelefono("02124076026");
       $deportesTinn->setEmail("jusanche@ucab.edu.ve");
       $deportesTinn->setResponsable("Ing. Juan Sánchez");
       $deportesTinn->setDireccion("Av. Teherán, Montalbán, Parroquia La Vega. Caracas");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Metropolitana");
       $deportesTinn->setAbreviatura("UNIMET");
       $deportesTinn->setLogo("cropped/UNIMET.png");
       $deportesTinn->setRif("J-00065477-8");
       $deportesTinn->setTelefono("02122403279");
       $deportesTinn->setEmail("jose.montes.rendon@gmail.com");
       $deportesTinn->setResponsable("Prof. Jose Montes Rendon");
       $deportesTinn->setDireccion("Av Boyacá Con Autopista Petare - Guarenas. Edif Eugenio Mendoza. Urb. Terrazas Del Avila");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental De La Seguridad ");
       $deportesTinn->setAbreviatura("UNES");
       $deportesTinn->setLogo("cropped/UNES.png");
       $deportesTinn->setRif("G-20009211-4");
       $deportesTinn->setTelefono("02128028964");
       $deportesTinn->setEmail("josealvia22@gmail.com");
       $deportesTinn->setResponsable("Jose Luis Alvia");
       $deportesTinn->setDireccion("josealvia22@gmail.com");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Politécnica Territorial Del Estado Mérida “Kléber Ramírez”");
       $deportesTinn->setAbreviatura("UPTMKR");
       $deportesTinn->setLogo("cropped/UPTMKR.png");
       $deportesTinn->setRif("G-20010201-2");
       $deportesTinn->setTelefono("04147016146");
       $deportesTinn->setEmail("miozpama@gmail.com");
       $deportesTinn->setResponsable("Tsu. Michael  Ozzie Paredes Marin");
       $deportesTinn->setDireccion("Av. 25 De Noviembre, Vía Manzano Bajo, Frente Al Geriátrico Ricardo Sergent. Ejido, Estado Mérida");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Instituto Universitario de Tecnología del Estado Bolívar");
       $deportesTinn->setAbreviatura("IUTEB");
       $deportesTinn->setLogo("cropped/IUTEB.png");
       $deportesTinn->setRif("G-20002070-9");
       $deportesTinn->setTelefono("+58 (414) 099-3541");
       $deportesTinn->setEmail("hernanmarquezesport@gmail.com");
       $deportesTinn->setResponsable("Prof.Hernan Marquez");
       $deportesTinn->setDireccion("Calle Igualdad, entre Progreso y Rosario, Nº 28, Edif. IUTEB, Casco Histórico de Ciudad Bolívar – Edo. Bolívar-Venezuela");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);
       
       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Bolivariana de Venezuela");
       $deportesTinn->setAbreviatura("UBV");
       $deportesTinn->setLogo("cropped/UBV.png");
       $deportesTinn->setRif("G-2000");
       $deportesTinn->setTelefono("+58 (212) 606-3172");
       $deportesTinn->setEmail("marymontess@gmail.com");
       $deportesTinn->setResponsable("Mary Montes");
       $deportesTinn->setDireccion("UBV Los Chaguaramos");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universitaria Politécnica Territorial del Estado Barinas Jose Felix Ribas");
       $deportesTinn->setAbreviatura("UPTJFR");
       $deportesTinn->setLogo("UPTJFR");
       $deportesTinn->setRif("G-20009502-4");
       $deportesTinn->setTelefono("+58 (273) 541-3657");
       $deportesTinn->setEmail("montillavictor6@gmail.com");
       $deportesTinn->setResponsable("Montilla Darias Víctor Manuel");
       $deportesTinn->setDireccion("Av. Industrial con Av. Carabobo frente Diario Los Llano. Barinas Municipio Barinas. Edo. Barinas");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  
       $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn->setNombre("Universidad Nacional Experimental Politecnica Antonio Jose De Sucre");
       $deportesTinn->setAbreviatura("UNEXPO");
       $deportesTinn->setLogo("UNEXPO.png");
       $deportesTinn->setRif("G-20000167");
       $deportesTinn->setTelefono("+58  (416) 650-3771");
       $deportesTinn->setEmail("joropeza34@hotmail.com");
       $deportesTinn->setResponsable("José Gregorio Oropeza ");
       $deportesTinn->setDireccion("-");
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  
       $manager->persist($deportesTinn);

       $deportesTinn→setNombre("Universitaria Politécnica Territorial del Estado Barinas Jose Felix Ribas");
       $deportesTinn→setAbreviatura("UPTJFR");
       $deportesTinn→setLogo("UPTJFR.png");
       $deportesTinn→setRif("G-20009502-4");
       $deportesTinn->setTelefono("+58 (273) 541-3657");
       $deportesTinn→setEmail("montillavictor6@gmail.com");
       $deportesTinn→setResponsable("Montilla Darias Víctor Manuel ");
       $deportesTinn→setDireccion("Av. Industrial con Av. Carabobo frente Diario Los Llano. Barinas Municipio Barinas. Edo. Barinas");     
       $deportesTinn->setCampeonato($this->getReference('campeonato'));  
       $manager->persist($deportesTinn);

       $deportesTinn→setNombre("Universidad Politecnica Territorial Del Alto Apure Pedro Camejo");
       $deportesTinn→setAbreviatura("UPTAAPC");
       $deportesTinn→setLogo("UPTAAPC.png");
       $deportesTinn→setRif("G-20009559-8");
       $deportesTinn->setTelefono("+58 (240) 994-0125");
       $deportesTinn→setEmail("uptaltoapure@gmail.com");
       $deportesTinn→setResponsable("JESUS RAMON GUTIERREZ GUTIERREZ");
       $deportesTinn→setDireccion("Carretera Nacional via el saman de APURE Frente del destacamento del ejercito");
       $deportesTinn->setCampeonato($this->getReference('campeonato')); 
	   $manager->persist($deportesTinn);

	   $deportesTinn→setNombre("Universidad Politécnica Territorial De Falcón  Alonso Gamero");
       $deportesTinn→setAbreviatura("UPTAG");
       $deportesTinn→setLogo("UPTAG.png");
       $deportesTinn→setRif("G-200058366");
       $deportesTinn->setTelefono("+58 (268) 252-3264");
       $deportesTinn→setEmail(" dideuptag@gmail.com");
       $deportesTinn→setResponsable("Lcdo. Jhony Sojo R");
       $deportesTinn→setDireccion("Av. Libertador con calle Ali Primera, Parque Los Orunos. Coro-Edo. Falcón");
       $deportesTinn->setCampeonato($this->getReference('campeonato')); 
	   $manager->persist($deportesTinn);

	   $deportesTinn→setNombre("Universidad de Carabobo ");
       $deportesTinn→setAbreviatura("UC");
       $deportesTinn→setLogo("UPTAAPCUC");
       $deportesTinn→setRif("6-200000 41-4");
       $deportesTinn->setTelefono("+58 (241) 868-5089");
       $deportesTinn→setEmail("rubenlopez91@hotmail.com");
       $deportesTinn→setResponsable("Ruben Lopez  ");
       $deportesTinn→setDireccion("Av.  Salvador Allende - Campus Barbula /  Complejo Deportivo UC");
       $deportesTinn->setCampeonato($this->getReference('campeonato')); 
	   $manager->persist($deportesTinn);

	   $deportesTinn→setNombre("Universidad Politecnica Territorial del Oeste de Sucre 'Clodosbaldo Russian'");
       $deportesTinn→setAbreviatura("UPTOSCR");
       $deportesTinn→setLogo("UPTOSCR.png");
       $deportesTinn→setRif("G-20010205-5");
       $deportesTinn->setTelefono("+58 (412) 189-0321");
       $deportesTinn→setEmail("miguelrendon83@hotmail.com");
       $deportesTinn→setResponsable("Miguel Rendón");
       $deportesTinn→setDireccion("-");
       $deportesTinn->setCampeonato($this->getReference('campeonato')); 
       $manager->persist($deportesTinn);

       $deportesTinn = new Organizaciones();
       $deportesTinn→setNombre("Instituto Universitario de Tecnología de Valencia");
       $deportesTinn→setAbreviatura("IUTVAL");
       $deportesTinn→setLogo("IUTVAL.png");
       $deportesTinn→setRif("G-200006216-9");
       $deportesTinn->setTelefono("+58 (241) 823-1975");
       $deportesTinn→setEmail("luciapostrago@gmail.com");
       $deportesTinn→setResponsable("Profe Lucia Marín");
       $deportesTinn→setDireccion("Av. Paseo Cuatricentenario. Complejo Educacional 'La Manguita'. Vía Guataparo. Valencia. Estado Carabobo.");
       $deportesTinn->setCampeonato($this->getReference('campeonato')); 
 	   $manager->persist($deportesTinn);







       
       $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
