## Introduction

Powered by the amazing [Vite](https://vitejs.dev/) ⚡ Laravel Ease is a batteries-included, isolated sandbox in your application to rapidly build, experiment, and preview your Vue components.
<br/>
<br/>
[Directory structured routing](https://github.com/cgnetwork/laravel-ease/blob/master/README.md#directory-structured-routing) means you can forget messy Vue route files, and focus on what really matters - building awesome components for your application.
<br/>
<br/>
Laravel Ease aims to provide a quick, easy solution to prototyping Vue components in isolation, driven through familiar Laravel configuration.

## Installation

```bash
composer require cgnetwork/ease --dev
```

After installing the package, you may execute the `php artisan ease:install` Artisan command.

The install command:

* Adds an `ease` script to your project `package.json`
* Publishes a `laravel/ease` directory to your project `resources/js`

## Usage

```bash
yarn ease
```

After running the `ease` script, you may visit the provided route at `your-laravel.project/ease`

![index.vue](https://raw.githubusercontent.com/cgnetwork/laravel-ease/master/docs/index.vue.png)

## Configuration

```bash
php artisan ease:publish
```

Laravel Ease comes pre-configured and ready to go out of the box. Customize the config file `ease.php` by publishing to your config directory.

## Directory Structured Routing

After installing the package, your project `resources/js` directory will have the provided `laravel/ease` example:

```
resources/js/laravel/
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
    component: '/resources/js/laravel/ease/index.vue'
  },
  {
    path: '/ease/example',
    component: '/resources/js/laravel/ease/example/index.vue'
  }
]
```

For convenience, all routes will appear in a sidebar for easy navigation:

![example.index.vue](https://raw.githubusercontent.com/cgnetwork/laravel-ease/master/docs/example.index.vue.png)

For advanced route configuration, see the Vite plugin powering this under the hood - [Voie File System Routing](https://github.com/brattonross/vite-plugin-voie#file-system-routing)

## Contributing

Thank you for considering contributing to Laravel Ease! We welcome all pull requests.

## License

Laravel Ease is open-sourced software licensed under the [MIT license](https://github.com/cgnetwork/laravel-ease/blob/master/LICENSE).
