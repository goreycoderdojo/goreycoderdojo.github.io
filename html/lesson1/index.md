---

layout: lesson
title: HTML Lesson 1 - Introduction
---

# Lesson 1

## Introduction

We are going to learn how to make a webpage. A webpage is made up of HyperText Markup Lanugage (HTML). When you visit a web site your web browser downloads the HTML for the page and then renders or displays that HTML as the pictures, text and videos you see on every website.

We are walking through a number of steps to create web pages in this lesson. If you don&#8217;t understand anything or something doesn't work the way you thing it should just shout for help!

## Startup

To start writing html you will need a text editor. If you are using Microsoft Windows you can use Notepad which is already installed. If you are using an Apple you can use TextEdit which is also already installed.

As you progress more with learning and writing HTML you will want to use a more advanced text editor. Some of the more useful text editors are.


* [http://www.sublimetext.com/2](http://www.sublimetext.com/2) 
* [http://notepad-plus-plus.org/](http://notepad-plus-plus.org/)


You should never use Microsoft Word for creating html


A note on creating folders and html file names. It is best practice not to have spaces in the names of web folders or file names. So you can call your files anything like the following.


* MyWebPage.html
* mywebpage.html
* my-web-page.html

The following characters are valid urls ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-._~:/?#<span />@!$&amp;&#8217;() **+,;=** </p>


### Saving a html file on windows
On a windows computer go to the start menu -> accessories -> notepad. Or alternatively on Windows 7 or 8 type Notepad in the Search Programs and files text box.

To save the file click on the save button change the 'save as type' to all files in the dropdown box and save the File name with a .html at the end of it.
You will be instructed below on what to call your files as you go through this tutorial

### Saving a html file on a mac

On a mac to open Textedit go to Applications -> TextEdit.

To save the file click on file->save, from the Format drop down menu select webpage(.html) you type in the name of the file only and don't require the .html at the end of the filename.

You will be instructed below on what to call your files as you go through this tutorial

## First Web Page

On your desktop create a folder called coderdojo. In the coderdojo folder create another folder called lesson1.

When your ready open Sublime Text and type in the following code.

```
<!DOCTYPE html>
<html> 
<head> 
  <title>First Page</title>  
</head> 
<body> 
  <h1>Hello World!!</h1> 
  <p>This is my first web page</p> 
</body> 
</html>
```

Don't worry, you don't need to understand the above, we'll explain it in a little while.

Once you have it typed in save the file into the lesson1 folder you created and call it page1.html (the .html is important as it tells the browser it is a html page).

Now open your browser and press ctrl o (cmd o on a mac) file the page1.html file and press open. You should see a web page with Hello World!! on it. If you don't check the steps above or call for help!


### Explanation

Every html web page is made up of a series of tags. Tags usually have an opening tag and a closing tag for example an opening tag is <html> and a closing tag is ```</html>``` This tells the browser to treat everything between these tags as html.

The tags we used in the first lesson where:

```<!DOCTYPE html>``` - this is a special tag and has no closing one. It tells your web browser that we are using html5.

```<html></html>``` this says that everything between these tags is the web page.

```<head></head>``` this is the head of the page. We add other tags in here to set our page up. Nothing in the head tag is displayed on the actual page.

```<title></title>``` This is always placed between the <head> tag and sets the title of the page. The title is shown on the web browser tab.

```<body></body>``` Everything placed in here will show on your page.

```<h1></h1>``` Is called a header tag. There are 6 header tags. They are a way to add some headings to your text. A page should only have one ```<h1>``` tag but can have many of the other heading tags.

The other header tags are:

```
<h1></h1>
<h2></h2> 
<h3></h3> 
<h4></h4> 
<h5></h5> 
<h6></h6> 
```

```<p></p>``` is the paragraph tag.

When setting up a new page the most basic items you need are:

```
<!DOCTYPE html> 
<html> 
<head> 
</head> 
<body>  
</body> 
</html> 
```

### Try It Yourself

Make a new page called page2.html on the page set the page title as My second page. Add a h1 tag and 2 paragraphs of text. Then add a h2 tag and another 2 paragraphs of text.


## Images

A web page looks pretty boring without images.

Go to the web page image 1 , when the page opens right click on the image and select the Save Image As option and save the image to your lesson1 folder.

Type out the following and save it in the lesson1 folder as page3.html

```
<!DOCTYPE html> 
<html>  
<head>  
  <title>Adding an image</title> 
</head> 
<body> 
  <h1>Adding an image</h1> 
  <p> 
     <img src="image1.jpg" alt="My first image" title="My First Image"> 
    This is an image  
  </p> 
</body> 
</html> 
```

### Explanation

The new tag we introduced is ```<img>``` this does not have a closing tag. In the image tag it has a number of attributes, these are src, alt, text.

src (source) means the location of the file. The source can be absolute or relative to the page. Don't worry about this just now we'll talk about this later.
alt (alternate text) this is the text that will be shown if the image is not found.
title means the text that is shown when you hover over the image.


### Try It Yourself

Save the image from this url image 2. Create a new page and add a title 'My Second Image'. Add a h4 heading with the text of 'My Second image'. And add the image. Save it in the lesson1 folder and call it page4.html

## Links

The web would only be a series of pages without links! So lets link all our pages together now.

Open page1.html in your text editor. Underneath the first paragraph add in the following text.

```<a href="page2.html">Page 2</a>```

So it should read:

```
<!DOCTYPE html> 
<html> 
<head>   
  <title>First Page</title>  
</head>  
<body>  
  <h1>Hello World!!</h1>  
  <p>This is my first web page</p>  
  <p><a href="page2.html">Page 2</a></p>  
</body> 
</html>
```

Save the file and open it in your web browser. Hover on the Page 2 link and click it.

### Explanation

The link tag is called an anchor tag. It is opened with ```<a>``` and closed with an ```</a>```. All the text between the 2 tags will be the text that will be used in the link.

The ```<a>``` tag has one attribute 'href'; this is the page that it will link to.

### Try It Yourself

On page 2 link to page 3. On page 3 link to page 4. On page 4 link to page 1.

Now you can click on any of the links to open any of our pages.


## Lists

here are 3 types of lists

* Ordered Lists
* Unordered Lists
* Definition Lists

Ordered lists appear as list with numbers

1. Item 1
2. Item 2
3. Item 3

The above would be written in html as:

``` 
<ol> 
  <li>Item 1</li> 
  <li>Item 2</li>  
  <li>Item 3</li> 
</ol>
```

Unordered lists appear as bullet points

* Item 1
* Item 2
* Item 3

The above would be written in html as:

``` 
<ul> 
  <li>Item 1</li>  
  <li>Item 2</li> 
  <li>Item 3</li> 
</ul>
```

We'll leave definition lists out of it for the moment.

So now lets add in links to all our pages to each page.

Open page1.html. Underneath your last paragraph add in the following:

```
<ul> 
  <li><a href="page1.html">Page 1</a></li>  
  <li><a href="page2.html">Page 2</a></li>  
  <li><a href="page3.html">Page 3</a></li>  
  <li><a href="page4.html">Page 4</a></li>  
</ul>
```

The page should look like the following:

``` 
<!DOCTYPE html> 
<html>  
<head>  
  <title>First Page</title>  
</head> 
<body> 
  <h1>Hello World!!</h1>  
  <p>This is my first web page</p>  
  <p><a href="page2.html">Page 2</a></p>  
  <ul>  
    <li><a href="page1.html">Page 1</a></li>  
    <li><a href="page2.html">Page 2</a></li>  
    <li><a href="page3.html">Page 3</a></li>  
    <li><a href="page4.html">Page 4</a></li>  
  </ul>  
</body>  
</html>
```

Save the file and open it in your browser. Now click on any of the links you added.

### Explanation

We've added the unordered list and each item on the list is surrounded by a ```<li></li>``` , in between the ```<li>``` we have added a link (anchor) tag with a link to each page.

### Try It Yourself

Now add that to page2.html , page3.html and page4.html


## Tables

Tables are used to present information or data in series of rows and cells

An example of a table is

This is a cell |	This is the 2nd cell
We now start a new row | This is the last cell

Create a new file called page5.html

``` 
<!DOCTYPE html> 
<html>  
<head>  
  <title>First Page</title>  
</head> 
<body> 
<p>An example of a table is</p>
<table>
<tr>
<td>This is a cell</td>
<td>This is the 2nd cell</td> 
</tr> 
<tr> 
<td>We now start a new row</td> 
<td>This is the last cell</td> 
</tr>
</table>  
</body>  
</html>
```

### Explanation

A table is added with the ```<table></table>``` tag.

A table row tag is ```<tr></tr>```

A table cell tag is ```<td></td>```

A table cell always has to be in a table row tag. You can have multiple table cells in a table row

### Try It Yourself

Create a new file called page6.html, and create a table with 4 rows and 4 cells in each row

## Conclusion

What you have learned today are the basics in making a web page. All the tags you learned about today what you will use to create nearly all web pages.

The next lesson is about learning Cascading Style Sheets or CSS for short. CSS adds colour to your page, changes the fonts, and lays items out on the page.

Resources

While writing HTML code you may forget a particular tag or not sure about a tags attributes. There are a many resources on the internet to help you find the answers.

The following are some good websites to help you find the answers.

* www.w3schools.com/html/
* www.yourhtmlsource.com/
* www.htmldog.com/
* www.google.ie Googling any questions you have can get you answers fast!
