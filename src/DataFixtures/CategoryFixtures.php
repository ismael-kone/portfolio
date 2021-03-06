<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Services',
        'Presentation',
        'Portfolio'

    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $this->addReference ('category_'. $key, $category);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
