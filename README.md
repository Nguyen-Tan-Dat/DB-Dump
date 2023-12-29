# DB-Dump
DB-Dump is a tool used to import and export MySQL database on PHP server.

# Setup
Set up the required connection and authentication information in the setup.php file
- KEY and LOCK are protect tool.
- DB_HOST, DB_USER, DB_PASS, DB_NAME are connect database information. 
Call the unlock.php file to enter key and lock authentication information.

# Use
Call functions:
- import.php: import database in setup.
+ clear.sql: is clear database script, it uses delete all table.
- info.php: view list of databases, tables and export databases.
