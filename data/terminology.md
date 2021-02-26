---

weight: 2
slug: terminology
title: Terminology - Glossary
url: 
menu:
prerequisite:
taxonomy:
tips: 

---

_(Terms sorted by name)_

#### Accessibility (in short "A11y")
If you rely on a screen reader or other assistive technology, you will be glad to know that we have built 
this website to encourage and support the proper use of semantic markup. For example, you should be able to use 
headings reliably for page-level navigation.

This website is using Drupal Core which has designed to support the development of sites that comply with 
[WCAG 2.0](http://www.w3.org/TR/WCAG20/#contents) and [ATAG 2.0](http://www.w3.org/TR/ATAG20/#contents). 

There is also a dedicated Drupal Accessibility Group who deals with A11y issues and warnings.

See more info about this topic at:

- [Drupal: A11y Features](https://www.drupal.org/about/features/accessibility)
- [Drupal: A11 Docs](https://www.drupal.org/docs/accessibility)
- [Checklist for site Authors (Determine how accessible your site is)](https://a11yproject.com/checklist/)


#### Block
Drupal Blocks are boxes of content rendered into an area, or region, of a web page but on the same position. 

Blocks may be static (their content will not change dynamically) and dynamic. 

For example, a static block may be a search form, a follow us social widget or copyright notice. 

A dynamic block may be the "Latest 4 News", the "See more like this" block etc.


#### Cache
The software that runs your site, on each page request, must perform calculations and retrieve data from the 
database, in order to compose the page that is sent to the web browser or other application that is accessing the site. 
These calculations take time, which can mean that your page load time is longer than would be desirable.

During these page calculations, intermediate results and the final page output are stored in a special database 
area (known as the **cache**). Then the next time a compatible request is made, intermediate or final results, 
as appropriate, can be retrieved and used rather than redoing the entire calculation. 

In addition, when content or data that affects a particular calculation is updated, the affected cached data 
is removed from the cache, forcing that part of the calculation to be redone the next time it is needed.

When you make a change in the website and you need this change to be public available immediately you probably need to 
"**clear the Caches**" using the appropriate button on the Dashboard Menu (see more in related section).


#### CKEditor
CKEditor is the Drupal default wysiwyg editor. 

It allows users to add rich html content without knowing programming.

All fields of type "formatted" (textarea) are using CKEditor while editing.


#### Content Types (aka Nodes) 
Think of nodes as articles or posts.

Each section of the website (eg News, Members etc) has its own content type to create it. 
A content type **contains fields** and has its own display modes which are called "**View Modes**" (see related term). 
For example a content type News may have a Title, an Image, Body (html text) and Category.

Each node has its own unique id (node id or nid) and can be accessed through a unique system path like `/node/[nid]`. For 
example, the node with nid=23 can be accessed through path `www.example.com/node/23`. 

You can inspect the nid on the url path while editing an existing Node.


#### Drupal
The CMS which is used to build this wesbite. 

Drupal is a php framework that has a well-defined structured data schema and comes with several 
third party integrations out of the box.

- [About Drupal CMS](https://en.wikipedia.org/wiki/Drupal)


#### Fields 
Fields are form input elements where a user can add data. 

For example, a **Text field** is a field where a user can add text using the keyboard, 
an **Image field** is a form widget where a user can upload an image from his/her computer etc.

Content types as also as Media ano other templates (see related terms) have their own Fields to hold data.


#### Media
Media are like Nodes but with dedicated options to represent rich media (image, video, file attachment, iframe, 
social embed etc). 

Media do not have an individual webpage but they can be attached to Content pages (Nodes) through reference fields. 

They have fields like Nodes have since they keep data too.

#### Menu item 
Each menu on the website consists of one or more links. 

Each link is a menu item. Eg a menu item may be the link to the Contact page (`www.example.com/contact`).


#### Paragraphs
Drupal Paragraphs are special Drupal fields which combine other fields and display as a whole. 
In simple words, Paragraphs are group of fields that can represent an element. 

For example, a Paragraph of type "Picture with Caption" may use an Image field and a Textfield and display an Image with a Caption after it.

Paragraphs in Drupal offer a great authoring experience, since they control data as also as markup in details.

Furthermore, authors can "duplicate" Paragraphs and "reorder" them within the Node page which allows for fast page 
structure building and easy visual changes. 

In this project we call Paragraphs "Elements" to avoid any conflict with text paragraphs inside the textarea.

#### Path alias
Every Drupal webpage has a system (internal) path. For example a Node of type Page with the ID 23 may have the internal path 
`/node/23`. 

System paths are always there unless a Node is deleted from the system. 

Since these paths are "ugly" and not SEO friendly Drupal uses a path alias system to make these SEO friendly. 
Saying so, the Node with system path `/node/23` may have a more meaningful path alias like `/page/about-us`.
 
When a user visits the system path `/node/23` he/she will be redirected to the equivalent path alias. 

The path aliases display by default on the Menu Items or on every other link generated by the system.


#### Taxonomy
Taxonomies are keywords used to categorize content of the website.

Other common words are 'terms', 'tags' etc. In Drupal CMS these are called 'taxonomy terms'.

For example all "News & Event" nodes may have a "Services" taxonomy where users can read only news that have 
the category "Services" while other prefer to read News of category "Nightlife".


#### Token
Tokens are small dynamic placeholders that automatically convert to html.

To take a simple example, if you put `[site:name]` on your site, it will be replaced by the actual name of your site. 

To take a more complicated example, when you edit the metatag settings of a node you can use the token `[node:title]` 
that will display the current node Title on the metatags tag.

Notice that not all the fields provide token support. If a field supports tokens there is a link to open a modal with the 
available tokens ("Browse available tokens").


#### User Role 
Each user that has an account to the website must have a specific role. 

According to his/her roles he/she may have different permissions to the website. 

There are 2 main user roles set: "**Site Admin**" and "**Manager**". "Site Admin" is a super user having any available 
permissions. "Manager" role has specified permissions that are represented in current Manual. 

All users that have an account refer as 'authenticated users' and users that browse the website without being 
logged in refer as 'anonymous users'.


#### View Mode 
All Node types as also as other Content related types (eg Media) have several **output displays** available called "View Modes". 

Each display provides field values with proper styling and other validation rules. 

For example, a Node of type News may have a view mode "**Teaser**" that displays Image, Title and Link to go to the 
Node page and a view mode "**Full Mode**" that displays all the available fields.
 
The first one is used while on News dynamic lists and the second one when the full News Page is rendered alone in its own path.

#### Views
Drupal Views are **dynamic lists of content** which have user defined sorting, filtering and other options. 

Views can display as web Pages, Drupal Blocks or other more advanced display types. 

A Views may be for example a "News" page that displays Nodes of type "News" sorted by date created (latest come first) 
with a pager of 12 items per page. 

Another example of Views may be a list of "Our Officers - Members" that displays Nodes of type Member sorted by 
Member Name and filtered by Members category "Our Officers".

#### Website (or site)
The whole website under your main domain.
