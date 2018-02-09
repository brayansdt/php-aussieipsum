<?php

namespace Brayansdt;

use joshtronic\LoremIpsum;

class AussieIpsum extends LoremIpsum
{
    protected $aussieWords = [
        'a cold one', 'arvo', 'aussie salute', 'bail', 'barbie', 'bathers', 'bea', 'beauty!', 'billabong', 'billy',
        'bloody', 'booze bus', 'brekky', 'brolly', 'cab sav', 'cactus', 'choc a bloc', 'choccy biccy', 'chrissie',
        'ciggy', 'clucky', 'cobber', 'coppers', 'crook', 'deadset', 'devo', 'dunny', 'esky', 'fair dinkum', 'frothy',
        'g’day', 'going off', 'good on ya', 'goon', 'hard yakka', 'heaps', 'knickers', 'legless', 'lollies', 'maccas',
        'no worries', 'nuddy', 'pash', 'piece of piss', 'piss off', 'piss up', 'piss', 'pissed', 'reckon', 'root rat',
        'rooted', 'runners', 'servo', 'sickie', 'slab', 'snag', 'stiffy', 'stoked', 'straya', 'stubbie', 'stuffed',
        'swag', 'tea', 'thongs', 'tucker', 'u-ie', 'ya',
    ];

    public function __construct()
    {
        $this->setFirstSentence();
        $this->mergeAussieWords();
    }

    private function setFirstSentence()
    {
        $firstSentence = array_slice($this->words, 0, 8);
        $firstSentence[0] = 'aussie';
        $firstSentence[4] = $this->aussieWords[array_rand($this->aussieWords)];

        $this->words = array_merge($firstSentence, array_slice($this->words, 8));
    }

    private function mergeAussieWords()
    {
        $this->words = array_merge($this->words, $this->aussieWords);
    }
}