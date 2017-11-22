<?php

namespace AppBundle;

/**
 * Inherited Methods.
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given there are sessions
     */
    public function thereAreSessions()
    {
    }

    /**
     * @When I go to the sessions list
     */
    public function iGoToTheSessionsList()
    {
        $this->amOnPage('/admin/app/session/list');
    }

    /**
     * @Then I see sessions
     */
    public function iSeeSessions()
    {
        $this->see('Admin');
    }
}
