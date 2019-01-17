<?php

namespace GeniusTS\HijriDate\Translations;


/**
 * Class Malay
 *
 * @package GeniusTS\HijriDate\Translations
 */
class Malay implements TranslationInterface
{

    /**
     * Hijri Months names
     *
     * @var array
     */
    protected $hijriMonths = [
        'Muharram',
        'Safar',
        'Rabiulawal',
        'Rabiulakhir',
        'Jamadilawal',
        'Jamadilakhir',
        'Rejab',
        'Syaaban',
        'Ramadan',
        'Syawal',
        'Zulkaedah',
        'Zulhijah',
    ];

    /**
     * short days
     *
     * @var array
     */
    protected $shortDays = ['Ahd', 'Isn', 'Sel', 'Rab', 'Kha', 'Jum', 'Sab'];

    /**
     * days names
     *
     * @var array
     */
    protected $days = ['Ahad', 'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu'];

    /**
     * periods
     *
     * @var array
     */
    protected $periods = ['am', 'pm'];

    /**
     * get array of months names
     *
     * @return array
     */
    public function getHijriMonths(): array
    {
        return $this->hijriMonths;
    }

    /**
     * get array of short days names
     * started from Sunday
     *
     * @return array
     */
    public function getShortDays(): array
    {
        return $this->shortDays;
    }

    /**
     * get array of months names
     * started from Sunday
     *
     * @return array
     */
    public function getDays(): array
    {
        return $this->days;
    }

    /**
     * get array of periods
     *
     * @return array
     */
    public function getPeriods(): array
    {
        return $this->periods;
    }
}
