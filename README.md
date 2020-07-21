# Send-email-using-Laravel-with-smtp-gmail.com
We must  installed authentication peakages in our project. By Default forget password(change password) and send mail to the induviduall users at first set .env file where mail user and mail password must required(from where the mail send it's the identificatons).If you send mail to smtp gmail.com from localhost you must enable the less secure app access On.Then 
1.Create mail file in App->Mail(create folder)->( here) using command php artisan make:mail WelcomeMail.
2.Create Controller using command php artisan make:controller MailController.
3.Set the routes in web.php
4.Create view file into resource->views->here file name (MailIndex.blade.php).
5.Create view file in resource->views->here file name(Mailpage.blade.php).
All files and controller and requirement functionality included this project to change password and send email.
