zurmo-forms
===========

I was unhappy with how and how un-form-porny Zurmo delivers its webforms. I want to have chapters, additional explanations, a loading-indicator and usecase-related lables, all configurable in one place. 

Like http://sefzig.net/crm/formular/kontakt/. 

The program is installed anywhere in the domain of your Zurmo-installation. It loads the webform, indicates the loading-state, runs jqueries over the form as it has loaded to optionally place certain text before certain lines to create headings, to change lables according to the forms purpose and to add mouseover-tooltips. All configuration is held by an array in a separate php-file.

Reading the forum and comments in the documentation, I found that others were unsatisfied with Zurmos ootb-solition (Community Edition) too, so here you are. I'm not poud of the code, but it works for me. If you use it, please leave me a note. If you want to optimize it, go ahead.

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
Go to http://zurmo.org.
