<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\NodeKind;
use PhpParser\Token;
use PhpParser\TokenKind;

class MethodDeclaration extends Node {
    /** @var Token[] */
    public $modifiers;
    
    use FunctionHeader, FunctionReturnType, FunctionBody;

    public function __construct() {
        parent::__construct(NodeKind::MethodDeclaration);
    }
}