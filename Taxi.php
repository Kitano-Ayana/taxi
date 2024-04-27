<?php

class Taxi
{
    private Records $records;
    private DistancdMeter $distancdMeter;
    private LowSpeedTimeMeter $lowSpeedTimeMeter;
    private FareMeter $fareMeter;
    
    public function __construct()
    {
        $this->distancdMeter = new DistanceMeter();
        $this->lowSpeedTimeMeter = new LowSpeedTimeMeter();
        $this->fareMeter = new FareMeter();
        $this->records[] = RecordFactory::createRecord('initial', new DateTime());
    }

    public function recordTrip($distance, $time) {
        // Factory Method を使って走行レコードを生成
        $latestRecord = RecordFactory::createRecord('travel', $time, $distance);
        $this->records[] = $latestRecord;
        $this->updateMeters($distance, $time);
    }
}