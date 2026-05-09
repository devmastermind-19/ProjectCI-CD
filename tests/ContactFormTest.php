<?php
/**
 * ContactFormValidationTest — PHPUnit Tests for QuickPOS Contact Form Validation
 * (Jira ID: [POS-201])
 */

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/validation.php';

class ContactFormTest extends TestCase
{
    /**
     * @dataProvider invalidFormProvider
     * Test: Advanced Data-Driven Testing for validation errors (Multiple Inputs)
     */
    public function testInvalidFormInputsReturnErrors(string $name, string $email, string $message, string $expectedError): void
    {
        $errors = validateContactForm($name, $email, $message);
        $this->assertContains($expectedError, $errors);
    }

    /**
     * Data Provider for invalid form submissions
     */
    public static function invalidFormProvider(): array
    {
        return [
            'Empty Name' => ['', 'test@example.com', 'Hello', 'Name is required.'],
            'Whitespace Name' => ['   ', 'test@example.com', 'Hello', 'Name is required.'],
            'Empty Email' => ['John Doe', '', 'Hello', 'Email is required.'],
            'Invalid Email Format' => ['John Doe', 'not-an-email', 'Hello', 'Please enter a valid email address.'],
            'Empty Message' => ['John Doe', 'test@example.com', '', 'Message is required.'],
            'Whitespace Message' => ['John', 'test@example.com', '   ', 'Message is required.'],
        ];
    }

    /**
     * Test: Valid inputs should return no errors (Success case).
     */
    public function testValidInputReturnsNoErrors(): void
    {
        $errors = validateContactForm('John Doe', 'john@example.com', 'I need help with POS setup.');
        $this->assertEmpty($errors, 'Expected no validation errors for valid input.');
    }
}
