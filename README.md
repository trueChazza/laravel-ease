## Introduction

Ever found yourself wanting to story your Vue components, but without the overhead of tools such as [Storybook?](https://storybook.js.org/)
<br/>
Laravel Ease provides a simple, yet powerful way to quickly develop Vue components - isolated from your application.
<br/>
<br/>
Think [Storybook](https://storybook.js.org/) - but without the steroids.
<br/>
<br/>
Quick and easy to set up, with familiar Laravel driven configuration, makes Vue component development a cinch.

## Installation

```bash
composer require cgnetwork/ease --dev
```

After installing the package, you may execute the `php artisan ease:install` Artisan command.

The install command:

* Adds `ease` scripts to your project `package.json`
* Publishes `ease` directory to your project `resources/js/components`

Finally, to complete installation:
```bash
yarn ease:install
```

## Usage

```bash
yarn ease
```

After running the `ease` script, you may visit the provided route at `/ease`

![index.vue](https://raw.githubusercontent.com/cgnetwork/laravel-ease/master/docs/index.vue.png)

## Configuration

```bash
php artisan ease:publish
```

Laravel Ease comes pre-configured and ready to go out of the box. Customize the config file `ease.php` by publishing to your config directory.

## Directory Structured Routing

After installing the package, your project `resources/js/components` directory will have the provided `ease` example:

```
resources/js/components/
  └── ease/
        └── index.vue
        └── example/
                └── index.vue
```

that will result in a route configuration:

```js
[
  {
    path: '/ease',
    component: '/resources/js/components/ease/index.vue'
  },
  {
    path: '/ease/example',
    component: '/resources/js/components/ease/example/index.vue'
  }
]
```

Easily navigate components from the sidebar:

![example.index.vue](https://raw.githubusercontent.com/cgnetwork/laravel-ease/master/docs/example.index.vue.png)

## Contributing

Thank you for considering contributing to Laravel Ease! We welcome all pull requests.

## License

Laravel Ease is open-sourced software licensed under the [MIT license](https://github.com/cgnetwork/laravel-ease/blob/master/LICENSE).
