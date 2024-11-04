CREATE TABLE films (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       title VARCHAR(255) NOT NULL,
                       director VARCHAR(255) NOT NULL,
                       release_year INT NOT NULL,
                       genre VARCHAR(100) NOT NULL
);

CREATE TABLE cars (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      make VARCHAR(255) NOT NULL,
                      model VARCHAR(255) NOT NULL,
                      year INT NOT NULL,
                      horsepower INT NOT NULL
);