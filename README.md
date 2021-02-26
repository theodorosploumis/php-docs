# PHP Documentation Generator

## About
A simple web tool to create html docs under git from structured markdown files.

I use it to create Drupal manuals based on structure of 
[theodorosploumis/drupal-manual](https://github.com/theodorosploumis/drupal-manual).

![](css/assets/logo.svg)

## Features
- One page docs
- HTML default output
- Single pages option
- Version control data
- Structured data
- Simple to install and start with
- Custom css with css variables

## Requirements
- composer
- php 7.1+

## Libraries used
- [spatie/yaml-front-matter](https://github.com/spatie/yaml-front-matter)
- [league/commonmark](https://github.com/spatie/league/commonmark)
- [tijsverkoyen/css-to-inline-styles](https://github.com/tijsverkoyen/css-to-inline-styles)
- [dompdf/dompdf](https://github.com/dompdf/dompdf)


## Structure
Normally you should only add/edit files inside these folders.

```
// styling & helper images
css

// md files and images that generate pages
data

```

## Run
```
cp settings.php.example settings.php
composer install
php -S localhost:4777
```

## ToDo

### php
- document functions
- use global settings inside md (eg site url)
- create a function to generate Taxonomy pages or lists
- livereload on every change
- add html mask numbers (annotations) over images (?)

### Fix dompdf
- add page numbers
- add page numbers to TOC

### data
- allow json data
- add inline md editor
- support Chrome workspaces (for editing)

### export
- support docx
- support pdf (with css styles)
- support json
