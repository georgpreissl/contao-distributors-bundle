<?php

declare(strict_types=1);

/*
 * This file is part of distributors.
 * 
 * (c) Georg Preissl 2021 <g.preissl@heidlmair.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/georgpreissl/contao-distributors-bundle
 */

namespace Georgpreissl\ContaoDistributorsBundle\Model;

use Contao\Model;

/**
 * Class DistributorsModel
 *
 * @package Georgpreissl\ContaoDistributorsBundle\Model
 */
class DistributorsModel extends Model
{
    protected static $strTable = 'tl_distributors';

}

