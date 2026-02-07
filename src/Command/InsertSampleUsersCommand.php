<?php

namespace App\Command;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:insert-sample-users',
    description: 'Inserts sample users into the database.',
)]
class InsertSampleUsersCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $sampleUsers = [
            // Admins
            ['nom' => 'Trabelsi', 'prenom' => 'Ahmed', 'email' => 'ahmed.trabelsi@learnflex.com', 'role' => 'Admin', 'age' => 35],

            // Enseignants
            ['nom' => 'Ben Ali', 'prenom' => 'Leila', 'email' => 'leila.benali@learnflex.com', 'role' => 'Enseignant', 'age' => 42],
            ['nom' => 'Mansour', 'prenom' => 'Karim', 'email' => 'karim.mansour@learnflex.com', 'role' => 'Enseignant', 'age' => 38],
            ['nom' => 'Khelifi', 'prenom' => 'Nadia', 'email' => 'nadia.khelifi@learnflex.com', 'role' => 'Enseignant', 'age' => 45],

            // Etudiants
            ['nom' => 'Mejri', 'prenom' => 'Youssef', 'email' => 'youssef.mejri@student.tn', 'role' => 'Etudiant', 'age' => 20],
            ['nom' => 'Riahi', 'prenom' => 'Fatma', 'email' => 'fatma.riahi@student.tn', 'role' => 'Etudiant', 'age' => 19],
            ['nom' => 'Belhaj', 'prenom' => 'Sami', 'email' => 'sami.belhaj@student.tn', 'role' => 'Etudiant', 'age' => 21],
            ['nom' => 'Mansouri', 'prenom' => 'Ines', 'email' => 'ines.mansouri@student.tn', 'role' => 'Etudiant', 'age' => 22],
            ['nom' => 'Gharbi', 'prenom' => 'Mohamed', 'email' => 'mohamed.gharbi@student.tn', 'role' => 'Etudiant', 'age' => 20],
            ['nom' => 'Sassi', 'prenom' => 'Amira', 'email' => 'amira.sassi@student.tn', 'role' => 'Etudiant', 'age' => 19],
        ];

        foreach ($sampleUsers as $userData) {
            $user = new Users();
            $user->setNom($userData['nom']);
            $user->setPrenom($userData['prenom']);
            $user->setEmail($userData['email']);
            $user->setRole($userData['role']);
            $user->setAge($userData['age']);
            $user->setAdresseResidence('Tunis, Tunisia');
            $user->setTelephone('+216 ' . rand(20000000, 99999999));

            // Hash password (default: password123)
            $user->setPassword(
                $this->passwordHasher->hashPassword($user, 'password123')
            );

            $user->setCreatedAt(new \DateTime());
            $user->setUpdatedAt(new \DateTime());

            $this->entityManager->persist($user);
        }

        $this->entityManager->flush();

        $output->writeln('<info>Successfully inserted ' . count($sampleUsers) . ' sample users!</info>');
        $output->writeln('<comment>Default password for all users: password123</comment>');

        return Command::SUCCESS;
    }
}
