<?php
declare(strict_types=1);

namespace Example\Model\Service\UserDTOService;

use Example\Model\DTO\UserDTO\UserDTO;
use Example\Model\Exception\Service\UserDTOService\UserDTOValidationException;

/**
 * Interface UserDTOServiceInterface
 * @package Example\Model\Service\UserDTOService
 */
interface UserDTOServiceInterface
{
    /**
     * @param UserDTO $userDTO
     *
     * @throws UserDTOValidationException
     */
    public function validate(UserDTO $userDTO);
}