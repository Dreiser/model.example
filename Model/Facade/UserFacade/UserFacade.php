<?php
declare(strict_types=1);

namespace Example\Model\Facade\UserFacade;

use Example\Model\DTO\UserDTO\UserDTO;
use Example\Model\DTO\UserDTO\UserDTOFactoryInterface;
use Example\Model\Entity\User\UserFactoryInterface;
use Example\Model\EntityManager\EntityManagerInterface;
use Example\Model\Exception\Service\UserDTOService\UserDTOValidationException;
use Example\Model\Service\UserDTOService\UserDTOServiceInterface;
use Example\Model\Service\UserMailService\UserMailServiceInterface;

/**
 * Class UserFacade
 */
final class UserFacade implements UserFacadeInterface
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var UserDTOFactoryInterface */
    private $userDTOFactory;

    /** @var UserDTOServiceInterface */
    private $userDTOService;

    /** @var UserFactoryInterface */
    private $userFactory;

    /** @var UserMailServiceInterface */
    private $userMailService;

    /**
     * UserFacade constructor.
     *
     * @param EntityManagerInterface   $entityManager
     * @param UserDTOFactoryInterface  $userDTOFactory // probably can be static methods
     * @param UserDTOServiceInterface  $userDTOService
     * @param UserFactoryInterface     $userFactory // probably can be static methods
     * @param UserMailServiceInterface $userMailService
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        UserDTOFactoryInterface $userDTOFactory,
        UserDTOServiceInterface $userDTOService,
        UserFactoryInterface $userFactory,
        UserMailServiceInterface $userMailService
    )
    {
        $this->entityManager = $entityManager;
        $this->userDTOFactory = $userDTOFactory;
        $this->userDTOService = $userDTOService;
        $this->userFactory = $userFactory;
        $this->userMailService = $userMailService;
    }

    /**
     * @param UserDTO $userDTO
     *
     * @return UserDTO
     *
     * @throws UserDTOValidationException
     */
    public function register(UserDTO $userDTO): UserDTO
    {
        $this->userDTOService->validate($userDTO);
        $user = $this->userFactory->createFromDTO($userDTO);
        $this->entityManager->persist($user);
        $this->userMailService->sendRegisterMail($user);
        $this->entityManager->flush();
        return $userDTO;
    }

    /**
     * @param UserDTO $userDTO
     *
     * @return bool
     */
    public function unsubscribe(UserDTO $userDTO): bool
    {

    }
}