<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName ContractType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Contract. Details
 * @xmlDefinition Information about a Contract.
 * @xmlObjectClass Contract
 */
class ContractType
	{

	
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Contract. Identifier
	 * @Definition Identifies the Contract.
	 * @Cardinality 0..1
	 * @ObjectClass Contract
	 * @PropertyTerm Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @Examples "CC23"
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
	 * @DictionaryEntryName Contract. Issue Date. Date
	 * @Definition The date on which the Contract was issued.
	 * @Cardinality 0..1
	 * @ObjectClass Contract
	 * @PropertyTerm Issue Date
	 * @RepresentationTerm Date
	 * @DataType Date. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName IssueDate
	 * @var IssueDate
	 */
	public $IssueDate;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Contract. Issue Time. Time
	 * @Definition The time at which the Contract was issued.
	 * @Cardinality 0..1
	 * @ObjectClass Contract
	 * @PropertyTerm Issue Time
	 * @RepresentationTerm Time
	 * @DataType Time. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName IssueTime
	 * @var IssueTime
	 */
	public $IssueTime;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Contract. Contract Type Code. Code
	 * @Definition The type of Contract, expressed as a code.
	 * @Cardinality 0..1
	 * @ObjectClass Contract
	 * @PropertyTerm Contract Type Code
	 * @RepresentationTerm Code
	 * @DataType Code. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ContractTypeCode
	 * @var ContractTypeCode
	 */
	public $ContractTypeCode;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Contract. Contract Type. Text
	 * @Definition The type of Contract, expressed as text.
	 * @Cardinality 0..1
	 * @ObjectClass Contract
	 * @PropertyTerm Contract Type
	 * @RepresentationTerm Text
	 * @DataType Text. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ContractType
	 * @var ContractType
	 */
	public $ContractType;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Contract. Validity_ Period. Period
	 * @Definition An association to Validity Period.
	 * @Cardinality 0..1
	 * @ObjectClass Contract
	 * @PropertyTermQualifier Validity
	 * @PropertyTerm Period
	 * @AssociatedObjectClass Period
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ValidityPeriod
	 * @var ValidityPeriod
	 */
	public $ValidityPeriod;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Contract. Contract_ Document Reference. Document Reference
	 * @Definition An associative reference to Contract Document.
	 * @Cardinality 0..n
	 * @ObjectClass Contract
	 * @PropertyTermQualifier Contract
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs unbounded
	 * @xmlName ContractDocumentReference
	 * @var ContractDocumentReference
	 */
	public $ContractDocumentReference;


} // end class ContractType