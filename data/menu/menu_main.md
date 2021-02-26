---

weight: 12.1
slug: menu_main
title: Menus & Navigation - Main Menu
url: /admin/dashboard/menu-main
menu: "Dashboard > Menus > Main Menu"

screenshot_steps:
    -
        header: Main Menu overview page
        image: /data/menu/admin_dashboard_menu_main.png
        steps: 
            - Access this page from the Toolbar menu
            - Click to add a new Menu Item. See more on next section.
            - Drag and drop option to create structured groups. Children of a menu item appear indented.
            - Uncheck to disable the menu item. This will hide the menu item from the menu but will not delete it.
            - When you click to a menu item title you go to the link page of that menu item.
            - Options "Edit" or "Delete" are available. See more on next screenshot.
    -
        header: Add/edit Menu Item
        image: /data/menu/admin_dashboard_menu_add_link.png
        steps: 
            - Provide the menu item title. Keep this short.
            - Provide a link. Start typing the title of a piece of content to select it. You can also enter an internal path such as /node/add or an external URL such as "http://example.com". Enter `<front>` to link to the front page. Enter `<nolink>` to display link text only.
            - A flag for whether the link should be enabled in menus or hidden.
            - Description. Shown when hovering over the menu link (optional).
            - Parent link. Keep to one parent maximum.
            - Weight. A field to sort menu items on the menu display. Same as the drag and drop functionality on screenshot before.
            - Save changes 
            - Delete this menu item. Always delete with caution. Notice tha deleting a menu item does not delete also the Node that is referenced (if any).
            
---

Main Menu is the basic navigation of the site.

It has two levels by default and some of its top parents are fake links (`<nolink>`) that just stay there to hold children pages.

Do not use more than two levels on the Main Menu.

Notice that most of the options on this page are also available on each "Edit Menu Item" individual page.

Menu items do not have revisions so edit or delete them with caution.
