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

namespace Arminfrey\ContaoKrettenbestandBundle\ContaoManager;

use Arminfrey\ContaoKrettenbestandBundle\ArminfreyContaoKrettenbestandBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ArminfreyContaoKrettenbestandBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
