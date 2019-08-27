<?php

namespace CultuurNet\EntryJsonDemo\Console;

use CultuurNet\EntryJsonDemo\EntryPoster\EntryPosterInterface;
use Knp\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EntryCommand extends Command
{
    /**
     * @var EntryPosterInterface
     */
    protected $entry;

    /**
     * EntryCommand constructor.
     * @param EntryPosterInterface $fetcher
     */
    public function __construct(EntryPosterInterface $entry)
    {
        $this->entry = $entry;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('entryPoster')
            ->setDescription('.');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
            $this->entry->postMovie($input);
    }
}
