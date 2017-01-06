<?php

namespace Toro\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class WidgetInstaller extends LibraryInstaller
{
    /**
     * {@inheritdoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'app/widgets/remote/' . $package->getPrettyName();
    }

    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return 'toro-widget' === $packageType;
    }
}
