install: ## Install all the projects
	symfony composer install
	symfony console d:d:c

rebuild: ## Rebuild the database
	symfony console d:d:d -f
	symfony console d:d:c
	symfony console d:s:u -f
	symfony console d:f:l -n