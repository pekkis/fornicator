<?php

namespace Fornicator;

use Fornicator\Recipe\RecipeInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Application;

class Fornicator extends Application
{
    private $recipes = array();

    public function addRecipe(RecipeInterface $recipe)
    {
        $this->recipes[] = $recipe;
    }

    public function getRecipes()
    {
        return $this->recipes;
    }

}
