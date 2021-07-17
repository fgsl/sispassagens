<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given there is tickets to sale
     */
    public function thereIsTicketsToSale()
    {
        throw new PendingException();
    }

    /**
     * @When I select a ticket for a trip
     */
    public function iSelectATicketForATrip()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have :arg1 boarding card
     */
    public function iShouldHaveBoardingCard($arg1)
    {
        throw new PendingException();
    }    
}
