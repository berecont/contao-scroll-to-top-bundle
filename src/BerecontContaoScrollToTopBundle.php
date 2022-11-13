<?php

declare(strict_types=1);

/*
 * This file is part of Contao ScrollToTop Bundle.
 *
 * (c) beRnhard renner 2022 <bernhard@werbepanorama.at>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/berecont/contao-scroll-to-top-bundle
 */

namespace Berecont\ContaoScrollToTopBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BerecontContaoScrollToTopBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

    }
}
