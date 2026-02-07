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
    name: 'app:create-user',
    description: 'Creates a new user.',
)]
class CreateUserCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $user = new Users();
        $user->setEmail('admin@learnflex.com');
        $user->setNom('Admin');
        $user->setPrenom('User');
        $user->setRole('Admin');
        $user->setPassword(
            $this->passwordHasher->hashPassword(
                $user,
                'password123!'
            )
        );
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt(new \DateTime());

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $output->writeln('User created successfully: admin@learnflex.com / password123!');

        return Command::SUCCESS;
    }
}
