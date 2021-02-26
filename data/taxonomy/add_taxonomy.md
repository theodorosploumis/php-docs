---

weight: 8.2
slug: add_taxonomy
title: "Taxonomy: Add Taxonomy Term"
url: 
menu: "Dashboard > Content > Taxonomies > Add Category Term"
taxonomy: 
tips:
    - Edit form is the same as Add New form.
    - Each field has a corresponding description on top or bottom of it. Read this before entering values to the field.
    - Do not use other taxonomies as parents (tree structure with more than one levels hierarchy). This will break the dynamic lists or/and the dynamic menus.
    
screenshot_steps:
    -
        header: Add/Edit taxonomy term (all types)
        image: /data/taxonomy/add_taxonomy.png
        steps:
            - Name of the Taxonomy term.
            - Description. Does not display on the website.
            - Parent terms. Avoid adding a parent for any term as this may break dynamic menus and lists.
            - Set the weight for this Taxonomy term.
            - URL Alias. Always force Drupal to generate the Taxonomy term path aliases because many paths are used as page variables.
            - By default new Taxonomy terms set Published except if you uncheck this field.
            - Click "Save" button to save changes.
            - Click "Delete" link to delete the Taxonomy Term (works on edit form only). Use with caution.
---

Taxonomies are keywords used to categorize content of the website (Nodes, Media etc).

Other common words are 'terms', 'tags' etc. In Drupal CMS these are called 'taxonomy terms'.

For example all "News & Event" nodes may have a "Services" taxonomy where users can read only news that have 
the category "Services" while other prefer to read News of category "Nightlife".

Each Taxonomy Term usually has its own dynamic page.


There are three types of taxonomies which are called "Vocabularies" on this website:

- Categories (found on News & Events nodes).
- Tags (found on News & Events nodes)
- Reports (used to categorize Media of type Report).

Every Taxonomy Term has a unique identifier (ID) that is created by Drupal (incrementally) when you create a new Taxonomy. 
You can use this for unique reference. ID cannot change upon creation.

Most of the fields on this form provide a description to Authors about the field (how to use, what it does, restrictions etc).
