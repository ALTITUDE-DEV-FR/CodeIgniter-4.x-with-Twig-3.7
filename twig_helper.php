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
use App\ThirdParty\TwigExtensions\JsonDecodeExtension;

if (! function_exists('twig')) {
    function twig($cache, $optimized, $pathOveride){

        $loader = new \Twig\Loader\FilesystemLoader(APPPATH);
        $twig   = new \Twig\Environment($loader, [
            'cache'             => $cache ? WRITEPATH.'/cache/twig' : false,
            'auto_reload'       => true,
            'charset'           => 'utf-8',
            'optimizations'     => $optimized ? -1 : 0,
            'strict_variables'  => false,
            'debug'             => false
        ]);
   
        $twig->addExtension(new CssInlinerExtension());
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $twig->addExtension(new CacheExtension());
        $twig->addExtension(new JsonDecodeExtension());

        $twig->addRuntimeLoader(new class implements RuntimeLoaderInterface {
            public function load($class) {
                if (CacheRuntime::class === $class) {
                    return new CacheRuntime(new TagAwareAdapter(new FilesystemAdapter('andromede_cached', 0, WRITEPATH . '/cache/twig')));
                }
            }
        });

        /*
        * Global Defines CI > Twig
        */
        $twig->addGlobal('TTLCONTENT', CACHE_TIME);
        $twig->addGlobal('THEME', THEME);
        $twig->addGlobal('RGPD_NOTICE', RGPD_NOTICE);
        $twig->addGlobal('MATOMO_ID', MATOMO_ID);
        $twig->addGlobal('LANGAVAILABLE', LANGAVAILABLE);
        $twig->addGlobal('LANGSELECTOR', LANGSELECTOR);
        $twig->addGlobal('SINGLENEWS_PATH', SINGLENEWS_PATH);

        /*
        * Functions CI > Twig
        */
        $twig->addFunction(new \Twig\TwigFunction('lang', 'lang'));
        $twig->addFunction(new \Twig\TwigFunction('session', 'session'));
        $twig->addFunction(new \Twig\TwigFunction('url_to', 'url_to'));
        $twig->addFunction(new \Twig\TwigFunction('csrf_hash', 'csrf_hash'));
        $twig->addFunction(new \Twig\TwigFunction('csrf_token', 'csrf_token'));
        $twig->addFunction(new \Twig\TwigFunction('site_url', 'site_url'));
        $twig->addFunction(new \Twig\TwigFunction('base_url', 'base_url'));
        $twig->addFunction(new \Twig\TwigFunction('current_url', 'current_url'));

        return $twig;
    }

}
