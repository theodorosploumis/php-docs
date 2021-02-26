---

weight: 3.6
slug: general_ckeditor
title: General - Using the rich text editor (CKEditor)
taxonomy: 
tips: 
    - Click the maximize button to open the editor in full window.
    - Don't use H1 format inside the CKEditor textarea. It may affect search engines.
    - You can see almost all the CKEditor available styles on the "demo" page
    
screenshot_steps:
    -
        header: Basic buttons
        image: /data/ckeditor/ckeditor.png
        steps:
            - Header style (H1, H2, H3 etc)
            - Custom site specific styles (more details on next screenshot)
            - Remove decoration and format (bold, italic etc)
            - Bold text
            - Italics
            - Strikethrough
            - Superscript
            - Subscript
            - Text align left
            - Text align center
            - Text align right
            - Text align justify
            - Add hyperlink (Can add internal or external urls. Provides an autocomplete form that allows to find 
              an internal page from its title. Notice that if an internal page is found Drupal will display the title 
              of the page automatically even if it changes.)
            - Remove hyperlink
            - List bulleted
            - List with numbers
            - Add Embedded media (Opens a modal that allows to embed an existing media file like Image, 
              Report/Attachment and Video from media library or create a new one and insert it)
            - Add horizontal line
            - Add special character (eg the Copyright sign)
            - Undo
            - Redo
            - Copy selected elements
            - Cut selected elements
            - Paste form Word
            - Show html blocks (advanced users)
            - Maximize textarea (this will make the editor stretch to the whole browser window)
            - Show and edit html code (advanced users)
            - The textarea where you can type text and apply button actions
            - Current html structure information (advanced users)
            - Resize editor window
    -
        header: Custom styles available
        image: /data/ckeditor/ckeditor_styles.png
        steps:
            - Select (highlight) any element (text, link, list etc) inside the editor textarea and click the 
              "**Style**" dropdown. Select one of the available options. 
            - Notice that only one option can be applied. Only the last one applies.
            - All these styles have been created to adopt properly to each user browser.
    -
        header: Custom styles - Texts and Headers (applies to simple text paragraphs)
        image: /data/ckeditor/ckeditor_styles_textheaders.png
        steps:
            - Default paragraph 
            - Paragraph with padding
            - H1 heading
            - H2 Text paragraph (same style as H2 but it is a paragraph)
            - H3 Text paragraph (same style as H3 but it is a paragraph)
            - H4 Text paragraph (same style as H4 but it is a paragraph)
            - H5 Text paragraph (same style as H5 but it is a paragraph)
            - Subtitle    
    -
        header: Custom styles - Links and Buttons (applies to hyperlinks only)
        image: /data/ckeditor/ckeditor_styles_links.png
        steps:
            - Simple link (no styling)     
            - Button Default (fonts will convert to capital for all button styles)
            - Button Black
            - Button White
            - Button Red
            - More link style
    -
        header: Custom styles - Lists
        image: /data/ckeditor/ckeditor_styles_lists.png
        steps:
            - Simple bulleted list
            - Simple numbered list
            - List, 2 Columns (applies to bulleted lists only. Will turn the list to a dynamic two columns grid.)
            - List, 3 Columns (bulleted lists only, three columns grid)
            - List, 4 Columns (bulleted lists only, four columns grid)
    -
        header: Custom styles - Blockquotes (apply to simple text paragraphs)
        image: /data/ckeditor/ckeditor_styles_blockquotes.png
        steps:
            - Blockquote red icon 
            - Blockquote purple icon 
            - Blockquote pink icon
            - Simple quote like text
    -
        header: CKEditor, Embed Drupal Media
        image: /data/ckeditor/ckeditor_media.png
        steps:
            - Click the embed media button.
            - A modal appears. You can upload a new Media file (image or video url).
            - You can also select existing Media from the Media Library which is organized by type.
            - There are filters and sorting to help you find the Media you need.
            - Chose the Media you want to insert.
            - Click "Insert selected" button to import Media into CKEditor textarea.
            - See [more about Media](/#slug-media_overview)
---

This CKEditor Version 4 works the same as with MS Word or any other text editor and allows user to style **text** as he/she wants.

1. Not all fields have the CKEditor filter available.
1. Web pages addresses and email addresses turn into links automatically (eg if you type `www.example.com` this will become a link www.example.com)
1. You can style the text using the buttons from the toolbar. Put the mouse above each button on the toolbar to see its description.
1. Select (Highlight) any content on the editor area and then click on any button of the toolbar to apply a specific style or edit (eg cut, copy, paste etc)
1. You can see the html tag that apply to the selection.
1. You can drag the right corner to maximize the text editor's window.
1. Internal links to Nodes (eg `/node/16`) are automatically parsed to their path alias equivalent.
1. Furthermore, there are project specific styles that can be applied to elements for an easier authoring experience.

Learn more about CKEditor at https://ckeditor.com/ckeditor-4/.