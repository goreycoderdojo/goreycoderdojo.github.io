---

layout: lesson
title: HTML Lesson 3

---

# Lesson 3

## Introduction


In lesson 2 we looked at using CSS allows us to add style to our HTML changing your pages appearance. 

This week we will look at how to position things on a web page using CSS. We will also learn how to style lists and turn them into menus on a web page.

If you don't understand anything or something doesn't work the way you thing it should just shout for help!

## Startup

To start writing html you will need a text editor. Below are links to two:

* [http://www.sublimetext.com](http://www.sublimetext.com/) 
* [http://notepad-plus-plus.org/](http://notepad-plus-plus.org/)


The next thing you need is a web browser. You can use your current web browser. Google Chrome is a good browser for using to check and debug (fix) your HTML code if there are errors in it. [Download Chrome here](http://www.google.com/chrome).

A note on creating folders and html file names. It is best practice not to have spaces in the names of web folders or file names. So you can call your files anything like the following.


* MyWebPage.html
* mywebpage.html
* my-web-page.html


## Applying CSS

On your desktop create a folder called coderdojo. In the coderdojo folder create another folder called lesson3.

When your ready open your text editor and type in the following code

    <!DOCTYPE html>
    <html>
    <head>
    </head>
    
    <body>
        <div id="container">
            <div id="header">
                <h1>Main Title of Web Page</h1>
            </div>
            <div id="menu" >
                <b>Menu</b>
                <ul>
                    <li>About Me</li>
                    <li>My Hobbies</li>
                    <li>My School</li>
                </ul>
            </div>

            <div id="content">
                Content goes here
            </div>

            <div id="footer">
                Gorey Coder Dojo
            </div>
        </div>

    </body>
    </html> 

Save it as index.html in the lesson3 folder you created. Also create a new file called style.css in that same folder.

Now open your browser and press ctrl o (cmd o on a mac) file the index.html file and press open. You should see a simple page. Next we are going to add some styles


### Explanation 

In lesson 2 we covered the basic CSS. We learned how to include a CSS file to style your page. We will do this again today. In the `<head>` tag add this line.

    <link type="text/css" rel="stylesheet" href="style.css">

## CSS

To apply CSS you use property:value.


In you style.css file add the following.

    #container {
         width: 980px;
    }

    #header {
         background-color: #FFA500;
    }

    h1 {
        margin-bottom: 0;
    }

    #menu {
        background-color: #FFD700;
        height: 300px;
        width: 200px;
        float: left;
    }

    #content {
        background-color: #EEEEEE;
        height: 300px;
        width: 780px;
        float: left;
    }

    #footer {
        background-color:#FFA500;
        clear:both;
        text-align:center;
    }

## Explanation

If everything went right you should have a page that looks something like this

<div id="container" style="width:504px">
    <div id="header" style="background-color:#FFA500; border: 1px solid black;">
        <h1 style="margin-bottom:0;">Main Title of Web Page</h1>
    </div>

    <div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:left;border: 1px solid black;">
        <b>Menu</b>
        <ul>
            <li>About Me</li>
            <li>My Hobbies</li>
            <li>My School</li>
        </ul>
    </div>
    <div id="content" style="background-color:#EEEEEE;height:200px;width:400px;float:left;border: 1px solid black;">
        Content goes here
    </div>

    <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;border: 1px solid black;">
        Gorey Coder Dojo
    </div>
</div>

We have 5 DIVs called container, header, menu, content and footer. Most web pages will have these. The container holds everything. The header DIV will usually have a logo. The menu helps you find your way around the website. The content DIV will have all your text and images. The footer can have information about the website.

We have added styles for each of the divs in our HTML file. We have added heights and widths for each of the DIVs. This changes the size of the divs on the page.

We also set `background-color` for each of the DIVs so you can see the difference between them and how much space they take up.

You can see the menu is on the left. You can change this to appear on the right by changing one line in your CSS file

    #menu {
        background-color: #FFD700;
        height: 200px;
        width: 200px;
        float: left;
    }

Change the line that says  
`float: left;`  
to  
`float: right;`


## Explanation

You should see that the menu DIV has moved to the right of the page. If you have two DIVs beside each other you can use float to position them left or right.

<div id="container" style="width:504px;" >
    <div id="header" style="background-color:#FFA500; border:1px solid black;border: 1px solid black;">
        <h1 style="margin-bottom:0;">Main Title of Web Page</h1>
    </div>

    <div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:right; border:1px solid black;">
        <b>Menu</b>
        <ul>
        	<li>About Me</li>
        	<li>My Hobbies</li>
        	<li>My School</li>
        </ul>

    </div>

    <div id="content" style="background-color:#EEEEEE;height:200px;width:400px;float:left; border:1px solid black;">
        Content goes here
    </div>

    <div id="footer" style="background-color:#FFA500;clear:both;text-align:center; border:1px solid black;">
        Gorey Coder Dojo
    </div>
