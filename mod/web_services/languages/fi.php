<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can handle those during `tx push -s`
 */

return array(
	'APIException:ApiResultUnknown' => "API Result is of an unknown type, this should never happen.",
	'APIException:MissingParameterInMethod' => "Puuttuva parametri %s metodissa %s",
	'APIException:ParameterNotArray' => "%s ei ole array.",
	'APIException:UnrecognisedTypeCast' => "Unrecognised type in cast %s for variable '%s' in method '%s'",
	'APIException:InvalidParameter' => "Invalid parameter found for '%s' in method '%s'.",
	'APIException:FunctionParseError' => "%s(%s) has a parsing error.",
	'APIException:FunctionNoReturn' => "%s(%s) returned no value.",
	'APIException:APIAuthenticationFailed' => "API-autentikointi epäonnistui",
	'APIException:UserAuthenticationFailed' => "Käyttäjän autentikointi epäonnistui",
	'APIException:MethodCallNotImplemented' => "Methodikutsua '%s' ei ole olemassa.",
	'APIException:FunctionDoesNotExist' => "Methodin '%s' funktiota ei voida kutsua",
	'APIException:AlgorithmNotSupported' => "Algoritmi '%s' ei ole tuettu tai se on pois käytöstä.",
	'APIException:NotGetOrPost' => "Request method täytyy olla GET tai POST",
	'APIException:MissingAPIKey' => "Puuttuva API-avain",
	'APIException:BadAPIKey' => "Virheellinen API-avain",
	'APIException:MissingHmac' => "Puuttuva X-Elgg-hmac header",
	'APIException:MissingHmacAlgo' => "Puuttuva X-Elgg-hmac-algo header",
	'APIException:MissingTime' => "Puuttuva X-Elgg-time header",
	'APIException:MissingNonce' => "Puuttuva X-Elgg-nonce header",
	'APIException:TemporalDrift' => "X-Elgg-time on liian kaukana menneisyydessä tai tulevaisuudessa. Epoch fail.",
	'APIException:NoQueryString' => "No data on the query string",
	'APIException:MissingPOSTHash' => "Puuttuva X-Elgg-posthash header",
	'APIException:MissingPOSTAlgo' => "Puuttuva X-Elgg-posthash_algo header",
	'APIException:MissingContentType' => "Puuttuva content type tai post data",
	'SecurityException:APIAccessDenied' => "Ylläpitäjä on ottanut rajapinnan pois käytöstä.",
	'SecurityException:NoAuthMethods' => "API-kutsun kanssa yhteensopivaa autentikointimenetelmää ei löytynyt.",
	'SecurityException:authenticationfailed' => "Käyttäjän autentikointi epäonnistui",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Method or function not set in call in expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Parameters array structure is incorrect for call to expose method '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Unrecognised http method %s for api method '%s'",
	'SecurityException:AuthTokenExpired' => "Authentication token puuttuu, on virheellinen tai on vanhentunut.",
	'SecurityException:InvalidPostHash' => "POST data hash on virheellinen - Odotettiin arvoa %s, mutta saatiin arvo %s.",
	'SecurityException:DupePacket' => "Packet signature already seen.",
	'SecurityException:InvalidAPIKey' => "Virheellinen tai puuttuva API-avain.",
	'NotImplementedException:CallMethodNotImplemented' => "Call method '%s' is currently not supported.",
	'CallException:InvalidCallMethod' => "%s must be called using '%s'",

	'system.api.list' => "Listaa kaikki käytettävissä olevat API-kutsut.",
	'auth.gettoken' => "This API call lets a user obtain a user authentication token which can be used for authenticating future API calls. Pass it as the parameter auth_token",
	
	'admin:configure_utilities:webservices' => "Webservices",
	'admin:configure_utilities:ws_list' => "List API methods",
	'admin:configure_utilities:ws_tokens' => "Manage API tokens",
	'webservices:menu:entity:regenerate' => "Regenerate API keys",
	
	'add:object:api_key' => "Create a new API token",
	'edit:object:api_key' => "Edit API token: %s",
	'entity:delete:object:api_key:success' => "The API token %s was deleted",
	
	'webservices:requires_api_authentication' => "Requires API authentication",
	'webservices:requires_user_authentication' => "Requires user authentication",
	'webservices:function' => "Internal function:",
	'webservices:parameters' => "Webservice parameters:",
	'webservices:parameters:required' => "required",
	'webservices:parameters:optional' => "optional",
	
	'webservices:api_key:public' => "Public key:",
	'webservices:api_key:secret' => "Secret key:",
	'webservices:api_key:secret:show' => "Show secret key",
	
	'webservices:action:api_key:edit:success' => "API token saved successfully",
	'webservices:action:api_key:regenerate:success' => "The API keys have been regenerated",
);
