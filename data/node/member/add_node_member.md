---

weight: 6.2
slug: add_node_member
title: "Node type Member: Add new node"
url: /node/add/member
menu: "Dashboard > Content > Content: Members > Add Member"
taxonomy: 
tips:
    - Most of the times you should replicate an existing node instead of creating a new one in order to save time or reuse fields.
    - Settings on the right sidebar are common for all node types. Learn once, use everywhere.
    - Edit form is the same as Add New form.
    - Preview button is your friend. Educate yourself to Preview nodes before saving them.
    - Each field has a corresponding description on top or bottom of it. Read this before entering values to the field.
    
screenshot_steps:
    -
        header: Add new "Member" form
        image: /data/node/member/add_node_member.png
        steps:
            - Add the Full Member Name. This is the Title which displays on the header section as also as on the browser title and on custom lists of these nodes.
            - Left sidebar is the place to add/edit the node fields which are the "content" of this node.
            - Right Sidebar contains system settings that do not represent content (eg Authoring time).
            - Useful information about the Node (applies on Edit forms only) like "Author", "Published status", "Last saved" datetime etc. (works on edit form only)
            - URL Alias (path alias). Specify an alternative path by which this data can be accessed. For example, type `/about` when writing an about page. If there is a Menu Parent add this Parent path alias here too to create structured path aliases.
            - Set the Author of this node. By default, Drupal sets current user as Author.
            - Set the Created datetime of this node. You can set any time (current, past or future). By default, Drupal sets here current time.
            - Field Display Order. Simple integer number to sort items in lists (starting from 1, which is the first item). Items with the same Display Order will be sorted by Full Name.
            - Field Member Photo. If no photo provided a default photo will display. Images must be larger than 150x150 pixels. Images larger than 600x600 pixels will be resized.
            - Field Member Position.
            - Field Member Alternate.
            - Field Member Teaser. Plain text with a sort bio of the Member.
            - Field Member Biography. Long formatted text.
            - Field Member Group. This field is used to create dynamic lists of Members grouped by this value.
            - Field Member Website. Add external url and link text (if Member has a website).
            - Field Member Email. Emails validate through HTML5 validation.
            - Click "Preview" button to preview the node. This will open node in a special frame where you can select the View Mode to check the node display.
            - Click "Save" button to save the new node.
            - Click "Delete" link to delete the node (appears on edit form only).
---

"Member" node type is a template that creates Member pages (Our People) with simple fields. 

Every node has a unique identifier (ID) that is created by Drupal (incrementally) when you create a new node. 
You can use this for unique reference. ID cannot change upon creation.

The form to add a new node has the left sidebar fields as also as the right sidebar fields. 

Most of the fields on this form provide a description to Authors about the field (how to use, what it does, restrictions etc).
