# WP Kirk

[![Latest Stable Version](https://poser.pugx.org/wpbones/wpbones/v/stable)](https://packagist.org/packages/wpbones/wpbones)

WP Kirk is a boilerplate plugin wiritten by using [WP Bones](https://github.com/wpbones/WPBones) Framework Library.
You may start from here to create a WP Bones WordPress plugin.

As you know, WordPress doesn't support composer. So, I have used a little trick to fix this issue.

## Requirement

### Composer

    $ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
    
### Nodes
    
    $ sudo apt-get update && sudo apt-get install nodejs && sudo apt-get install npm
    $ sudo apt-get install nodejs-legacy
    

### Gulp

You will find a `package.json` with a few package such as `gulp`. Feel free to add your own.

    $ npm install 

## I love Laravel

First to all, this framework and the boilerplate plugin are inspired to [Laravel](http://laravel.com/) framework. Also, you will find a `bones` php shell executable like Laravel `artisan`.
After cloning the repo, you can:

Display help

    $ php bones

Change namespace

    $ php bones namespace MyPluginName

The last command is very important. You can change the namespace in anytime. However, I suggest you to make this only the first time, when the plugin is inactive.
After changing of the namespace, you can start to develop you plugin. Your namespace will be `MyPluginName`.

## Documentation

You'll find the [complete docs here](https://github.com/wpbones/WPBones/wiki).
