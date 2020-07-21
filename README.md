# Send-email-using-Laravel-with-smtp-gmail.com
We can send Mail using Two way.First is Make Mail.
We must have  installed authentication paekages in our project. By Default forget password(change password) and send mail to the induviduall users at first set .env file where mail username and mail password must required(from where the mail send to user,  it's the identificatons).If you send mail to smtp gmail.com from localhost you must enable the less secure app access On(from your gmail account setting ,which mail username and mail password you provide into .env file) .Then 
1.Create mail file in App->Mail(create folder)->( here) using command php artisan make:mail WelcomeMail.
2.Create Controller using command php artisan make:controller MailController.
3.Set the routes in web.php
4.Create view file into resource->views->here file name (MailIndex.blade.php).
5.Create view file in resource->views->here file name(Mailpage.blade.php this page actually send to users).
All files and controller and requirement functionality included this project to change password and send email(to users).
#Second is make Notifications
Send mail by notification we must crate Notifications using command,php artisan make:notification Welcomenotif ,In MailController.php from here pass the all value at a time to Mail And Notifications.
