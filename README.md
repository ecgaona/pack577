# Pack 577 Attendance App
The scout sign in process is a process which currently takes about 15 to 20 minutes to complete and often creates a line of ten people deep for parents to sign in scouts.  The Pack 577 Attendance App creates an electronic sign in process with the objective of reducing the scout sign-in time, increasing parent participation in the scout sign-in process, and eliminate the misplacement of paper copies.

## Technologies
* Bootstrap
* HTML/CSS
* MySQL
* PHP
* Sass
* JavaScript/JQuery/AJAX

## Instructions (assumes LAMP stack instlled on your system with the MySQLi extension and phpMyAdmin)
1. Clone the repository to the var/www/html folder on your local machine.
2. Navigate to the newly created pack577 folder.
3. Modify the DB_USERNAME and DB_PASSWORD variables in the db.php file to your phpMyAdmin username and password.
4. Locate the pack577.sql file and import the file into phpMyAdmin to create the database, tables, and data.
5. To sign scouts into the database, navigate to http://localhost/pack577/signin.php in your web browser.
   Note:  Pack 577 currently doesn't have any Lion scouts.  Names and phone numbers have also been changed for privacy.
6. To input requirements or pull attendance, navigate to http://localhost/pack577/leader-menu.php.
