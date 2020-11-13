# Start
```shell script
./start.sh
```

# Account
you can log yourself with 1 of the 3 accounts, the password of all these accounts is: password

owner@dev.com, this account is the admin account of a team
member@dev.com, this account is part of a team and can see and do less than the owner.
solo@dev.com, this account is not part of a team.

# Information
The payment system will not work because it requires to setting up `ngrok` to allow Mollie webhooks to communicate with your development environment.\
You won't be able to invite a user in your team, except if you configure all the `MAIL_*` present in the `.env`.\ 
