@ECHO OFF
IF %1.==. GOTO No1
IF %2.==. GOTO No2
IF %3.==. GOTO No3

java -jar schemaspy-6.0.0-jar-with-dependencies.jar -t pgsql -db %3 -s public -host localhost -port 5432 -u %1 -p %2 -o output -dp postgresql-9.4-1201.jdbc4.jar

GOTO End1
:No1
  ECHO ERROR - no database user specified
GOTO USAGE:
:No2
  ECHO ERROR - no database password specified  
GOTO USAGE:
:No3
  ECHO ERROR - no database name specified  
GOTO USAGE:

:USAGE
ECHO
ECHO Generate database diagram for a Postgresql database running on localhost
ECHO
ECHO USAGE:  
ECHO go <database-user> <database-password> <database-name>

:End1
