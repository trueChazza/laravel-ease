## Introduction

Ever found yourself wanting to story your [Vue](https://vuejs.org/) components, but without the overhead from tools like [Storybook](https://storybook.js.org/)?
<br/>
Laravel Ease provides a simple, yet powerful way to quickly develop, view, and gauge your Vue components - safely isolated from your application.
<br/>
<br/>
Think Storybook - but hold the steroids!
<br/>
<br/>
Quick and easy to set up, with familiar Laravel driven configuration, now makes Vue component development a cinch.

## Installation

```bash
composer require cgnetwork/ease --dev
```

After installing the package, you may execute the Artisan install command:

```bash
php artisan ease:install
```

The Artisan install command will:

* Add `ease` scripts to your project `package.json`
* Publish `EaseComponent.vue` to your project `resources/js/components`

Finally, to complete installation:
```bash
npm run ease:install
```

## Usage

```bash
npm run ease
```

Running the `ease` script will start your `ease` server, which you can reach at the provided route `/ease`

## Directory Structured Routing

After installing the package, your project `resources/js/components` directory will have the provided `ease` example:

```
resources/js/components
  └── EaseComponent.vue
```

resulting in a route configuration:

```js
[
  {
    path: '/ease/easecomponent',
    component: '/resources/js/components/EaseComponent.vue'
  }
]
```

placing your components front and center:

![example.index.vue](https://raw.githubusercontent.com/cgnetwork/laravel-ease/master/docs/EaseComponent.png)

## Configuration

`ease` exposes environment variables useful for customisation:

```bash
EASE_NAME=Ease
EASE_SERVER_URL=http://localhost:3000
```

Pre-configured and ready to go out of the box, you can fully customize `ease` to your liking by publishing [ease.php](https://github.com/cgnetwork/laravel-ease/blob/master/config/ease.php)  to your config directory:

```bash
php artisan ease:publish
```

## Contributing

Thank you for considering contributing to Laravel Ease! We welcome all pull requests.

## License

Laravel Ease is open-sourced software licensed under the [MIT license](https://github.com/cgnetwork/laravel-ease/blob/master/LICENSE).
