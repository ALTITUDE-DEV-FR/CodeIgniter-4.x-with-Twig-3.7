# CodeIgniter 4 Twig 3.7
Twig 3.7.1 with modules in CodeIgniter 4.x

Version 3.7.1 (latest)

Installation : 

Step 1 : composer require twig/twig / Doc  Doc: https://twig.symfony.com/
Step 2 : composer require twig/cache-extra (bundle cache object method) (optionnal) / Doc https://twig.symfony.com/doc/3.x/tags/cache.html
Step 3 : composer require twig/cssinliner-extra (bundle inline css filter) (optionnal) / Doc https://twig.symfony.com/doc/3.x/filters/inline_css.html

Step 4 : Make the Helper twig_helper
Step 5 : call twig(true, true) in your controller and enjoy !

first true  = cache enabled or no
second true = well optimised or no --1 or 0

! do not forget to make your base.TWIG for made a template ;)
