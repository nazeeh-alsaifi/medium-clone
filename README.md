

## Medium Website Clone:
Prerequisite:
- Php >= 7.2.5 (version used 7.4.6 )
- npm (version used 6.14.5)
- PDO PHP Extension
- Exif Extension
- Fileinfo Extension
- GD Library (>=2.0) … or … Imagick PHP extension (>=6.5.7)

After downloading the zip file and extracting it open cmd and navigate to project directory run:
    
    
  1. php composer.phar install
    
  2. npm install
    
  3. add your database configuration in .env file (HOST,PORT,DATABASE,USERNAME,PASSWORD)
        
  4. php artisan migrate --seed
    
  5. php artisan storage:link
    
  6. php artisan serve [this command will run a local server please run on the link] usually (https://127.0.0.1:8000/)                                        
    
    
there are two types of users:
1. Admin: 
    * Email: nazeeh@example.com
    * Password: password
    
2. User:  
    * Email: john@example.com
    * passord: password
        
##Enjoy..........
    

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
