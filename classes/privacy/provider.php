<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Privacy provider.
 *
 * @package   tool_ally
 * @copyright Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_ally\privacy;

use core_privacy\local\metadata\collection;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy provider.
 *
 * @package   tool_ally
 * @copyright Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\provider {

    use \core_privacy\local\legacy_polyfill;

    public static function _get_metadata(collection $collection) {
        $collection->link_external_location('files', [
            'courseid'     => 'privacy:metadata:files:courseid',
            'action'       => 'privacy:metadata:files:action',
            'timemodified' => 'privacy:metadata:files:timemodified',
            'mimetype'     => 'privacy:metadata:files:mimetype',
            'pathnamehash' => 'privacy:metadata:files:pathnamehash',
            'contenthash'  => 'privacy:metadata:files:contenthash',
            'filecontents' => 'privacy:metadata:files:filecontents',
        ], 'privacy:metadata:files:externalpurpose');

        return $collection;
    }
}