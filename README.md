# codeigniter4.4-twig3.7
Twig 3.7.1 with modules in CodeIgniter 4.4

Version 3.7.1 : Doc: https://twig.symfony.com/


Installation : 

Step 1 : composer require twig/twig
Step 2 : composer require twig/cache-extra (bundle cache object method) (optionnal)
Step 3 : composer require twig/cssinliner-extra (bundle inline css filter) (optionnal)



Step 4 : Make the Helper twig_helper
Step 5 : call twig(true, true) in your controller and enjoy !

first true  = cache enabled or no
second true = well optimised or no --1 or 0
