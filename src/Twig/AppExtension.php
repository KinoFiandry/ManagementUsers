<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('format_name', [$this, 'formatName']),
        ];
    }

    public function formatName(string $nom, string $prenom): string
    {
        return mb_strtoupper($nom) . ' ' . ucfirst(mb_strtolower($prenom));
    }
}