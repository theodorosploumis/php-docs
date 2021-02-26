---

weight: 5.1
slug: node_news_dashboard
title: "Node type News & Events: Administer News & Events"
url: /admin/dashboard/news_events
menu: "Dashboard > Content > Content: News & Events"
taxonomy: 
tips:
    - All the Content related tables look the same as this News & Events and have similar functionality and options. Learn once, use everywhere. 
    - Use the custom filters and sorting to find the item you are looking for.
    - Prefer to "Unpublish" items instead of deleting them if you believe that they contain useful data or may need them again in the future. 
    - Categories of each node affect the way it is treated on the website.

screenshot_steps:
    -
        header: Administer News & Events
        image: /data/node/news/admin_dashboard_news.png
        steps:
            - Access this page from the Toolbar menu
            - Click to Add a new node of type "News & Events"
            - See current results on the table.
            - Filter results by Title name (that contains any keyword)
            - Filter results by Published status
            - Filter results by Categories
            - Apply bulk actions to multiple rows. You can select one or multiple rows to apply the action with the checkbox on the left. Then click the "Apply to selected items" button. Allowed actions are "Publish" and "Unpublish".
            - Label - Bulk action checkbox. Every row selected here will be available for the bulk action.
            - Label - ID. This is the unique identifier of each "News & Events" that is created by Drupal (incrementally) when you create a new News & Events. You can use this for unique reference. ID cannot change upon creation.
            - Label - Title. Title of each "News & Events" page. It displays on the browser title as also as on the header of each News & Events view. 
            - Label - Hero. This is custom (image) field of these nodes. 
            - Label - Categories. This is custom (taxonomy reference) field of these nodes. Multiple values display with comma separator.
            - Label - Event Dates (Human Text). This is custom date field of these nodes.
            - Label - Content Type. The type of each node. In this table all the nodes are of type "News & Events" but there may be other tables that display mixed types.
            - Label - Author. The username of the initial Author of each News & Events.
            - Label - Status. Shows if a "News & Events" page is Published or Unpublished. Rows with Unpublished items do have a light red background for visual separation. Unpublished nodes are hidden in menus and do not appear for the anonymous users.
            - Label - Updated. The last datetime where this node has been saved in the database.
            - Label - Operations. Several operations you have regarding this node. Click the dropdown list to select an operation. Available operations here are "Edit", "Replicate" (clone the node with all its field values but without the menu entry) and "Delete".
            - Click on the Title value to open the node view News & Events.                       
---

In this Administration page you can see all the site nodes of type "News & Events" with some of their basic or custom fields.

The results are displayed in a dynamic table. On the table header some column labels are links. When you click these you can 
sort by each column value.

Every time you are filtering the results you can see the result number as also as the results on each page 
(if there are more pages).

