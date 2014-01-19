# Google Image Search

This library offers a simple PHP front-end to Google Image Search.

## Installation

    composer install google-image-search

## Example

There is a script named ```image``` in the ```bin``` directory. Use it like this:

    $ ./bin/image whistle pig whiskey

## API

This library exposes one method, ```search```, which takes one argument, a
string to search for. It returns an array with 0 or more results. Each result
is a hash with four keys:

* ```url```: The URL of an image.
* ```source```: The URL of the page where that image was found.
* ```width```: The width in pixels of the image.
* ```height```: The height in pixels of the image.

## Credits

* This library was created by Ryan Freebern / [@rfreebern](http://twitter.com/rfreebern).
