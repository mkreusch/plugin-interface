<?php
namespace Plenty\Modules\Document\Builder\Variables\Enums;


/**
 * An enum type with all objects available for variables.
 */
abstract class VariablesObjectTypeEnum 
{

	const Order = 'Order';

	const OrderItem = 'OrderItem';

	const OrderItemTypes = 'OrderItemTypes';

	const OrderAmount = 'OrderAmount';

	const OrderItemAmount = 'OrderItemAmount';

	const Variation = 'Variation';

	const Contact = 'Contact';

	const Address = 'Address';

	const Document = 'Document';

	const MetaData = 'MetaData';

	const PluginOld = 'PluginOld';

	const ShippingProfile = 'ShippingProfile';

	const ShippingProvider = 'ShippingProvider';

	const TaxDeterminer = 'TaxDeterminer';

	const Warehouse = 'Warehouse';

	const QuantityArray = 'QuantityArray';

	const Other = 'Other';

	const MessengerConversation = 'MessengerConversation';

	const Unknown = 'Unknown';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}