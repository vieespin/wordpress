<?php
namespace MailPoetVendor\Twig\Node\Expression\Binary;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
class RangeBinary extends AbstractBinary
{
 public function compile(Compiler $compiler)
 {
 $compiler->raw('range(')->subcompile($this->getNode('left'))->raw(', ')->subcompile($this->getNode('right'))->raw(')');
 }
 public function operator(Compiler $compiler)
 {
 return $compiler->raw('..');
 }
}
\class_alias('MailPoetVendor\\Twig\\Node\\Expression\\Binary\\RangeBinary', 'MailPoetVendor\\Twig_Node_Expression_Binary_Range');
