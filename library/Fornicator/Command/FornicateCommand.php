<?php

namespace Fornicator\Command;

use Fornicator\Fornicator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Fornicator\Recipe\ApcRecipe;
use Fornicator\Recipe\StatRecipe;

class FornicateCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('fornicate')
            ->setDescription('Fornicate')
            ->addOption('apc', null, InputOption::VALUE_NONE)
            ->addOption('stat', null, InputOption::VALUE_NONE);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        if ($input->getOptions('apc')) {
            $this->getApplication()->addRecipe(new ApcRecipe());
        }

        if ($input->getOptions('stat')) {
            $this->getApplication()->addRecipe(new StatRecipe());
        }

        foreach ($this->getApplication()->getRecipes() as $recipe) {
            $output->writeln('Fornicating ' . get_class($recipe));
            $recipe->fornicate();
        }
    }

}
