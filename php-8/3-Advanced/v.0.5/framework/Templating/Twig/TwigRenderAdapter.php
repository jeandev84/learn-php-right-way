<?php
declare(strict_types=1);

namespace Framework\Templating\Twig;

use Framework\Templating\Contract\RenderInterface;
use Twig\Environment;
use Twig\Extension\ExtensionInterface;
use Twig\Loader\FilesystemLoader;

class TwigRenderAdapter implements RenderInterface
{

    protected Environment $twig;


    protected array $extensions = [];


    public function __construct(array $config)
    {
        $loader     = new FilesystemLoader(VIEW_PATH);
        $this->twig = new Environment($loader, $config);
    }



    public function addExtension(ExtensionInterface $extension): self
    {
         $this->twig->addExtension($extension);

         return $this;
    }



    /**
     * @inheritdoc
    */
    public function render($template, array $data = []): string
    {
        return $this->twig->render($template, $data);
    }
}