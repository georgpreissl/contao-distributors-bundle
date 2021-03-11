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
declare(strict_types=1);

namespace Georgpreissl\ContaoDistributorsBundle\Tests\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\DelegatingParser;
use Contao\TestCase\ContaoTestCase;
use Georgpreissl\ContaoDistributorsBundle\ContaoManager\Plugin;
use Georgpreissl\ContaoDistributorsBundle\GeorgpreisslContaoDistributorsBundle;

/**
 * Class PluginTest
 *
 * @package Georgpreissl\ContaoDistributorsBundle\Tests\ContaoManager
 */
class PluginTest extends ContaoTestCase
{
    /**
     * Test Contao manager plugin class instantiation
     */
    public function testInstantiation(): void
    {
        $this->assertInstanceOf(Plugin::class, new Plugin());
    }

    /**
     * Test returns the bundles
     */
    public function testGetBundles(): void
    {
        $plugin = new Plugin();

        /** @var array $bundles */
        $bundles = $plugin->getBundles(new DelegatingParser());

        $this->assertCount(1, $bundles);
        $this->assertInstanceOf(BundleConfig::class, $bundles[0]);
        $this->assertSame(GeorgpreisslContaoDistributorsBundle::class, $bundles[0]->getName());
        $this->assertSame([ContaoCoreBundle::class], $bundles[0]->getLoadAfter());
    }

}
