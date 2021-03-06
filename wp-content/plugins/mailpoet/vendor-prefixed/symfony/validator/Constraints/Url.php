<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
use MailPoetVendor\Symfony\Component\Validator\Exception\InvalidArgumentException;
class Url extends Constraint
{
 public const CHECK_DNS_TYPE_ANY = 'ANY';
 public const CHECK_DNS_TYPE_NONE = \false;
 public const CHECK_DNS_TYPE_A = 'A';
 public const CHECK_DNS_TYPE_A6 = 'A6';
 public const CHECK_DNS_TYPE_AAAA = 'AAAA';
 public const CHECK_DNS_TYPE_CNAME = 'CNAME';
 public const CHECK_DNS_TYPE_MX = 'MX';
 public const CHECK_DNS_TYPE_NAPTR = 'NAPTR';
 public const CHECK_DNS_TYPE_NS = 'NS';
 public const CHECK_DNS_TYPE_PTR = 'PTR';
 public const CHECK_DNS_TYPE_SOA = 'SOA';
 public const CHECK_DNS_TYPE_SRV = 'SRV';
 public const CHECK_DNS_TYPE_TXT = 'TXT';
 public const INVALID_URL_ERROR = '57c2f299-1154-4870-89bb-ef3b1f5ad229';
 protected static $errorNames = [self::INVALID_URL_ERROR => 'INVALID_URL_ERROR'];
 public $message = 'This value is not a valid URL.';
 public $dnsMessage = 'The host could not be resolved.';
 public $protocols = ['http', 'https'];
 public $checkDNS = self::CHECK_DNS_TYPE_NONE;
 public $relativeProtocol = \false;
 public $normalizer;
 public function __construct($options = null)
 {
 if (\is_array($options)) {
 if (\array_key_exists('checkDNS', $options)) {
 @\trigger_error(\sprintf('The "checkDNS" option in "%s" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.', self::class), \E_USER_DEPRECATED);
 }
 if (\array_key_exists('dnsMessage', $options)) {
 @\trigger_error(\sprintf('The "dnsMessage" option in "%s" is deprecated since Symfony 4.1.', self::class), \E_USER_DEPRECATED);
 }
 }
 parent::__construct($options);
 if (null !== $this->normalizer && !\is_callable($this->normalizer)) {
 throw new InvalidArgumentException(\sprintf('The "normalizer" option must be a valid callable ("%s" given).', \is_object($this->normalizer) ? \get_class($this->normalizer) : \gettype($this->normalizer)));
 }
 }
}
