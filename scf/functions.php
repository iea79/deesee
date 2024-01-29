<?php
// function faq_section_template_fields( $settings, $type, $id, $meta_type, $types ) {
//
//     if ( get_page_template_slug( $id ) == WEB_DESIGN_TEMPL_NAME ) {
//
// 		$Section = SCF::add_setting( 'faq', 'FAQ section' );
//
// 		$Section->add_group(
// 			'faq-section',
// 			false,
// 			array(
// 				array(
// 					'name'        => 'faq__anchor_name',
// 					'label'       => 'Section anchor name',
// 					'type'        => 'text',
//                     'default'     => 'FAQ'
// 				),
// 				array(
// 					'name'        => 'faq__anchor',
// 					'label'       => 'Section anchor',
// 					'type'        => 'text',
//                     'default'     => 'FAQ'
// 				),
// 				array(
// 					'name'        => 'faq__title',
// 					'label'       => 'Section title',
// 					'type'        => 'wysiwyg',
//                     'default'     => 'FAQ'
// 				),
// 			)
// 		);
//
// 		$Section->add_group(
// 			'faq_list',
// 			false,
// 			array(
//                 array(
//                     'name'        => 'faq__name',
//                     'label'       => 'Question',
//                     'type'        => 'text',
//                 ),
//                 array(
// 					'name'        => 'faq__text',
// 					'label'       => 'Answer text',
// 					'type'        => 'wysiwyg',
// 				),
// 			)
// 		);
//
// 		$settings[] = $Section;
// 	}
//
// 	return $settings;
// }
// // add_filter( 'smart-cf-register-fields', 'faq_section_template_fields', 9, 5 );
