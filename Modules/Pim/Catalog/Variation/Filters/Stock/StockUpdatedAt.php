<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Stock;

use Carbon\Carbon;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\DateFilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\VariationStockUpdatedAtFilter;

/**
 * Used to filter by variation stock last update timestamp
 */
abstract class StockUpdatedAt implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'stockUpdatedAt';

	const OPERATOR = 'operator';

	const FIRST_DATE = 'firstDate';

	const SECOND_DATE = 'secondDate';

	const LAST_DAYS = 'lastDays';

	const OPERATORS = ['today','lastDays','period','=','>','<','>=','<=','!='];

	abstract public function getKey(
	):string;

	/**
	 * Will return a TypeInterface filter if at least one flat file is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):VariationStockUpdatedAtFilter;

	abstract public function setFilterData(
		 $filterData
	);

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setTimeWindow(
		Carbon $fromDate, 
		Carbon $toDate = null
	);

	/**
	 * Fluent setter
	 */
	abstract public function setRequired(
		bool $required
	):self;

	/**
	 * Fluent setter
	 */
	abstract public function setIsVisible(
		bool $isVisible
	):self;

}