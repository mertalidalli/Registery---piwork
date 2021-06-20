# READ ME

Hello first of all,

Thank you very much for this opportunity you have given me.

I will share with you what I have done in order.


# TASK

In the fifth stage, what is demanded from me;

>Please prepare the user interface specification document in English for the user management screen below using markdown syntax. It should include the requirements, details related to UI components, the behavior of the page when using these components, what to show to the user at the beginning, etc. This document will be used by Software developers who will develop this user interface. Please push the result in one of GitHub, GitLab, or BitBucket repositories (any of them is fine) and share the accessible link.

## What I did for the mission.

I didn't quite understand the fifth part. To be honest, it wasn't something I knew much about. But tonight I believed I could do my best by researching. Therefore, by improvising, I worked on a code that takes the requested information from the user and saves them on the local server. I used php and html codes for this. I also ran the server in **XAMPP** via Apache and MySQL.

## Folders

The index.php file that welcomes you in the installed Register folder contains the html code that collects the necessary information from the users and transfers them to the server.

In the style1.css file, I made the index.php file a little fancy. Because I encountered many different content until I learned that the data received from the user in html will not be saved no matter what is done. That's why I think I've added whatever is pleasing to my eye that I believe will be useful for me.

The favicon.ico file entered the list when I decided to add a small tab icon to be pleasing to the eye among the content confusion I mentioned above.

The database.php file was when I was done with html and I started researching php to create a database. I've had a lot of unsuccessful experiences at this point from various sources but my cleanest progress has been with XAMPP.

## Working Order

Even though I added a lot of things in index.php, I had no difficulty in pulling the data to database.php because I created a nice layout. At this point, the thing that tires me the most is that I try a lot of code that works unstable in the XAMPP version I use, and I tire myself both physically and mentally. Luckily, I was finally able to write the code that works in the appropriate version and provide the connection environment to the server.

Access was quite easy as I saved the data entries on localhost. For standard access id: **"root"** , psw:**"(blank)"** so I could easily access **phpmyadmin**. Then I created my database and table and edited the necessary fields in database.php.

After checking the code and seeing that it was working, I immediately ran my test over and over and over again to confirm it was working.

## FINAL WORDS

I know it was a **README.txt** like a story, but due to my ignorance and inexperience, I felt the need to explain myself fully. Thanks again for everything.

### Required Software

>**Sublime Text** https://download.sublimetext.com/Sublime%20Text%20Build%203211%20x64%20Setup.exe
**XAMPP 8.0.7** https://www.apachefriends.org/xampp-files/8.0.7/xampp-windows-x64-8.0.7-0-VS16-installer.exe


### Actions to follow after downloads are complete


- Go to **C:\xampp\htdocs** folder and **delete** the remaining files **except**, **applications.html** and **bitnami.css** files.

- The **Register folder** in the file downloaded from GitHub is copied here.
- **XAMPP Control Panel** application is run, **Apache** and **MySQL** services are **selected** and the **START** button is pressed.

- Open the currently used internet browser and type the command **http://localhost/phpmyadmin/index.php** in the search section.

- A new database is created by clicking the **New button** from the menu on the left. (The name of the database to be created is **"dbase"**.)

- Then click on **Create Table** and here Table name should consist of **"dbase"** and **4 columns**.

- It is named as **ID, username, email, enabled** from top to bottom, respectively.

- In the ID line, the type is selected as **"INT", "clicked on A_I"** and its Index is rendered as **"PRIMARY"**.

- For username, email and enabled, just change the type to **"VARCHAR"** and enter the Length/Values ​​as **"255"**.

- By pressing the Save button, **"DATABASE"** and **"TABLE"** are created.

- Open the currently used internet browser, type  **http://localhost/** in the search section and enter the Register folder.

- On the **"REGISTER"** screen that appears, the required data from the user is entered and the **"SAVE"** button is pressed.

- A small warning window indicates that our process is **complete**.

- Then again at the bottom of **http://localhost/Register/** If you want to see the database, **Click here!** By clicking on the button, we will be able to access user data via **"DATABASE"**.

- In this area where we can make minor changes on user data, we can also delete or correct unwanted data.
------------------------------------------------------
