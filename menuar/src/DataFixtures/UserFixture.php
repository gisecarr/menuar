<?php

namespace App\DataFixtures;

use App\Entity\MenuItem;
use App\Entity\Restaurant;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private UserPasswordEncoderInterface $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername("lanovaviola");
        $user->setPassword($this->passwordEncoder->encodePassword(
                         $user, 'asdqwe'));
        $manager->persist($user);
        $manager->flush();

        $restaurant = new Restaurant();
        $restaurant->setName("La nova viola");
        $restaurant->setNormalizedName("lanovaviola");
        $restaurant->setOwner($user);
        $restaurant->setSlogan("Platos lindos");
        $restaurant->setQrCodeSrc("www.qr.com");

        $restaurant->addMenuItem($this->createMenuItem('Papas fritas', 'Altas papas ameo', 'acompanamientos'));
        $restaurant->addMenuItem($this->createMenuItem('Milanga de poio', 'La mejor milanga de las milangas', 'minutas'));
        $restaurant->addMenuItem($this->createMenuItem('Pizza napolitana', 'Alta napo, mucho ajo', 'pizzas'));
        $restaurant->addMenuItem($this->createMenuItem('Pizza de muzza', 'clasica muzza', 'pizzas'));
        $restaurant->addMenuItem($this->createMenuItem('Fideos con tuco', 'pasta casera', 'pastas'));

        $manager->persist($restaurant);
        $manager->flush();
    }

    private function createMenuItem($name, $description, $category) : MenuItem
    {
        $menuItem = new MenuItem();
        $menuItem->setName($name);
        $menuItem->setDescription($description);
        $menuItem->setCategory($category);
        $menuItem->setAvailable(true);
        $menuItem->setCalories(500);
        $menuItem->setCeliac(true);
        $menuItem->setPrice(350);
        $menuItem->setVegetarian(true);
        return $menuItem;

    }
}
