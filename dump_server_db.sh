#!/bin/bash

# Variables
DB_USER="u606769855_cabowedding"
DB_PASSWORD="Red_hat_4944"
DB_NAME="u606769855_cabowedding"
DATE=$(date +%Y_%m_%d_%H%M%S)
DUMP_FILE="sql_dumps/dump_$DATE.sql"


# Exportar la base de datos
mysqldump -u $DB_USER -p$DB_PASSWORD $DB_NAME > $DUMP_FILE

# Asegurarse de que el repositorio está actualizado
git pull origin main

# Agregar el archivo de volcado al repositorio
git add .

# Hacer commit del archivo de volcado
git commit -m "Añadido dump_$DATE.sql volcado de la base de datos"

# Empujar el commit a Github
git push
