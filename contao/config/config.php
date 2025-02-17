<?php

/*
 * This file is part of contao-krettenbestand-bundle.
 *
 * (c) Armin Frey 2025 <webmaster@krettenweiber.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/arminfrey/contao-krettenbestand-bundle
 */

use Arminfrey\ContaoKrettenbestandBundle\Model\KretteninformationenModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['kretten_modul']['kretten_collection'] = array(
    'tables' => array('tl_kretteninformationen')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_kretteninformationen'] = KretteninformationenModel::class;
