<?php
namespace App\Module;

interface ImageProviderInterface
{
    public function getImageUrls(): array;
}