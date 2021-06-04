<?php
namespace App\View\AboutMe;

class AboutMePageView
{
    private array $hobbies;

    public function __construct(array $hobbies)
    {
        $this->hobbies = $hobbies;
    }

    public function buildParams(): array
    {
        $hobbiesParams = [];
        foreach ($this->hobbies as $hobby)
        {
            $hobbiesParams[$hobby->getTitle()] = $hobby->getImages();
        }
        return [ 'hobbies' => $hobbiesParams ];
    }
}