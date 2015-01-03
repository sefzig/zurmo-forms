zurmo-forms
===========

I was unhappy with how Zurmo delivers its webforms out-of-the-box. I want to have chapters, additional explanations, a loading-indicator and usecase-related lables, all configurable in one place. So I made up a solution to optimize one or many webforms: 
http://sefzig.net/link/CrmFormulare/ 

The program is installed anywhere in the domain of a Zurmo-installation. It loads a webform via the js-link provided by Zurmo, indicates the loading-state, runs jqueries over the form as soon as it has loaded to optionally place certain text before certain lines, change lables and add mouseover-tooltips according to the forms usecase. All configuration is held by a php-array in a separate config-file: 
http://sefzig.net/link/GithubZurmoformsKonfig/ 

Reading Zurmos forum and comments in the Zurmo documentation, I found that others were also unsatisfied with Zurmos out-of-the-box solition (Community Edition) - feel free to use this. I'm not poud of the code, but it works for me. Code and further details are made public here on Github: 
http://sefzig.net/link/GithubZurmoforms/ 

If you want to use it, please consider
* The program is badly engineered und unstable at times. This is due to the intersection of the way Zurmo delivers the forms and my limited scripting-skills.
* The programm does not communicate with and isn't integrated into Zurmo (it simply loads Zurmos js-file/html-content). 
* The forms are not responsive. They work on mobile, but could use mediaqueries and a more mobile css.
* Little documentation and german wording all over the code. Sry...

Install the program on your server
* Check out the repository.
* Rename htaccess.txt to .htaccess and change the paths contained in it.
* Use config.php to configure your installation.
* Add forms by multiplying the nodes in formular in config.php.
* Upload folder formular somewhere on the same domain as Zurmo-js-files.

Don't know about Zurmo? 
It is a great crm-system!
Go to http://sefzig.net/link/ZurmoOrg/.
