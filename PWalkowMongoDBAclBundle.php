<?php

/*
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PWalkow\MongoDBAclBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use PWalkow\MongoDBAclBundle\DependencyInjection\PWalkowMongoDBAclExtension;

/**
 * @author Richard Shank <develop@zestic.com>
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class PWalkowMongoDBAclBundle extends Bundle
{
    /**
     * @return ExtensionInterface
     */
    public function getContainerExtension()
    {
        return new PWalkowMongoDBAclExtension();
    }
}