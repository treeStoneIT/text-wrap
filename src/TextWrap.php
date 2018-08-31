<?php

namespace Treestoneit\TextWrap;

use Laravel\Nova\Fields\Field;

class TextWrap extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-wrap';


    /**
     * Indicates if the element should be shown on the edit pages and detail page
     *
     * @var bool
     */
    public $showOnCreation = false;
    public $showOnUpdate = false;
    public $showOnDetail = false;


    /**
     * Set the method used to wrap
     * if the $wrapMethod  = length the $wrapMarker will be an integer length of each line
     * if the $wrapMethod  = explode the $wrapMarker will be the exploder "string"
     *
     * @param string|int $wrapMethod
     * @param string $wrapMarker
     *
     * @return \TreeStoneIT\TextWrap\TextWrap
     */
    public function wrapMethod($wrapMethod = 'length', $wrapMarker = '50')
    {
        $wrapMeta = [
            'method' =>   $wrapMethod,
            'marker' =>   $wrapMarker,
        ];
        return $this->withMeta(['wrap' => $wrapMeta]);
    }
}
