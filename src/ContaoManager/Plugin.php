<?php

namespace HeimrichHannot\SubColumnsBootstrapBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 *
 * @package HeimrichHannot\SubColumnsBootstrapBundle\ContaoManager
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('HeimrichHannot\SubColumnsBootstrapBundle\SubColumnsBootstrapBundle')
                ->setLoadAfter(['Subcolumns'])
        ];
    }
}
