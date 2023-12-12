<?php
namespace Plenty\Modules\Flow\StepActions\Definitions\Contracts;

use Exception;
use Illuminate\Translation\Translator;
use Plenty\Modules\Flow\DataModels\ConfigForm\FormField;
use Plenty\Modules\Flow\Models\Filter;
use Plenty\Modules\Flow\Models\Input;
use Plenty\Modules\Flow\Models\Output;
use Plenty\Modules\Flow\StepActions\Definitions\Exceptions\StepActionDefinitionException;

/**
 * Flow step action
 */
abstract class StepActionDefinitionContract 
{

	abstract public function getIdentifier(
	):string;

	abstract public function getPath(
	):string;

	abstract public function getName(
	):string;

	abstract public function getDescription(
	):string;

	abstract public function getUIConfigFields(
	):array;

	abstract public function getRequiredInputTypes(
	):array;

	abstract public function getProvidedOutputTypes(
	):array;

	abstract public function performTask(
		array $inputs, 
		array $configFields, 
		 $filter = null
	):array;

	abstract public function validateConfigFields(
		array $configFields
	);

	abstract public function validateInputs(
		 $inputs
	);

}