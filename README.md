# Intrepid Group Sample Application

## What is this?

This sample application is a small php website that's been built with a number
of areas that can be improved by you so that we can get a better idea of what
kind of developer you are.

Please note that there are no right or wrong answers in this, we are simply
trying to get a feel for what kind of developer you are, and how you approach
straightforward problems.

There are no trick tasks, and no hidden requirements.

We are assuming you are familiar with PHP, and are able to run PHP code locally
on your own computer without assistance.

## General Instructions 

First, please take the time to read these instructions thoroughly and understand
them. If you have questions, or parts of it doesn't make sense, please do
get in contact via email.

Secondly, please make sure that you can startup and run the sample application
before you make any changes. It's important that you know it's working on your computer
before you jump in and make changes.

Thirdly, please go through each of the tasks listed below, read them thoroughly,
and carry out each change in the order they are listed. How you solve each
task is entirely up to you, but try and think of the simplest, and best way
to solve each task rather than the "trickiest" way you can do it. We are
not looking for anything fancy, just a good solid understanding of the problem
and a solution that works every time.

Finally, the existing code is there to be changed, feel free to modify any and all
of the code that is in this project as you see fit to achieve the tasks listed below.

When you have finished, submit your answer by following the instructions given below.

## Running the Sample Application

There are two options for running this project locally.

### Option 1: Running using the built in php webserver ( Recommended )

This option is very simple if you have PHP installed on your computer and it's >= php 5.4

To start up the built in webserver please do the following:

 - Open up a command prompt on your computer and navigate to the folder that holds these files
 - Start the webserver with the command `php -S localhost:8000`, you should see something that looks like this:
 
````
username@computer-name:~/Development/projects/intrepid-group-application$ php -S localhost:8000
PHP 7.0.0RC1 Development Server started at Thu Mar 17 14:34:23 2016
Listening on http://localhost:8000
Document root is /Users/afoozle/Development/projects/intrepid-group-application
Press Ctrl-C to quit.
````

 - Open up a web browser and navigate to `http://localhost:8000`, you should now see the sample application 
 and any changes you make to the files will be reflected here


### Option 2: Installing on an existing php based webserver ( Not Recommended )

If you have an exising webserver that is running php, you can place this entire folder in the webroot of your webserver, 
or a subdirectory of your choosing, and navigate to your webserver locally.

## Submitting your Answer

 1. Zip up the files and directory into a new file called 'intrepid-group-application.zip' which contains all of the code
 2. Reply to the email that contained these instructions and attach your zip file
 3. Send the email to `matthew.wheeler@intrepidtravel.com`

## Tasks

### Task 1. Only show English Language books

As an English customer of this website, I want to only see English language 
books so that I don't see options I can't read

*Acceptance Criteria*

 - Default list of books must only contain English language books
 - Default list of books must NOT contain non-English books
 - `Language` column should be removed from display

### Task 2. Sort books by year of publication

As a customer interested in older books, I want to see the list of books 
listed by year of publication, newest first, so that I can easily see the
books I am interested in

*Acceptance Criteria:*

 - Default list of books must be sorted from newest to oldest

### Task 3. Sort books by any column

As a customer who likes to use different criteria to choose which book to buy,
I want to be able to sort the list of books using any of the existing columns
without re-loading the page so that I can sort by whatever I like

*Acceptance Criteria:*

 - Column headings should be clickable in the table of books
 - Clicking on a column heading should re-sort the list of books based on that column
 - Re-sorting by column should not reload the page

### Task 4. Zebra-Stripe the table rows and add a hover to the table rows

As a customer who likes to have pretty tables, I want to have each row in the 
table alternating background colours and the row to have a hover effect so that 
I can easily see which rows I am working with

*Acceptance Criteria:*

 - Each alternating table row should have a different background colour
 - When the mouse is hovering over a row in the table, the row background should change

### Task 5. Hide the Author column when the page is viewed on mobile

As a mobile customer, I want to easily see the important information without
the text wrapping over from line to line

*Acceptance Criteria:*

 - When the webpage is viewed on a mobile phone width browser window the `Author` column should be hidden
 - When the webpage window is made desktop size again, the `Author` column should be visible
