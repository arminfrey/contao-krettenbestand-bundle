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
 * Frontend modules
 */
$GLOBALS['TL_DCA']['tl_module']['palettes'][KrettenListingController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
