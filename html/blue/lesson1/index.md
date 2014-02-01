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
            <a href="http://www.coderdojogorey.com">CoderDojo Website</a>

            <script src="jquery.js"></script>
        </body>
    </html>

Save that code as index.html in the same directory as you save the jquery.js file.

In your text editor create a new file, leave it blank and call it style.css and save that in the same directory as above. 

Open the page in your browser. If your using Chrome, right click on the page and click on the Inspect Element link. If you are using Firfox or Internet Explorer you'll need to either switch to Chrome for the lesson, or find the equivilant in your browser.

At the top of the Web Inspector click on the Console link. This will show any errors in your code when using JQuery. The console should be blank.

## Document.ready

JQuery interacts with the webpage and allows you to add, remove, manipulate and edit elements on the page. When your browser loads a webpage it loads the information from top to bottom as outlined in your html file. There's images, css files, the text on the page, and javascript to download, and they all download at different times. If you have a JQuery script and runs as soon as it is downloaded the element yu want to interact with may not be on the page for your script to work on. 

In JQuery we use a JQuery statement known as the ready event.

    $(document).ready(function(){
 
        //your code goes here
    
    });


From the page code above add the ready statement to it, you should have something like this.

    <!DOCTYPE html>
    <html>
        <head>
            <title>Playing with JQuery</title>
            
            <link type="text/css" rel="stylesheet" href="style.css">

        </head>
        <body>
            <a href="http://www.coderdojogorey.com">CoderDojo Website</a>

            <script src="jquery.js"></script>

            <script>
                $(document).ready(function(){
                    alert('The page has fully loaded and JQuery ready statement is being called');
                });
    
            </script>

        </body>
    </html>

Save the code and open it in your browser.

We add the ready statement and our code below the `<script src="jquery.js"></script>` as we need that file loaded before we can call any JQuery code.

## Selectors

To work with any element on the page you need to select it first. This is where selectors come in. There are many different ways to select elements on a page for the moment we'll look at 2 ways.

* Select a html element 
* Select a class or id 

In JQuery we use the `$(SELECTOR)` code to select an element. In this next example we are going to select all `<a>` tags on a page and assign an event to it. But for now we are going to ask JQuery to run our code every time someone clicks an `<a>` element on the page.

    <!DOCTYPE html>
    <html>
        <head>
            <title>Playing with JQuery</title>
            
            <link type="text/css" rel="stylesheet" href="style.css">

        </head>
        <body>
            <a href="http://www.coderdojogorey.com">CoderDojo Website</a>

            <script src="jquery.js"></script>

            <script>
                $(document).ready(function(){
                    $("a").click(function(event)){
                        
                        alert("We have clicked the link");

                    });
                
                });
    
            </script>

        </body>
    </html>

In the example above we could have used any html element on the page e.g. a `<p>` tag or an `<img>` tag. 

The other we'll look at making a selection is using the class or id attribute of an element.

    <!DOCTYPE html>
    <html>
        <head>
            <title>Playing with JQuery</title>
            
            <link type="text/css" rel="stylesheet" href="style.css">

        </head>
        <body>
            <p>
                <a class="mylink" href="http://www.coderdojogorey.com">CoderDojo Website</a>

            <p id="myparagraph">
                Click on this paragraph. It's not a link!
            </p>

            <script src="jquery.js"></script>

            <script>
                $(document).ready(function(){
                    $(".mylink").click(function(event)){
                        
                        alert("We have clicked the link");

                    });

                    $('#myparagraph').click(function(event)){
                        
                        alert("Hey this is not a link!");
                    }
                
                });
    
            </script>

        </body>
    </html>


When you want to select an attribute by class name you use a . `$(".NAME")`
When you want to select an attribute by id you use a # `$(#NAME)`


# JQuery Examples

