<?php
declare(strict_types=1);

namespace Example\Model\DTO\UserDTO;

use Example\Model\Entity\User\User;

/**
 * Interface UserDTOFactoryInterface
 * @package Example\Model\DTO\UserDTO
 */
interface UserDTOFactoryInterface
{
    /**
     * @return UserDTO
     */
    public function create(): UserDTO;

    /**
     * @param User $user
     *
     * @return UserDTO
     */
    public function createFromUser(User $user): UserDTO;
}
