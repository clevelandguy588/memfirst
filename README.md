GitHub Repository: memfirst
Author: Donald Jay

NOTE: This is my first time using PHP, Docker, and Git!

===================================================================

I have created this repository for my LAMP stack application, set up to run in a Docker development environment.

For now, this is a simplified golf course tee-time reservation system. It validates user created reservations and stores data in a MySQL database. A 'Tee Sheet' view provides a listing of all reservations.

===================================================================

DOCKER DEVELOPMENT ENVIRONMENT SETUP

1. Open a new Terminal window and cd to your cloned /memfirst repository

2. Run the following command:

    docker-compose up

    This builds the memfirst, php and mysql images, and starts the memfirst application in two new containers-- memfirst_webserver_1 and memfirst_db_1

3. You can then visit http://localhost from a browser to view the running memfirst application

4. To view changes you make to the code, press Ctrl+C in the Terminal window running the application to 'gracefully' stop the running containers and re-run the command from step 2 
