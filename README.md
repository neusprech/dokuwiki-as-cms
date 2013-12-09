dokuwiki-as-cms
===============

Configuration for using Dokuwiki as WebCMS.

Initial Requirementes

  * can only manage application via ftp
  * no webserver configuration possible beside .htaccess
  * secure frontend with custom template
  * seperate access from backend
  * preserve simple update path

Way of Configuration

  * little password protected switcher-Script for choosing "frontend" and "backend"
  * local.protected.conf.php with logic-switch for configuration

Do

  * create a copy of the dw-"data" path and name it e.g. "content", for easier future updates
  * copy local.protected.conf.php to "conf" directory
  * set your custom theme for the frontend, if you need another beside "default"
  * protect the switch-url "/switch/" with common method

acl.auth.php

```
*	@ALL	1
*	@user	16
```

users.auth.php

```
user:5f4dcc3b5aa765d61d8327deb882cf99:Us Er:none@local:user
```
