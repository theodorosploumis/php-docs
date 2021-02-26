---

weight: 7.2
slug: add_media
title: "Media: Add Media"
url: /media/add/
menu: "Dashboard > Content > Media > Add Media"
taxonomy: 
tips:
    - Edit form is the same as Add New form.
    - Each field has a corresponding description on top or bottom of it. Read this before entering values to the field.
    
screenshot_steps:
    -
        header: Add new Media form
        image: /data/media/add_media.png
        steps:
            - Background Image (Background image on top of each Page title).
            - Hero Image (Hero image, used on top of each News & Events post).
            - Image - generic (Generic usage, reusable Image used on Elements image fields).
            - Report/Attachment (Attachments are PDF files that can be downloaded. Usually, they are Reports).
            - Video (External video from YouTube, Vimeo or Facebook. Preview images created automatically).
    -
        header: Add/Edit Media of type "Background image"
        image: /data/media/edit_media_background.png
        steps:
            - Follow the instructions on the form.
            - In most image type Media the file Name and Alt field is required to prevent accessibility issues.
            - Restrictions on file uploads apply automatically. Eg if you upload an image larger than the required it will resize accordingly.
            - Some fields have default values since they are used on every page (eg the default Hero image).
            - By default new Media are Published. You can always Unpublish a Media though. Use with caution.
            - Click "Save" button to save changes.
    -
        header: Add/Edit Media of type "Hero image"
        image: /data/media/edit_media_hero.png
        steps:
            - Same as above
    -
        header: Add/Edit Media of type "Image (generic)"
        image: /data/media/edit_media_image.png
        steps:
            - Same as above
    -
        header: Add/Edit Media of type "Video"
        image: /data/media/edit_media_video.png
        steps:
            - Same as above
    -
        header: Add/Edit Media of type "Report/Attachment"
        image: /data/media/edit_media_report.png
        steps:
            - Name of the Report. Does not display on the website.
            - Short Title. Short Title used on lists of Reports instead of the large Name.
            - File. Only pdf allowed.
            - Report Category. This is a [Taxonomy](/#slug-taxonomy) reference field that categories Reports into groups. 
            - Alternative Image. Override default image if the result is not acceptable. Must be larger than 290x380px.
            - Image Display. This is a control field that allows Authors to select which image will show to the Media item lists. Allowed options are "System Icon", "PDF first page screenshot" and "Custom uploaded image" from field above.                      
            - Available in hard copy. When checked will provide a link to the [Publication Request](/#slug-webform) form to ask for a hard copy.
            - Texts. Formatted text with Media details. Does not display on the website.
            - By default new Media set Published except if you uncheck this field.
            - Click "Save" button to save changes.
            - Click "Delete" link to delete the Media (works on edit form only).
---

Media is a template that creates reusable rich media content like Images, Video (from 3rd party providers) and Files (Attachment).

Each media type has specific fields and requirements.

Available Media types are "Background Image", "Hero Image", "Image (Generic)", "Report/Attachment" and "Video."

Media do not have a standalone page like Nodes, but they are used as reference fields inside other types (Nodes or Elements).

Examples of media is a Hero banner attached to the Homepage or a Video for the Grand Gourmet node page.

Every Media has a unique identifier (ID) that is created by Drupal (incrementally) when you create a new Media. 
You can use this for unique reference. ID cannot change upon creation.

Most of the fields on this form provide a description to Authors about the field (how to use, what it does, restrictions etc).
