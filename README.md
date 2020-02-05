## About AddressBook

This is a laravel app that allows you to keep track of your contacts.

- Stores Multiple contacts' names, email, phone and multiple addresses.
- Simply laid out with built in search functions and the ability to sort through the contacts.

## Setting up you AddressBook

1. Clone the github repositoy
2. open the terminal in the root directory
3. run php artisan migrate
4. open your web browser to 127.0.0.1
5. start adding contacts


## File Setup - Resources

The resources/views folder contain all of the views.
The '/' route lead to the welcom page which loads the /contacts page
- The Contacts folder contains the index.blade.php file. This loads the list of contacts
- It also contains all of the relevant blades for creating, searching, editing and deleting contacts
- The createAddress.blade.php (also in contacts) accepts data and creates a new address for each contact

- The Address folder contains all blade.php files to handle the form for creating and editing addresses.

- All css is handle via bootstrap and utilizes a free layout from getbootstrap.com


## Routes

The routes are all defined in the web.php file in the resources/routes folder
- The // Blade routes are specific to loading the different blades
- The // MYSQL Data Routes handles all of the specific routes for the handling of data

## Controllers

There are two main controllers that interact with their associated blades and the MYSQL database
- Contact Controller
    Contains the functions that control data transfer to and from the database for the contacts blades
    Also, contains the functions to load the different blades associated with the
        contacts folder
- Address Controller
    Contains the functions that control data transfer to and from the database for the addresses blade and when saving a new address from the contacts/show.blade.php and contacts/details.blade.php files
    Also, contains the functions to load the different blades associated with the
        contacts folder

## Database and Security

The MYSQL database uses the controllers to sterilize and validate information before storing and editing. It also has built in laravel security features to prevent hacking of the database.

## Future Updates

1. add google map view via google maps api
2. Add multi-user functions to allow online storage of contacts
3. Improve database and website security

## Author

Carlos S. Aragon
