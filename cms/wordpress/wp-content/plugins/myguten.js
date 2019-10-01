( function( wp ) {
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var TextControl = wp.components.TextControl;
 
    registerBlockType( 'myguten/meta-block', {
        title: 'Block Add Email',
        icon: 'smiley',
        category: 'common',
 
        attributes: {
            blockValue: {
                type: 'string',
                source: 'meta',
                meta: 'myguten_meta_block_field'
            }
        },
 
        edit: function( props ) {
            var className = props.className;
            var setAttributes = props.setAttributes;
 
            function updateBlockValue( blockValue ) {
                setAttributes({ blockValue });
            }
 
            return el(
                'div',
                { className: 'Test-add-email' },
                el( TextControl, {
                    placeholder: 'Add Email',
                    value: props.attributes.blockValue,
                    onChange: updateBlockValue
                } )
            );
        },
 
        // No information saved to the block
        // Data is saved to post meta via attributes
        save: function() {
            return null;
        }
    } );
} )( window.wp );