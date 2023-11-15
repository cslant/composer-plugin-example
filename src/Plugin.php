<?php

namespace Cslant\ComposerPlugin\Example;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;
use Composer\Script\ScriptEvents;
use Composer\EventDispatcher\EventSubscriberInterface;

class Plugin implements PluginInterface, EventSubscriberInterface
{
    protected Composer $composer;

    protected IOInterface $io;

    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PluginEvents::INIT => ['installOrUpdate', 0],
            ScriptEvents::POST_INSTALL_CMD => ['installOrUpdate', 0],
        ];
    }

    public function installOrUpdate($event): void
    {
        $this->io->write('Hello world!');
    }
}
