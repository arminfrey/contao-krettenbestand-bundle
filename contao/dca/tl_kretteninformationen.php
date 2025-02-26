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

use Contao\Backend;
use Contao\DataContainer;
use Contao\DC_Table;
use Contao\Input;

/**
 * Table tl_kretteninformationen
 */
$GLOBALS['TL_DCA']['tl_kretteninformationen'] = array(
    'config'      => array(
        'dataContainer'    => DC_Table::class,
        'enableVersioning' => true,
        'sql'              => array(
            'keys' => array(
                'id' => 'primary'
            )
        ),
    ),
    'list'        => array(
        'sorting'           => array(
            'mode'        => DataContainer::MODE_SORTABLE,
            'fields'      => array('title'),
            'flag'        => DataContainer::SORT_INITIAL_LETTER_ASC,
            'panelLayout' => 'filter;sort,search,limit'
        ),
        'label'             => array(
            'fields' => array('title'),
            'format' => '%s',
        ),
        'global_operations' => array(
            'all' => array(
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations'        => array(
            'edit'   => array(
                'href'  => 'act=edit',
                'icon'  => 'edit.svg'
            ),
            'copy'   => array(
                'href'  => 'act=copy',
                'icon'  => 'copy.svg'
            ),
            'delete' => array(
                'href'       => 'act=delete',
                'icon'       => 'delete.svg',
                'attributes' => 'onclick="if(!confirm(\'' . ($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? null) . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show'   => array(
                'href'       => 'act=show',
                'icon'       => 'show.svg',
                'attributes' => 'style="margin-right:3px"'
            ),
        )
    ),
    'palettes'    => array(
        '__selector__' => array('addSubpalette'),
        'default'      => '{first_legend},besitzer,selectField,checkboxField,multitextField;{second_legend},addSubpalette'
    ),
    'subpalettes' => array(
        'addSubpalette' => 'textareaField',
    ),
    'fields'      => array(
        'id'             => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp'         => array(
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'besitzer'    => array(
            'inputType' => 'select',
            'exclude'   => true,
            'search'    => true,
            'filter'    => true,
            'sorting'   => true,
	        'foreignKey' =>  'tl_member.CONCAT(lastname,", ",firstname)',
            'eval'      => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''"
            //'relation'  => array('type' => 'hasOne', 'load' => 'lazy')
        ),
        'hoehe'    => array(
            'inputType'   => 'text',
            'exclude'     => true,
            'eval'        => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50', 'rgxp' => 'digit'),
            'sql'        => "varchar(255) NOT NULL default ''"

        )
        'breite'    => array(
            'inputType'   => 'text',
            'exclude'     => true,
            'eval'        => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50', 'rgxp' => 'digit'),
            'sql'        => "varchar(255) NOT NULL default ''"

        ),
        'durchmesser'    => array(
            'inputType'   => 'text',
            'exclude'     => true,
            'eval'        => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50', 'rgxp' => 'digit'),
            'sql'        => "varchar(255) NOT NULL default ''"

        ),
        'beschreibung'  => array(
            'inputType' => 'textarea',
            'exclude'   => true,
            'search'    => true,
            'filter'    => true,
            'sorting'   => true,
            'eval'      => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
            'sql'       => 'text NULL'
        ),
        'krettenbild'    => array(
            'inputType'               => 'fileTree',
            'exclude'                 => true,
            'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio'),
            'sql'                     => "binary(16) NULL"
        )
        
       
    )
);
