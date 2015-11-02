/*
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.addStylesSet( 'drupal',
    [
            /* Block Styles */

            // These styles are already available in the "Format" drop-down list, so they are
            // not needed here by default. You may enable them to avoid placing the
            // "Format" drop-down list in the toolbar, maintaining the same features.
          
            
            { name : 'Heading 1'        , element : 'h1' },
            { name : 'Heading 2'        , element : 'h2' , attributes : {'class' : 'h2 secondary-h2 blog-emphasis'} },
            { name : 'Heading 3'        , element : 'h3' },
            

            // { name : 'Blue Title'        , element : 'h3', styles : { 'color' : 'Blue' } },
            // { name : 'Red Title'     , element : 'h3', styles : { 'color' : 'Red' } },

            /* Inline Styles */

            // These are core styles available as toolbar buttons. You may opt enabling
            // some of them in the "Styles" drop-down list, removing them from the toolbar.
            
          
            
            { name : 'signature'   , element : 'h2', styles : { 'color' : '#24e47a', 'font-family' : 'Amatic SC', 'font-size' : '40px' } },
            { name : 'Gray'   , element : 'span', styles : { 'color' : '#3A3A3A',  } },
            { name : 'Grey'   , element : 'span', styles : { 'color' : '#3A3A3A',  } },


    
            /* Object Styles */

            {
                    name : 'Image on Left',
                    element : 'img',
                    attributes :
                    {
                            'style' : 'padding: 5px; margin-right: 5px',
                            'border' : '2',
                            'align' : 'left'
                    }
            },
            {
                    name : 'Image center',
                    element : 'img',
                    attributes :
                    {
                            'align' : 'center'
                    }
            },

            {
                    name : 'Image on Right',
                    element : 'img',
                    attributes :
                    {
                            'style' : 'padding: 5px; margin-left: 5px',
                            'border' : '2',
                            'align' : 'right'
                    }
            }
    ]);
}
