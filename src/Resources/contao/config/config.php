<?php

/*
 * This file is part of distributors.
 * 
 * (c) Georg Preissl 2021 <g.preissl@heidlmair.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/georgpreissl/contao-distributors-bundle
 */

use Georgpreissl\ContaoDistributorsBundle\Model\DistributorsModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['pet_modules']['pet_collection'] = array(
    'tables' => array('tl_distributors')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_distributors'] = DistributorsModel::class;
