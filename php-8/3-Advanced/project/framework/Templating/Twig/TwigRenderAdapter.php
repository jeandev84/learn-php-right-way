<?php
declare(strict_types=1);

namespace Framework\Templating\Twig;

use Framework\Templating\Contract\RenderInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigRenderAdapter implements RenderInterface
{

    protected Environment $twig;


    public function __construct(array $config)
    {
        $loader     = new FilesystemLoader(VIEW_PATH);
        $this->twig = new Environment($loader, $config);
    }



    /**
     * @inheritdoc
    */
    public function render($template, array $data = []): string
    {
        return $this->twig->render($template, $data);
    }
}