# BeautySaloon

- First I have created a **"index.php"** page in which I have written code in HTML5 and assign title **"Beauty Saloon"** then in the body tag I have assigned **"contact us"** as  header using h1 tag and then I have created a **"index.php"** page will be the action and method will be post method then I have created form data like full name, phone number, email address, subject, message, (IP address add the time stamp) that is be the hidden from the user only.

-Second I have assigned the server name, username, and the password and the database name  and created a connection using mysqli_connect("$servername", "$username", "$password", "$database"); and then I have check the connection IF it is false then the connection push the error **could not connect try again** then I have taken the value of the full name, phone number, email, subject, message, time stamp, and IP address in a particular format and after that stored into **contact form** table in the database.

-after that I have check the query runs successfully then that will return thank you with the username. If somebody try to enter same phone number or email then it shows error as a duplicate data because i have assigned **Phone number and email as a UNIQUE**


-Created Table using CREATE TABLE contact_form(
    full_name VARCHAR(50) NOT NULL,
    phone_number INT NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    subject VARCHAR(50) NOT NULL,
    message VARCHAR(5000) NOT NULL,
    time_stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ip_address VARCHAR(50)
    );
    
    
