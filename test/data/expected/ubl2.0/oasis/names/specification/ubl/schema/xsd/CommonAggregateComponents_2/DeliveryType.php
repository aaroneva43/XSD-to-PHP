<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName DeliveryType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Delivery. Details
 * @xmlDefinition Information about Delivery.
 * @xmlObjectClass Delivery
 */
class DeliveryType
	{

	
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Identifier
	 * @Definition Identifies the Delivery.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTerm Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ID
	 * @var ID
	 */
	public $ID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Quantity
	 * @Definition The quantity in a Delivery.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTerm Quantity
	 * @RepresentationTerm Quantity
	 * @DataType Quantity. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName Quantity
	 * @var Quantity
	 */
	public $Quantity;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Minimum_ Quantity. Quantity
	 * @Definition The minimum quantity in a Delivery.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Minimum
	 * @PropertyTerm Quantity
	 * @RepresentationTerm Quantity
	 * @DataType Quantity. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName MinimumQuantity
	 * @var MinimumQuantity
	 */
	public $MinimumQuantity;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Maximum_ Quantity. Quantity
	 * @Definition The maximum quantity in a Delivery.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Maximum
	 * @PropertyTerm Quantity
	 * @RepresentationTerm Quantity
	 * @DataType Quantity. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName MaximumQuantity
	 * @var MaximumQuantity
	 */
	public $MaximumQuantity;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Actual_ Delivery Date. Date
	 * @Definition The actual Delivery date.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Actual
	 * @PropertyTerm Delivery Date
	 * @RepresentationTerm Date
	 * @DataType Date. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ActualDeliveryDate
	 * @var ActualDeliveryDate
	 */
	public $ActualDeliveryDate;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Actual_ Delivery Time. Time
	 * @Definition The actual Delivery time.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Actual
	 * @PropertyTerm Delivery Time
	 * @RepresentationTerm Time
	 * @DataType Time. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ActualDeliveryTime
	 * @var ActualDeliveryTime
	 */
	public $ActualDeliveryTime;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Latest_ Delivery Date. Date
	 * @Definition The latest delivery date allowed by the buyer.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Latest
	 * @PropertyTerm Delivery Date
	 * @RepresentationTerm Date
	 * @DataType Date. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName LatestDeliveryDate
	 * @var LatestDeliveryDate
	 */
	public $LatestDeliveryDate;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Latest_ Delivery Time. Time
	 * @Definition The latest delivery time allowed by the buyer.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Latest
	 * @PropertyTerm Delivery Time
	 * @RepresentationTerm Time
	 * @DataType Time. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName LatestDeliveryTime
	 * @var LatestDeliveryTime
	 */
	public $LatestDeliveryTime;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Delivery. Tracking Identifier. Identifier
	 * @Definition The delivery Tracking ID (for transport tracking).
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTerm Tracking Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName TrackingID
	 * @var TrackingID
	 */
	public $TrackingID;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Delivery. Delivery_ Address. Address
	 * @Definition An association to Delivery Address.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Delivery
	 * @PropertyTerm Address
	 * @AssociatedObjectClass Address
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName DeliveryAddress
	 * @var DeliveryAddress
	 */
	public $DeliveryAddress;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Delivery. Delivery_ Location. Location
	 * @Definition An association to Location.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Delivery
	 * @PropertyTerm Location
	 * @AssociatedObjectClass Location
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName DeliveryLocation
	 * @var DeliveryLocation
	 */
	public $DeliveryLocation;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Delivery. Requested Delivery_ Period. Period
	 * @Definition The requested Period for Delivery.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Requested Delivery
	 * @PropertyTerm Period
	 * @AssociatedObjectClass Period
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName RequestedDeliveryPeriod
	 * @var RequestedDeliveryPeriod
	 */
	public $RequestedDeliveryPeriod;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Delivery. Promised Delivery_ Period. Period
	 * @Definition The promised Period for Delivery.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Promised Delivery
	 * @PropertyTerm Period
	 * @AssociatedObjectClass Period
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName PromisedDeliveryPeriod
	 * @var PromisedDeliveryPeriod
	 */
	public $PromisedDeliveryPeriod;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Delivery. Estimated Delivery_ Period. Period
	 * @Definition The estimated Period for Delivery.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Estimated Delivery
	 * @PropertyTerm Period
	 * @AssociatedObjectClass Period
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName EstimatedDeliveryPeriod
	 * @var EstimatedDeliveryPeriod
	 */
	public $EstimatedDeliveryPeriod;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Delivery. Delivery_ Party. Party
	 * @Definition The party to whom the goods/services are delivered.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTermQualifier Delivery
	 * @PropertyTerm Party
	 * @AssociatedObjectClass Party
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName DeliveryParty
	 * @var DeliveryParty
	 */
	public $DeliveryParty;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Delivery. Despatch
	 * @Definition An association to the Despatch.
	 * @Cardinality 0..1
	 * @ObjectClass Delivery
	 * @PropertyTerm Despatch
	 * @AssociatedObjectClass Despatch
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName Despatch
	 * @var Despatch
	 */
	public $Despatch;


} // end class DeliveryType