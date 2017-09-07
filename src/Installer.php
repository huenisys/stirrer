<?php

namespace Stirrer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return '_stir';
    }

    public function supports($packageType)
    {
        return 'stir-package' === $packageType;
    }
}