<?php

/**
 * @class TwoColumnTextModule
 *
 */
class TwoColumnTextModule extends FLBuilderModule {

	/** 
	 * @method __construct
	 */  
	public function __construct()
	{
		parent::__construct( array(
			'name'          	=> __( 'Two-Column Text Editor', 'fl-builder' ),
			'description'   	=> __( 'Create content for two columns in separate WYSIWYG editors.', 'fl-builder' ),
			'category'      	=> __( 'Basic Modules', 'fl-builder' ),
			'partial_refresh'	=> true
		));
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module( 'TwoColumnTextModule', array(
	'general'       => array( // Tab
		'title'         => __( 'General', 'fl-builder' ), // Tab title
		'sections'      => array( // Tab Sections
			'spacing'       => array( // Section
				'title'         => 'Spacing', // Section Title
				'fields'        => array( // Section Fields				
					'spacing'     => array(
            'type'        => 'text',
            'label'       => __( 'Space Between Columns', 'fl-builder' ),
            'default'     => '20',
            'placeholder' => '20',
            'size'        => '4',
            'maxlength'   => '3',
            'preview'     => array(
							'type'      => 'css',
							'rules'     => array(
	                array (
	                  'selector' => '.fl-two-column-text .fl-rich-text-col-a',
	                  'property' => 'padding-right'
                  ),
                  array (
	                  'selector' => '.fl-two-column-text .fl-rich-text-col-b',
	                  'property' => 'padding-left'
                  )
							)  
						)
          ),
        )
      ),
      'column_a'    => array(
        'title'       => "Left Column Content",
        'fields'      => array(
					'text_col_a'          => array(
						'type'          => 'editor',
						'label'         => '',
						'rows'          => 13,
						'preview'         => array(
							'type'             => 'text',
							'selector'         => '.fl-rich-text-col-a'  
						)
					),
				)
      ),
      'column_b'    => array(
        'title'       => "Right Column Content",
        'fields'      => array(
          'text_col_b'      => array(
						'type'          => 'editor',
						'label'         => '',
						'rows'          => 13,
						'preview'       => array(
							'type'             => 'text',
							'selector'         => '.fl-rich-text-col-b'  
						)
					),
				)
			)
		)
	)
));