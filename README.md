##FindAGif

#1 MOTIVATION #

This web system was developed between 23 and 25 August 2019 by me, Washington da Costa Silva. And its main purpose is to serve as an evaluation for the lead selection process of Lead Fullstack Developer, a process promoted by Blue Coding. At this stage of the selection process, the challenge was to create a clean and user-friendly web application.
Basic project requirements:
- a) Application login, logout and SignUP page
- b) Gifs search page
- c) System search history page
- d) Possibility of persistence for favorite images (Database)

#2 ABOUT DEVELOPED APPLICATION #

Developed in PHP programming language, front end frameworks: Bootstrap and Laravel backend, we love the latest version available, coupled with the use of CSS 3 style sheet markup language, HTML5. The layout of the application took into account the concept of mobile-first, already provided by the bootstrap framework, as well as the layout of the pages through the grid system adopted by it. Thus making the system responsive and adapted to various resolution sizes. Through Laravel, the MVC (Model-View-Controler) architecture standard was used for GIfs entities. The log log file was implemented using the monolog API, which implements the use of PSR4, can be found within the application's public directory in the log folder.
#2.1 About features #
Access to the system is provided through the Welcome view and the gifs / index view, where you can access the home page containing the registration or login menu.
Search pages, stored GIfs, and History are protected and can only be accessed by authenticated users.
All forms use Cross-site attack protection (@CSR), a feature available native to the Laravel framework.
The Monolog API was used to provide logging for page search, viewed on the application history screen.
The front end bootstrap framework was used for screen creation, installed via composer.

#3 FICTIONAL BRANG - FindAGif#
For the development of the project a fictional ListaCheck mark was created, just to identify the project illustratively.

#4 CONSIDERATIONS #

#4.1 Comands Artisan for migration#
php artisan make:model Gifs --migration
php artisan make:controller GifsController
php artisan migrate:install
php artisan migrate

#4.3 Database#
MySql
DB name: findagif
User: homestead
Password:

#4.3 Conclusion #
In addition, I hope I have met the expectations and requirements of the project. I mean, I had fun producing it. I await contact about the selection process.

_** Always seeking the satisfaction of overcoming challenges, I found in the field of T.I. my vocation to contribute to society fully and objectively.**_


<right>Washington da Costa Silva</right>
