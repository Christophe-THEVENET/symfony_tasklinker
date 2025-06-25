<?php

namespace App\Security\Voter;

use App\Entity\Tache;
use App\Entity\Employe;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class TacheVoter extends Voter
{
    public const ACCESS = 'access';

    protected function supports(string $attribute, $subject): bool
    {
        return $attribute === self::ACCESS && $subject instanceof Tache;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!$user instanceof Employe) {
            return false;
        }

        // Les admins peuvent tout voir
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return true;
        }

        /** @var Tache $tache */
        $tache = $subject;

        // L'employé ne peut voir que les tâches où il est lié
        return $tache->getEmploye() === $user;
    }
}
