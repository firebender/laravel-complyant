# laravel-complyant #

Laravel ComplYant package

### How do I get set up? ###

    This package assumes that you have a Laravel web app set up and ready. Preferably the latest version (The 8.x series at the time of this writing).

    1. Git clone this package.

    2. Also on this package, install the required third party composer packages

        composer install --prefer-dist

    2. In your Laravel web app's composer.json, add this:

        ```
        "repositories": [
            {
                "type": "path",
                "url": <path-to-laravel-complyant>
                "options": {
                    "symlink": true
                }
            }
        ]    

        ```

    3. Require it in your Laravel web app

        composer require firebender/laravel-complyant

    4. Run the available commands

        ```
        artisan complyant:applicant     Creates a new applicant record
        artisan complyant:application   Creates a new application record
        ```

### Contribution guidelines ###

Write tests. Make a pull request

### Who do I talk to? ###

@firebender
