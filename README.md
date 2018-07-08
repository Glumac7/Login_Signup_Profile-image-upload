# Login, Signup, Profile image upload

Backend PHP based scripts that make Loging in, signing up and changing a profile image simple!

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See the section below for notes on how to deploy the project on a live system.

### Installation

What things you need to install and how to install them

```
1. Download and install a local server(XAMPP, WAMP).
2. Download or clone this project.
3. Make a file in your local server(WAMP/www/<name of the file>, XAMPP/htdocs/<name of the file>).
4. Paste the downloaded files in that folder.
5. Run your server
6. Go to localhost/phpmyadmin(127.0.0.1/phpmyadmin).
7. Make a new Data Base.
8. Enter your database, click the SQL button, paste the code below and click go:
   CREATE TABLE myguests
   (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       firstname VARCHAR(40) NOT NULL,
       lastname VARCHAR(40) NOT NULL,
       email VARCHAR(50),
       pasw VARCHAR(255),
       reg_date TIMESTAMP
   )
9. With your server running, go to localhost/<the name of the file you created earlier>/index.php
10. Enjoy!!!
```
## Any questions?

Visit my personal website: [nemanjaglumicic.tk](https://nemanjaglumicic.tk/)