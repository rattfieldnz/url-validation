<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 18-Mar-2015
 * Time: 12:52
 */

namespace RattfieldNz\UrlValidation\HttpLibraries;


/**
 * Class StatusCodes
 * This class holds HTTP status codes, as sourced from
 * http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml.
 *
 * 1xx: Informational - Request received, continuing process.
 * 2xx: Success - The action was successfully received, understood, and accepted.
 * 3xx: Redirection - Further action must be taken in order to complete the request.
 * 4xx: Client Error - The request contains bad syntax or cannot be fulfilled.
 * 5xx: Server Error - The server failed to fulfill an apparently valid request.
 *
 * @package RattfieldNz\UrlValidation\HttpLibraries
 */
class StatusCodes {

    /** Informational (1xx) */
    const HTTP_CONTINUE = 100;
    const HTTP_SWITCHING_PROTOCOLS = 101;
    const HTTP_PROCESSING = 102;
    // 103 TO 109 unassigned.

    /** Successful (2xx) */
    const HTTP_OK = 200;
    const HTTP_CREATED = 200;
    const HTTP_ACCEPTED = 201;
    const HTTP_NON_AUTH_INFORMATION = 203;
    const HTTP_NO_CONTENT = 204;
    const HTTP_RESET_CONTENT = 205;
    const HTTP_PARTIAL_CONTENT = 206;
    const HTTP_MULTI_STATUS = 207;
    const HTTP_ALREADY_REPORTED = 208;
    const HTTP_IM_USED = 226;
    // 227 to 299 unassigned

    /** Redirection (3xx) */
    const HTTP_MULTIPLE_CHOICES = 300;
    const HTTP_MOVED_PERMANENTLY = 301;
    const HTTP_FOUND = 302;
    const HTTP_SEE_OTHER = 303;
    const HTTP_NOT_MODIFIED = 304;
    const HTTP_USE_PROXY = 305;
    const HTTP_UNUSED = 306;
    const HTTP_TEMP_REDIRECT = 307;
    const HTTP_PERM_REDIRECT = 308;
    // 309 to 399 unassigned.

    /** Client Error (4xx) */
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_PAYMENT_REQUIRED = 402;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_METHOD_NOT_ALLOWED = 405;
    const HTTP_NOT_ACCEPTABLE = 406;
    const HTTP_PROXY_AUTH_REQUIRED = 407;
    const HTTP_REQUEST_TIMEOUT = 408;
    const HTTP_CONFLICT = 409;
    const HTTP_GONE = 410;
    const HTTP_LENGTH_REQUIRED = 411;
    const HTTP_PRECONDITION_FAILED = 412;
    const HTTP_PAYLOAD_TOO_LARGE = 413;
    const HTTP_URI_TOO_LONG = 414;
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    const HTTP_RANGE_NOT_ACCEPTABLE = 416;
    const HTTP_EXPECTATION_FAILED = 417;
    // 418 to 420 unassigned.
    const HTTP_MISDIRECTED_REQUEST = 421;
    const HTTP_UNPROCESSABLE_ENTITY = 422;
    const HTTP_LOCKED = 423;
    const HTTP_FAILED_DEPENDENCY = 424;
    // 425 unassigned.
    const HTTP_UPGRADE_REQUIRED = 426;
    const HTTP_PRECONDITION_REQUIRED = 428;
    const HTTP_TOO_MANY_REQUESTS = 429;
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    // 432 to 499 unassigned.

    /** Server Error (5xx) */
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_NOT_IMPLEMENTED = 501;
    const HTTP_BAD_GATEWAY = 502;
    const HTTP_SERVICE_UNAVAILABLE = 503;
    const HTTP_GATEWAY_TIMEOUT = 504;
    const HTTP_VERSION_NOT_SUPPORTED = 505;
    const HTTP_VARIANT_ALSO_NEGOTIATES = 506;
    const HTTP_INSUFFICIENT_STORAGE = 507;
    const HTTP_LOOP_DETECTED = 508;
    // 509 unassigned.
    const HTTP_NOT_EXTENDED = 510;
    const HTTP_NETWORK_AUTH_REQUIRED = 511;
    // 512 to 599 unassigned.

