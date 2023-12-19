## Expennies project


### Tips
```
* Make sure to run `composer install` & `npm install` after you pull the latest changes or switch to a new branch so that you are always using the same versions of dependencies that I do during the lessons
* Run `npm run dev` if you want to build assets for development
* Run `npm run build` if you want to build assets for productions
* Run `npm run watch` if you want to build assets during development & have it automatically be watched so that it rebuilds after you make updates to front-end
* Run `docker-compose up -d --build` to rebuild docker containers if you are using docker to make sure you are using the same versions as the videos
```

Docker 
```
$ docker exec -it expennies-app bash
```

NPM
```
$ npm run dev   ( for development )
$ npm run prod  ( for production )
$ npm run watch ( for live and see the changes js, css ... )
```

Using
- https://drawsql.app/features
- https://drawsql.app/diagrams


Console commands
```
$ php expennies list
$ php expennies diff (migration)
```