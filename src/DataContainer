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

namespace Arminfrey\ContaoKrettenbestandBundle\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\DataContainer;
use Contao\Input;
use Contao\System;

#[AsCallback(table: 'tl_kretteninformationen', target: 'edit.buttons', priority: 100)]
class Kretteninformationen
{

    public function __construct(
        private readonly ContaoFramework $framework,
    ) {
    }

    public function __invoke(array $arrButtons, DataContainer $dc): array
    {
        $inputAdapter = $this->framework->getAdapter(Input::class);
        $systemAdapter = $this->framework->getAdapter(System::class);

        $systemAdapter->loadLanguageFile('tl_kretteninformationen');

        if ('edit' === $inputAdapter->get('act')) {
            $arrButtons['customButton'] = '<button type="submit" name="customButton" id="customButton" class="tl_submit customButton" accesskey="x">'.$GLOBALS['TL_LANG']['tl_kretteninformationen']['customButton'].'</button>';
        }

        return $arrButtons;
    }
}
