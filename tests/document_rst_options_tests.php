<?php
/**
 * ezcDocTestConvertXhtmlDocbook
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
 * @subpackage Tests
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

require_once dirname( __FILE__ ) . '/options_test_case.php';

/**
 * Test suite for class.
 * 
 * @package Document
 * @subpackage Tests
 */
class ezcDocumentRstOptionsTests extends ezcDocumentOptionsTestCase
{
    public static function suite()
    {
        return new \PHPUnit\Framework\TestSuite( __CLASS__ );
    }

    protected function getOptionsClassName()
    {
        return 'ezcDocumentRstOptions';
    }

    public static function provideDefaultValues()
    {
        return array(
            array(
                'docbookVisitor', 'ezcDocumentRstDocbookVisitor',
            ),
            array(
                'xhtmlVisitor', 'ezcDocumentRstXhtmlVisitor',
            ),
            array(
                'xhtmlVisitorOptions', new ezcDocumentHtmlConverterOptions(),
            ),
        );
    }

    public static function provideValidData()
    {
        return array(
            array(
                'docbookVisitor',
                array( 'Foo', 'StdClass', 'ezcDocumentRstDocbookVisitor' ),
            ),
            array(
                'xhtmlVisitor',
                array( 'Foo', 'StdClass', 'ezcDocumentRstXhtmlVisitor' ),
            ),
            array(
                'xhtmlVisitorOptions',
                array( new ezcDocumentHtmlConverterOptions() ),
            ),
        );
    }

    public static function provideInvalidData()
    {
        return array(
            array(
                'docbookVisitor',
                array( 23, new StdClass() ),
            ),
            array(
                'xhtmlVisitor',
                array( 23, new StdClass() ),
            ),
            array(
                'xhtmlVisitorOptions',
                array( 'foo', new StdClass() ),
            ),
        );
    }
}

?>
