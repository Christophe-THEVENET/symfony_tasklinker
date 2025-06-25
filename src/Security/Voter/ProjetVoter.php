<?php

namespace App\Security\Voter;

use App\Entity\Projet;
use App\Entity\Employe;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ProjetVoter extends Voter
{
    public const ACCESS = 'access';

    protected function supports(string $attribute, $subject): bool
    {
        return $attribute === self::ACCESS && $subject instanceof Projet;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!$user instanceof Employe) {
            return false;
        }

        // Admin : accès à tout
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return true;
        }

        /** @var Projet $projet */
        $projet = $subject;
        // L'employé doit être lié au projet
        return $projet->getEmployes()->contains($user);
    }
}
