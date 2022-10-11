<?php

namespace GuillermoRod\BladeUi\Components\Forms;

use GuillermoRod\BladeUi\Components\BladeUiComponent;
use GuillermoRod\BladeUi\Support\Castings\InputCastings;

class CheckboxInput extends BladeUiComponent
{
    use InputCastings;

    protected $subFolders = 'forms';

    /** @var string */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $value;

    /** @var boolean */
    public $checked;

    /** @var string */
    public $label;

    /** @var string */
    public $enableErrors;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name = null, $label = null, $checked = false, $enableErrors = true, $value = null, $theme = 'bootstrap4')
    {      
        $this->id           = $id;
        $this->name         = $name;
        $this->label        = $label;
        $this->checked      = $checked;
        $this->enableErrors = $enableErrors;
        $this->theme        = $theme;

        if ($name != null) {
            $this->value = old($name, $value ?? '');
        }else {
            $this->value = $value;
        }

        $this->addSameTraitCastingsToAttributes('JsonAttributeCastings', [
            'label-jattributes',
            'error-jattributes',   
            'container-jattributes',
            'input-jattributes', 
        ], 'jAttributesRule');            
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      return parent::render();
    }
}
