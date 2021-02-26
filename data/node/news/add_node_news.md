---

weight: 5.2
slug: add_node_news
title: "Node type News & Events: Add new node"
url: /node/add/news
menu: "Dashboard > Content > Content: News & Events > Add News & Events"
taxonomy: 
tips:
    - Most of the times you should replicate an existing node instead of creating a new one in order to save time or reuse fields.
    - Settings on the right sidebar are common for all node types. Learn once, use everywhere.
    - Edit form is the same as Add New form.
    - Preview button is your friend. Educate yourself to Preview nodes before saving them.
    - Each field has a corresponding description on top or bottom of it. Read this before entering values to the field.
    
screenshot_steps:
    -
        header: Add new "News & Events" form
        image: /data/node/news/edit_node_news.png
        steps:
            - Add node Title. Title displays on the header section as also as on the browser title and on custom lists of these nodes.
            - Left sidebar is the place to add/edit the node fields which are the "content" of this node.
            - Right Sidebar contains system settings that do not represent content (eg Authoring time).
            - Useful information about the Node (applies on Edit forms only) like "Author", "Published status", "Last saved" datetime etc. (works on edit form only)
            - URL Redirects. If you want to set another path to redirect to this page add this here. By default Drupal will create a system redirect from the system path `/node/[ID]` to the node path alias. (works on edit form only)
            - Set the Author of this node. By default, Drupal sets current user as Author.
            - Set the Created datetime of this node. You can set any time (current, past or future). By default, Drupal sets here current time.
            - Field Hero. This is the image that display on top of the page. It gets the whole width of the container so use a wide enough image here.
            - Field Text. The main text for the node. Teasers and other trimmed text will create automatically from this one.
            - Field Categories. This is a [Taxonomy](/#slug-taxonomy) reference field that categories nodes into groups. These Categories are also provided in the menu above the `/news` page. If you need a new Category you need to go to the Categories Taxonomy Page. 
            - Field Tags. Tags are also [Taxonomy](/#slug-taxonomy) references but are free to create with an autocomplete find and create functionality.
            - Field Event Dates. This is a too advanced field that holds dates and date repeats for Events. See more below.
            - Field Event Dates - Start and End datetime. 
            - Field Event Dates - All Day. Click this if it is a whole day event.
            - Field Event Dates - Duration. Duration is calculated from the Start and End datetime, but you can also add it here to alter the above values.
            - Field Event Dates - Repeats. If it is repeated Event add the repeat period here.
            - Field Event Dates - Ends. If it is repeated Event add the end date for the repeat here. Can add specific number or a datetime.
            - Field Event Dates - Advanced. If it is repeated Event you can set more details here.
            - Field Event Dates - Advanced. If it is repeated Event you can set more details here like the Weekdays that the event repeats.
            - Field Event Dates - Add More. Use this to add another instance of this field if the Event dates are too complicated to set in one field instance only.
            - Field Event Dates (Human Text). This text is display on Events because the above field cannot generate a value suitable for humans.
            - By default new nodes set Published except if you uncheck this field.
            - Click "Preview" button to preview the node. This will open node in a special frame where you can select the View Mode to check the node display. See upcoming screenshot.
            - Click "Save" button to save the new node.
            - Click "Delete" link to delete the node (works on edit form only).
---

"News & Events" node type is a template that creates News or Events pages with simple fields. 

The teasers of these pages are displayed on a dynamic page the "News & Events" (`/news`) page sorted by time created (current nodes come first).

Every node has a unique identifier (ID) that is created by Drupal (incrementally) when you create a new node. 
You can use this for unique reference. ID cannot change upon creation.

The form to add a new node has the left sidebar fields as also as the right sidebar fields. 

Most of the fields on this form provide a description to Authors about the field (how to use, what it does, restrictions etc).
