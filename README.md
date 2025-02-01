# devjacjef

<!-- *Hell must really have frozen over for Jack to be coding in PHP.* -->
<!--I'm enjoying PHP?!-->

## README.md

This is the code for my own personal website. I've allowed the code to be public on GitHub for anyone curious as to how I built my own website. Currently, I am only using features revealed to me by the standard PHP language and do not have plans to implement any third party dependencies. The goal is to better engage with PHP with the aspiration of becoming a backend developer.

I have taken inspiration from other libraries/frameworks such as Laravel as I love their design. I have also looked at samples from Mantle as well to get a general overview of some of the expected features that one would look for in a web framework.

**Code should be commented as to help understand what I have implemented**.

## Directory Structure

- `app/` - Core code of the application.
    - `app/Controllers` - Handles requests and responses.
    - `app/Core` - Contains core components for the App.
    - `app/Models` - Structures data.
- `config` - configuration files.
- `docs` - Documentation files.
- `public` - Web server files.
- `resources` - Contains views, js scripts and css.
    - `css` - Contains style sheets.
    - `js` - Contains JavaScript scripts.
    - `views` - Contains views for the project.
        - `views/components` - Contains components to use for the views in this project.
- `routes` - Contains defined routes for the application.
- `tests` - Contains tests.

## References

*This is a few resources I looked at when developing this project.*

- PHP Directory Structure Skeleton - https://github.com/php-pds/skeleton
- Laravel Directory Structure - https://laravel.com/docs/11.x/structure
- Laravel Database Documentation - https://laravel.com/docs/11.x/database
- Singleton Design Pattern - https://refactoring.guru/design-patterns/singleton/php/example
- Illuminate Docs - https://laravel.com/api/11.x/Illuminate.html
- Facade Design Pattern - https://refactoring.guru/design-patterns/facade
- Factory Design Pattern - https://refactoring.guru/design-patterns/factory-method
- Mantle - https://mantle.alley.com/docs/basics/requests
- Mantle src - https://github.com/alleyinteractive/mantle-framework/tree/1.x/src/mantle
- patterns - https://www.patterns.dev/
- magic methods - https://www.php.net/manual/en/language.oop5.magic.php

### Tutorials that really helped

Routes, Routers and Routing in PHP - https://www.youtube.com/watch?v=JycBuHA-glg