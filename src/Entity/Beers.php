<?php

namespace App\Entity;

use App\Repository\BeersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BeersRepository::class)
 */
class Beers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="float")
     */
    private $content;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="float")
     */
    private $alcoholVol;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $origin;

    /**
     * @ORM\Column(type="text")
     */
    private $ingredients;

    /**
     * @ORM\Column(type="text")
     */
    private $hops;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getContent(): ?float
    {
        return $this->content;
    }

    public function setContent(float $content): self
    {
        $this->content = $content;

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

    public function getAlcoholVol(): ?float
    {
        return $this->alcoholVol;
    }

    public function setAlcoholVol(float $alcoholVol): self
    {
        $this->alcoholVol = $alcoholVol;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getHops(): ?string
    {
        return $this->hops;
    }

    public function setHops(string $hops): self
    {
        $this->hops = $hops;

        return $this;
    }
}
