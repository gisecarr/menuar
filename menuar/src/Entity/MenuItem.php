<?php

namespace App\Entity;

use App\Repository\MenuItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

use function Symfony\Component\String\s;

/**
 * @ORM\Entity(repositoryClass=MenuItemRepository::class)
 */
class MenuItem
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgSrc;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="boolean")
     */
    private $available;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $calories;

    /**
     * @ORM\Column(type="boolean")
     */
    private $celiac;

    /**
     * @ORM\Column(type="boolean")
     */
    private $vegan;

    /**
     * @ORM\Column(type="boolean")
     */
    private $vegetarian;

    /**
     * @ORM\ManyToOne(targetEntity=Restaurant::class, inversedBy="menuItems")
     */
    private $restaurant;

    function __construct()
    {
        $this->vegan = false;
        $this->vegetarian = false;
        $this->celiac = false;
        $this->available = true;
    }

    /**
     * @return mixed
     */
    public function getCategory() : string
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImgSrc(): ?string
    {
        return $this->imgSrc;
    }

    public function setImgSrc(?string $imgSrc): self
    {
        $this->imgSrc = $imgSrc;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(?int $calories): self
    {
        $this->calories = $calories;

        return $this;
    }

    public function getCeliac(): ?bool
    {
        return $this->celiac;
    }

    public function setCeliac(bool $celiac): self
    {
        $this->celiac = $celiac;

        return $this;
    }

    public function getVegan(): ?bool
    {
        return $this->vegan;
    }

    public function setVegan(bool $vegan): self
    {
        $this->vegan = $vegan;

        return $this;
    }

    public function getVegetarian(): ?bool
    {
        return $this->vegetarian;
    }

    public function setVegetarian(bool $vegetarian): self
    {
        $this->vegetarian = $vegetarian;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }
}