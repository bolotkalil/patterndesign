<?php
/**
 * Created by PhpStorm.
 * User: bolotkalil
 * Date: 11/20/18
 * Time: 7:30 PM
 */

namespace PatternDesigns\Behavioral\Observer;


use SplObserver;

class Subject implements \SplSubject
{
    /**
     * @var \SplObserver[]
     */
    private $observers = [];

    /**
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        foreach ($this->observers as $index=>$value) {
            if ($observer === $value) {
                unset($this->observers[$index]);
            }
        }
    }

    /**
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach ($this->observers as $index=>$observer) {
            $observer->update($this);
        }
    }
}