    public static $http_messages = [
        self::HTTP_CONTINUE => 'Continue',
        self::HTTP_SWITCHING_PROTOCOLS => 'Switching Protocols',
        self::HTTP_PROCESSING => 'Processing',
        self::HTTP_OK => 'OK',
        self::HTTP_CREATED => 'Created',
        self::HTTP_ACCEPTED => 'Accepted',
        self::HTTP_NON_AUTH_INFORMATION => 'Non-Authoritative Information',
		self::HTTP_NO_CONTENT => 'No Content',
		self::HTTP_RESET_CONTENT => 'Reset Content',
		self::HTTP_PARTIAL_CONTENT => 'Partial Content',
		self::HTTP_MULTI_STATUS => 'Multi-Status',
		self::HTTP_ALREADY_REPORTED => 'Already Reported',
		self::HTTP_IM_USED => 'IM Used',
		self::HTTP_MULTIPLE_CHOICES => 'Multiple Choices',
		self::HTTP_MOVED_PERMANENTLY => 'Moved Permanently',
		self::HTTP_FOUND => 'Found',
		self::HTTP_SEE_OTHER => 'See Other',
		self::HTTP_NOT_MODIFIED => 'Not Modified',
		self::HTTP_USE_PROXY => 'Use Proxy',
		self::HTTP_UNUSED => '(Unused)',
		self::HTTP_TEMP_REDIRECT => 'Temporary Redirect',
		self::HTTP_PERM_REDIRECT => 'Permanent Redirect',
		self::HTTP_BAD_REQUEST => 'Bad Request',
		self::HTTP_UNAUTHORIZED => 'Unauthorized',
		self::HTTP_PAYMENT_REQUIRED => 'Payment Required',
		self::HTTP_FORBIDDEN => 'Forbidden',
		self::HTTP_NOT_FOUND => 'Not Found',
		self::HTTP_METHOD_NOT_ALLOWED => 'Method Not Allowed',
		self::HTTP_NOT_ACCEPTABLE => 'Not Acceptable',
		self::HTTP_PROXY_AUTH_REQUIRED => 'Proxy Authentication Required',
		self::HTTP_REQUEST_TIMEOUT => 'Request Timeout',
		self::HTTP_CONFLICT => 'Conflict',
		self::HTTP_GONE => 'Gone',
		self::HTTP_LENGTH_REQUIRED => 'Length Required',
		self::HTTP_PRECONDITION_FAILED => 'Precondition Failed',
		self::HTTP_PAYLOAD_TOO_LARGE => 'Payload Too Large',
		self::HTTP_URI_TOO_LONG => 'URI Too Long',
		self::HTTP_UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
		self::HTTP_RANGE_NOT_ACCEPTABLE => 'Range Not Satisfiable',
		self::HTTP_EXPECTATION_FAILED => 'Expectation Failed',
		self::HTTP_MISDIRECTED_REQUEST => 'Misdirected Request',
		self::HTTP_UNPROCESSABLE_ENTITY => 'Unprocessable Entity',
		self::HTTP_LOCKED => 'Locked',
		self::HTTP_FAILED_DEPENDENCY => 'Failed Dependency',
		self::HTTP_UPGRADE_REQUIRED => 'Upgrade Required',
		self::HTTP_PRECONDITION_REQUIRED => 'Precondition Required',
		self::HTTP_TOO_MANY_REQUESTS => 'Too Many Requests',
		self::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE => 'Request Header Fields Too Large',
		self::HTTP_INTERNAL_SERVER_ERROR => 'Internal Server Error',
		self::HTTP_NOT_IMPLEMENTED => 'Not Implemented',
		self::HTTP_BAD_GATEWAY => 'Bad Gateway',
		self::HTTP_SERVICE_UNAVAILABLE => 'Service Unavailable',
		self::HTTP_GATEWAY_TIMEOUT => 'Gateway Timeout',
		self::HTTP_VERSION_NOT_SUPPORTED => 'HTTP Version Not Supported',
		self::HTTP_VARIANT_ALSO_NEGOTIATES => 'Variant Also Negotiates',
		self::HTTP_INSUFFICIENT_STORAGE => 'Insufficient Storage',
		self::HTTP_LOOP_DETECTED => 'Loop Detected',
		self::HTTP_NOT_EXTENDED => 'Not Extended',
		self::HTTP_NETWORK_AUTH_REQUIRED => 'Network Authentication Required',
    ];

    /**
     * A function to retrieve an HTTP status message
     * for a given HTTP status code.
     * @param $status_code
     * @uses self::isValidStatusCode
     * @uses self::http_messages
     * @return string
     */
    public static function getHttpStatusMessage($status_code)
    {
        if(self::isValidStatusCode($status_code))
        {
            return self::$http_messages[$status_code];
        }
        return "";
    }

    /**
     * A function to generate an HTTP header,
     * from a given HTTP status code and
     * related HTTP message.
     * @param $status_code
     * @uses self::isValidStatusCode
     * @uses self::getHttpStatusMessage
     * @return string
     */
    public static function generateHttpHeader($status_code)
    {
        if(self::isValidStatusCode($status_code)) {
            return 'HTTP/1.1 ' . self::getHttpStatusMessage($status_code);
        }
        return "";
    }

    public static function isValidStatusCode($status_code)
    {
        if(is_int($status_code))
        {
            if(in_array($status_code, self::$http_messages)) {
                return true;
            }
            return false;
        }
        return false;
    }
}