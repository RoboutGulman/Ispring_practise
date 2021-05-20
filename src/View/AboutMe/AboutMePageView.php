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
        return [ 'hobbies' => $this->hobbies ];
    }
}