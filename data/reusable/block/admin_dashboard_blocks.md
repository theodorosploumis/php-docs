---

weight: 9.7
slug: admin_dashboard_blocks
title: "Reusable Data: Blocks (Static)"
url: /admin/dashboard/blocks
menu: "Dashboard > Content > Reusable Data > Blocks (static)"
tips:
    - Block content changes rarely.
    - If you change a Block too many times consider using another storage type to display the Block data. 
screenshot_steps:
    -
        header: Administer System Blocks
        image: /data/reusable/block/admin_dashboard_blocks.png
        steps:
            - Access this page from the Toolbar menu
            - Filter results by Block Description.
            - Filter results by Block type. Available options are "Address", "Contact", "HTML".
            - Label - ID. This is the unique identifier of each Block that is created by Drupal (incrementally) when you create a new Block. You can use this for unique reference. ID cannot change upon creation.
            - Label - Block Description. Used by Authors only, not displayed on the website. 
            - Label - Type. The type of this Block.
            - Label - Updated. The last datetime where this Block has been saved in the database.
            - Label - Actions. Several operations you have regarding this item. Available actions here are "Edit" only.

---

In this Administration page you can see all the site "Blocks".

Drupal Blocks are boxes of content rendered into an area, or region, of a web page but on the same position.

Blocks on this Administration page are static (their content will not change dynamically).

Blocks on this Administration page are always on the same place on the website (eg on footer section). 
You are not allowed to move these to another place.

Block content changes rarely. If you change a Block too many times consider using another storage type to display the 
Block data. 
