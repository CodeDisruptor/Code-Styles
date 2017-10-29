Coding Style for HTML
=========
As far as I know, there isn't an official HTML code style. The code style I go by is a best practice that works for me.
I try to keep the code formatted in a logical way that should somewhat represent the DOM.

## 1. Conventions Used In This Document
The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD",
"SHOULD NOT", "RECOMMENDED", "MAY", and "OPTIONAL" in this document are to be
interpreted as described in [RFC 2119](http://www.ietf.org/rfc/rfc2119.txt).


## 1. Basic Guidelines
- Every HTML file must use lower letters for the file name, and words must be separated with ```-```.
- The extension must be .html.
- When using HTML for templating, then each view template that loads a different file (partial view) must begin with an underscore ```_```.

### 1.1 Example
```
index.html
book-library.html
_partial-view.html
```

## 2. HTML Formatting
For the formatting guidelines, all tags, elements, attributes, and custom attributes such as the data attribute must be written in lowercase.
Every new html must beginn with proper doctype ```<!doctype html>``` when using HTML5. It is encouraged to use HTML5 rather than xhtml.
The opening html tag should contain the ```lang``` attribute using the language of the document ```<html lang ="en-US">```.

### 2.1 Tags and Elements
- Lowercase wording must be used on all tags and elements of an html file.
- Class names, IDs, attribute values, etc. must be lowercase and use a hyphen ```-``` to separate words.
- All html elements must be closed. It is fine to ommit the ```/``` for empty elements.
- Attributes of elements must use double-quotes and never single-quotes.
- All element attributes must be enclosed in double-quotes.
- The indentation for all elements is one space. All elements that have a child, the child must be indented by one space.
- Line limit is 120 characters, but should not exceed if possible.
- Every file must contain one empy line at the end of the file.

#### 2.1.1 Example
```
<!doctype html>
<html lang="en-US">
 <head>
  <title>Demo</title>
  <meta charset="utf-8">
 </head>
 <body>
  <!-- Body content here -->
 </body>
</html>

```

### 2.2 Blank Lines and Indentation
Blank lines should be prevented except for the last line of the file, and indentation must be used to make the elements of the DOM clear.
Lines must be broken to reduce an extensive long line for easier readability. When breaking the lines, proper indentation
must be used to visualize the relations of the elements. Child elements are indented while siblings stay on the same indentation level.
Blank lines may be used to group elements and improve visibility.

#### 2.2.1 Example
```
<!doctype html>
<html lang="en-US">
 <head>
  <title>Demo</title>
  <meta charset="utf-8">
 </head>
 <body>
  <header>
   <h1>Site Header</h1>

   <nav>
    <ul>
     <li><a href="#" title="Home">Home</a></li>
     <li><a href="#" title="About Us">About Us</a></li>
     <li><a href="#" title="Contact">Contact</a></li>
    </ul>
   </nav>
  </header>

  <div id="content">
   <h2>Document Title</h2>

   <article>
    <h3>Article Title</h3>

    <p>This is a simple line. The following line will be a simulation of a long line.</p>
    <p>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in tortor libero. Mauris
     venenatis erat augue, in congue nisl volutpat ac. Suspendisse ullamcorper elit in tincidunt
     sollicitudin. Nunc consectetur, turpis a viverra congue, arcu est lacinia elit, quis tristique sem
     nisl vel risus. Ut eget accumsan turpis. Donec nec viverra dolor, in rhoncus quam. Suspendisse
     venenatis elementum nisl pulvinar consequat. Morbi semper, massa finibus pretium finibus, lacus
     mauris viverra eros, ac laoreet urna ipsum ut mi. Donec blandit at elit ac pharetra. Lorem ipsum
     dolor sit amet, consectetur adipiscing elit. Vivamus ligula sem, suscipit at elit sed, aliquam
     molestie nisi.
    </p>
   </article>
  </div>

  <footer>
   Copyright or other footer information
  </footer>
 </body>
</html>

```

### 2.3 Tables
Tables must be used when tabular data is to be displayed. Sections of the table must be declared properly. The elements
```<thead></thead>```, ```<tbody></tbody>```, and ```<tfoot></tfoot>``` should be used when possible. Ommiting
the elements may only be allowed when no heading and/or footing is required for the table. The ```<th></th>``` element must
be used in ```thead``` only.

#### 2.3.1 Example
```
<table>
 <thead>
  <tr>
   <th>Item</th>
   <th>Price</th>
   <th>Quantity</th>
  </tr>
 </thead>

 <tbody>
  <tr>
   <td>HTML</td>
   <td>$1.00</td>
   <td>1</td>
  </tr>
  <tr>
   <td>XHTML</td>
   <td>$1.50</td>
   <td>1</td>
  </tr>
  <tr>
   <td>HTML5</td>
   <td>$2.00</td>
   <td>2</td>
  </tr>
 </tbody>

 <tfoot>
  <tr>
   <td>Total</td>
   <td>$6.50</td>
   <td>4</td>
  </tr>
 </tfoot>
</table>

```

### 2.4 Comments
The HTMl must be written so that it is self-explanatory. Comments bay be used to help identify complex nesting of elements in the code.
Comments should not be written for every element or element blocks. If possible, comments should be used on a single line.
Comments are invoked using the following syntax and should always start on the indentation level of the element.

#### 2.4.1 Example
Bad:
```
<!doctype html>
<html lang="en-US">
 <head>
  <title>Demo</title>
  <meta charset="utf-8">
 </head>
<!-- Body begins here -->
 <body>
<!-- Header begins here -->
  <header>
   <h1>Site Header</h1>
  </header>
<!-- Header ends here -->

<!-- Content begins here -->
  <div id="content">
   <h2>Document Title</h2>

   <article>
    <h3>Article Title</h3>

    <p>This is a simple line. The following line will be a simulation of a long line.</p>
   </article>
  </div>
<!-- Content ends here -->

<!-- Footer begins here -->
  <footer>
   Copyright or other footer information
  </footer>
<!-- Footer ends here -->
 </body>
<!-- Body ends here -->
</html>

```
Better:
```
...
  <div id="content">
   <h2>Document Title</h2>

   <!-- Multiple articles can be displayed in the content container -->
   <article>
    <h3>Article Title</h3>

    <p>This is a simple line. The following line will be a simulation of a long line.</p>
   </article>
   
   <article>
    <h3>Article Title</h3>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in tortor libero.</p>
   </article>
  </div>
...
```

### 2.5 Stylesheets and JavaScripts

#### 2.5.1 Stylesheets
Stylesheets must always be declared in a dedicated file, and never mixed in with HTML unless it is an inline style defined in an element. Inline styles should be used sparingly.
Stylesheets must be included into the document using the ```<link>``` element with proper syntax. To control which media the stylesheet affects, the media attribute should be used.

##### 2.5.1.1 Examples
Include:
```
<link type="text/css" rel="stylesheet" href="layout.css">
<link type="text/css" rel="stylesheet" href="screen.css" media="screen">
<link type="text/css" rel="stylesheet" href="print.css" media="print">
```

Inline:
```
<div style="width: 95%;color: #fff"></div>
```

#### 2.5.2 JavaScripts
JavaScripts should be declared in dedicated files, and included using the ```<script></script>``` element, and inline JavaScript on an element should be avoided. JavaScript declared in the HTML file should be reduced and only used when no other way possible.

##### 2.5.2.1 Example
```
<script type="text/javascript" src="main-library.js"></script>
```
