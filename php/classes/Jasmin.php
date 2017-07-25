<?php
namespace Edu\Cnm\DataDesign;

require_once("autoload.php");

/**
 *Small Cross Section of profile information
 *
 *This information can be considered a small example of what profile stores when information are sent and
 * and recieved using this information. This can be easily be extended to emulate
 * more features in a profile.
 * @author Michelle Allen <mbojorquez4@cnm.edu>
 **/
class profile {
	/**
	 * id for this profile; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 * id for the item that belongs to this profile; this is a foreign key
	 * @var int $itemId
	 **/
	private $itemId;
	/**
	 * content of this profileActvationToken
	 * @var string $profileActvationToken
	 **/
	private $profileActivationToken;
	/**
	 * content of itemProfileId
	 * @var string $itemProfileId
	 **/
	private $itemProfileId;

	/**
	 * accessor method for profileId
	 *
	 * @return int value of profileId
	 **/
	public function getprofileId() {
			return($this->profileId);
		}

	/**
	 * mutator method for itemId
	 *
	 * @param int/null $newitemId new value of Id
	 * @throws UnexpectedValueException if $newitemId is not an integer
	 **/
	public function setprofileId($newitemId)
		// verify the item id is valid
		$newItemId = filter_var($newItemId, FILTER_VALIDATE_INT);
		if($newItemId === false) {
			throw(new UnexpectedValueException("item id is not a valid integer"));
		}

// convert and store the item id
$this->ItemId = intval($newItemId);
}

/**
 * accessor method for seller id
 *
 * @return int value of seller id
 **/
public function getSellerId() {
	return($this->SellerId);
}

/**
 * mutator method for seller id
 *
 * @param int $newSellerId new value of item id
 * @throws UnexpectedValueException if $newSellerId is not an integer
 **/
public function setSellerId($newSellerId) {
	// verify the seller id is valid
	$newSellerId = filter_var($newSellerId, FILTER_VALIDATE_INT);
	if($newSellerId === false) {
		throw(new UnexpectedValueException("seller id is not a valid integer"));
	}

	// convert and store the item id
	$this->sellerId = intval($newsellerId);
}

/**
 * accessor method for item description
 *
 * @return string value of item description

 **/
public function getItemDescription() {
	return($this->itemDescription);
}

/**
 * mutator method for item description
 *
 * @param string $newItemDescription new value of item description
 * @throws UnexpectedValueException if $newItemDescrption is not valid
 **/
public function setItemDescription($newItemDescription) {
	// verify the item description is valid
	$newItemDescription = filter_var($newItemDescription, FILTER_SANITIZE_STRING);
	if($newItemDescription === false) {
		throw(new UnexpectedValueException("item description is not a valid string"));
	}

	// store the item description
	$this->itemDescrption = $newItemDescription;
}

/**
 * accessor method for item price
 *
 * @return string value of item price
 **/
public function getItemPrice() {
	return($this->ItemPrice);
}

/**
 * mutator method for item price
 *
 * @param string $newItemPrice new value of item price
 * @throws UnexpectedValueException if $item price is not valid
 **/
public function setItemPrice($newItemPrice) {
	// verify the item price is valid
	$newItemPrice = filter_var($newItemPrice, FILTER_SANITIZE_STRING);
	if($itemPrice === false) {
		throw(new UnexpectedValueException("item price is not a valid string"));
	}

	// store the item price
	$this->itemprice = $newitemPrice;
}
}

