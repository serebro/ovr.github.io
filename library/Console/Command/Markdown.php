<?php
/**
 * @author Patsura Dmitry <talk@dmtry.me>
 */

namespace App\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Markdown\Github;

/**
 * Class Markdown
 * @package App\Console\Command
 *
 * @method \App\Console\Application getApplication();
 */
class Markdown extends Command
{
    /**
     * @var \App\Markdown\Github
     */
    protected $markdownGenerator;

    protected function configure()
    {
        $this->setName('markdown');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Start generating markdown");

        $config = $this->getApplication()->getConfig();
        $this->markdownGenerator = new \App\Markdown\Github($config['github']['username'], $config['github']['password']);

        $this->generateMarkDown('ru', $output);
        $this->generateMarkDown('en', $output);

    }

    private function generateMarkDown($language, OutputInterface $output)
    {
        $output->writeln("Generate " . $language);

        $postDir = $this->getApplication()->getDir() . DIRECTORY_SEPARATOR . '_posts' . DIRECTORY_SEPARATOR . $language . DIRECTORY_SEPARATOR;

        $articles = json_decode(file_get_contents($postDir . 'articles.json'));

        foreach ($articles as $article) {
            $html = $this->markdownGenerator->getRenderedHTML(file_get_contents($postDir . date('Y', strtotime($article->dateCreated)) . DIRECTORY_SEPARATOR . $article->name . '.md'));
            file_put_contents($this->getApplication()->getDir() . '/data/cache/' . $language . '/' . $article->name . '.html', $html);
        }

        return $this;
    }
}