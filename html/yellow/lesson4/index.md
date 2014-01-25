---

layout: lesson
title: Yellow Belt - Lesson 4

form_url: http://lesson.coderdojogorey.com/html/yellow/lesson4/form.php

---


# Lesson 4

## Introduction

This lesson we will look at how to create forms a page.

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


## Forms

On your desktop create a folder called coderdojo. In the coderdojo folder create another folder called lesson4.

When your ready open your text editor and type in the following code

    <!DOCTYPE html>
    <html>
    <head>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <form name="my-form" method="post" action="{{page.form_url}}">
            <label>First Name</label>
            <input type="text" name="firstname">
            <input type="submit">
        </form>
    </body>
    </html>

Save it as index.html in the lesson4 folder you created. Also create a new file called style.css in that same folder.

Now open your browser and press ctrl o (cmd o on a mac) file the index.html file and press open.

Enter something in the text box and click submit.


### Explanation 

A form in html is added using the `<form> </form>` opening and closing tags, with the form elements placed in between.

A form can have serveral attributes name, method, and action. There are several more you can look up on w3-schools.

At a minimum the form needs the action and method attributes. The action tells the form were to send the data when the form is submitted. The method tells the form how to send the data. The method can be POST or GET. For these exercises we'll use POST.

When you enter information on a form and submit it the data to be processed on a server. For these exercises we are going to post to http://lesson.coderdojogorey.com/html/yellow/lesson4/form.php which is a special page that processes the information and displays back the information entered on the form.

The next item on the form is a `<label></label>` which describes the name of the field on the form.

When we want to enter data on a form we use an input field. In this case we are using an input field of the `type="text"` this is a single line input.

## Form Input Tag

The first tag that we'll use is the `<input>` tag.

Have a look a the page [w3schools](http://www.w3schools.com/tags/att_input_type.asp) to see the types you can use for forms.

    <!DOCTYPE html>
    <html>
    <head>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post" action="{{page.form_url}}">
            <p>using the text type</p>
            <label>First Name</label>
            <input type="text" name="firstname">
            <br />

            <p>using the password type</p>
            <label>Password</label>
            <input type="password" name="password">
            <br />

            <p>using the radio type</p>
            <label>Are you male or female?</label> <br />
            Male <input type="radio" name="gender" value="male"> <br />
            Female <input type="radio" name="gender" value="female">
            <br />

            <p>Using the checkbox</p>
            <label>Remember me</label>
            <input type="checkbox" name="rememberme">
            <br /><br /><br />

            <input type="submit">
        </form>
    </body>
    </html>


Once you have saved the file, submit it.

## Explanation

Here we have introduced some new input types here, these are the most common. You can see others at [w3schools](http://www.w3schools.com/tags/att_input_type.asp)

If you want to add in a default value to the field you can use value="DEFAULT" on input types that are text. On the input type for the firstname add a new attribute value="Enter Your Name".

If you want to have a default value for an input type or radio or checkbox you use checked="checked". On the checkbox and radio input type for gender added checked="checked" attribute to male input.

Change the method of the form to GET and submit the form again. When the form data is shown on the page have a look at the url, what do you notice.

Read up online the difference between POST and GET.

## Text Area Tag

The text area `<textarea> </textarea>` this allows large amounts of text to be added.

    <!DOCTYPE html>
    <html>
        <head>
            <link type="text/css" rel="stylesheet" href="style.css">
        </head>
    <body>
        <form method="post" action="{{page.form_url}}">
            <label>Enter a paragraph of text</label> <br />
            <textarea name="paragraph" rows="10" cols="60"></textarea>

                <br /><br /><br />
            <input type="submit">
        </form>
    </body>
    </html>

## Explanation

The textarea tag has an opening and closing tag. The cols and rows attributes specify the height and width of the textarea.

You can use css to set a height and width of the textarea.

To add a default value to the textarea you add it `<textarea>Default text area</textarea>`


## Dropdown list

The dropdown box or select box can be added as follows:

    <!DOCTYPE html>
    <html>
    <head>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post" action="{{page.form_url}}">
            <label>Select from the dropdown list</label> <br />
            <select name="counties">
                <option value="wexford">Wexford</option>
                <option value="wicklow">Wicklow</option>
                <option value="dublin">Dublin</option>
            </select>

            <br /><br /><br />
            <input type="submit">
        </form>
    </body>
    </html>


## Explanation

You can have as many items into the list as are required, each item is added by option tag.

To pick a default option to show put in the select="selected".

If you want to be able to select multiple options put 'multiple' to the select tag.

## Styling forms

There are 2 form elements that we haven't used in the examples above that is fieldset and legend. Look up what these two tags do and add them to your forms.

Read the following [article to get an idea of how to style forms](http://www.htmlgoodies.com/tutorials/forms/article.php/3888746/HTML-Forms-From-Basics-to-Style-Layouts.htm).

Now create a form with elements we've learned today. And style it using some of the techiques mentioned in the article.

## Resources


* [http://www.htmldog.com/guides/cssbeginner/](http://www.htmldog.com/guides/cssbeginner)
* [http://www.sitepoint.com/html-css-beginners-guide/](http://www.sitepoint.com/html-css-beginners-guide/)
* [http://www.w3schools.com/css/](http://www.w3schools.com/css/)


## Conclusion
Today you have learned about making forms and how to style them.

