## Introduction

Ever found yourself wanting to story your Vue components, but without the overhead brought in from tools like [Storybook?](https://storybook.js.org/)
Laravel Ease provides a simple, yet powerful way to quickly develop Vue components - totally isolated from your application.
<br/>
<br/>
Think [Storybook](https://storybook.js.org/) - but without the steroids.
<br/>
<br/>
Quick and easy to set up, with familiar Laravel driven configuration, now makes Vue component development a cinch.

## Installation

```bash
composer require cgnetwork/ease --dev
```

After installing the package, you may execute the `php artisan ease:install` Artisan command.

The install command:

* Adds `ease` scripts to your project `package.json`
* Publishes `EaseComponent.vue` to your project `resources/js/components`

Finally, to complete installation:
```bash
npm run ease:install
```

## Usage

```bash
npm run ease
```

After running the `ease` script, you may visit the provided route at `/ease`

## Configuration

```bash
php artisan ease:publish
```

Laravel Ease comes pre-configured and ready to go out of the box. Customize the config file `ease.php` by publishing to your config directory.

## Directory Structured Routing

After installing the package, your project `resources/js/components` directory will have the provided `ease` example:

```
resources/js/components
  └── EaseComponent.vue
```

that will result in a route configuration:

```js
[
  {
    path: '/ease/easecomponent',
    component: '/resources/js/components/EaseComponent.vue'
  }
]
```

Easily navigate components from the sidebar:

![example.index.vue](https://raw.githubusercontent.com/cgnetwork/laravel-ease/master/docs/EaseComponent.png)

## Contributing

Thank you for considering contributing to Laravel Ease! We welcome all pull requests.

## License

Laravel Ease is open-sourced software licensed under the [MIT license](https://github.com/cgnetwork/laravel-ease/blob/master/LICENSE).
