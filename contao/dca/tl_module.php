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

use Berecont\ContaoScrollToTopBundle\Controller\FrontendModule\ScrolltotopDefaultController;

/**
 * Frontend modules
 */
$GLOBALS['TL_DCA']['tl_module']['palettes'][ScrolltotopDefaultController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
