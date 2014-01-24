<?php
namespace Composer\Installers;

class UFOCmfInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'modules/{$name}/',
        'root'   => '{$name}/'
    );
}