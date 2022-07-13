<?php
defined('MOODLE_INTERNAL') || die;
global $CFG;

if (has_capability('moodle/site:sendmessage', context_system::instance())) {
    if (!$ADMIN->locate('tool_automessage')) {

        $ADMIN->add('accounts',
            new admin_externalpage('tool_automessage', get_string('pluginname', 'tool_auditorireport'),
                $CFG->wwwroot . '/' . $CFG->admin . '/tool/automessage/messagelist.php'));
    }
}