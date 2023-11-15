# Composer plugin example

Here is a simple example of a composer plugin.

## Structure

```
plugin
├── src
│   └── Plugin.php
├── composer.json
├── composer.lock
```


## Usage 

### Add require into composer.json

```json
{
  "require": {
    "cslant/composer-plugin-example": "dev-main"
  },
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cslant/composer-plugin-example.git"
    }
  ]
}
```

### Run composer command

```bash
composer update
```

### Check vendor directory

```bash
ls vendor/cslant/composer-plugin-example
```

## Reference

- [Composer Plugin API](https://getcomposer.org/doc/articles/plugins.md)

## Composer install demo

```bash
composer require cslant/composer-plugin-example
```
