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

namespace Doctrine\ORM\Tools\Console\Command;

use Symfony\Component\Console\Command\Command;
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Throwable;
=======
use Symfony\Component\Console\Input\InputOption;
=======
>>>>>>> donmanager
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
<<<<<<< HEAD
>>>>>>> contactmanager
=======
use Symfony\Component\Console\Style\SymfonyStyle;
use Throwable;
>>>>>>> donmanager

/**
 * Command to ensure that Doctrine is properly configured for a production environment.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @version $Revision$
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class EnsureProductionSettingsCommand extends Command
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
        $this->setName('orm:ensure-production-settings')
             ->setDescription('Verify that Doctrine is properly configured for a production environment')
             ->addOption('complete', null, InputOption::VALUE_NONE, 'Flag to also inspect database connection existence.')
             ->setHelp('Verify that Doctrine is properly configured for a production environment.');
<<<<<<< HEAD
=======
        $this
        ->setName('orm:ensure-production-settings')
        ->setDescription('Verify that Doctrine is properly configured for a production environment.')
        ->setDefinition(array(
            new InputOption(
                'complete', null, InputOption::VALUE_NONE,
                'Flag to also inspect database connection existence.'
            )
        ))
        ->setHelp(<<<EOT
Verify that Doctrine is properly configured for a production environment.
EOT
        );
>>>>>>> contactmanager
=======
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
        $em = $this->getHelper('em')->getEntityManager();

        try {
            $em->getConfiguration()->ensureProductionSettings();

            if ($input->getOption('complete') !== null) {
                $em->getConnection()->connect();
            }
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (Throwable $e) {
            $ui->error($e->getMessage());
=======
        } catch (\Exception $e) {
            $output->writeln('<error>' . $e->getMessage() . '</error>');
>>>>>>> contactmanager
=======
        } catch (Throwable $e) {
            $ui->error($e->getMessage());
>>>>>>> donmanager

            return 1;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $ui->success('Environment is correctly configured for production.');

        return 0;
=======
        $output->writeln('<info>Environment is correctly configured for production.</info>');
>>>>>>> contactmanager
=======
        $ui->success('Environment is correctly configured for production.');

        return 0;
>>>>>>> donmanager
    }
}
