<?php

class U2FTest extends \PHPUnit_Framework_TestCase {

  private $u2f;

  public function setUp() {
    $this->u2f = new \u2flib_server\U2F("http://demo.yubico.com");
  }

  public function testGetRegisterData() {
    print $this->u2f->getRegisterData();
  }

  public function testDoRegister() {
    print $this->u2f->doRegister('{"version":"U2F_V2","challenge":"XxTmpa3AWwEH4p-ou9XhjFNKUDqClMt7yqLAQ4FiVVY","appId":"http://demo.yubico.com"}', '{ "registrationData": "BQQiOmv2pl08VYwy5DmjydLZes-cUQcs2IEbOZVTn2LGW8IgmILfhR_5RWQ2Wcln5xZ7MD_3yPOZlw-ihfe6t15OQKjAd4dE4j0vDRk5OzNP84HEO0QkfSgaaO_Pmp7A1MLfq5VzpaKQaAAbu1Zm-vEZXoAPf2Pq7tCfYF98K2yQxZIwggLiMIHLAgEBMA0GCSqGSIb3DQEBCwUAMB0xGzAZBgNVBAMTEll1YmljbyBVMkYgVGVzdCBDQTAeFw0xNDA1MTUxMjU4NTRaFw0xNDA2MTQxMjU4NTRaMB0xGzAZBgNVBAMTEll1YmljbyBVMkYgVGVzdCBFRTBZMBMGByqGSM49AgEGCCqGSM49AwEHA0IABNsK2_Uhx1zOY9ym4eglBg2U5idUGU-dJK8mGr6tmUQflaNxkQo6IOc-kV4T6L44BXrVeqN-dpCPr-KKlLYw650wDQYJKoZIhvcNAQELBQADggIBAJVAa1Bhfa2Eo7TriA_jMA8togoA2SUE7nL6Z99YUQ8LRwKcPkEpSpOsKYWJLaR6gTIoV3EB76hCiBaWN5HV3-CPyTyNsM2JcILsedPGeHMpMuWrbL1Wn9VFkc7B3Y1k3OmcH1480q9RpYIYr-A35zKedgV3AnvmJKAxVhv9GcVx0_CewHMFTryFuFOe78W8nFajutknarupekDXR4tVcmvj_ihJcST0j_Qggeo4_3wKT98CgjmBgjvKCd3Kqg8n9aSDVWyaOZsVOhZj3Fv5rFu895--D4qiPDETozJIyliH-HugoQpqYJaTX10mnmMdCa6aQeW9CEf-5QmbIP0S4uZAf7pKYTNmDQ5z27DVopqaFw00MIVqQkae_zSPX4dsNeeoTTXrwUGqitLaGap5ol81LKD9JdP3nSUYLfq0vLsHNDyNgb306TfbOenRRVsgQS8tJyLcknSKktWD_Qn7E5vjOXprXPrmdp7g5OPvrbz9QkWa1JTRfo2n2AXV02LPFc-UfR9bWCBEIJBxvmbpmqt0MnBTHWnth2b0CU_KJTDCY3kAPLGbOT8A4KiI73pRW-e9SWTaQXskw3Ei_dHRILM_l9OXsqoYHJ4Dd3tbfvmjoNYggSw4j50l3unI9d1qR5xlBFpW5sLr8gKX4bnY4SR2nyNiOQNLyPc0B0nW502aMEYCIQD6P0KVXpbQGzHRc_bhXKBLlVh53ecBPfaxSbGrfkG6OAIhAIt1XWxeClPc8OJTqgMeA8yVbZgsqfnQ6p2ZHoAmruAx", "clientData": "eyAiY2hhbGxlbmdlIjogIlh4VG1wYTNBV3dFSDRwLW91OVhoakZOS1VEcUNsTXQ3eXFMQVE0RmlWVlkiLCAib3JpZ2luIjogImh0dHA6XC9cL2RlbW8ueXViaWNvLmNvbSIsICJ0eXAiOiAibmF2aWdhdG9yLmlkLmZpbmlzaEVucm9sbG1lbnQiIH0=" }');
  }

  public function testGetAuthenticateData() {
    print_r($this->u2f->getAuthenticateData(['{"keyHandle":"a8c0778744e23d2f0d19393b334ff381c43b44247d281a68efcf9a9ec0d4c2dfab9573a5a29068001bbb5666faf1195e800f7f63eaeed09f605f7c2b6c90c592","publicKey":"04223a6bf6a65d3c558c32e439a3c9d2d97acf9c51072cd8811b3995539f62c65bc2209882df851ff945643659c967e7167b303ff7c8f399970fa285f7bab75e4e","certificate":"308202e23081cb020101300d06092a864886f70d01010b0500301d311b30190603550403131259756269636f205532462054657374204341301e170d3134303531353132353835345a170d3134303631343132353835345a301d311b30190603550403131259756269636f2055324620546573742045453059301306072a8648ce3d020106082a8648ce3d03010703420004db0adbf521c75cce63dca6e1e825060d94e62754194f9d24af261abead99441f95a371910a3a20e73e915e13e8be38057ad57aa37e76908fafe28a94b630eb9d300d06092a864886f70d01010b0500038202010095406b50617dad84a3b4eb880fe3300f2da20a00d92504ee72fa67df58510f0b47029c3e41294a93ac2985892da47a813228577101efa8428816963791d5dfe08fc93c8db0cd897082ec79d3c678732932e5ab6cbd569fd54591cec1dd8d64dce99c1f5e3cd2af51a58218afe037e7329e760577027be624a031561bfd19c571d3f09ec073054ebc85b8539eefc5bc9c56a3bad9276abba97a40d7478b55726be3fe28497124f48ff42081ea38ff7c0a4fdf02823981823bca09ddcaaa0f27f5a483556c9a399b153a1663dc5bf9ac5bbcf79fbe0f8aa23c3113a33248ca5887f87ba0a10a6a6096935f5d269e631d09ae9a41e5bd0847fee5099b20fd12e2e6407fba4a6133660d0e73dbb0d5a29a9a170d3430856a42469eff348f5f876c35e7a84d35ebc141aa8ad2da19aa79a25f352ca0fd25d3f79d25182dfab4bcbb07343c8d81bdf4e937db39e9d1455b20412f2d2722dc92748a92d583fd09fb139be3397a6b5cfae6769ee0e4e3efadbcfd42459ad494d17e8da7d805d5d362cf15cf947d1f5b582044209071be66e99aab743270531d69ed8766f4094fca2530c26379003cb19b393f00e0a888ef7a515be7bd4964da417b24c37122fdd1d120b33f97d397b2aa181c9e03777b5b7ef9a3a0d620812c388f9d25dee9c8f5dd6a479c65045a56e6c2ebf20297e1b9d8e124769f236239034bc8f7340749d6e74d9a"}']));
  }
}

?>
