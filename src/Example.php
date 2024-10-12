<?php

namespace App;

use App\Repository\VersionRepository;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel;

require_once 'vendor/autoload.php';


$kernel = new class('dev', true) extends Kernel {
    use MicroKernelTrait;
};


$repo = $kernel->getContainer()->get(VersionRepository::class);
assert($repo instanceof VersionRepository);

// not okay
$version = $repo->findBy([]);

// okay
$versions = $repo->all();

