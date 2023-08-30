<?php 

/*
* TWIG CI ANDROMEDE CMS
*/
use Twig\Environment;
use Twig\Extra\Cache\CacheExtension;
use Twig\Extra\CssInliner\CssInlinerExtension;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Twig\Extra\Cache\CacheRuntime;
use Twig\RuntimeLoader\RuntimeLoaderInterface;

if (! function_exists('twig')) {
    function twig($cache, $optimized){

        $loader = new \Twig\Loader\FilesystemLoader(APPPATH.'/Views/front/themes/'.THEME.'/twig');
        $twig   = new \Twig\Environment($loader, [
            'cache'             => $cache ? WRITEPATH.'/cache/twig' : false,
            'auto_reload'       => true,
            'charset'           => 'utf-8',
            'optimizations'     => $optimized ? -1 : 0,
            'strict_variables'  => true,
            'debug'             => false
        ]);

        $twig->addExtension(new CssInlinerExtension());
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $twig->addExtension(new CacheExtension());

        $twig->addRuntimeLoader(new class implements RuntimeLoaderInterface {
            public function load($class) {
                if (CacheRuntime::class === $class) {
                    return new CacheRuntime(new TagAwareAdapter(new FilesystemAdapter()));
                }
            }
        });
    
        // CONTSTANT
        $twig->addGlobal('THEME', THEME); //Exemple to add SuperGlobal CI to Twig
  
        // CI FUNCTIONS TO TWIG
        $twig->addFunction(new \Twig\TwigFunction('csrf_hash', 'csrf_hash'));
        $twig->addFunction(new \Twig\TwigFunction('site_url', 'site_url'));
        $twig->addFunction(new \Twig\TwigFunction('base_url', 'base_url'));
        $twig->addFunction(new \Twig\TwigFunction('current_url', 'current_url'));

        return $twig;
    }

}