For the rest of this lesson we'll run through some examples of what JQuery can do. You can then use some of these examples in your own projects, and in later lessons we'll go a bit deeper into JQuery. You can find out more on the [JQuery website](http://learn.jquery.com/about-jquery/) or search for tutorials on Google.

# CSS

With JQuery you can add a class to the selected element, or you can modify the CSS directly. Type in the code below into a new page, save it and then load the page. 

In Javascript we can add comments to our code to leave notes in for ourselves. In the code below there are comments explaining what each JQuery element does. Comments are added with `//` or if you have a block of text you start the block with a `/*` and end it with `*\`.


## .addClass() & .removeClass()

In the style.css file add the following:

    .blue-text{
        color: #428bca;
    }

    .red-text{
        color: #d43f3a;
    }

In the HTML file type the following, you can leave out the comments if you wish.


     <!DOCTYPE html>
    <html>
        <head>
            <title>Playing with JQuery</title>
            
            <link type="text/css" rel="stylesheet" href="style.css">

        </head>
        <body>

            <h1>This is my title</h1>


            <ul>

                <li>
                    <a href="#" class="change-blue">Change to blue</a>
                </li>
                <li>
                    <a href="#" class="change-red">Change to red</a>
                </li>
            </ul>


            <script src="jquery.js"></script>

            <script>
                $(document).ready(function(){

                    /* 
                        Assigns the click event to the <a> element with the class change-blue, when it is clicked this piece of code is called.
                        You can use any other element for example <p class="change-blue"> 

                    */

                    $('.change-blue').click(function(event){  
                        event.preventDefault(); // as we are using an <a> element the browser will go to the new page if it's specified with the href="" attribute, this prevents that behaviour.

                        console.log('Change to blue text'); // this outputs the text to your web inspector console.

                        $('h1').removeClass(); // if the the class red-text has been added to the h1 tag we want to remove all classes first.

                        $('h1').addClass('blue-text'); // add the blue-text class

                    });


                    /*
                        This is the same code as above but for the '.change-red' class'
                    */
                    $('.change-red').click(function(event){
                
                        event.preventDefault();

                        console.log('Change to red text');

                        $('h1').removeClass();

                        $('h1').addClass('red-text');

                    });

                    //We'll add more code underneath here.

                });
    
            </script>

        </body>
    </html>

When you load this page it should change the color of the h1 text when you click either of the `<a>` elements. If it doens't work check your web inspector, and the Console tab. 

When it does work, open your web inspector and look at the Elements tab and the H1 tag in that, notice how this changes when you click on the links. Also check the Console tab to see the output of the `console.log()` statement you added. These are useful tools to fix any problems you have with your code not working. 

## .css()

You can manipulate the css directly using the .css() statement.

In the previous code in your `<ul>` class add the following underneath the first two `<li>` statements

    <li>
        <a href="#" class="bigger-font">Bigger font size</a>
    </li>
    <li>
        <a href="#" class="smaller-font">Smaller font size</a>
    </li>

Then in your `$(document).ready()` statement underneath the comment `We'll add more code underneath here` add the following

    $('.bigger-font').click(function(event){
        event.preventDefault();

        console.log('increase the font size');

        $('h1').css('font-size' , '60px'); // we make the font size 30px

    });

    $('.smaller-font').click(function(event){
        event.preventDefault();

        console.log('decrease the font size');

        $('h1').css('font-size' , '20px'); 

    });

Check the web inspector Console and Elements tabs, notice in the elements tab the font-size is directly added to the h1 tag.
You can use any css element with in the `.css()` statement.

Try adding 2 more elements using the .css() , one to make the title disappear and one to make it visible. Hint: the css for making something invisible is `display:none` and making it visible is `display:block`


# .height() & .width()

Using the `.height()` and `.width()` statements you can get and set the height of an element. In this section we'll look at how this is done using an image. First save the image to your computer.

![Flower](flower.jpg)


In your style.css file add the following, this is only for page lay out.

    .container{
        width: 960px;
    }

    .image{ 
        float:right;
    }


Type out the code below, you can leave out the comments if you wish, but read them! They explain what the code is doing, and there are some new things in them we haven't encountered before. 

    <!DOCTYPE html>
    <html>
        <head>
            <title>Playing with JQuery</title>
            
            <link type="text/css" rel="stylesheet" href="style.css">

        </head>
        <body>

            <img class="image" src="../flower.jpg">


            <p class="height">Height = </p>

            <p class="width">Width = </p>

            <ul>
                <li>
                    <a href="#" class="get-size">Get the Size</a>
                </li>
                <li>
                    <a href="#" class="set-size">Resize</a>
                </li>
            </ul>

            <script src="jquery.js"></script>

            <script>
                $(document).ready(function(){
                    
                    $('.get-size').click(function(event){
                    
                        event.preventDefault();

                        console.log('get the image size');


                        /*
                            In javascript there is a fundamental building block called a variable.
                            Think of this as a container that we can put something into. 

                            In this case we are going to create 2 variables image_height and image_width and store the images height and width into it.

                            We declare variables in javascript by using the following syntax

                            var MY_VARIABLE_NAME = "THE SOMETHING YOU WANT TO STORE IN THE VARIABLE";

                            You can store lots of different types of information in a variable, 
                            but for now we'll look at numbers and a string (another name for text) 

                            For numbers you declare a variable

                            var my_num = 1;

                            For strings you delcare a variable, notice the " "

                            var my_string = "This is my string";  

                            When declaring a variable it should not start with a number, should not contain spaces, you can use _ to seperate words.
                            There are also a number of keywords you can't use as variable names.                             

                        */


                        // Delcare a variable called image_height and then use .height() method load the image height into it
                        var image_height = $('.image').height();   

                        // Delcare a variable called image_width and then use the .width() method to load the image width into it
                        var image_width = $('.image').width(); 


                        /*
                            Print out the height and width to the console, we have to join our string 'Image Height' 
                            to our variable image_height, in javascript we use the + sign to do this. 
                        */
                        console.log('Image Height = ' + image_height);  
                        console.log('Image Width = ' + image_width);


                        /*
                          We are using a new jquery statement here called .html() , this gets and sets the content of the selected element.
                          for example $('.my_element').html() will get the content in .my_element
                          $('.my_element').html('hello') will set the content in .my_element to hello


                          We join the string "The height is" to the variable image_height using the + sign again.

                        */
                        $('.height').html('The height is ' + image_height);
                        $('.width').html('The width is ' + image_width);

                
                    });

                    $('.set-size').click(function(event){

                        /*
                            We are setting the image height and width here. 
                            We are doing it a slightly different way using a technique called chaining.

                            It could have been written like
                            $('.image').height('500px');
                            $('.image').width('300px'):

                            But thats a lot of typing! Chaining allows you to put multiple JQuery statements together. 

                        */
                        
                        $('.image').height('500px').width('300px');
        
                    });
                                   
                    //we'll add more code underneath here               

                });

            </script>

    </body>
    </html>


We'll now look at a way to add our width and height using a form.

Under the closing `<ul>` add the following html

    <form id="resize-me">

        <p>
            <label>Height</label>
            <input type="text" name="height">
        </p>

        <p>
            <label>Width</label>
            <input type="text" name="width">
        </p>

        <p>
            <input type="submit" value="Change Size">
        </p>
    </form>


Then in the code where there is a comment //we'll add more code underneath here add the following, you can leave out the comments, but do read them as they explain what's going on.

    /*
      We can capture the form submit event like the click event 
     */
    
    $('#resize-me').submit(function(event){
        event.preventDefault(); // we don't want the form to submit

        /*
           We are going to get the height and width values in the form you just submitted and save them into a variable

           Our selector is slightly different here, $('#resize-me input[name=height])
           What it means is 'The HTML element width the id of resize-me (the form) has an element called input with an attribute called height'
           This is our <input type="text" name="height">. Then we use the JQuery method .val() to get the value of that input box.

         */
        
         var new_height = $('#resize-me input[name=height]').val();
         var new_width = $('#resize-me input[name=width]').val();

         console.log('The new height is ' + new_height);
         console.log('The new width is ' + new_width);

         /* 
            We set the new image height and width but we have to add a 'px' string to the width and height,
            so we join the variable with the string 'px' using the +

         */
         $('.image').height(new_height + 'px').width(new_width + 'px'); 

    });








