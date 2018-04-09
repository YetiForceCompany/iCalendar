<?php

class IcalendarPropertyTrigger extends IcalendarProperty
{
	public $name = 'TRIGGER';
	public $val_type = RFC2445_TYPE_TEXT;

	public function construct()
	{
		$this->valid_parameters = [
			RFC2445_XNAME => RFC2445_OPTIONAL,
		];
	}
}
