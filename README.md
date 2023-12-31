# Database dump
Database dump is a tool to import and export MySQL databases on a PHP server.

# Setup
Set up the required connection and authentication information in the setup.php file
- KEY and LOCK are protection tools.
- DB_HOST, DB_USER, DB_PASS, DB_NAME are connect database information. 
Call the unlock.php file to enter the key and lock authentication information.

# Use
Call functions:
- import.php: import database in setup.
+ clear.sql: is a clear database script, that uses delete all tables.
- info.php: view list of databases, tables, and export databases.
