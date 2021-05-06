<?php
namespace App\Modules\App;

interface ImageProviderInterface
{
    public function getImageUrls($theme): array;
}