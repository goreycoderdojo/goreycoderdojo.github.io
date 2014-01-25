---

layout: lesson
title: Blue Belt - Lesson 1

---

# Blue Belt - Lesson 1

## Introduction to JQuery

As well as HTML and CSS your browser also runs a programming language called Javascript. Javascript allows you to write code interact with the web page. 

There is a javascript library called JQuery what allows you to make your webpage more interactive. We'll be learning about JQuery in this lesson. You don't need to know Javascript to use JQuery, but we'll be learning some as we go along. 

To use JQuery first you need to download it. Follow the steps below: 

* Create a new directory on your computer to store todays lesson in.
* Go to [http://jquery.com/download/](http://jquery.com/download/) and find the jQuery 2.x section and click on the Download, the uncompressed, Development JQuery link. Right click on it and click on the 'Save link as'. Save the file in the directory you created above. Save it as `jquery.js`.

For this lesson we'll be using your browsers code inspector, we're using [Chrome](http://www.google.com/chrome). 


Let's get started and add JQuery to your webpage. Open your text editor, and type in the following code.

    <!DOCTYPE html>
    <html>
        <head>
            <title>Playing with JQuery</title>
            
            <link type="text/css" rel="stylesheet" href="style.css">

        </head>
        <body>

            <script src="jquery.js"></script>
        </body>
    </html>

Save that code as index.html in the same directory as you save the jquery.js file.

In your text editor create a new file, leave it blank and call it style.css and save that in the same directory as above. 

Open the page in your browser. If your using Chrome, right click on the page and click on the Inspect Element link. If you are using Firfox or Internet Explorer you'll need to either switch to Chrome for the lesson, or find the equivilant in your browser.

At the top of the Web Inspector click on the Console link. This will show any errors in your code when using JQuery. The console should be blank.

## Document.ready




----------------------------

In lesson 1 we looked at how to put together a webpage and looked at some basic html tags. This week well be looking at Cascading Style Sheets, or CSS for short.

Using CSS allows us to add style to our HTML. There are a number of ways of applying CSS to HTML. But the basic format of css is property:value;

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

On your desktop create a folder called coderdojo. In the coderdojo folder create another folder called lesson2.

When your ready open your text editor and type in the following code

    <!DOCTYPE html>
    <html>
    <head> 
      <title>CSS Page</title>
      <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
      <h1>This is a h1 tag</h1>
       
      This is a paragraph
         
      
          * List item 1
          * List item 2
          * List item 3
          * List item 4
      
        <table>
          <tr>
            <td>cell 1</td>
            <td>cell 2</td>
          </tr>
          <tr>
            <td>cell 3</td>
            <td>cell 4</td>
          </tr>
        </table>
    </body>
    </html>


Save it as index.html in the lesson2 folder you created. Also create a new file called style.css in that same folder.


Now open your browser and press ctrl o (cmd o on a mac) file the index.html file and press open.


### Explanation 

In lesson 1 we covered the basic html tags. The new one we added here was in the `<head>` section.

    <link type="text/css" rel="stylesheet" href="style.css">

What we've done here is to add the style sheet to the page. As we have not added any styles yet we won't see anything.

There are 2 other ways to add styles to a page, we won't cover them just yet. But you can look up some of the website resources at the end of the page to learnmore.


## CSS

You apply CSS to selectors. There are 3 different types of selectors. For the moment we'll concentrate on the html tag selectors e.g. body or p

To apply CSS you use property:value.


In you style.css file add the following.

    body{
      font-size:16px;
    }

    h1{
      font-size:23px;
      color:navy;
    }

    p{
      font-size:10px;
      color:red;
    }
   
## Explanation
   
We have added 2 styles to 3 selectors. We have changed the font-size for the everything in the body section to 16px, this is applied to the whole document.

We then override the font-size on the h1 and p tags. We also change the color for the fonts with the color style.

When using sizes in CSS, in this case px, there are a number of different units we can use:


* em - e.g. font-size: 3em
* px - e.g. font-size: 14px 
* pt - e.g. as font-size: 14pt
* % - e.g. as font-size: 50%


Usually when writing pages for a website you would use em or %, but for the purposes of learning css using px as unit of measurement is easier. 

When using colors (note the American way of spelling, it's not the European way, colour).

There are several ways to state a color with CSS. Several ways to state the color red are:


* red
* rgb(255,0,0)  (rgb values between 0 and 255)
* rgb(100%,0%,0%)  (rgb values percentage)
* #ff0000 (hexadecimal)
* #f00 (hexadecimal shorthand)


You would usually use rgb or hexadecimal when building a webpage but for now we'll use the following:

aqua, black, blue, fuchsia, gray, green, lime, maroon, navy, olive, orange, purple, red, silver, teal, white, and yellow



## Try It Yourself

Add the color purple to the body tag, change the color on the li element to lime.

Let's introduce a new property called `background-color`. Set you body background color to green. and your h1 tag background color to white.

By now you should have a very interesting looking page!


## Fonts

Before we start into fonts, in your style sheet add the following  `/*  before your text and after all the text add `

These are comments and anything between them are ignored. They are good for leaving little notes to yourself about the blocks of css you write.

So we've commented out the css you've already written.

Now we'll add the following to index.html:

    <a href="http://www.google.ie">www.google.ie</a>

You can add that anywhere between the `<body></body>` tags

    body{
      font-family: verdana, serif;
      font-weight:normal;
    }

    h1{
      font-style:italic;
      font-family: "Times New Roman";
    }

    a {
      text-decoration:none;
    }

    a:hover{
      text-decoration:underline;
    }

    p{
      font-weight:bold;
    }

    table{
      text-transform:uppercase;
    }
      
    ### Explanation

We have added a lot of font styles here so lets explaing them.

#### font-family

This applies the font to the selector. The font you choose must be installed on the users computer or included with the page for download. The easiest way to style a page is to use a 'Web Safe Font', these are Arial, Verdana, "Times New Roman" (Note the "" if the font name has spaces in it). You can also speficy a number of fonts in the value.


    font-family: Arial, Verdana, sans-serif;

This means that it trys to use the first font, and if that is not installed it will use the second font and so on.


#### font-size

We've talked about about sizes previously, we can use


* em
* px
* %
* pt


For now use px.

#### font-weight

There are 2 values for this, either bold or normal. Some fonts allow you to state a weight of the font, e.g. 100,200,300,400 , unless you know if the font supports that way always use bold or normal.


#### font-style

This states if the font should be italic or not. The values can be italic or normal.

#### text-decoration

This states whether the text is underlined or not. The values can be:


* overline
* line-through
* underline


#### text-transform

This transforms the text according to the value used.


* capitalize
* uppercase
* lowercase
* none


#### Text Spacing


* letter-spacing - e.g. 12px
* word-spacing - e.g. 12px
* line-height - e.g. 12px
* text-align: left, right, center, justify


Try applying some of the above styles to see what they do.


This is good time to let you know that if you are confused by all the different values and properties that this is normal. Over time using css you will become more familiar with the different properties you can use. Even seasoned veterns of CSS with years of experience still have to look up what a values you can use for particular property. So use some of the resources outlined that the end of the page.


### Try It Yourself

Try changing the font-size of the li and the font-family on the tables. Experiment with getting a nice background-color on the page with nice text.

Try using the tags above.
    
    
## Margins, Padding and Borders

These are the 2 most commonly used properties to space and align an element. 

Try the following:

    body{
      margin:20px;
    }

    p{
      padding-left:40px;
    }

    h1{
      border-style: dashed;
      border-width: 3px;
      border-color: red;
    }

### Explanation

Margin can be written the following ways


* margin: 10px (10px added to top, left, right, bottom)
* margin-left: 10px (10px added only to the left margin)
* margin-right: 10px 
* margin-top: 10px
* margin-bottom: 10px


The same can be used for Padding.

For borders we have the following:


* border-style: solid, dotted, dashed, double, groove, ridge, inset and outset.
* border-width: 3px;
* border-left-width: 10px;
* border-right-width: 10px;
* border-color: red;


Margins, padding and borders follow the box model:

<div style="overflow: auto; padding: 0 1em 1em 1em;	margin: 0 2em 1em 2em; background-color: #ccf;">
	Margin box
	<div style="padding: 0 1em 1em 1em;	background-color: #66f;">
		Border box
		<div style="padding: 0 1em 1em 1em;	background-color: #99f;">
			Padding box
			<div style="background-color: white;">
				Element box
			</div>
		</div>
	</div>
</div>

The bit in the middle (element box) is your img, p, or any other element, outside for that is the padding then the border and then the margin.

### Try It Yourself

Add margins, borders and padding to the elements on your page.

## Resources


* [http://www.htmldog.com/guides/cssbeginner/](http://www.htmldog.com/guides/cssbeginner/)
* [http://www.sitepoint.com/html-css-beginners-guide/](http://www.sitepoint.com/html-css-beginners-guide/)
* [http://www.w3schools.com/css/](http://www.w3schools.com/css/)


## Conclusion

What you have learned today are the basics in using css. By using the resouces above and practicing writting html and css you will become better at it.

The next lesson is about learning a bit more about html and layouts with css.


