# Simple repository pattern app 

Just mucking about with the repository pattern.  Need to add some 
testing to this.

Should be able to infer the db schema from the Repository.php class file but the
following MySQL snippet should produce the correct table

``CREATE TABLE `project`.`requests` (
    id INTEGER KEY AUTO_INCREMENT,
    startdate DATETIME NOT NULL,
    enddate DATETIME NOT NULL,
    email VARCHAR(255) NOT NULL
);``