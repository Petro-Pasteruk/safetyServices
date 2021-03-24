<?php
    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    Container::make( "post_meta", __( "Services" ) )
        ->where("post_type", "=", "page")
        ->add_tab("Tabs", array(
            Field::make("complex", "tab", __( "Tab" ))
                ->add_fields( array(
                    Field::make("text", "tab_title", __( "Tab title" ))->set_width(30),
                    Field::make("complex", "slides_list", __("Slides"))->set_required(true)
                        ->add_fields( array(
                            Field::make("image", "slide_photo", __(" Slide Photo "))->set_value_type("url"),
                            Field::make("text", "slide_title", __(" Slide Title ")),
                            Field::make("textarea", "slide_desc", __(" Slide Description "))
                        ) )->set_width(70)->set_layout("tabbed-horizontal")
                ) )->set_layout("tabbed-horizontal")
        ))
        ->add_tab("Arrow slider", array(
            Field::make("image", "slider_img_arrow", __(" Arrows for the slider "))->set_value_type("url")->set_required(true)
        ))
?>