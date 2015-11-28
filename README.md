# WPKirk

WPKirk is a boilerplate plugin wiritten with [WPBones](https://github.com/gfazioli/WPBones).
You can use this repo as a boilerplate to create a plugin.

As you know, WordPress doesn't support composer. So, I have used a little trick to fix this issue.

## Requirement

### Composer

    $ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
    
### Nodes
    
    $ sudo apt-get update && sudo apt-get install nodejs && sudo apt-get install npm
    $ sudo apt-get install nodejs-legacy
    

### Gulp

    $ npm install 

## I love Laravel

First to all, this framework and plugin boilerplate is inspired to [Laravel](http://laravel.com/) framework. Moreover, you will find a `bones` php shell executable look same to Laravel `artisan`.
After clone this repo you can:

Display help

    $ php bones

Change namespace

    $ php bones namespace MyPluginName

The last command is very important. You can change the namespace in anytime. However, I suggest you to make this only the first time, when the plugin is inactive.
After changed the namespace, you can start to develop you plugin. Your namespace will be `MyPluginName`.

