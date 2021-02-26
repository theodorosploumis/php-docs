---

weight: 4.6
slug: revisions_node_page
title: "Node type Page: Create and revert Revisions"
url: /node/[id]/revisions
menu: 
taxonomy: 
tips:
   - Create a revision for every change on a node by default. More unused revisions is better than none.
   - If you make a very important revision do not forget to add a helpful log message on the Revision Message field.

screenshot_steps:
    -
        header: Revisions of a node
        image: /data/node/page/revisions_node_page.png
        steps:
            - Go to the "Revisions" page
            - Each Revision has a title with is the Revision datetime. Click on this link to open the Revision view. Notice that Revisions that are not current may not display 100% correctly due to some system alters in HTML.
            - Each Revision has the Author of that Revision.
            - Select the Revision to compare with. The latest Revision (time based) will be the first Revision to compare and changes will apply to this one.
            - Select the Revision to compare with.
            - Click the "Revert" button if you want to make this Revision the current one. Test your choice before doing this.
            - Click the "Compare selected revisions" to compare Revisions from steps 4 and 5. By default, Drupal will use the "Visual inline" layout to compare the Revisions.
    -
        header: Compare Revisions - Layout visual inline
        image: /data/node/page/revisions_layout_visual.png
        steps:
            - On top of the Compare page you can see the two Revisions basic information
            - Previous change will go to compare with the previous Revision of the selected one.
            - Authors can change the Compare layout. Each layout may have some additional options.
            - This layout displays any change inline on the page with special styles. 
    -
        header: Compare Revisions - Layout split fields
        image: /data/node/page/revisions_layout_split.png
        steps:
            - Same fields as above, but the Compared fields are side by side. Prefer this layout for more granular comparing.
    -
        header: Compare Revisions - Layout unified fields
        image: /data/node/page/revisions_layout_unified.png
        steps:
            - Same fields as above, but the Compared fields are in rows one after the other.

---

Revisions are independent (standalone) instances of a node stored on the database within their other references (eg images).

Revisions allow Authors to go back later to an older revision if needed to.

Revisions allow Authors to compare changes through the time, revert to a previous revision as also as inspect 
other Authors changes without the need to contact them or moderate content.

The latest revision is the "Current Revision". All current Revisions are these that display on the website.

You can visit the "Revisions" page of an existing node:

- Through the [Dashboard: Administer Pages](/#slug-node_page_dashboard) table.
- From the view node display by clicking the "Revisions" button on the left options.
- Directly by typing `/node/[ID]/revisions` on the browser where `[ID]` is the node unique id.
