<?php
defined('MOODLE_INTERNAL') || die;

if (has_capability('moodle/course:create', context_system::instance())) {
    if (!$ADMIN->locate('tool_auditorireport')) {
        $ADMIN->add('courses',
            new admin_externalpage('tool_auditorireport', get_string('pluginname', 'tool_auditorireport'),
                $CFG->wwwroot . '/' . $CFG->admin . '/tool/auditorireport/index.php'));
    }
}