<?php

namespace Phalcon\Forms;

/**
 * This component allows to build forms using an object-oriented interface
 */
class Form extends \Phalcon\Di\Injectable implements \Countable, \Iterator, \Phalcon\Html\Attributes\AttributesInterface
{

    protected $attributes;


    protected $data;


    protected $elements = array();


    protected $elementsIndexed;


    protected $entity;


    protected $messages;


    protected $position;


    protected $options;


    protected $validation;


    /**
     * @param mixed $validation
     */
    public function setValidation($validation) {}


    public function getValidation() {}

    /**
     * Phalcon\Forms\Form constructor
     *
     * @param mixed $entity
     * @param array $userOptions
     */
    public function __construct($entity = null, array $userOptions = array()) {}

    /**
     * Adds an element to the form
     *
     * @param \Phalcon\Forms\Element\ElementInterface $element
     * @param string $position
     * @param bool $type
     * @return Form
     */
    public function add(\Phalcon\Forms\Element\ElementInterface $element, string $position = null, bool $type = null): Form {}

    /**
     * Binds data to the entity
     *
     * @param array $data
     * @param object $entity
     * @param array $whitelist
     * @return Form
     */
    public function bind(array $data, $entity, $whitelist = null): Form {}

    /**
     * Clears every element in the form to its default value
     *
     * @param array|string|null $fields
     * @return Form
     */
    public function clear($fields = null): Form {}

    /**
     * Returns the number of elements in the form
     *
     * @return int
     */
    public function count(): int {}

    /**
     * Returns the current element in the iterator
     *
     * @return bool|\Phalcon\Forms\Element\ElementInterface
     */
    public function current() {}

    /**
     * Returns an element added to the form by its name
     *
     * @param string $name
     * @return \Phalcon\Forms\Element\ElementInterface
     */
    public function get(string $name): ElementInterface {}

    /**
     * Returns the form's action
     *
     * @return string
     */
    public function getAction(): string {}

    /**
     * Returns the form elements added to the form
     *
     * @return array|\Phalcon\Forms\Element\ElementInterface[]
     */
    public function getElements(): array {}

    /**
     * Returns the entity related to the model
     *
     * @return object
     */
    public function getEntity() {}

    /**
     * Returns a label for an element
     *
     * @param string $name
     * @return string
     */
    public function getLabel(string $name): string {}

    /**
     * Returns the messages generated in the validation.
     *
     * ```php
     * if ($form->isValid($_POST) == false) {
     *     $messages = $form->getMessages();
     *
     *     foreach ($messages as $message) {
     *         echo $message, "<br>";
     *     }
     * }
     * ```
     *
     * @return array|\Phalcon\Messages\Messages
     */
    public function getMessages() {}

    /**
     * Returns the messages generated for a specific element
     *
     * @param string $name
     * @return \Phalcon\Messages\Messages
     */
    public function getMessagesFor(string $name): Messages {}

    /**
     * Returns the value of an option if present
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getUserOption(string $option, $defaultValue = null) {}

    /**
     * Returns the options for the element
     *
     * @return array
     */
    public function getUserOptions(): array {}

    /**
     * Gets a value from the internal related entity or from the default value
     *
     * @param string $name
     * @return mixed|null
     */
    public function getValue(string $name): ? {}

    /**
     * Check if the form contains an element
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool {}

    /**
     * Check if messages were generated for a specific element
     *
     * @param string $name
     * @return bool
     */
    public function hasMessagesFor(string $name): bool {}

    /**
     * Validates the form
     *
     * @param array $data
     * @param object $entity
     * @return bool
     */
    public function isValid($data = null, $entity = null): bool {}

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int {}

    /**
     * Generate the label of an element added to the form including HTML
     *
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function label(string $name, array $attributes = null): string {}

    /**
     * Moves the internal iteration pointer to the next position
     */
    public function next() {}

    /**
     * Renders a specific item in the form
     *
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function render(string $name, array $attributes = array()): string {}

    /**
     * Removes an element from the form
     *
     * @param string $name
     * @return bool
     */
    public function remove(string $name): bool {}

    /**
     * Rewinds the internal iterator
     */
    public function rewind() {}

    /**
     * Sets the form's action
     *
     * @param string $action
     * @return Form
     */
    public function setAction(string $action): Form {}

    /**
     * Sets the entity related to the model
     *
     * @param object $entity
     * @return Form
     */
    public function setEntity($entity): Form {}

    /**
     * Sets an option for the form
     *
     * @param string $option
     * @param mixed $value
     * @return Form
     */
    public function setUserOption(string $option, $value): Form {}

    /**
     * Sets options for the element
     *
     * @param array $options
     * @return Form
     */
    public function setUserOptions(array $options): Form {}

    /**
     * Check if the current element in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool {}

    /**
     * Get Form attributes collection
     *
     * @return \Phalcon\Html\Attributes
     */
    public function getAttributes(): Attributes {}

    /**
     * Set form attributes collection
     *
     * @param \Phalcon\Html\Attributes $attributes
     * @return \Phalcon\Html\Attributes\AttributesInterface
     */
    public function setAttributes(\Phalcon\Html\Attributes $attributes): AttributesInterface {}

}