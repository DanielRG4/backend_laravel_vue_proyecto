# Comandos de Git (Iniciales)
## Requerimientos
- Descargar GIT
- Crear una cuenta en GITHUB
## Configurar GIT
- ejecutar los siguientes comandos
```
git config --global "Su nombre"
git config --global "correo@mail.com"
```
## Comando Iniciales
## Crear un Respositorio en GITHUB
## Inicializar un Repositorio Local
```
git init
```
### Referencia del Repositorio (Local) al Repositorio (REMOTO)

```

git remote add origin https://github.com/DanielRG4/backend_laravel_vue_proyecto.git
```
## ACTUALIZAR EL REPOSITORIO

```
git add .
git commit -m "Proyecto Base (CRUD Usuarios)"
git push origin master
```

## OBTENER LOS NUEVOS CAMBIOS
```
git pull origin master
```