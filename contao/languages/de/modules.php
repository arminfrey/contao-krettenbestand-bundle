<?php

declare(strict_types=1);

/*
 * This file is part of contao-krettenbestand-bundle.
 *
 * (c) Armin Frey 2025 <webmaster@krettenweiber.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/arminfrey/contao-krettenbestand-bundle
 */

use Arminfrey\ContaoKrettenbestandBundle\Controller\FrontendModule\KrettenListingController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['kretten_modul'] = 'Krettenbestand';
$GLOBALS['TL_LANG']['MOD']['kretten_collection'] = ['Krettenbestand', 'Krettenbestand'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['kretten_module'] = 'Krettenbestand';
$GLOBALS['TL_LANG']['FMD'][KrettenListingController::TYPE] = ['Krettenbestand', 'Krettenbestand'];
