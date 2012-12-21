<?php

namespace Fornicator\Recipe;

use Fornicator\Fornicator;

class ApcRecipe implements RecipeInterface
{
    public function fornicate()
    {
        apc_clear_cache();
        apc_clear_cache("user");
    }
}
