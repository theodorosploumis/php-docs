---

weight: 8.1
slug: admin_dashboard_taxonomies
title: "Taxonomy: Administer Taxonomies"
url: /admin/dashboard/taxonomies
menu: "Dashboard > Content > Taxonomies"
taxonomy: 
tips:
    - Use the custom filters and sorting to find the item you are looking for.
    - Reports categories cannot be deleted because there are dynamic lists associated with them.
    
screenshot_steps:
    -
        header: Administer Taxonomies
        image: /data/taxonomy/admin_dashboard_taxonomies.png
        steps:
            - Access this page from the Toolbar menu
            - Click to create a new Taxonomy of type "Category". See more on next section.
            - Click to create a new Taxonomy of type "Report". See more on next section.
            - Click to create a new Taxonomy of type "Tags". See more on next section.
            - Show current results
            - Filter results by Published status
            - Filter results by Name (that contains any keyword)
            - Filter results by Vocabulary. Available options are "Category", "Reports" and "Tags".
            - Label - ID. This is the unique identifier of each Taxonomy that is created by Drupal (incrementally) when you create a new Taxonomy. You can use this for unique reference. ID cannot change upon creation.
            - Label - Name. Name of each Taxonomy. It displays on the browser title as also as on the header of each dynamic listing view. 
            - Label - Vocabulary.
            - Label - Usage. How many items (Nodes or Reports) are referencing this Taxonomy. This field is useful if you want to delete, merge or split a Taxonomy accordingly.
            - Label - Published. Shows if a Taxonomy is Published or Unpublished. Unpublished Taxonomies are hidden in menus and do not appear for the anonymous users. Use with caution.
            - Label - Updated. The last datetime where this Taxonomy has been saved in the database.
            - Label - Operations. Several operations you have regarding this node. Click the dropdown list to select an operation. Available operations here are "Edit" and "Delete".
            - Click on the Name value to open the Taxonomy view page if exists.

---

In this Administration page you can see all the Taxonomy Terms.

See more about Taxonomy on the section below.

The results are displayed in a dynamic table. On the table header some column labels are links. When you click these you can 
sort by each column value.

Every time you are filtering the results you can see the result number as also as the results on each page 
(if there are more pages).