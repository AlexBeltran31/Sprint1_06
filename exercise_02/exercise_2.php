<?php
class Magic {
    public function showInfo() {
        echo "*** Information about the Exercise 6 for Sprint 1 ***" . "\n";
        echo "Class: " . __CLASS__ . "\n";
        echo "Directory: " . __DIR__ . "\n";
        echo "Used method: " . __METHOD__ . "\n";
        echo "Line for this echo: " . __LINE__ . "\n";
    }
}

$string = new Magic();
$string->showInfo();