<?php
namespace Plenty\Modules\Flow\Filters\Definitions\Contracts;

use Exception;
use Illuminate\Translation\Translator;
use Plenty\Modules\Flow\Contracts\UIConfigFormContract;
use Plenty\Modules\Flow\Filters\Definitions\Exceptions\FilterDefinitionException;
use Plenty\Modules\Flow\Models\Input;
use Plenty\Modules\Flow\Models\Output;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\FormField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\SelectboxField;

/**
 * Flow filter
 */
abstract class FilterDefinitionContract 
{

	abstract public function getIdentifier(
	):string;

	abstract public function getName(
	):string;

	abstract public function getDescription(
	):string;

	abstract public function getUIConfigFields(
	):array;

	abstract public function getRequiredInputTypes(
	):array;

	abstract public function getOperators(
	):array;

	abstract public function performFilter(
		array $inputs, 
		array $configFields
	):bool;

	abstract public function addOperators(
		UIConfigFormContract $configForm
	):UIConfigFormContract;

	abstract public function validateConfigFields(
		array $configFields
	);

	abstract public function validateInputs(
		 $inputs
	);

}