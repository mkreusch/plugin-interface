<?php
namespace Plenty\Modules\Flow\DataModels\ConfigForm;


/**
 * The selectbox field model.
 */
abstract class SelectboxField 
{

	const TYPE_DATE = 'date';

	const TYPE_TIME = 'time';

	const TYPE_INPUT = 'text';

	const TYPE_NUMBER = 'number';

	const TYPE_DOUBLE = 'double';

	const TYPE_CHECKBOX = 'checkbox';

	const TYPE_SELECTBOX = 'selectbox';

	const TYPE_CHECK_BOX_GROUP = 'checkboxGroup';

	const TYPE_HYPERLINK = 'hyperlink';

	const TYPE_TEXTAREA = 'textarea';

	const VALIDATION_TYPE_NUMBER = 'number';
	
public		$selectBoxValues;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}