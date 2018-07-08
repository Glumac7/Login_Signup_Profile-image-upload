# Login, Signup, Profile image upload

Backend PHP based scripts that make Loging in, signing up and changing a profile image simple!

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install and how to install them

```
1. Download and install a local server(XAMPP, WAMP).
2. Download or clone this project.
3. Make a file in your local server(WAMP/www/<name of the file>, XAMPP/htdocs/<name of the file>).
4. Paste the downloaded files in that folder.
5. Run your server
6. Go to localhost/phpmyadmin(127.0.0.1/phpmyadmin).
7. Make a new Data Base.
8. Enter your database, click the SQL link, paste the code below and click go:
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

### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
