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
class Profile {
	/**
	 * id for this Profile; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 * activation token for the User who owns this Profile; this is a foreign key
	 * @var string $profileActivationToken
	 **/
	private $profileActivationToken;
	/**
	 * handle of profile
	 * @var string $profileAtHandle
	 **/
	private $profileAtHandle;
	/**
	 * profileEmail
	 * @var string $profileEmail
	 **/
	private $profileEmail;
	/**
	 * hash for profile
	 * @var string $profilehash
	 **/
	private $profilehash;
	/**
	 * Phone number for profile
	 * @var string $profilephone
	 **/
	private $profilephone;
	/**
	 * salt for profile
	 * @var string $profilesalt
	 **/
	private $profilesalt;
	/**
	 * accessor method for profileId
	 *
	 * @return int value of profileId
	 **/
	public function getProfileId(?int $newprofileID) {
		return ($this->profileId);
	}
