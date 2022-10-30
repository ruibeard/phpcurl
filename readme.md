# Task One - User API:

API endpoint: https://jsonplaceholder.typicode.com/users

Task: **Create script which pulls the user data from the API and displays data.**

Setup:

1. create cURL connection to pull data
2. create a collection class object to hold all the users
3. create a class object to hold each user
4. convert all phone numbers to digits only, moving any extensions to a separate property
5. validate each email address (set new property, email_valid, to true or false based on valid or not) and make
6. Finally: loop through users and print filtered data in csv format based on the following headings:

```csv
first name, last name, company name, email, phone, extension, city
```


## Notes:

This PHP script will download automatically the csv file named `users.csv` if opened in a browser.

I've used "Constructor property promotion" form PHP 8.0, so you need to use PHP 8.0 or higher.

Also, I didn't convert the phone numbers to INT and left the hyphens `-` and brackets `()` in the phone numbers, as It wasn't clear if that was asked or not.

The email validation does not affect the output, it just sets the `email_valid` property to `true` or `false` based on the validation.