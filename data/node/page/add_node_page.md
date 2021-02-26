---

weight: 4.2
slug: add_node_page
title: "Node type Page: Add new node"
url: /node/add/page
menu: "Dashboard > Content > Content: Pages > Add Page"
taxonomy: 
tips:
    - Most of the times you should replicate an existing node instead of creating a new one in order to save time.
    - Settings on the right sidebar are common for all node types. Learn once, use everywhere.
    - Edit form is the same as Add New form.
    - Preview button is your friend. Educate yourself to Preview nodes before saving them.
    - Each field has a corresponding description on top or bottom of it. Read this before entering values to the field.
    
screenshot_steps:
    -
        header: Add new Page form
        image: /data/node/page/add_node_page_full.png
        steps:
            - Add node Title. Title displays on the header section as also as on the browser title.
            - Left sidebar is the place to add/edit Elements. These Elements are the "content" of this node.
            - Right Sidebar contains system settings that do not represent content (eg menu settings) except from some custom fields.
            - Click the "Add Element" button to add new Elements on this node. (see more details on [Elements section](/#slug-paragraph))
            - By default new nodes set Published except if you uncheck this field.
            - Click "Save" button to save the new node.
            - Click "Preview" button to preview the node. This will open node in a special frame where you can select the View Mode to check the node display.
            - Useful information about the Node (applies on Edit forms only) like "Author", "Published status", "Last saved" datetime etc.
            - Create new Revision. When you create a new Revision Drupal will create a new instance of the node and keep the preview one to the database. This will allow Authors to go back later to an older revision if needed to.
            - Menu Settings. Add this node to Main Menu. Notice that nodes do not required to have a Menu link. Also, the Menu settings here are available from the [Menu](/#slug-menu) form too.
            - Add the Menu link title. Keep this sort and meaningful. By default Drupal will add here the node Title.
            - Add the Menu link description (optional) which is a tooltip helper when users hover over the menu item.
            - Add the Menu link Parent item. This allows to organize menu into submenus. Do not create more that 2 level menus.
            - Weight of the Menu link. Integer that is used to sort menu links. Eg Menu link with weight 20 displays after the Menu link with weight 19.
            - Metatags settings. Metatags are automatically generated with Drupal [tokens](/#slug-terminology) but you can also override them for each node. Advanced users only.
            - URL Redirects. If you want to set another path to redirect to this page add this here. By default Drupal will create a system redirect from the system path `/node/[ID]` to the node path alias.
            - URL Alias (path alias). Specify an alternative path by which this data can be accessed. For example, type `/about` when writing an about page. If there is a Menu Parent add this Parent path alias here too to create structured path aliases.
            - Custom - HTML on Title. These texts will display on top of the Page after the main Title. Used on the Homepage.  
            - Custom - Page Background Image. Change the default background image on top of the page with a custom one.
            - Set the Author of this node. By default, Drupal sets current user as Author.
            - Set the Created datetime of this node. You can set any time (current, past or future). By default, Drupal sets here current time.
---

Page node type is a template that creates landing pages with structured fields. 
These structured fields are named **Paragraphs** (or **Elements**) and will be analyzed later on the section.

Examples of this type are "About Us", "Management Team" etc.

Every node has a unique identifier (ID) that is created by Drupal (incrementally) when you create a new node. 
You can use this for unique reference. ID cannot change upon creation.

The form to add a new Page has the left sidebar fields as also as the right sidebar fields. 
Right sidebar fields are common for every node type (template). 

Most of the fields on this form provide a description to Authors about the field (how to use, what it does, restrictions etc).

There is a demo Page (Unpublished) that can be used by Authors for reference and experiments.