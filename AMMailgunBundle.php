<?php

namespace MauticPlugin\AMMailgunBundle;

use MauticPlugin\AMMailgunBundle\DependencyInjection\Compiler\EmailTransportPass;
use Mautic\PluginBundle\Bundle\PluginBundleBase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class AMMailgunBundle.
 */
class AMMailgunBundle extends PluginBundleBase
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new EmailTransportPass());
    }
}
