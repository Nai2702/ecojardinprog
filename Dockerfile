# Intentamos de la manera "Normal" con un servidor de PHP Serve
# Pido el uso de la imagen oficial de PHP mas recente
FROM php:8.2-cli

# Defino el directorio donde va generar el trabajo adentro del container
WORKDIR /app

# Copilot de todos los arquivos del proyecto para entrada del container
COPY . .

# Expone la portada que el servidor PHP usará
EXPOSE 10000

# Comando para iniciar el servidor embutido del PHP con el index.php en la raiz del proyecto
CMD ["php", "-S", "0.0.0.0:10000", "index.php"]
