<?php

namespace Stirrer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{

  /**
   * Apply plugin modifications to Composer
   *
   * @param Composer    $composer
   * @param IOInterface $io
   */
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new Installer($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}