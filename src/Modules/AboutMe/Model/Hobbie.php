<?php

namespace App\Modules\AboutMe\Model;

class Hobbie
{
    private string $title;
    private array $images = [];

    public function __construct(string $title, array $images)
    {
        $this->setTitle($title);
        $this->setImages($images);
    }

    public function setTitle(string $title)
    {
        $this->title = $title; 
    }

    public function setImages(array $images)
    {
        $this->images = $images;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImages(): array
    {
        return $this->images;
    }


}