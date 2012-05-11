CREATE TABLE pods (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    content text NULL,
    sequence int(11) NOT NULL DEFAULT 0,
    complexity tinyint(4) NOT NULL DEFAULT 1,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);