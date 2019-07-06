<h1> How To Import Large Sql File In XAMPP ? <strong> 06-07-2019 (d-m-Y) </stron></h1>

#1 Open the XAMPP Control Panel
Make sure Apache and MySQL are running and click the Shell button in the XAMPP Control Panel.

#2. To import database, use the following command

 # mysql -u username -p database_name < "/path/file.sql"
  
Where:

username – your MySQL username. e.g. root
database_name – database name you are importing to
/path/file.sql – full path to your .sql file

#3. If you want to see import process to screen then use the following command

mysql -u username -p -v database_name < "/path/file.sql"
