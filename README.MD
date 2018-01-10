
Some good practice to avoid any data loss or ....
1. Always take a pull of current branch before development
2. Always take a pull of upper/master branch before you proceed to develop or commit your code. So you will always be updated with your project code.
3. Try to commit your code as per functionality so it is easy to differentiate your code commits
4. Mentions proper comment to know what we did in respective commit

# GIT user Guide
Step 1 : Git clone main repository
-Go to the folder where you want to run your project like (/opt/lampp/htdocs/   or /var/www/html/ or you preferred) Note - Do not create the actual project folder
- Run the command ``git clone #repository ssh path#``

NOTE - Step for first time your exiting local project on GIT
after creating git clone you need to copy all folder of your already existing local project in newly created local project folder and then run the following commands.
``git add .``
``git commit -m "your_comment_will_be_here"``
``git push origin master``

Step 2 : Check the current branch
-Use command to go inside the folder (It has contain the .git folder)
- Run the command ``git branch``
- It will show you all available branch from your local and the active branch will be shown in different color or * in front of branch name

Step 3 : Checkout with your new branch (here you actually work)
- Run the command to create a new branch like (02/02/2017 or your sweet name or module name or as per required)
- Command is ``git checkout -b new_branch_name``

Step 4 : Now you are ready to do your smart development here

Step 5 : commit your code to your current working branch
- Run the command to add your file to commit ``git add . ``
- Run the command which explain the commit reason eg. Login file updated, Issue resolve for registration. command is : ``git commit -m "your_comment_will_be_here``

Step 6 : Take the pull for your working branch (In case any other developer work on your branch so it is necessary to avoid the conflict and data lost)
- Run the command to take the pull ``git pull origin your_current_branch_name``

Step 7 : Push/Submit the code to the git repository to your working branch
- Run the command to push the code ``git push origin your_current_branch_name``
- After successful push it will show you message :)

Following steps are very important please follow/proceed with careful

Step 8 : Now you are in your own created branch, Take the pull from upper/master branch
- Run the command to take the pull from upper/master branch to update your code if anyone update the upper/master branch before you command is ``git pull origin master``
- Now again you have to push the code to your current working branch with the command ``git push origin your_current_branch_name``

Step 9 : Switch the branch
- Run the command to switch the branch ``git checkout master``  master would be your other branch name
- You can follow the Step 2 to verify branch

Step 10 : Now you are in master branch, Take the pull from master, Important step to avoid the data lost
- Run the command to update your local code in new branch ``git pull origin master``

Step 11 : Merge new local branch/code to remote master (Verify you are in master branch)
- Run the command ``git merge your_current_branch_name`` (your_current_branch_name - created at step 3)

Now you are good to go ahead !!! Happy Coding :)

Thank you
Stark Digital Media Services Pvt. Ltd.