</div>

This is the easiest way to position things. There are other ways of doing this which we will learn in another lesson

Now I bet you want to make the menu look a little better. We can do that with CSS. The first thing we want to do is to get rid of the bullet points, the dots beside the menu items

At the bottom of your CSS file you should add this code.

    ul {
        padding: 0px;
    }

    li {
        list-style: none;
        background-color: #EEEEEE;
        border-bottom: 1px solid #555555;
        width: 200px;
    }

## Explanation

You should see something like we have below.

<div id="container" style="width:504px">

    <div id="header" style="background-color:#FFA500;border: 1px solid black;">
        <h1 style="margin-bottom:0;">Main Title of Web Page</h1>
    </div>

    <div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:right;border: 1px solid black;">
        <b>Menu</b>
        <ul style="padding: 0px;">
        	<li style="list-style: none; background-color: #EEEEEE; border-bottom: 1px solid #555555; width: 100px;">About Me</li>
        	<li style="list-style: none; background-color: #EEEEEE; border-bottom: 1px solid #555555; width: 100px;">My Hobbies</li>
        	<li style="list-style: none; background-color: #EEEEEE; border-bottom: 1px solid #555555; width: 100px;">My School</li>
        </ul>
    </div>

    <div id="content" style="background-color:#EEEEEE;height:200px;width:400px;float:left;border: 1px solid black;">
        Content goes here
    </div>

    <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;border: 1px solid black;">
        Gorey Coder Dojo
    </div>
</div>

We have set the padding for the UL to be 0px so that it touches the side of the menu DIV

You should see that the bullet points have gone and you have a background-color on the menu items. We put a border on the bottom of the LIs and we have set the width of the LIs to be the same width as the menu DIV.

Now we can add links to the menu items but first add a home link. Usually the home page of a site is index.html

    <ul>
        <li><a href="index.html">;Home</a></li>
        <li><a href="about-me.html">;About Me</a></li>
        <li><a href="my-hobbies.html">;My Hobbies</a></li>
        <li><a href="my-school.html">;My School</a></li>
    </ul>

Now that we have added the links you can save the page. Then save the page as:

* about-me.html
* my-hobbies.html
* my-school.html

## Explanation

You should now have a website with a home page and three other pages. You can add your own content and titles to each of the pages if you want. You can use the menu items to browse from page to page. 

To show what page we are on in the website we can change the menu items. To do this we can add a CLASS to the menu item of the page we are on. Open up index.html. This is your homepage. for the menu item home you can add `class="selected"`

    <ul>
        <li class="selected" ><a href="index.html" >Home</a></li>
        <li><a href="about-me.html">About Me</a></li>
        <li><a href="my-hobbies.html">My Hobbies</a></li>
        <li><a href="my-school.html">My School</a></li>
    </ul>

Now we can change the color of the background for this using CSS.

    li.selected {
        background-color: #999999;
    }

It should look something like this.

<div id="container" style="width:504px">
    <div id="header" style="background-color:#FFA500;border: 1px solid black;">
        <h1 style="margin-bottom:0;">Main Title of Web Page</h1>
    </div>

    <div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:right;border: 1px solid black;">
        <b>Menu</b>
        <ul style="padding: 0px;">
            <li style="list-style: none; background-color: #999999; border-bottom: 1px solid #555555; width: 100px;"><a href="">Home</a></li>
            <li style="list-style: none; background-color: #EEEEEE; border-bottom: 1px solid #555555; width: 100px;"><a href="">About Me</a></li>
            <li style="list-style: none; background-color: #EEEEEE; border-bottom: 1px solid #555555; width: 100px;"><a href="">My Hobbies</a></li>
            <li style="list-style: none; background-color: #EEEEEE; border-bottom: 1px solid #555555; width: 100px;"><a href="">My School</a></li>
        </ul>

    </div>

    <div id="content" style="background-color:#EEEEEE;height:200px;width:400px;float:left;border: 1px solid black;">
        Content goes here
    </div>

    <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;border: 1px solid black;">
        Gorey Coder Dojo
    </div>

</div>

You have targeted LIs with a class of `selected`. Any LIs with this class will appear with the darker grey background-color.

The last thing we are going to try is change the color of the links when you hover the mouse over them.

To do this you need to use a pseudo class.

    li a:hover {
        color: 00FF00;
    }

Now when you hover over the menu items you the text will change color.

## Resources

* [http://www.htmldog.com/guides/cssbeginner/](http://www.htmldog.com/guides/cssbeginner/)
* [http://www.sitepoint.com/html-css-beginners-guide/](http://www.sitepoint.com/html-css-beginners-guide/)
* [http://www.w3schools.com/css/](http://www.w3schools.com/css/)


## Conclusion
What you have learned today are some techniques to layout a webpage with CSS. By using the resouces above and practicing writting html and css you will become better at it.
