<?php

return [
    'app_id' => env('SKAUTIS_APP_ID', ''),
    /*
     * The SkautIS host is fully determined by this flag, which is why there is
     * no base_url key: Skautis\Config::getBaseUrl() returns URL_TEST
     * ("https://test-is.skaut.cz/") when true and URL_PRODUCTION
     * ("https://is.skaut.cz/") when false, and Skautis\Wsdl\WsdlManager appends
     * "JunakWebservice/{operation}.asmx?WSDL" to whichever one it picked.
     */
    'test_mode' => (bool) env('SKAUTIS_TEST_MODE', false),
    /*
     * Which executor answers every SkautIS operation. "soap" calls the WSDL host
     * selected above; "fake" replays the JSON fixtures under fixture_path and
     * never touches the network.
     */
    'driver' => env('SKAUTIS_DRIVER', 'soap'),
    /*
     * Fixture root for the "fake" driver. Null falls back to the package's own
     * tests/fixtures directory.
     */
    'fixture_path' => env('SKAUTIS_FIXTURE_PATH', null),
];
