<p align="center"><img src="./public/img/Readme.MD/CradaLogoGat.png?raw=true" width="200"></a></p>

Tech Events 🔆
============

***

## Introduction 💫

The "CRADA TECH EVENTS" project is a web application to manage online courses such as workshops, masterclasses or webinars. Users will be able to see the description of an event, sign up and unsubscribe. They will be able to see the list of events they have signed up for. The administrator has the tools for the management (CRUD) of the events.

## Practice goals 🛫 

1.- Apply the MVC pattern (Model, View, Controller).

2.- Apply testing.

3.- Introduce us to the basics of Laravel.

4.- Understand components of views and controllers.

5.- Practice the process of building elements and linking them.


## Structure 🧬

   - On the cover, the application will have a slider with the featured masterclasses. These will be selectable by the administrator.
   - The cover shows a view with the events ordered from the closest to the furthest in time.
   - The events include such as: title, date/time, maximum number of participants, description and an image.
   - Past events are displayed in the past view but remain identifiable as unavailable.
   - Users can register to sign up for an event. Once signed up they cannot do it again.
   - When signing up for an event, the user will receive an email (business - html ) with the link (zoom, meets, etc..) where it will take place, as well as remembering the title of the event, the time and the day.
   - Users can see on one page the list of events they are registered for.
   - The administrator will be able to CRUD the events.
   - When an event is full (maximum number of participants) no one will be able to register.
   - Acceptance test.
   - Sending the email is done by queuing system.
   - For the Frontend, blade components are used.
    
## Starting 🚀 

These instructions will allow you to get a working copy of the project on your local computer, for development and testing purposes:

Open the terminal and run:

1. Clone git https://github.com/SolTuripe/TechEventsLaravel.git to download the project.
2. Create a table in your database with the name "tech-events".
3. Run Migracion "php artisant migration:fresh --seed"

### Install

- composer install
- npm run watch
- npm run dev

## Wireframe 🪧

Wireframe of the main idea of ​​the project with functionality:

<p align="center"> 
  <img src="./public/img/Readme.MD/movil.png?raw=true" width=60%>
  <img src="./public/img/Readme.MD/destopk.png?raw=true" width=60%>
</p>

## Desktop version 🖥

<p align="center">
  <img src="./public/img/Readme.MD/crada-destopk.gif" alt="animated" width=60% />
</p>


## Mobile version 📱

<p align="center">
  <img src="./public/img/Readme.MD/crada-movil.gif" alt="animated"  />
</p>


## Dependencies ⚙

* Frontend: Boostrap, HTML, CSS.
* Backend: Laravel, PHP.
* Database: MySQL.

## Tools 🧰 

* Miro
* Figma
* Mockup Ninja
* Trello
* Font-face
* Agile methodologies
* Bootstrap
* Laravel
* SQL
* PHP-MyAdmin

## Authors 👩‍💻

* [Sol Turipe](https://github.com/SolTuripe)
* [Cecilia Carbajal](https://github.com/belcar-ceci)
* [Clàudia Calero Duró](https://github.com/ClaudiaCalero)
* [Davina Medina](https://github.com/Davina-dev)
* [Miquel Cruz](https://github.com/mcc72)

## Gratitude 🎁
* Tell others about this project 📢 
* Support our projects ⭐
* Made with  ❤️ by [CRADA 🐱](https://github.com/crada2)
