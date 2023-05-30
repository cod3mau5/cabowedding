#!/bin/bash

# Asegurarse de que el repositorio está actualizado
git fetch
git pull

# Variables
DB_USER="u606769855_cabowedding"
DB_PASSWORD="Red_hat_4944"
DB_NAME="u606769855_cabowedding"
DUMP_DIR="sql_dumps/"

# Obtener el nombre del archivo de volcado más reciente
DUMP_FILE=$(ls -t $DUMP_DIR/*.sql | head -n 1)

# Importar el volcado a la base de datos local
mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME < $DUMP_FILE

# Reemplazar el nombre del dominio
wp --allow-root search-replace 'http://cabowedding.local' 'http://caboweddingfilms.com' --skip-columns=guid
