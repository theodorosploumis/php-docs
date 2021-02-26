---

weight: 6.1
slug: node_member_dashboard
title: "Node type Members: Administer Members"
url: /admin/dashboard/members
menu: "Dashboard > Content > Content: Members"
taxonomy: 
tips:
    - All the Content related tables look the same as this Members and have similar functionality and options. Learn once, use everywhere. 
    - Use the custom filters and sorting to find the item you are looking for.
    - Prefer to "Unpublish" items instead of deleting them if you believe that they contain useful data or may need them again in the future. 
    - Categories of each node affect the way it is treated on the website.

screenshot_steps:
    -
        header: Administer Members
        image: /data/node/member/admin_dashboard_members.png
        steps:
            - Click to Add a new node of type "Members"
            - See current results on the table.
            - Filter results by Title name (that contains any keyword)
            - Filter results by Published status
            - Apply bulk actions to multiple rows. You can select one or multiple rows to apply the action with the checkbox on the left. Then click the "Apply to selected items" button. Allowed actions are "Publish" and "Unpublish".
            - Label - Bulk action checkbox. Every row selected here will be available for the bulk action.
            - Label - ID. This is the unique identifier of each "Members" that is created by Drupal (incrementally) when you create a new Members. You can use this for unique reference. ID cannot change upon creation.
            - Label - Photo. Custom image field. 
            - Label - Name. The Member Full Name.
            - Label - Several custom fields.
            - Label - Status. Shows if a "Members" page is Published or Unpublished. Rows with Unpublished items do have a light red background for visual separation. Unpublished nodes are hidden in dynamic lists and do not appear for the anonymous users.
            - Label - Updated. The last datetime where this node has been saved in the database.
            - Label - Operations. Several operations you have regarding this node. Click the dropdown list to select an operation. Available operations here are "Edit", "Replicate" (clone the node with all its field values but without the menu entry) and "Delete".
---

In this Administration page you can see all the site nodes of type "Members" with some of their basic or custom fields.

The results are displayed in a dynamic table. On the table header some column labels are links. When you click these you can 
sort by each column value.

Every time you are filtering the results you can see the result number as also as the results on each page 
(if there are more pages).

