<?php
namespace Absolute\SilexApi\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AllCommand extends Command
{
    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this
            ->setName('absolute:silexapi:generation:all')
            ->setDescription('Trigger all generation commands.');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $routeCommand = new RouteCommand();
        $routeCommand->execute($input, $output);

        $swaggerCommand = new SwaggerCommand();
        $swaggerCommand->execute($input, $output);
    }
}
