<?php

namespace App\DataFixtures;

use App\Entity\Formations;
//use App\Entity\Utilisateurs;
//use App\Entity\Contacts;
//use App\Entity\Medias;

use Faker; 
use Faker\Factory;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Validator\Constraints\DateTime;

class FormationsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
            
//         Liste des formations :
        
    for ($f = 1; $f < 500; $f++) 
        {
            $formations = new Formations();
            $civilite = ["Femme", "Homme"];
            shuffle($civilite);
            $status = ['Nouveau Message', 'Ancien message', 'Message Privé', 'Message Annonyme', 'Message Archivé', 'Message Professionnel', 'Message Publicitaire'];
            shuffle($status);
$nom_formation = ['PHP', 'JAVA', 'JAVASCRIPT', 'SYMFONY', 'DOTNET', 'C++', 'SQL', 'PYTHON'];
shuffle($nom_formation);

$email = $faker->email;

            $formations
                        ->setNomFormation($nom_formation[0])
                                                        ->setCivilite($civilite[0])
                        ->setContenu($faker->sentence())
            ->setDateFormation(new \DateTime())
            ->setStatus($status[0]);
            
            $manager->persist($formations);
       $manager->flush();  
    }   
    }     

}