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
class CopyFromRecipeConfigurator extends AbstractConfigurator
{
    public function configure(Recipe $recipe, $config)
    {
        $this->write('Setting configuration and copying files');
        $this->copyFiles($config, $recipe->getFiles(), getcwd());
    }

    public function unconfigure(Recipe $recipe, $config)
    {
        $this->write('Removing configuration and files');
        $this->removeFiles($config, $recipe->getFiles(), getcwd());
    }

    private function copyFiles(array $manifest, array $files, string $to)
    {
        foreach ($manifest as $source => $target) {
            $target = $this->options->expandTargetDir($target);
            if ('/' === substr($source, -1)) {
<<<<<<< HEAD
                $this->copyDir($source, $this->path->concatenate([$to, $target]), $files);
            } else {
                $this->copyFile($this->path->concatenate([$to, $target]), $files[$source]['contents'], $files[$source]['executable']);
=======
                $this->copyDir($source, $to.'/'.$target, $files);
            } else {
                $this->copyFile($to.'/'.$target, $files[$source]['contents'], $files[$source]['executable']);
>>>>>>> contactmanager
            }
        }
    }

    private function copyDir(string $source, string $target, array $files)
    {
        foreach ($files as $file => $data) {
            if (0 === strpos($file, $source)) {
<<<<<<< HEAD
                $file = $this->path->concatenate([$target, substr($file, strlen($source))]);
=======
                $file = $target.'/'.substr($file, strlen($source));
>>>>>>> contactmanager
                $this->copyFile($file, $data['contents'], $data['executable']);
            }
        }
    }

    private function copyFile(string $to, string $contents, bool $executable)
    {
        if (file_exists($to)) {
            return;
        }

        if (!is_dir(dirname($to))) {
            mkdir(dirname($to), 0777, true);
        }

        file_put_contents($to, $contents);
        if ($executable) {
            @chmod($to, fileperms($to) | 0111);
        }
<<<<<<< HEAD

        $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize($to)));
=======
>>>>>>> contactmanager
    }

    private function removeFiles(array $manifest, array $files, string $to)
    {
        foreach ($manifest as $source => $target) {
            $target = $this->options->expandTargetDir($target);
<<<<<<< HEAD

            if ('.git' === $target) {
                // never remove the main Git directory, even if it was created by a recipe
                continue;
            }

            if ('/' === substr($source, -1)) {
                foreach (array_keys($files) as $file) {
                    if (0 === strpos($file, $source)) {
                        $this->removeFile($this->path->concatenate([$to, $target, substr($file, strlen($source))]));
                    }
                }
            } else {
                $this->removeFile($this->path->concatenate([$to, $target]));
=======
            if ('/' === substr($source, -1)) {
                foreach (array_keys($files) as $file) {
                    if (0 === strpos($file, $source)) {
                        $this->removeFile($to.'/'.$target.'/'.substr($file, strlen($source)));
                    }
                }
            } else {
                $this->removeFile($to.'/'.$target);
>>>>>>> contactmanager
            }
        }
    }

    private function removeFile(string $to)
    {
<<<<<<< HEAD
        if (!file_exists($to)) {
            return;
        }

        @unlink($to);
        $this->write(sprintf('Removed <fg=green>"%s"</>', $this->path->relativize($to)));
=======
        @unlink($to);
>>>>>>> contactmanager

        if (0 === count(glob(dirname($to).'/*', GLOB_NOSORT))) {
            @rmdir(dirname($to));
        }
    }
}
