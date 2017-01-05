<?php

namespace Toro\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class WidgetInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new WidgetInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
