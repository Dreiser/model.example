<?php
declare(strict_types=1);

namespace Example\Model\Service\UserMailService;

use Example\Model\Entity\User\User;
use Example\Model\Exception\Service\UserMailService\SendRegisterMailException;

/**
 * Class UserMailService
 * @package Example\Model\Service\UserMailService
 */
final class UserMailService implements UserMailServiceInterface
{
    /**
     * @param User $user
     *
     * @throws SendRegisterMailException
     */
    public function sendRegisterMail(User $user)
    {

    }
}