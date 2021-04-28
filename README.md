# ShineLocally-VideoCallingApp
Created a simple Video Calling and Chat Platform in PhP, HTML, and CSS


Install Xampp Server.
Start Xampp, Run Apache and MYSQL Server.

Place project folder in htdocs folder.
sample Path: C:\xampp\htdocs

Now open browser:
1. Visit http://localhost/

2. Now Visit: http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&tbl_type=table&db=mysql

3. Create new table in this Database and use this query:

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

4. Now visit: http://localhost/ShineLocally/index.php

5. Register new user and use that user to login.

(Voila, you're good to go)


