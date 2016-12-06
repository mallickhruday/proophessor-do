<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Prooph\ProophessorDo\Container\Model\User;

use Interop\Container\ContainerInterface;
use Prooph\ProophessorDo\Model\User\Handler\RegisterUserHandler;
use Prooph\ProophessorDo\Model\User\Service\ChecksUniqueUsersEmailAddress;
use Prooph\ProophessorDo\Model\User\UserCollection;

/**
 * Class RegisterUserHandlerFactory
 *
 * @package Application\Infrastructure\HandlerFactory
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class RegisterUserHandlerFactory
{
    /**
     * @param ContainerInterface $container
     * @return RegisterUserHandler
     */
    public function __invoke(ContainerInterface $container)
    {
        return new RegisterUserHandler(
            $container->get(UserCollection::class),
            $container->get(ChecksUniqueUsersEmailAddress::class)
        );
    }
}
