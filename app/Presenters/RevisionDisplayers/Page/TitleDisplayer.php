<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Presenters\RevisionDisplayers\Page;

/**
 * This is the title displayer class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class TitleDisplayer extends AbstractDisplayer
{
    /**
     * Get the change description from the context of
     * the change being made by the current user.
     *
     * @return string
     */
    protected function current()
    {
        return 'You updated the title of'.$this->name();
    }

    /**
     * Get the change description from the context of
     * the change not being made by the current user.
     *
     * @return string
     */
    protected function external()
    {
        return 'This user updated the title of'.$this->name();
    }
}
