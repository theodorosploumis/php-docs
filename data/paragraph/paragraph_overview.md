---

weight: 10.1
slug: paragraph_overview
title: Elements (or Paragraphs) overview
url: 
menu: 
---

Drupal "Paragraphs" are special Drupal fields which combine other fields and display as a whole. 
In simple words, Paragraphs are group of fields that can represent an output. 

For example, a Paragraph of type "Picture with Caption" may use an Image field and a textfield 
and display an Image with a Caption after it.

Paragraphs in Drupal offer a great authoring experience, since they control data as also as markup in details.

Furthermore, authors can "duplicate" Paragraphs and "reorder" them within the Node page which allows for fast page 
structure building and easy visual changes. 

In this project we call Paragraphs "**Elements**" to avoid any conflict with text paragraphs inside the textarea.

Each Element type has specific fields and requirements. It may reference Media, Nodes or Reusable data.

Element do not have a standalone page like Nodes, but they are only used as special fields inside Nodes.

Each Element is unique and can be attached only to one Node. There are no shared (reusable) Elements.

Elements do not need a name (title) like Nodes or Media nor do not have system fields (Published status, Created datetime, Author etc)

**You can only create or edit them inside a Node form**.

Some Elements have the same or similar name to Reusable Data types. This is because these Elements reference Reusable Data. 

**Available Element types** are:

| Element type | Machine name | Description |
| ------------ | ----------- | ------------ |
| Columns | columns | Display other types of Elements in 2, 3 or 4 columns. Used when there are no such options in simple Elements. |
| Counters | counters | A group of 4 counters that display side by side. | 
| Events List | events | Events dynamic list with simple date filtering (tab style). |
| Free Text/Title | html | Simple HTML text with CKEditor and a Title. |
| Hero Image | banner | Hero banner for wide displayed images. |  
| Iframe | iframe | Embed an external Iframe. |
| Image, Text, Button | short_teaser | A short teaser has an Image, a Title, some Text and a button on footer. | 
| Member List | members | Member lists (dynamic). |
| News List | news | Dynamic list of latest News. |
| Quote | quote | Quoted text (blockquote). |
| Report List | report | List of PDF files (Reports) with a Title, an Image cover and a Category. |
| Sponsors List | sponsors | Sponsors gallery of logos.  
| Text + Image | image_teaser | Image and Text side by side. |
| Twitter | twitter | Twitter Feed. |
| Video | video | External video from YouTube, Vimeo or Facebook with a Title. |

See more details about each Element type in the following sections.
