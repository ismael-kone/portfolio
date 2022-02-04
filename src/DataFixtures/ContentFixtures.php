<?php

namespace App\DataFixtures;

use App\Entity\Content;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ContentFixtures extends Fixture
{
    const CONTENT = [
        ['name' => 'Ismael Kone' ,'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacus diam, imperdiet ac lorem in, lobortis vestibulum eros. Vestibulum ut egestas tortor. Nulla blandit nunc vel orci sollicitudin ultrices. Mauris ac risus et dolor condimentum molestie.'
        ,'poster' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png'],
        ['name' => 'Front-End' ,'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacus diam, imperdiet ac lorem in, lobortis vestibulum eros. Vestibulum ut egestas tortor. Nulla blandit nunc vel orci sollicitudin ultrices. Mauris ac risus et dolor condimentum molestie.'
            ,'poster' => 'IMG_8637.PNG'],
        ['name' => 'Back-End' ,'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacus diam, imperdiet ac lorem in, lobortis vestibulum eros. Vestibulum ut egestas tortor. Nulla blandit nunc vel orci sollicitudin ultrices. Mauris ac risus et dolor condimentum molestie.'
            ,'poster' => 'IMG_8637.PNG'],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CONTENT as $key => $contentName) {
            $content = new Content();
            $content->setName($contentName ["name"]);
            $content->setDescription($contentName ["description"]);
            $content->setPoster($contentName ['poster']);
            $content->setCategory($this->getReference('category_'. $key, $content));
            $manager->persist($content);
            // $product = new Product();
            // $manager->persist($product);
        }
        $manager->flush();
    }
}
