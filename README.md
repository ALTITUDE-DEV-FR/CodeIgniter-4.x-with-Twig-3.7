# CodeIgniter 4 Twig 3.7.x

Tested with Twig 3.7.x with modules in CodeIgniter 4.4.x

Installation : 

Step 1 : composer require twig/twig / Doc  Doc: https://twig.symfony.com/
Step 2 : composer require twig/cache-extra (bundle cache object method) (optionnal) / Doc https://twig.symfony.com/doc/3.x/tags/cache.html
Step 3 : composer require twig/cssinliner-extra (bundle inline css filter) (optionnal) / Doc https://twig.symfony.com/doc/3.x/filters/inline_css.html

Step 4 : Make the Helper twig_helper
Step 5 : call twig(true, true) in your controller and enjoy !

first true  = cache enabled or no
second true = well optimised or no --1 or 0

! do not forget to make your base.TWIG for made a template ;)

Warning Tips:
If you make a modules in your APP CI, do not define a render route to APP/PATH/THEME becauses the modules use others routes and controllers directory, in my exemple you have a possibility to change the render final view in controller directly

Exemples powered by my own CMS 

# Theme Defined
https://i.imgur.com/NjUQEPt.png

# Controller example
https://i.imgur.com/C68bXVq.png
