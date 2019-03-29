<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 7:27 PM
 */

namespace PatternDesigns\Behavioral\Observer;


use SplSubject;

class Observer implements \SplObserver
{

    /**
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        if (! $subject instanceof Subject) {
            return;
        }
        print("Observer");
    }
}