<?php

namespace App\Classes;

class Beer

{
    protected $name;
    protected $price;
    protected $content;
    protected $alcoholVolume;
    protected $origin;
    protected $ingredients;
    protected $hops;
    protected $image;

    public function __construct($name, $price, $content, $alcoholVolume, $origin, $ingredients, $hops, $image )

    {
        $this -> $price = $price;
        $this -> $content = $content;
        $this -> $alcoholVolume = $alcoholVolume;
        $this -> $origin = $origin;
        $this -> $ingredients = $ingredients;
        $this -> $hops = $hops;
        $this -> $image = $image;
    }
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of alcoholVolume
     */ 
    public function getAlcoholVolume()
    {
        return $this->alcoholVolume;
    }

    /**
     * Set the value of alcoholVolume
     *
     * @return  self
     */ 
    public function setAlcoholVolume($alcoholVolume)
    {
        $this->alcoholVolume = $alcoholVolume;

        return $this;
    }

    /**
     * Get the value of origin
     */ 
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set the value of origin
     *
     * @return  self
     */ 
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of hops
     */ 
    public function getHops()
    {
        return $this->hops;
    }

    /**
     * Set the value of hops
     *
     * @return  self
     */ 
    public function setHops($hops)
    {
        $this->hops = $hops;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}