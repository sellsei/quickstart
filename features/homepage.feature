@homepage
Feature: Homepage
  In order to access the website
  As a visitor
  I want to be able to see the homepage

  Scenario: Viewing the homepage
    Given I am on the homepage
    And I should see page title "Sellsei"

  @javascript
  Scenario: Viewing the home page
    Given I am on the homepage
    And I wait for text "Welcome" to appear
