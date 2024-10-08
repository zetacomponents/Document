<?php
/**
 * File containing the ezcDocumentRstSectionNode struct
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Document
 * @version //autogen//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @access private
 */

/**
 * The document section AST node
 *
 * @package Document
 * @version //autogen//
 * @access private
 */
class ezcDocumentRstSectionNode extends ezcDocumentRstNode
{
    /**
     * Section title
     *
     * @var string
     */
    public $title;

    /**
     * Depth of section nesting
     *
     * @var int
     */
    public $depth;

    /**
     * Title reference name
     *
     * @var string
     */
    public $reference;

    /**
     * Construct RST document node
     *
     * @param ezcDocumentRstToken $token
     * @param ezcDocumentRstTitleNode $title
     * @param int $depth
     * @return void
     */
    public function __construct( ezcDocumentRstToken $token, ?ezcDocumentRstTitleNode $title = null, $depth = 0 )
    {
        parent::__construct( $token, self::SECTION );

        $this->title = $title;
        $this->depth = $depth;
    }

    /**
     * Return node content, if available somehow
     *
     * @return string
     */
    protected function content()
    {
        return trim( $this->token->content );
    }

    /**
     * Set state after var_export
     *
     * @param array $properties
     * @return void
     * @ignore
     */
    public static function __set_state( $properties )
    {
        $node = new ezcDocumentRstSectionNode(
            $properties['token'],
            $properties['title'],
            $properties['depth']
        );

        $node->nodes = $properties['nodes'];

        return $node;
    }
}

?>
