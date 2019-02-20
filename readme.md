# **swedavia-airport-api**
------

The swedavia-airport-api provides API services for the corresponding swedavia-airport-web.


# Features

  - Login API.
  - camera API.
  - date API.

# Prerequirements

Installing the environment requires docker 17-ce or later.

The system was tested on Docker version 17.09.1-ce, build 19e2cf6

# Install

### Step 1 - Load docker image

```sh
$ tar -xzvf swedavia-airport-api.tar.gz
$ sudo docker load --input swedavia-airport-api.tar
```

### Step 2 - Start the docker container

Start the docker container with the following command. If you want to change the port number, change the "80" to the left of "-p 80:80" to your port.If you want to use https ,yan can change the "443" to the left of "-p 443:443" to your port.



``` sh
$ sudo docker run -d --name swedavia-airport-api --restart always -p 80:80 -p 443:443 -v /etc/localtime:/etc/localtime -v /etc/timezone:/etc/timezone -e 'DB_HOST=52.162.166.103' -e 'DB_PORT=3306' -e 'DB_DATABASE=dashboard_v1_01' -e 'DB_USERNAME=vmaxx' -e 'DB_PASSWORD=555a682b426a6a305839526231514e4a79734a3272413d3d' swedavia-airport-api

```


**Configurations:**

The following environment variable could be changed.

- 'DB_HOST': Database Host
- 'DB_PORT': Database Port
- 'DB_DATABASE': Database schema
- 'DB_USERNAME': Database user
- 'DB_PASSWORD': Hashed databse password with AES. Please refer to the utils [aes.py](https://github.com/DeepNorthAI/common-component/tree/master/python/db_connection)

# Version history

| Version | Desicription                                            |  Date        |
|---------|---------------------------------------------------------|--------------|
| v0.1    |Initial Release with Account API, Camera API, Data API|  2018-10-26  |
|         |                                                         |              |
|         |                                                         |              |