<?php

namespace App\Command;

use App\Entity\Cours;
use App\Entity\Matiere;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:seed-data',
    description: 'Seed the database with Matieres and Cours',
)]
class SeedDataCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Clear existing data to avoid duplicates with wrong images
        $this->entityManager->createQuery('DELETE FROM App\Entity\Cours')->execute();
        $this->entityManager->createQuery('DELETE FROM App\Entity\Matiere')->execute();

        $matieresData = [
            [
                'nom' => 'Mathématiques',
                'desc' => 'Découvrez la beauté des mathématiques, de l’analyse complexe à l’algèbre linéaire. Préparez-vous à résoudre les défis les plus stimulants.',
                'section' => 'Sciences',
                'niveau' => 'Baccalauréat',
                'code' => 'MATH-BAC',
                'image' => 'm_math.svg',
                'courses' => [
                    ['titre' => 'Analyse Mathématique', 'desc' => 'Limites, suites numériques, fonctions dérivables et intégrales. Les bases fondamentales pour réussir.', 'duree' => '20h', 'langue' => 'Français', 'image' => 'c_analyse.svg'],
                    ['titre' => 'Nombres Complexes', 'desc' => 'Maîtrisez les imaginaires, les formes trigonométriques et les résolutions d’équations complexes.', 'duree' => '12h', 'langue' => 'Français', 'image' => 'c_complexe.svg'],
                ]
            ],
            [
                'nom' => 'Physique-Chimie',
                'desc' => 'Explorez les lois de l’univers, de la mécanique newtonienne à la chimie organique expérimentale.',
                'section' => 'Sciences',
                'niveau' => 'Baccalauréat',
                'code' => 'PHYS-BAC',
                'image' => 'm_phys.svg',
                'courses' => [
                    ['titre' => 'Mécanique Classique', 'desc' => 'Lois de Newton, mouvement de projectiles et conservation de l’énergie. Comprendre le mouvement.', 'duree' => '15h', 'langue' => 'Français', 'image' => 'c_meca.svg'],
                    ['titre' => 'Chimie Organique', 'desc' => 'Etude des molécules de la vie, nomenclature et réactions de synthèse organique.', 'duree' => '10h', 'langue' => 'Français', 'image' => 'c_chimie.svg'],
                ]
            ],
            [
                'nom' => 'Informatique',
                'desc' => 'Plongez dans le monde numérique. Algorithmique, développement web et intelligence artificielle.',
                'section' => 'Technologie',
                'niveau' => 'Baccalauréat',
                'code' => 'INFO-BAC',
                'image' => 'm_info.svg',
                'courses' => [
                    ['titre' => 'Algorithmique et Programmation', 'desc' => 'Optimisation de code, structures de données et résolution de problèmes logiques.', 'duree' => '18h', 'langue' => 'Français', 'image' => 'c_algo.svg'],
                    ['titre' => 'Développement Web Moderne', 'desc' => 'Apprenez à créer des applications web complètes avec HTML, CSS et JavaScript.', 'duree' => '25h', 'langue' => 'Français', 'image' => 'c_web.svg'],
                ]
            ],
            [
                'nom' => 'Sciences de la Vie et de la Terre',
                'desc' => 'Comprendre le fonctionnement du corps humain, la génétique et la préservation de notre planète.',
                'section' => 'Sciences',
                'niveau' => 'Baccalauréat',
                'code' => 'SVT-BAC',
                'image' => 'm_svt.svg',
                'courses' => [
                    ['titre' => 'Génétique et Évolution', 'desc' => 'Étude de l’ADN, de la transmission des caractères et des mécanismes de l’évolution.', 'duree' => '14h', 'langue' => 'Français', 'image' => 'c_genetique.svg'],
                    ['titre' => 'Système Immunitaire', 'desc' => 'Comment notre corps se défend contre les agents pathogènes. Mécanismes cellulaires et moléculaires.', 'duree' => '12h', 'langue' => 'Français', 'image' => 'c_immuno.svg'],
                ]
            ],
        ];

        foreach ($matieresData as $mData) {
            $matiere = new Matiere();
            $matiere->setNomMatiere($mData['nom']);
            $matiere->setDescription($mData['desc']);
            $matiere->setSection($mData['section']);
            $matiere->setNiveau($mData['niveau']);
            $matiere->setCodeMatiere($mData['code']);
            $matiere->setImage($mData['image']);
            $matiere->setDateCreation(new \DateTimeImmutable());
            $matiere->setAvancement(rand(20, 90)); // Randomized progress

            $this->entityManager->persist($matiere);

            foreach ($mData['courses'] as $cData) {
                $cours = new Cours();
                $cours->setTitre($cData['titre']);
                $cours->setDescription($cData['desc']);
                $cours->setSection($mData['section']);
                $cours->setDureeTotale($cData['duree']);
                $cours->setLangue($cData['langue']);
                $cours->setImage($cData['image']);
                $cours->setMatiere($matiere);
                $cours->setDateCreation(new \DateTimeImmutable());
                $cours->setScoreQuiz(rand(60, 95)); // Randomized score

                $this->entityManager->persist($cours);
            }
        }

        $this->entityManager->flush();

        $io->success('Database seeded successfully with Matieres and Cours!');

        return Command::SUCCESS;
    }
}
