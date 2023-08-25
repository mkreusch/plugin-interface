<?php
namespace Plenty\Modules\Order\Catalogues\Order\Template\Filters;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\Base\OrderMultiSelectBaseFilterBuilder;
use Plenty\Modules\Order\Models\OrderItemType;

/**
 * Used to represent the order item type filter in both the catalog export and UI.
 */
abstract class OrderItemTypeFilterBuilder implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const TRANS_PATH = 'module_order::catalogues.';

	abstract public function getKey(
	);

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setFilterData(
		 $filterData
	);

	abstract public function getFilter(
		array $settings = []
	);

}