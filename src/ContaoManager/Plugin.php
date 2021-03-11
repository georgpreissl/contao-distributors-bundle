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

namespace Georgpreissl\ContaoDistributorsBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Georgpreissl\ContaoDistributorsBundle\GeorgpreisslContaoDistributorsBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}
