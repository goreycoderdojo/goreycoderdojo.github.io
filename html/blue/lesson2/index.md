---

layout: lesson
title: Blue Belt - Lesson 2

---

# Blue Belt - Lesson 2

## CSS 3

Up to now we've been working with mainly CSS 2 styles. This lesson introduces some new features with CSS 3. 

The tags in HTML and styles in CSS are specificed in a standard. This standard means that all browser developers, Chrome, Firefox, Internet Exlorer, should follow these to ensure that when you put something like a `<p>` in your code it acts like a paragraph with borders, margins, and other features exactly the same across all browsers. 

These standards are maintained by the [World Wide Web Consortium](http://www.w3.org/) . This is an organisation which defines standard specifications for HTML and CSS. 

In the past not all browser developers have followed these standards so you have browsers like Internet Explorer 6 and 7 showing margins on elements differently from Internet Explorer 8 and 9. Recently though the main browser developers for Chrome, Firefox, Safari and Internet Explorer are implementing the specifications as outlined by the W3. 

So when you make a website it might look a certain way in most of the newer browsers but when you go to view the site in the older browser it doesn't look right. Then you have to put in 'hacks' to make it work.

This comes to CSS 3, this is a newer standard for CSS and introduces lots of cool new features. As it is brand new not all these features work in all the latest versions of the browsers, and don't work at all in older browsers, mainly Internet Explorer. So if using these on your website you will have to be aware of this. In most cases there are work arounds for the older browsers. 


For this lesson make sure you are using the latest version of Chrome or Firefox. Don't use Internet Explorer. For each of the examples below create a new html file. We'll use internal styles, in between the `<head></head>` tags. 

    <html>
        <head>
            <style>


            </style>
        </head>
        <body>

        </body>
    </html>

Note: In all the examples we are using the color 'black' and the sizes are in pixels but these can be in any of the supported formats. For color it can be in hex (#333333) or rgb, or size and be in %, em etc.   


## Border Radius
This adds rounded corners to elements. You use the border-radius syntax followed by the size of the radius. You can have control over each corner or specify a single size for all 4 corners. 

In the style section add:
    
    .rounded{
        border: 1px solid black; 
        width:200px;
        height: 40px;
        text-align:center;
        
        border-radius: 10px;

    }


In between the `<body>` sections add the following:

    <div class="rounded">
        <p>Rounded Corners</p>
    </div>


Try targeting each corner by using the following:

    border-top-left-radius:     10px;
    border-top-right-radius:    4px;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius:  10px;    

You can see more options on [https://developer.mozilla.org/en-US/docs/Web/CSS/border-radius](https://developer.mozilla.org/en-US/docs/Web/CSS/border-radius)

## Box Shadow

Adds a shadow effect to almost any element. 

The syntax is `box-shadow: <x offset> <y offset> <blur-radius> <spread-radius> <color>` for example `box-shadow: 4px 4px 10px 20px red` 
* x offset, y offset = these offset the shadow on the x and y axis. You can use positive or negative numbers.
* blur radius = The larger the value the bigger the blur
* spread radius = This causes the shadow to grow and shrink depending on if you use positive or negative numbers. The default is the same size as the element
* color = the color of the shadow.

In the style tags add the following:
    
    .shadow{
        border: 1px solid black; 
        width:200px;
        height: 40px;
        text-align:center;

        box-shadow: 4px 4px black;
    
    }


In between the `<body>` tags add the following:

    <div class="shadow">
        <p>Shadow</p>
    </div>

Now changing the box-shadow values to each of the following:
* `box-shadow: -4px -4px black;`
* `box-shadow: 4px 4px 20px black`
* `box-shadow: 4px 4px 20px 20px black`
* You can also add 2 different shadows by seperating them with a comma `box-shadow: 0px 4px 20px 0px black, 0px -4px 20px red`



You can see more options on [https://developer.mozilla.org/en-US/docs/Web/CSS/box-shadow](https://developer.mozilla.org/en-US/docs/Web/CSS/box-shadow)

## Text Shadow
Adds a shadow to text.

The syntax is `text-shadow: <color> <x offset><y offset> <blur-radius>` for example `text-shadow: red 4px -2px`.

* color = the color of the shadow.
* x offset, y offset = these offset the shadow on the x and y axis. You can use positive or negative numbers.
* blur radius = The larger the value the bigger the blur

In the style tags add the following:
    
    .shadow{
        text-shadow: red 2px 2px 3px;    
    }

In between the `<body>` tags add the following:

   <p class="shadow">Shadow</p>

Now try changing that to 

    text-shadow: red 10px 10px 3px;



## RGBa
This means Red Green Blue Alpha, the alpha is for transparancy. This adds a color to an element and sets the transparancy or opacity for it. The red, green and blue values are between 0 and 255 and the alpha is between 0 and 1, e.g. .5 being half way.

In the style tags add the following:
    
    body{
        background-color: black;
    }

    .trans{
        width: 400px;
        height: 40px;

        background-color: rgba(255, 0, 0, 1);   
    }

In between the `<body></body>` tags add the following:

    <div class="trans">

    </div>

Now try changing the opacity to the following:
* `background-color: rgba(255, 0, 0, .5); `
* `background-color: rgba(255, 0, 0, .3);` 

And the color: 
* `background-color: rgba(0, 0, 255, 1);`
* `background-color: rgba(0, 0, 255, .5);`
* `background-color: rgba(0, 0, 255, .3);` 

If you are looking for a specific RGB color code you can look it up [http://html-color-codes.info/](http://html-color-codes.info/)


## Gradient

Grandients are the merging of colours across a space, think of a rainbow. Gradients in CSS are considered images and are added using the `background-image` or `background` syntax. There are 3 types of gradients

* Linear, moves in a straight line, e.g. from left to right, or top to bottom, or corner to corner
* Radial, think of a circle and moves from the center to the outside in all directions, like the rings on a tree
* Repeating Linear, same as the linear gradient but repeats over the course of the span of the gradient.

In the style tags add

    .gradient1, .gradient2, .gradient3{
        width: 500px;
        height: 50px;
        margin: 20px auto;
    }

    .gradient1{
        background-image: linear-gradient(to right, red, black);
    }

    .gradient2{
        background: radial-gradient(red, yellow, blue);
    }

    .gradient3{
        background: repeating-linear-gradient(red, green 18%, blue 25%);
    }

In between the `<body></body>` tags add the following:

    <div class="gradient1">

    </div>

    <div class="gradient2">

    </div>

    <div class="gradient3">

    </div>

### linear-gradient    

The `linear-gradient` statement can take a number of options:

    linear-gradient(direction, color stop-position, color stop-position .....)

**direction** is optional, the default is running top to bottom, you can use to syntax to represent degrees or in number degrees.
* to left, to right, to top, to bottom, to bottom right, 
* 20deg, -20deg, 140deg, -250deg

**color stop-position** these are 2 options are are written like `#ff0000 10%`. The stop-position is the length the color should show before moving into the next color. 


You can read more here [https://developer.mozilla.org/en-US/docs/Web/CSS/linear-gradient](https://developer.mozilla.org/en-US/docs/Web/CSS/linear-gradient)


### radial-gradient

The `radial-gradient` statement can take a number of options:

    radial-gradient(position, shape, color stop-position ... )

**position** This the starting position for center point of the gradient. It can be a stated a number of ways:
* top, left, right, bottom, center (default)
* x y axis = 10% 10% 

**shape** this is the shape the radial gradient can take the options are ellipse or circle. The default is ellipse

**color stop-position** these are 2 options are are written like `#ff0000 10%`. The stop-position is the length the color should show before moving into the next color. 
    

### repeating-linear-gradient

This is exactly the same as the linear-gradient except that it will repeat the gradient until it reaches the limits of it's bounding box.


Try working through a number of gradients and variations. 


## Advanced CSS

You can do a lot with just pure CSS. Mozilla, the people who make Firefox, have great developer [resources for CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)  and they have a demo section where community members have uploaded some pure CSS Demos [https://developer.mozilla.org/en-US/demos/tag/tech:css3](https://developer.mozilla.org/en-US/demos/tag/tech:css3).

Below are some good examples to checkout. Use your web inspector to view the contents of the HTML and CSS file and see if you can work out how they work. 

* [Pacman animation](https://developer.cdn.mozilla.net/media/uploads/demos/m/a/matheusagcosta/d656ae08ccb502c9619b3a652e83621f/pacman-pure-css-anim_1391095664_demo_package/index.html)
* [Easter Eggs](https://developer.cdn.mozilla.net/media/uploads/demos/T/h/Thingography.com/7416feecf8b94aad55cf81fe292cc44c/pure-css-easter-eggs_1391110335_demo_package/index.html)
* [Iron Man](https://developer.cdn.mozilla.net/media/uploads/demos/v/i/viniciusdacal/98583c056b381727bf129fc2e6209261/pure-css3-iron-man-m_1387771086_demo_package/index.html)


## Webfonts

When you specify a font to use on your website with the `font-family` markup that font has to be installed on the users computer for the user to see the page in that font. For example using `font-family: arial` is considered safe as Arial is installed on nearly everyones computer. We call these fonts web safe fonts. 

There are only a number of web safe fonts so it's get boring looking at the same font over and over again on all web pages. 

Luckily we can add a font to a website and allow the users browser to download that font automatically. There are a number of ways to do this but the easiest way is through web service. Most fonts are copyrighted and you can't included them on a page with obtaining a license to do so, which usually costs money. Google provide a free service for using different fonts on a website. 

Go to [Google Web Fonts](http://www.google.com/fonts). And browse the fonts. You can use the filters on the left hand side. 

When you have found a font you like click on the Add to Collection. This is font is now listed on in your Collection box at the bottom of the page. Click on the Use button.

For every font and style of font you choose it adds to the length of time your web page takes to load. So only choose one or two fonts and a couple of styles. Notice the Page Load indicator, this tells you how long it will take to load the choosen fonts try to keep the needle in the green or amber.

Scroll down the page until you get to the 'Add this code to your website'. This goes in the `<head></head>` section and before your style is called. 

Then in the next section 'Integrate the fonts into your css' copy the `font-family: ...` code and assign it to a css element.

For example using the [Frijole font](http://www.google.com/fonts/specimen/Frijole)

    <html>
        <head>
            <link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css'>

            <style>
                h1{
                    font-family: 'Frijole', cursive;
                }
            </style>
        </head>
        <body>
            <h1>This is the Frijole font</h1>
        </body>
    </html>


Try adding different fonts to your web page.
