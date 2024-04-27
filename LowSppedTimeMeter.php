<?php

class LowSpeedTimeMeter {
    protected $time = 0;

    public function update($increment) {
        $this->time += $increment;
    }

    public function getTime() {
        return $this->time;
    }
}