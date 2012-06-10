
Installed YII

$HOME/yii-1.1.10.r3566

-----------------------------------------------------------------------

Online docs:

http://www.yiiframework.com/

http://www.larryullman.com/series/learning-the-yii-framework/

http://yiiradiio.mehesz.net/

-----------------------------------------------------------------------
Kindle books:

Agile Web Application Development with Yii1.1 and PHP5 - Jeffrey Winesett

Yii 1.1 Application Development Cookbook - Alexander Makarov


-----------------------------------------------------------------------

Installed GIT
felicio@felicio-laptop:~$ sudo apt-get install git-core

Created a git-hub account
feliciovaz
felicio.vaz@gmail.com
K...........7

Created github repository: logbook

felicio@felicio-laptop:~/projects/logbook/yii$ git config --global user.name "Felicio Vaz"
felicio@felicio-laptop:~/projects/logbook/yii$ git config --global user.email felicio.vaz@gmail.com
felicio@felicio-laptop:~/projects/logbook/yii$ git init
felicio@felicio-laptop:~/projects/logbook/yii$ git add README.txt 
felicio@felicio-laptop:~/projects/logbook/yii$ git commit -m 'first commit'
[master (root-commit) 64b526d] first commit
 1 file changed, 42 insertions(+)
 create mode 100644 README.txt
felicio@felicio-laptop:~/projects/logbook/yii$ git remote add origin https://github.com/feliciovaz/logbook.git
felicio@felicio-laptop:~/projects/logbook/yii$ git push -u origin master
Username for 'https://github.com': feliciovaz
Password for 'https://feliciovaz@github.com': 
To https://github.com/feliciovaz/logbook.git
 * [new branch]      master -> master
Branch master set up to track remote branch master from origin.
felicio@felicio-laptop:~/projects/logbook/yii$ git status
# On branch master
# Changes not staged for commit:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#	modified:   README.txt
#
# Untracked files:
#   (use "git add <file>..." to include in what will be committed)
#
#	.README.txt.swp
no changes added to commit (use "git add" and/or "git commit -a")
felicio@felicio-laptop:~/projects/logbook/yii$ git branch
* master
felicio@felicio-laptop:~/projects/logbook/yii$ git branch -a
* master
  remotes/origin/master

felicio@felicio-laptop:~/projects/logbook/yii$ cat .gitignore 
.gitignore
*.swp

Added ssh key from felicio-laptop (Ubuntu)


