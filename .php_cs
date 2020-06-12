<?php
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        // There MUST be one blank line after the namespace declaration.
        'blank_line_after_namespace' => true,
        // The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
        'braces' => true,
        // Whitespace around the keywords of a class, trait or interfaces definition should be one space.
        'class_definition' => true,
        // The keyword `elseif` should be used instead of `else if` so that all control keywords look like single words.
        'elseif' => true,
        // PHP code MUST use only UTF-8 without BOM (remove BOM).
        'encoding' => true,
        // PHP code must use the long `<?php` tags or short-echo `<?=` tags and not other tag variations.
        'full_opening_tag' => true,
        // Spaces should be properly placed in a function declaration.
        'function_declaration' => true,
        // Code MUST use configured indentation type.
        'indentation_type' => true,
        // PHP keywords MUST be in lower case.
        'lowercase_keywords' => true,
        // In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma. Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
        'method_argument_space' => true,
        // There must be a comment when fall-through is intentional in a non-empty case body.
        'no_break_comment' => true,
        // The closing `? >` tag MUST be omitted from files containing only PHP.
        'no_closing_tag' => true,
        // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
        'no_spaces_after_function_name' => true,
        // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
        'no_spaces_inside_parenthesis' => true,
        // Remove trailing whitespace at the end of non-blank lines.
        'no_trailing_whitespace' => true,
        // There MUST be no trailing spaces inside comment or PHPDoc.
        'no_trailing_whitespace_in_comment' => true,
        // A PHP file without end tag must always end with a single empty line feed.
        'single_blank_line_at_eof' => true,
        // There MUST NOT be more than one property or constant declared per statement.
        'single_class_element_per_statement' => ['elements'=>['property']],
        // There MUST be one use keyword per declaration.
        'single_import_per_statement' => true,
        // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
        'single_line_after_imports' => true,
        // A case should be followed by a colon and not a semicolon.
        'switch_case_semicolon_to_colon' => true,
        // Removes extra spaces between colon and case value.
        'switch_case_space' => true,
        // Visibility MUST be declared on all properties and methods; `abstract` and `final` MUST be declared before the visibility; `static` MUST be declared after the visibility.
        'visibility_required' => true,
        // Binary operators should be surrounded by space as configured.
        'binary_operator_spaces' => true,
        // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
        'blank_line_after_opening_tag' => true,
        // An empty line feed should precede a return statement.
        'blank_line_before_return' => true,
        // A single space or none should be between cast and variable.
        'cast_spaces' => true,
        // Ensure single space between function's argument and its typehint.
        'function_typehint_space' => true,
        // Single line comments should use double slashes `//` and not hash `#`.
        'hash_to_slash_comment' => true,
        // Convert `heredoc` to `nowdoc` where possible.
        'heredoc_to_nowdoc' => true,
        // Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
        'include' => true,
        // Cast should be written in lower case.
        'lowercase_cast' => true,
        // The PHP constants `true`, `false`, and `null` MUST be in lower case.
        'lowercase_constants' => true,
        // Methods must be separated with one blank line.
        'method_separation' => true,
        // Function defined by PHP should be called using the correct casing.
        'native_function_casing' => true,
        // There should be no empty lines after class opening brace.
        'no_blank_lines_after_class_opening' => true,
        // There should not be blank lines between docblock and the documented element.
        'no_blank_lines_after_phpdoc' => true,
        // There should not be empty PHPDoc blocks.
        'no_empty_phpdoc' => true,
        // Removes extra blank lines and/or blank lines following configuration.
        'no_extra_consecutive_blank_lines' => true,
        // Remove leading slashes in `use` clauses.
        'no_leading_import_slash' => true,
        // The namespace declaration line shouldn't contain leading whitespace.
        'no_leading_namespace_whitespace' => true,
        // Operator `=>` should not be surrounded by multi-line whitespaces.
        'no_multiline_whitespace_around_double_arrow' => true,
        // Multi-line whitespace before closing semicolon are prohibited.
        'no_multiline_whitespace_before_semicolons' => true,
        // Short cast `bool` using double exclamation mark should not be used.
        'no_short_bool_cast' => true,
        // Single-line whitespace before closing semicolon are prohibited.
        'no_singleline_whitespace_before_semicolons' => true,
        // Remove trailing commas in list function calls.
        'no_trailing_comma_in_list_call' => true,
        // PHP single-line arrays should not have trailing comma.
        'no_trailing_comma_in_singleline_array' => true,
        // Removes unneeded parentheses around control statements.
        'no_unneeded_control_parentheses' => true,
        // Unused `use` statements must be removed.
        'no_unused_imports' => true,
        // There should not be an empty `return` statement at the end of a function.
        'no_useless_return' => true,
        // In array declaration, there MUST NOT be a whitespace before each comma.
        'no_whitespace_before_comma_in_array' => true,
        // Remove trailing whitespace at the end of blank lines.
        'no_whitespace_in_blank_line' => true,
        // There should not be space before or after object `T_OBJECT_OPERATOR` `->`.
        'object_operator_without_whitespace' => true,
        // Ordering `use` statements.
        'ordered_imports' => true,
        // All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
        'phpdoc_align' => true,
        // Docblocks should have the same indentation as the documented subject.
        'phpdoc_indent' => true,
        // Fix PHPDoc inline tags, make `@inheritdoc` always inline.
        'phpdoc_inline_tag' => true,
        // `@access` annotations should be omitted from PHPDoc.
        'phpdoc_no_access' => true,
        // `@package` and `@subpackage` annotations should be omitted from PHPDoc.
        'phpdoc_no_package' => true,
        // Annotations in PHPDoc should be ordered so that `@param` annotations come first, then `@throws` annotations, then `@return` annotations.
        'phpdoc_order' => true,
        // Scalar types should always be written in the same form. `int` not `integer`, `bool` not `boolean`, `float` not `real` or `double`.
        'phpdoc_scalar' => true,
        // Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other, and annotations of a different type are separated by a single blank line.
        'phpdoc_separation' => true,
        // PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
        'phpdoc_summary' => true,
        // Docblocks should only be used on structural elements.
        'phpdoc_to_comment' => true,
        // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
        'phpdoc_trim' => true,
        // The correct case must be used for standard PHP types in PHPDoc.
        'phpdoc_types' => true,
        // `@var` and `@type` annotations should not contain the variable name.
        'phpdoc_var_without_name' => true,
        // Cast `(boolean)` and `(integer)` should be written as `(bool)` and `(int)`, `(double)` and `(real)` as `(float)`, `(binary)` as `(string)`.
        'short_scalar_cast' => true,
        // A return statement wishing to return `void` should not return `null`.
        'simplified_null_return' => true,
        // There should be exactly one blank line before a namespace declaration.
        'single_blank_line_before_namespace' => true,
        // Convert double quotes to single quotes for simple strings.
        'single_quote' => true,
        // Fix whitespace after a semicolon.
        'space_after_semicolon' => true,
        // Replace all `<>` with `!=`.
        'standardize_not_equals' => true,
        // Standardize spaces around ternary operator.
        'ternary_operator_spaces' => true,
        // Arrays should be formatted like function/method arguments, without leading or trailing single line space.
        'trim_array_spaces' => true,
        // Unary operators should be placed adjacent to their operands.
        'unary_operator_spaces' => true,
        // In array declaration, there MUST be a whitespace after each comma.
        'whitespace_after_comma_in_array' => true,
        // PHP arrays should be declared using the configured syntax.
        'array_syntax' => ['syntax'=>'short'],
        // Properties MUST not be explicitly initialized with `null` except when they have a type declaration (PHP 7.4).
        'no_null_property_initialization' => true,
        // There should not be any empty comments.
        'no_empty_comment' => true,
        // All instances created with new keyword must be followed by braces.
        'new_with_braces' => true,
        // DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
        'multiline_comment_opening_closing' => true,
        // Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
        'method_chaining_indentation' => true,
        // Use `&&` and `||` logical operators instead of `and` and `or`.
        'logical_operators' => true,
        // List (`array` destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1.
        'list_syntax' => true,
        // Comparisons should be strict.
        'strict_comparison' => true,
        // Each element of an array must be indented exactly once.
        'array_indentation' => true,
        // Using `isset($var) &&` multiple times should be done in one call.
        'combine_consecutive_issets' => true,
        // Calling `unset` on multiple items should be done in one call.
        'combine_consecutive_unsets' => true,
        // Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
        'explicit_string_variable' => true,
        // Replaces `is_null($var)` expression with `null === $var`.
        'is_null' => true,
        // Class static references `self`, `static` and `parent` MUST be in lower case.
        'lowercase_static_reference' => true,
        // Replace control structure alternative syntax to use braces.
        'no_alternative_syntax' => true,
        // Removes extra blank lines and/or blank lines following configuration.
        'no_extra_blank_lines' => true,
        // Either language construct `print` or `echo` should be used.
        'no_mixed_echo_print' => true,
        // There MUST NOT be spaces around offset braces.
        'no_spaces_around_offset' => true,
        // Replaces superfluous `elseif` with `if`.
        'no_superfluous_elseif' => true,
        // Removes unneeded curly braces that are superfluous and aren't part of a control structure's body.
        'no_unneeded_curly_braces' => true,
        // There should not be useless `else` cases.
        'no_useless_else' => true,
        // Single-line comments and multi-line comments with only one line of actual content should use the `//` syntax.
        'single_line_comment_style' => true,
        // Use `null` coalescing operator `??` where possible. Requires PHP >= 7.0.
        'ternary_to_null_coalescing' => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->exclude('storage')
        ->exclude('public')
        ->in(__DIR__)
    )
;

