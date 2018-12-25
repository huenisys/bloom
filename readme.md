# huenisys/bloom

Start with ready pages on your Laravel

### Suggestions

- enable auth in your laravel by running $ ``php artisan make:auth``

### Usage

- ``php artisan vendor:publish --tag=bloom-stubs``
- update your seeder class: ``$this->call(PagesTableSeeder::class);``. composer dump autoload most likely will be required
- ``php artisan migrate:fresh --seed``
- ``php artisan vendor:publish --tag=bloom-dist``
  - This sends the package's dist files to your installation
- ``php artisan vendor:publish --tag=bloom-views``
  - This exposes the vendor views allowing you to modify it as you see fit.
- ``php artisan vendor:publish --tag=bloom-frontend``
  - This exposes the frontend resources used to generate the assets, js and css
  - Simply cd to the frontend folder
  - Install deps: $ ``yarn install``
- Remove the / route from laravel if desired

### Styling default Laravel auth navbar

Feel free to generate a css file that will replace Laravel's default by commenting out your current webpack.mix.js and replacing with below then run $ ``npm run prod``. This also allows you to keep a manifest of static files which you later can leverage even with your spa

```js
mix
  .sass('frontend/src/assets/sass/bloom.scss', 'public/css/app.css')
  .version('public/favicon', 'public/images', 'public/svg');
```

### Sample apache for package development

```conf
<VirtualHost *:80>
    # hot reload, after running yarn serve
    DocumentRoot "E:/sites/huenisys/bloom/frontend/public"
    ServerName bloom.local
	DirectoryIndex hmr.blade.php
</VirtualHost>

<VirtualHost *:80>
    # check actual dist files
    DocumentRoot "E:/sites/huenisys/bloom/dist"
    ServerName bloom.dist
	DirectoryIndex spa.blade.php
</VirtualHost>

```

### vue-cli stuff

```
yarn install
```

#### Compiles and hot-reloads for development
```
yarn run serve
```

#### Compiles and minifies for production
```
yarn run build
```

#### Run your tests
```
yarn run test
```

#### Lints and fixes files
```
yarn run lint
```

#### Run your unit tests
```
yarn run test:unit
```
