# Internship Assignment
## Software Pre-requisites
### 1. MS Access LTSC
Used for creating 2 tables, relationships and patient form. Used to link mysql database to access database using ODBC.

### 2. MySql version 8
Used to create one table. Used to link mysql database to access database using ODBC.

### 3. Sublime Text
Text editor for editing git commit messages (Must have this feature enabled during installation). Text editor for HTML and PHP files.

### 4. Git
For project cloning/pulling.

### 5. MS Word LTSC
Used to open the data dictonary.

### 6. Visual Studio 17.2.6/17+
Used to organise and push the repo to GitHub.

###7. Xampp Control panel
Must have Apache installed with it to run php file.


## Required
i) A data source is first required to link the access tables to the sql database. This is also requried for importing sql tables directly into the access database
ii) Web files must be moved to "htdocs" folder in the default Xampp install directory.
iii) For successful recording, The database 'hospital' must exsist with correct column names adjucent to references used in php otherwise the php file will not run properly! 

## Warnings
i) Visual Studio 17.2.6 currenly does not support MySql for Visual Studio hence database may not open the MySql server from the latest versions of Visual Studio i.e version 17.+
To use MySql for Visual Studio, downgrade to Visual Studio 2019.
ii) Do not use mysql server from Xampp if you have already created the database on the local mysql server. If no database exisits locally and you plan to use Xampp mysql, ensure the local mysql server service is STOPPED to avoid conflict. This option is found on the services application by running the 'services.msc' command 
