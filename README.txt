CPSC348
=======

Girl Scout Website
High Volume Cookie Booths Sign-up
Version 1.0

http://rosemary.umw.edu/~dluce/website/

We used a php file for our database connections that had the connection 
information, as well as the error information. The file name is:
db_connection.php

The database password is: gurren5

And the website is housed on two servers simultaneously, 
thanks to GitHub, but for simplicity we only use the ~dluce MySQL database 
on rosemary. Trying to maintain 2 databases would've gotten very
confusing very fast, especially with some of the changes we had to make over
the course of project.

Also, the example login that we will use for our site and its 
information are housed in the file:
	exampleUserInfo.txt

I will repeat it here, but for the most up to date version, 
see the aforementioned file. All following information mentioned 
is necessary to use the site:

Name: Joe Schmoe
Troop: 1000
Phone: 123-456-7890
E-mail: pmoerman@mail.umw.edu
Username: username
Password: password

Joe Schmoe IS NOT an admin, but is an example Scout Leader.

The admin account information is as follows:
	Name: Administrator
	Troop: 0000 (four zeroes)
	Phone: 703-340-0810
	Email: dluce@mail.umw.edu
	username: admin
	password: gurren5

Admin has the privilege to reset the schedule - since this is a weekly
event, having a schedule you could only set once would be rather useless.

Admin does NOT have the ability to sign up for a time slot - it is
mostly there just to reset the database.

When a leader goes to sign up for a time slot in a given location, 
that leader is required to put in verifying information, so we 
know they are who they say they are. They must put in the information 
they registered with.

ONLY ONE Leader per troop may register. Any more and the site will 
reject them because troop_number is our primary key. This is why we 
used #0000 as our admin number.

A user is able to reset their password, but we highly stress against 
it. It is easy to do, as long as you know EVERY other bit of 
information you registered with. We encourage that the Leaders 
remember their UNs and Passwords.

Peter:
I think given more time and a little more knowledge of what Dr. Polack 
actually wanted, we could have made this site fully functioning. It is 
on a roll, and a few tweaks here and there and it is good for use in 
actuality. We are under a time crunch, so we were focusing on making 
the site look functional for presentation rather than fully functional 
for the client, but if it was a full semester, I think we could have 
done it. I also think a week dedicated to the group project, with 
lecture of course, would be helpful if this were a full semester course.

David:
In technical terms of what was accomplished, I'd say that our site is
a demonstration in the versatility of PHP. We tried once or twice to
include JavaScript in the project, but that was pretty much a disaster, so
we switched to pure PHP for scripting. It has worked out pretty well. 
We managed to implement quite a few things; login, password recovery,
automated location table display, successful use of CSS, admin privileges,
scheduling reset, etc. I also made sure to validate pretty much every
page on the site as XHTML 1.0 Strict, though I'm sure I missed a few
pages. What I wish we could have done was include
JavaScript to make the pages more interactive instead of constant
click-load-click-load, but the event handlers weren't doing anything
(just like in the lab a few weeks ago). Because of that and the time
constraints, we had to scrap JS and focus on PHP.

Peter Moerman & David Luce
