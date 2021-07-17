Feature: Ticket sales
  In order to buy tickets
  As a passenger
  I need to be able to select tickets for a trip

  Scenario: Buying a single ticket
    Given there is tickets to sale
    When I select a ticket for a trip
    Then I should have 1 boarding card 

