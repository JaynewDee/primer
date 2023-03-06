## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

===

### Deployment error log

-   "Upgrade http resources to https on request"
-   "You must pass your app key when you instantiate Pusher"
-   "Unsupported cipher or incorrect key length"

===

-   php artisan optimize:clear
-   php artisan config:cache
-   heroku builds:cache:purge -a meep-laravel
-   give storage-write permissions: chmod -R gu+w storage
-   give cache-write permissions: chmod -R gu+w bootstrap/cache
