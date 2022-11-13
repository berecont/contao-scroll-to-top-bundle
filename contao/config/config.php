<?php

/*
 * This file is part of Contao ScrollToTop Bundle.
 *
 * (c) beRnhard renner 2022 <bernhard@werbepanorama.at>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/berecont/contao-scroll-to-top-bundle
 */

 
$GLOBALS['TL_BODY'][] = '<script src="/bundles/berecontcontaoscrolltotop/js/script.js"></script>';
$GLOBALS['TL_HEAD'][] = '<link rel="preload" href="/bundles/berecontcontaoscrolltotop/css/styles.css" as="style" onload="this.onload=null; this.rel=\'stylesheet\';">';

