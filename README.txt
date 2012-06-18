CPSC348
=======

Girl Scout Website
High Volume Cookie Booths Sign-up
Version 1.0

http://rosemary.umw.edu/~dluce/website/

We used a php file for our database connections that had the connection information, as well as the error information. The file name is:
db_connection.php

The database password is: gurren5

And the website is housed on two servers simultaneously, thanks to GitHub, but for simplicity we usethe  ~dluce server on rosemary.

Also, the example login that we will use for our site and its information are housed in the file:
	exampleUserInfo.php

I will repeat it here, but for the most up to date version, see the aforementioned file. All following information mentioned is necessary to use the site:

Name: Joe Schmoe
Troop: 0000 (four zeroes)
Phone: 123-456-7890
E-mai: pmoerman@mail.umw.edu
Username: username
Password: password

Joe Schmoe IS NOT an admin, but is an example Scout Leader.


When a leader goes to sign up for a time slot in a given location, that said leader is required to put in verifying information, so we know they are who they say they are. They must put in the information they registered with.

ONLY ONE Leader per troop may register. Any more and the site will reject them because troop_number is our primary key. This is why we used #0000 as our example number.

A user is able to reset their password, but we highly stress against it. It is easy to do, as long as you know EVERY other bit of information you registered with. We encourage that the Leaders remember their UNs and Passwords.

As of yet, there is NO Admin user for this site.

I think given more time and a little more knowledge of what Dr. Polack actually wanted, we could have made this site fully functioning. It is on a roll, and a few tweaks here and there and it is good for use in actuality. We are under a time crunch, so we were focuing on making the site look functional for presentation rather than fully functional for the client, but if it was a full semester, I think we could have done it. I also think a week dedicated to the group project, with lecture of course, would be helpful if this were a full semester course.

Peter Moerman & David Luce
