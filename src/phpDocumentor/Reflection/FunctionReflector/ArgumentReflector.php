<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @author    Mike van Riel <mike.vanriel@naenius.com>
 * @copyright 2010-2012 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\FunctionReflector;
use phpDocumentor\Reflection\BaseReflector;

class ArgumentReflector extends BaseReflector
{
    /** @var \PHPParser_Node_Param */
    protected $node;

    /**
     * Returns the default value or null is none is set.
     *
     * @return string|null
     */
    public function getDefault()
    {
        $result = null;
        if ($this->node->default) {
            $result = $this->getRepresentationOfValue($this->node->default);
        }
        return $result;
    }

    /**
     * Returns the typehint, or null if none is set.
     *
     * @return string|null
     */
    public function getType()
    {
        return (string)$this->node->type;
    }

    public function getName()
    {
        return '$'.parent::getName();
    }
}
