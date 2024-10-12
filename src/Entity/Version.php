<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\VersionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VersionRepository::class)]
#[ORM\Table(name: 'version')]
#[ORM\UniqueConstraint(name: 'idx_number', columns: ['number'])]
class Version
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'smallint')]
    private int $id;

    #[ORM\Column(type: 'string', length: 10)]
    private string $number;


    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }
}
