<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\ORM\Tools\Console\Command\ClearCache;

<<<<<<< HEAD
<<<<<<< HEAD
use Doctrine\ORM\Cache;
use Doctrine\ORM\Cache\Region\DefaultRegion;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
=======
=======
use Doctrine\ORM\Cache;
use Doctrine\ORM\Cache\Region\DefaultRegion;
>>>>>>> donmanager
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
<<<<<<< HEAD
use Doctrine\ORM\Cache\Region\DefaultRegion;
use Doctrine\ORM\Cache;
>>>>>>> contactmanager
=======
use Symfony\Component\Console\Style\SymfonyStyle;
>>>>>>> donmanager

/**
 * Command to clear a collection cache region.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CollectionRegionCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
        $this->setName('orm:clear-cache:region:collection')
             ->setDescription('Clear a second-level cache collection region')
             ->addArgument('owner-class', InputArgument::OPTIONAL, 'The owner entity name.')
             ->addArgument('association', InputArgument::OPTIONAL, 'The association collection name.')
             ->addArgument('owner-id', InputArgument::OPTIONAL, 'The owner identifier.')
             ->addOption('all', null, InputOption::VALUE_NONE, 'If defined, all entity regions will be deleted/invalidated.')
             ->addOption('flush', null, InputOption::VALUE_NONE, 'If defined, all cache entries will be flushed.')
             ->setHelp(<<<EOT
<<<<<<< HEAD
=======
        $this
        ->setName('orm:clear-cache:region:collection')
        ->setDescription('Clear a second-level cache collection region.')
        ->addArgument('owner-class', InputArgument::OPTIONAL, 'The owner entity name.')
        ->addArgument('association', InputArgument::OPTIONAL, 'The association collection name.')
        ->addArgument('owner-id', InputArgument::OPTIONAL, 'The owner identifier.')
        ->addOption('all', null, InputOption::VALUE_NONE, 'If defined, all entity regions will be deleted/invalidated.')
        ->addOption('flush', null, InputOption::VALUE_NONE,'If defined, all cache entries will be flushed.');


        $this->setHelp(<<<EOT
>>>>>>> contactmanager
=======
>>>>>>> donmanager
The <info>%command.name%</info> command is meant to clear a second-level cache collection regions for an associated Entity Manager.
It is possible to delete/invalidate all collection region, a specific collection region or flushes the cache provider.

The execution type differ on how you execute the command.
If you want to invalidate all entries for an collection region this command would do the work:

<info>%command.name% 'Entities\MyEntity' 'collectionName'</info>

To invalidate a specific entry you should use :

<info>%command.name% 'Entities\MyEntity' 'collectionName' 1</info>

If you want to invalidate all entries for the all collection regions:

<info>%command.name% --all</info>

Alternatively, if you want to flush the configured cache provider for an collection region use this command:

<info>%command.name% 'Entities\MyEntity' 'collectionName' --flush</info>

Finally, be aware that if <info>--flush</info> option is passed,
not all cache providers are able to flush entries, because of a limitation of its execution nature.
EOT
<<<<<<< HEAD
<<<<<<< HEAD
             );
=======
        );
>>>>>>> contactmanager
=======
             );
>>>>>>> donmanager
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $ui = new SymfonyStyle($input, $output);

=======
>>>>>>> contactmanager
=======
        $ui = new SymfonyStyle($input, $output);

>>>>>>> donmanager
        $em          = $this->getHelper('em')->getEntityManager();
        $ownerClass  = $input->getArgument('owner-class');
        $assoc       = $input->getArgument('association');
        $ownerId     = $input->getArgument('owner-id');
        $cache       = $em->getCache();

        if ( ! $cache instanceof Cache) {
            throw new \InvalidArgumentException('No second-level cache is configured on the given EntityManager.');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (( ! $ownerClass || ! $assoc) && ! $input->getOption('all')) {
=======
        if ( (! $ownerClass || ! $assoc) && ! $input->getOption('all')) {
>>>>>>> contactmanager
=======
        if (( ! $ownerClass || ! $assoc) && ! $input->getOption('all')) {
>>>>>>> donmanager
            throw new \InvalidArgumentException('Missing arguments "--owner-class" "--association"');
        }

        if ($input->getOption('flush')) {
            $collectionRegion  = $cache->getCollectionCacheRegion($ownerClass, $assoc);

            if ( ! $collectionRegion instanceof DefaultRegion) {
                throw new \InvalidArgumentException(sprintf(
                    'The option "--flush" expects a "Doctrine\ORM\Cache\Region\DefaultRegion", but got "%s".',
                    is_object($collectionRegion) ? get_class($collectionRegion) : gettype($collectionRegion)
                ));
            }

            $collectionRegion->getCache()->flushAll();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
            $ui->comment(
                sprintf(
                    'Flushing cache provider configured for <info>"%s#%s"</info>',
                    $ownerClass,
                    $assoc
                )
            );
<<<<<<< HEAD
=======
            $output->writeln(sprintf('Flushing cache provider configured for <info>"%s#%s"</info>', $ownerClass, $assoc));
>>>>>>> contactmanager
=======
>>>>>>> donmanager

            return;
        }

        if ($input->getOption('all')) {
<<<<<<< HEAD
<<<<<<< HEAD
            $ui->comment('Clearing <info>all</info> second-level cache collection regions');
=======
            $output->writeln('Clearing <info>all</info> second-level cache collection regions');
>>>>>>> contactmanager
=======
            $ui->comment('Clearing <info>all</info> second-level cache collection regions');
>>>>>>> donmanager

            $cache->evictEntityRegions();

            return;
        }

        if ($ownerId) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
            $ui->comment(
                sprintf(
                    'Clearing second-level cache entry for collection <info>"%s#%s"</info> owner entity identified by <info>"%s"</info>',
                    $ownerClass,
                    $assoc,
                    $ownerId
                )
            );
<<<<<<< HEAD
=======
            $output->writeln(sprintf('Clearing second-level cache entry for collection <info>"%s#%s"</info> owner entity identified by <info>"%s"</info>', $ownerClass, $assoc, $ownerId));
>>>>>>> contactmanager
=======
>>>>>>> donmanager
            $cache->evictCollection($ownerClass, $assoc, $ownerId);

            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $ui->comment(sprintf('Clearing second-level cache for collection <info>"%s#%s"</info>', $ownerClass, $assoc));
        $cache->evictCollectionRegion($ownerClass, $assoc);
    }
}
=======
        $output->writeln(sprintf('Clearing second-level cache for collection <info>"%s#%s"</info>', $ownerClass, $assoc));
        $cache->evictCollectionRegion($ownerClass, $assoc);
    }
}
>>>>>>> contactmanager
=======
        $ui->comment(sprintf('Clearing second-level cache for collection <info>"%s#%s"</info>', $ownerClass, $assoc));
        $cache->evictCollectionRegion($ownerClass, $assoc);
    }
}
>>>>>>> donmanager
