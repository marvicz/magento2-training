<?php

namespace Training\ConsoleCommand\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CustomCommand
 * @package Training\ConsoleCommand\Console\Command
 */
class CustomCommand extends Command
{
    /** @var \Training\ConsoleCommand\Model\SomeLogic */
    protected $someLogicModel;

    /**
     * CustomCommand constructor.
     * @param \Training\ConsoleCommand\Model\SomeLogic $someLogicModel
     */
    public function __construct
    (
        \Training\ConsoleCommand\Model\SomeLogic $someLogicModel
    )
    {
        $this->someLogicModel = $someLogicModel;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('training:console:command');
        $this->setDescription('Training console command');

        /** This part is optional, it sets a command argument */
        $this->setDefinition([
            new InputOption(
                'getSomeLogic',
                null,
                InputOption::VALUE_NONE,
                'Returns SomeLogig Model result'
            )
        ]);

        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** This is executed when specified command is triggered */
        //$result = $this->someLogicModel->getLogicResult();
        //$output->writeln($result);


        /** This is when OptionalArgument is used */
        if ($requiredArgument = $input->getOption('getSomeLogic')) {
            $result = $this->someLogicModel->getLogicResult();
            $output->writeln('Result with optional argument: getSomeLogic - ' . $result);
        } else {
            $output->writeln("<fg=red;>You must specify the correct argument.</>");
            $output->writeln("<fg=red;>For more information see --help option.</>");
        }
    }
}