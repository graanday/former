<?php
/**
 * Checkbox
 *
 * My name is Bawksy you see
 */
namespace Former\Form\Fields;

use Former\Traits\Checkable;

class Checkbox extends Checkable
{
  /**
   * The current checkable type
   * @var string
   */
  protected $checkable = 'checkbox';

  ////////////////////////////////////////////////////////////////////
  ////////////////////////// FIELD METHODS ///////////////////////////
  ////////////////////////////////////////////////////////////////////

  /**
   * Create a serie of checkboxes
   */
  public function checkboxes()
  {
    $this->items(func_get_args());

    return $this;
  }
}
