### RUN COMMAND CRON JOB 

```
$ php scripts/email.php
```

Attachment 
```
1. Save Physical File On Disk (Local, S3, ...)
2. Save Filepath/Location in Database (JSON Col or email_attachments table)
3. Locate The Files & Attach To the Email When Sending
```

CRON 
```
[0-59]min [0-23]hour [1-31]DayOfMonth  [1-12]Month [0-6]DayOfTheWeek  COMMAND (command or scripts we want to run)
*         *          *                 *           *                  php email.php 
5         *          *                 *           *                  php email.php 
*         2,5        *                 *           *                  php email.php 
*         2,5        *                 1-5         *                  php email.php 
*/2       *          *                 1-5         *                  php email.php 
```