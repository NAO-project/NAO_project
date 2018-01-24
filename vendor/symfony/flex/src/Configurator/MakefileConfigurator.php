<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Flex\Configurator;

use Symfony\Flex\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class MakefileConfigurator extends AbstractConfigurator
{
    public function configure(Recipe $recipe, $definitions)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->write('Added Makefile entries');
=======
        $this->write('Adding Makefile entries');
>>>>>>> contactmanager
=======
        $this->write('Added Makefile entries');
>>>>>>> donmanager

        $makefile = getcwd().'/Makefile';
        if ($this->isFileMarked($recipe, $makefile)) {
            return;
        }

        $data = $this->markData($recipe, implode("\n", $definitions));

        if (!file_exists($makefile)) {
<<<<<<< HEAD
<<<<<<< HEAD
            file_put_contents(
                getcwd().'/Makefile',
                <<<EOF
=======
            file_put_contents(getcwd().'/Makefile', <<<EOF
>>>>>>> contactmanager
=======
            file_put_contents(
                getcwd().'/Makefile',
                <<<EOF
>>>>>>> donmanager
ifndef APP_ENV
	include .env
endif

.DEFAULT_GOAL := help
.PHONY: help
help:
	@grep -E '^[a-zA-Z-]+:.*?## .*$$' Makefile | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-15s\033[0m %s\\n", $$1, $$2}'

EOF
            );
        }
        file_put_contents(getcwd().'/Makefile', "\n".ltrim($data, "\r\n"), FILE_APPEND);
    }

    public function unconfigure(Recipe $recipe, $vars)
    {
        if (!file_exists($makefile = getcwd().'/Makefile')) {
            return;
        }

        $contents = preg_replace(sprintf('{%s*###> %s ###.*###< %s ###%s+}s', "\n", $recipe->getName(), $recipe->getName(), "\n"), "\n", file_get_contents($makefile), -1, $count);
        if (!$count) {
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->write(sprintf('Removed Makefile entries from %s', $makefile));
=======
        $this->write(sprintf('Removing Makefile entries from %s', $makefile));
>>>>>>> contactmanager
=======
        $this->write(sprintf('Removed Makefile entries from %s', $makefile));
>>>>>>> donmanager
        if (!trim($contents)) {
            @unlink($makefile);
        } else {
            file_put_contents($makefile, ltrim($contents, "\r\n"));
        }
    }
}
