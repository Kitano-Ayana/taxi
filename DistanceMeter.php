<?php

class DistanceMeter {
    protected $distance = 0;

    public function update($increment) {
        $this->distance += $increment;
    }

    public function getDistance() {
        return $this->distance;
    }
}

