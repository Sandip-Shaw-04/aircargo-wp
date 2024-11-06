<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class FrontPage extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('front_page', [
            'position' => 'acf_after_title',
            'style' => 'seamless',
            'hide_on_screen' => ['the_content'],
        ]);
      

        $fields
            ->setLocation('post_type', '==', 'front_page');

         // Banner Section
         $fields
         ->addGroup('banner_section',)
             ->addText('title', ['required' => true])
             ->addText('sub_title_1', ['required' => true])
             ->addText('sub_title_2', ['required' => true])
             ->addLink('cta_login', [
                'label' => 'Call to Action Login',
            ])
            ->addLink('cta_demo', [
                'label' => 'Call to Action Demo',
            ])   
         ->endGroup();

        return $fields->build();
    }
}
