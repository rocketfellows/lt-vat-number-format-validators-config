<?php

namespace rocketfellows\LTVatNumberFormatValidatorsConfig;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface;
use rocketfellows\LTVatFormatValidator\LTVatFormatValidator;
use rocketfellows\SpecificCountryVatNumberFormatValidatorsConfig\SpecificCountryVatNumberFormatValidatorsConfig;

class LTVatNumberFormatValidatorsConfig extends SpecificCountryVatNumberFormatValidatorsConfig
{
    public function getCountry(): Country
    {
        return ISO3166::LT();
    }

    protected function getDefaultValidator(): CountryVatFormatValidatorInterface
    {
        return new LTVatFormatValidator();
    }
}
