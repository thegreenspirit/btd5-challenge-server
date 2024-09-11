<?php
// note: i used some online conversion tools so the formatting is shit and im too bothered to reformat it

// Wizard Lord
$WizardLord = array(
  'id' => '149',
  'objectType' => 'challenges::ChallengeDef',
  'reward' => 500,
  'xpReward' => 0,
  'achievmentId' => 144,
  'cash' => -1,
  'cashPerRound' => 0,
  'mode' => 1,
  'track' => 'LightningScar',
  'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/wizard_lord.png',
  'description' => '<b>Wizard Lord</b>
The amazing 4/4 Wizard Lord must feed on your most expensive tower every other round. If no other towers exist, he cannot feed and the mission is lost. Pass 30 custom rounds of upgraded bloons.',
  'startRound' => -1,
  'health' => -1,
  'endRound' => -1,
  'maxNumTowers' => -1,
  'maxNumTowersPerClass' => -1,
  'rankRequired' => 30,
  'towerLifespan' => -1,
  'isNew' => true,
  'upgradeEachRound' => false,
  'rounds' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::RoundDef>',
    'data' => 
    array(
      0 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 6,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 17.13,
                    'count' => 31,
                    'start' => 0,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      1 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 8.700000000000001,
                    'count' => 23,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3.4259999999999997,
                    'count' => 4,
                    'start' => 11.083333333333334,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      2 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 6,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 7.725,
                    'count' => 45,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 5,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 7.345833333333334,
                    'count' => 45,
                    'start' => 9.416666666666666,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 4,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.529166666666669,
                    'count' => 55,
                    'start' => 19,
                  ),
                ),
              ),
            ),
            3 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 3,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 6.4375,
                    'count' => 120,
                    'start' => 24.583333333333332,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Leads are slow and easily dealt with if you have the right towers. Otherwise, they could cause you some grief...',
      ),
      3 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 4.008333333333334,
                    'count' => 4,
                    'start' => 0,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      4 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 6,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 9.033333333333331,
                    'count' => 25,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 2.1124999999999994,
                    'count' => 12,
                    'start' => 13.5,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      5 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 13.070098039215686,
                    'count' => 9,
                    'start' => 0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Next round are many Zebra Bloons. Some of them will be heart-shaped Regen Bloons. Get ready!',
      ),
      6 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.085294117647059,
                    'count' => 8,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 1.713,
                    'count' => 2,
                    'start' => 5.916666666666667,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      7 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 8,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 13.703999999999999,
                    'count' => 25,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 16.558999999999997,
                    'count' => 28,
                    'start' => 14.274999999999999,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3.9970000000000034,
                    'count' => 8,
                    'start' => 31.404999999999998,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Next round there are lots of Camo Bloons, make sure you have a couple of Ninja Monkeys or other towers that can detect Camo Bloons!',
      ),
      8 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => true,
                'regen' => false,
                'type' => 6,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 25.541666666666668,
                    'count' => 20,
                    'start' => 0,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      9 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 18.083333333333332,
                    'count' => 5,
                    'start' => 7.5,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 6,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 34.11291666666666,
                    'count' => 140,
                    'start' => 0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Rainbow Bloons, pretty fast, pretty mean and pretty pretty. They\'re rainbows after all, right?',
      ),
      10 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 10.033333333333331,
                    'count' => 25,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 2.283999999999999,
                    'count' => 5,
                    'start' => 14.354166666666666,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 6.995833333333333,
                    'count' => 35,
                    'start' => 19.2125,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Beware round 42...',
      ),
      11 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 1.5125,
                    'count' => 20,
                    'start' => 3.5,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 1.345833333333334,
                    'count' => 20,
                    'start' => 11.916666666666666,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 2.833333333333329,
                    'count' => 41,
                    'start' => 20.416666666666668,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      12 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 8,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 10.848999999999998,
                    'count' => 20,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 10.849,
                    'count' => 20,
                    'start' => 11.419999999999998,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 7.994,
                    'count' => 15,
                    'start' => 22.839999999999996,
                  ),
                ),
              ),
            ),
            3 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 31.404999999999994,
                  ),
                ),
              ),
            ),
            4 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => true,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 1.5916666666666686,
                    'count' => 7,
                    'start' => 41.916666666666664,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      13 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3.595833333333333,
                    'count' => 17,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 8.565,
                    'count' => 14,
                    'start' => 4.833333333333333,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 6.280999999999999,
                    'count' => 10,
                    'start' => 12.0875,
                  ),
                ),
              ),
            ),
            3 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 2.8550000000000018,
                    'count' => 4,
                    'start' => 25.725,
                  ),
                ),
              ),
            ),
            4 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 23.411,
                    'count' => 42,
                    'start' => 2,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'In a couple of rounds there will be more Camo Bloons. You have been warned.',
      ),
      14 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 8,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 5.709999999999999,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 7.2625,
                    'count' => 20,
                    'start' => 11.419999999999998,
                  ),
                ),
              ),
            ),
            3 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 10.848999999999997,
                    'count' => 20,
                    'start' => 22.839999999999996,
                  ),
                ),
              ),
            ),
            4 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 9.707,
                    'count' => 18,
                    'start' => 34.25999999999999,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      15 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 1.713000000000001,
                    'count' => 4,
                    'start' => 7.9625,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      16 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 8,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 18.770833333333332,
                    'count' => 60,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 27.358333333333334,
                    'count' => 60,
                    'start' => 18.845833333333335,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'This next round coming up will seperate the strong from the weak. Make sure you have good Camo Detection by now and burst damage to deal with Regrowers too.',
      ),
      17 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5,
                    'count' => 6,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => true,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5,
                    'count' => 6,
                    'start' => 6,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      18 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3.554166666666667,
                    'count' => 7,
                    'start' => 5.709999999999999,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      19 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 10,
                    'count' => 10,
                    'start' => 0,
                  ),
                  1 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 7,
                    'count' => 10,
                    'start' => 9.916666666666666,
                  ),
                  2 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 4,
                    'count' => 10,
                    'start' => 16.833333333333332,
                  ),
                  3 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 2,
                    'count' => 10,
                    'start' => 20.75,
                  ),
                  4 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 1,
                    'count' => 10,
                    'start' => 22.666666666666668,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      20 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 13.703999999999999,
                    'count' => 25,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 60.729166666666664,
                    'count' => 200,
                    'start' => 14.274999999999999,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3.9969999999999857,
                    'count' => 8,
                    'start' => 75,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      21 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 12,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Building up a bit of a nest egg are we? Think carefully about what to spend it on - money tends to get a bit tighter the higher you go in this game. Just sayin\'.',
      ),
      22 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 6.281,
                    'count' => 12,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => true,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 18.145833333333332,
                    'count' => 70,
                    'start' => 6.5,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      23 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 39.69583333333333,
                    'count' => 120,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 23.39166666666667,
                    'count' => 50,
                    'start' => 39.68333333333333,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Got any Super Monkeys yet?',
      ),
      24 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 4,
                  ),
                  1 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 43.03333333333333,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 43.03333333333333,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 6.537499999999999,
                    'count' => 18,
                    'start' => 15.5,
                  ),
                ),
              ),
            ),
            3 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3.512499999999998,
                    'count' => 20,
                    'start' => 29.275,
                  ),
                ),
              ),
            ),
            4 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 5,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 55.34391891891892,
                    'count' => 343,
                    'start' => 0,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      25 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 12,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 0,
                  ),
                  1 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 27.978999999999996,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 9,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3.997,
                    'count' => 8,
                    'start' => 0.571,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 3,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 1.3458333333333332,
                    'count' => 20,
                    'start' => 9.8875,
                  ),
                ),
              ),
            ),
            3 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 10.848999999999997,
                    'count' => 20,
                    'start' => 16.558999999999997,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      26 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 15.416999999999998,
                    'count' => 28,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => true,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 5.138999999999999,
                    'count' => 10,
                    'start' => 15.988,
                  ),
                ),
              ),
            ),
          ),
        ),
        'flavorText' => 'Ok, let\'s ramp things up a bit shall we?',
      ),
      27 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 10,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 13.703999999999999,
                    'count' => 25,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 12,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 14.274999999999999,
                  ),
                  1 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 17.700999999999997,
                  ),
                ),
              ),
            ),
            2 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 2.2840000000000007,
                    'count' => 5,
                    'start' => 14.845999999999998,
                  ),
                  1 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 2.283999999999999,
                    'count' => 5,
                    'start' => 18.272,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      28 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => true,
                'regen' => false,
                'type' => 7,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 45.109,
                    'count' => 80,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 12,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 27.9625,
                  ),
                  1 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 31.976,
                  ),
                  2 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 35.733333333333334,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      29 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 11,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 19.414,
                    'count' => 35,
                    'start' => 0,
                  ),
                ),
              ),
            ),
            1 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'camo' => false,
                'regen' => false,
                'type' => 12,
              ),
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 6.229166666666667,
                  ),
                  1 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 0,
                    'count' => 1,
                    'start' => 11.991,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'towers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'DartMonkey',
      1 => 'TackTower',
      2 => 'SniperMonkey',
      3 => 'BoomerangThrower',
      4 => 'NinjaMonkey',
      5 => 'BombTower',
      6 => 'IceTower',
      7 => 'GlueGunner',
      8 => 'MonkeyBuccaneer',
      9 => 'MonkeyAce',
      10 => 'SuperMonkey',
      11 => 'MonkeyApprentice',
      12 => 'MonkeyVillage',
      13 => 'BananaFarm',
      14 => 'MortarTower',
      15 => 'DartlingGun',
      16 => 'SpikeFactory',
      17 => 'MonkeySub',
    ),
  ),
  'initialTowers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::InitialTowerDef>',
    'data' => 
    array(
      0 => 
      array(
        'objectType' => 'challenges::InitialTowerDef',
        'towerID' => 'WizardLord',
        'positionX' => 380,
        'positionY' => 300,
        'updradesPath1' => -1,
        'updradesPath2' => -1,
        'canSell' => false,
      ),
    ),
  ),
  'reserves' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
    'data' => 
    array(
    ),
  ),
  'agents' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'Meerkat',
      1 => 'BloonberryBush',
      2 => 'Beekeeper',
      3 => 'AngrySquirrel',
      4 => 'SuperMonkeyStorm',
      5 => 'BloonsdayDevice',
      6 => 'TribalTurtle',
      7 => 'PortableLake',
      8 => 'Pontoon',
    ),
  ),
  'upgradeLocks' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
    'data' => 
    array(
    ),
  ),
);
$WizardLord = base64_encode(json_encode($WizardLord));

// Protect Monkey Town
$ProtectMonkeyTown = array(
  'id' => '92',
  'objectType' => 'challenges::ChallengeDef',
  'reward' => 250,
  'xpReward' => 0,
  'achievmentId' => 96,
  'cash' => -1,
  'cashPerRound' => 0,
  'mode' => 1,
  'track' => 'ProtectMonkeyVillage',
  'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/protect_monkey_town.png',
  'description' => '<b>Protect Monkey Town</b>
Bloons have located the Monkey Town and are attacking on two fronts. Any bloon that touches the Town costs lives, so it\'s your job to defend the homeland for 65 rounds.',
  'startRound' => -1,
  'health' => -1,
  'endRound' => -1,
  'maxNumTowers' => -1,
  'maxNumTowersPerClass' => -1,
  'rankRequired' => 15,
  'towerLifespan' => -1,
  'isNew' => false,
  'upgradeEachRound' => false,
  'towers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'DartMonkey',
      1 => 'TackTower',
      2 => 'SniperMonkey',
      3 => 'BoomerangThrower',
      4 => 'NinjaMonkey',
      5 => 'BombTower',
      6 => 'IceTower',
      7 => 'GlueGunner',
      8 => 'MonkeyBuccaneer',
      9 => 'MonkeyAce',
      10 => 'SuperMonkey',
      11 => 'MonkeyApprentice',
      12 => 'MonkeyVillage',
      13 => 'BananaFarm',
      14 => 'MortarTower',
      15 => 'DartlingGun',
      16 => 'SpikeFactory',
      17 => 'RoadSpikes',
      18 => 'ExplodingPineapple',
      19 => 'MonkeySub',
    ),
  ),
  'bloonLevelOffsets' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<int>',
    'data' => 
    array(
      0 => 1,
      1 => 1,
      2 => 1,
      3 => 1,
      4 => 1,
      5 => 1,
      6 => 1,
      7 => 1,
      8 => 1,
      9 => 1,
      10 => 0,
      11 => 0,
      12 => 0,
      13 => 0,
    ),
  ),
  'initialTowers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::InitialTowerDef>',
    'data' => 
    array(
      0 => 
      array(
        'objectType' => 'challenges::InitialTowerDef',
        'positionY' => 247,
        'updradesPath1' => 3,
        'updradesPath2' => 0,
        'towerID' => 'MonkeyVillage',
        'positionX' => 348,
      ),
    ),
  ),
  'reserves' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
    'data' => 
    array(
    ),
  ),
  'agents' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'Meerkat',
      1 => 'BloonberryBush',
      2 => 'Beekeeper',
      3 => 'AngrySquirrel',
      4 => 'SuperMonkeyStorm',
      5 => 'BloonsdayDevice',
      6 => 'TribalTurtle',
    ),
  ),
  'upgradeLocks' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
    'data' => 
    array(
    ),
  ),
);
$ProtectMonkeyTown = base64_encode(json_encode($ProtectMonkeyTown));

// Covert Pops
$CovertPops = array(
  'id' => '93',
  'objectType' => 'challenges::ChallengeDef',
  'reward' => 350,
  'xpReward' => 0,
  'achievmentId' => 97,
  'cash' => 1000,
  'cashPerRound' => 0,
  'mode' => 2,
  'track' => 'SnakeRiver',
  'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/covert_pops.png',
  'description' => '<b>Covert Pops</b>
The Bloons are invading Snake River with their most deadly stealth forces. They must have known the Meerkats were on leave! Pass 50 rounds with a twist: All bloons are Camo and only 1 life!',
  'startRound' => -1,
  'health' => 1,
  'endRound' => 50,
  'maxNumTowers' => -1,
  'maxNumTowersPerClass' => -1,
  'rankRequired' => 35,
  'towerLifespan' => -1,
  'isNew' => false,
  'upgradeEachRound' => false,
  'towers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'DartMonkey',
      1 => 'TackTower',
      2 => 'SniperMonkey',
      3 => 'BoomerangThrower',
      4 => 'NinjaMonkey',
      5 => 'BombTower',
      6 => 'IceTower',
      7 => 'GlueGunner',
      8 => 'MonkeyBuccaneer',
      9 => 'MonkeyAce',
      10 => 'SuperMonkey',
      11 => 'MonkeyApprentice',
      12 => 'MonkeyVillage',
      13 => 'BananaFarm',
      14 => 'MortarTower',
      15 => 'DartlingGun',
      16 => 'SpikeFactory',
      17 => 'RoadSpikes',
      18 => 'ExplodingPineapple',
      19 => 'MonkeySub',
    ),
  ),
  'applyCamoToo' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<Boolean>',
    'data' => 
    array(
      0 => true,
      1 => true,
      2 => true,
      3 => true,
      4 => true,
      5 => true,
      6 => true,
      7 => true,
      8 => true,
      9 => true,
      10 => true,
      11 => false,
      12 => false,
      13 => false,
    ),
  ),
  'reserves' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
    'data' => 
    array(
    ),
  ),
  'agents' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'BloonberryBush',
      1 => 'Beekeeper',
      2 => 'AngrySquirrel',
      3 => 'SuperMonkeyStorm',
      4 => 'BloonsdayDevice',
      5 => 'TribalTurtle',
    ),
  ),
  'upgradeLocks' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
    'data' => 
    array(
    ),
  ),
);
$CovertPops = base64_encode(json_encode($CovertPops));

// There Can Be Only One
$ThereCanBeOnlyOne = array(
  'id' => '50',
  'objectType' => 'challenges::ChallengeDef',
  'reward' => 250,
  'xpReward' => -1,
  'achievmentId' => 85,
  'cash' => -1,
  'cashPerRound' => -1,
  'mode' => 2,
  'track' => 'BloonCircles',
  'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/there_can_be_only_one.png',
  'description' => '<b>There Can Be Only One</b>
Defeat Bloons Circles on Hard using at most one of each different tower type',
  'startRound' => -1,
  'health' => -1,
  'endRound' => -1,
  'maxNumTowers' => -1,
  'maxNumTowersPerClass' => 1,
  'rankRequired' => 20,
  'towerLifespan' => -1,
  'isNew' => false,
  'upgradeEachRound' => false,
  'towers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'DartMonkey',
      1 => 'TackTower',
      2 => 'SniperMonkey',
      3 => 'BoomerangThrower',
      4 => 'NinjaMonkey',
      5 => 'BombTower',
      6 => 'IceTower',
      7 => 'GlueGunner',
      8 => 'MonkeyBuccaneer',
      9 => 'MonkeyAce',
      10 => 'SuperMonkey',
      11 => 'MonkeyApprentice',
      12 => 'MonkeyVillage',
      13 => 'BananaFarm',
      14 => 'MortarTower',
      15 => 'DartlingGun',
      16 => 'SpikeFactory',
      17 => 'RoadSpikes',
      18 => 'ExplodingPineapple',
      19 => 'MonkeySub',
    ),
  ),
  'reserves' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
    'data' => 
    array(
    ),
  ),
  'agents' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'Meerkat',
      1 => 'BloonberryBush',
      2 => 'Beekeeper',
      3 => 'AngrySquirrel',
      4 => 'SuperMonkeyStorm',
      5 => 'BloonsdayDevice',
      6 => 'TribalTurtle',
    ),
  ),
  'upgradeLocks' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
    'data' => 
    array(
    ),
  ),
);
$ThereCanBeOnlyOne = base64_encode(json_encode($ThereCanBeOnlyOne));

$SpecialAgentsOnly = array(
  'id' => '51',
  'objectType' => 'challenges::ChallengeDef',
  'reward' => 0,
  'xpReward' => 50000,
  'achievmentId' => 86,
  'cash' => -1,
  'cashPerRound' => -1,
  'mode' => 2,
  'track' => 'GreatSwitch',
  'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/special_agents_only.png',
  'description' => '<b>Special Agents Only</b>
For Their Eyes Only! Using only Special Agents, beat the first 50 Rounds on Switch to win',
  'startRound' => -1,
  'health' => -1,
  'endRound' => 50,
  'maxNumTowers' => -1,
  'maxNumTowersPerClass' => -1,
  'rankRequired' => 30,
  'towerLifespan' => -1,
  'isNew' => false,
  'upgradeEachRound' => false,
  'towers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
    ),
  ),
  'reserves' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
    'data' => 
    array(
    ),
  ),
  'agents' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'Meerkat',
      1 => 'BloonberryBush',
      2 => 'Beekeeper',
      3 => 'AngrySquirrel',
      4 => 'SuperMonkeyStorm',
      5 => 'BloonsdayDevice',
      6 => 'TribalTurtle',
    ),
  ),
  'upgradeLocks' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
    'data' => 
    array(
    ),
  ),
);
$SpecialAgentsOnly = base64_encode(json_encode($SpecialAgentsOnly));

$FastUpgrades = array(
  'id' => '52',
  'objectType' => 'challenges::ChallengeDef',
  'reward' => 500,
  'xpReward' => -1,
  'achievmentId' => 87,
  'cash' => -1,
  'cashPerRound' => 700,
  'mode' => 1,
  'track' => 'Castle',
  'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/fast_upgrades.png',
  'description' => '<b>Fast Upgrades</b>
Survive 5 special rounds on Castle where your towers upgrade once for free at the end of each round. Have you got what it takes?',
  'startRound' => -1,
  'health' => -1,
  'endRound' => -1,
  'maxNumTowers' => -1,
  'maxNumTowersPerClass' => -1,
  'rankRequired' => 40,
  'towerLifespan' => -1,
  'isNew' => false,
  'upgradeEachRound' => true,
  'rounds' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::RoundDef>',
    'data' => 
    array(
      0 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 30,
                    'count' => 30,
                    'start' => 0,
                  ),
                ),
              ),
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'regen' => false,
                'type' => 0,
                'camo' => false,
              ),
            ),
          ),
        ),
      ),
      1 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 40,
                    'count' => 40,
                    'start' => 0,
                  ),
                ),
              ),
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'regen' => false,
                'type' => 2,
                'camo' => false,
              ),
            ),
          ),
        ),
      ),
      2 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 50,
                    'count' => 50,
                    'start' => 0,
                  ),
                ),
              ),
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'regen' => false,
                'type' => 7,
                'camo' => false,
              ),
            ),
          ),
        ),
      ),
      3 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 90,
                    'count' => 90,
                    'start' => 0,
                  ),
                ),
              ),
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'regen' => false,
                'type' => 10,
                'camo' => false,
              ),
            ),
          ),
        ),
      ),
      4 => 
      array(
        'objectType' => 'levels.rounds.def::RoundDef',
        'groups' => 
        array(
          'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
          'data' => 
          array(
            0 => 
            array(
              'objectType' => 'levels.rounds.def::GroupDef',
              'spawners' => 
              array(
                'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
                'data' => 
                array(
                  0 => 
                  array(
                    'objectType' => 'levels.rounds.def::SpawnerDef',
                    'length' => 3,
                    'count' => 3,
                    'start' => 0,
                  ),
                ),
              ),
              'bloon' => 
              array(
                'objectType' => 'levels.rounds.def::BloonDef',
                'regen' => false,
                'type' => 12,
                'camo' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'towers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'DartMonkey',
      1 => 'TackTower',
      2 => 'SniperMonkey',
      3 => 'BoomerangThrower',
      4 => 'NinjaMonkey',
      5 => 'BombTower',
      6 => 'IceTower',
      7 => 'GlueGunner',
      8 => 'MonkeyBuccaneer',
      9 => 'MonkeyAce',
      10 => 'SuperMonkey',
      11 => 'MonkeyApprentice',
      12 => 'MonkeyVillage',
      13 => 'BananaFarm',
      14 => 'MortarTower',
      15 => 'DartlingGun',
      16 => 'SpikeFactory',
      17 => 'RoadSpikes',
      18 => 'ExplodingPineapple',
      19 => 'MonkeySub',
    ),
  ),
  'reserves' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
    'data' => 
    array(
    ),
  ),
  'agents' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'Meerkat',
      1 => 'BloonberryBush',
      2 => 'Beekeeper',
      3 => 'AngrySquirrel',
      4 => 'BloonsdayDevice',
      5 => 'TribalTurtle',
    ),
  ),
  'upgradeLocks' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
    'data' => 
    array(
    ),
  ),
);
$FastUpgrades = base64_encode(json_encode($FastUpgrades));

$ShortLived = array(
  'id' => '53',
  'objectType' => 'challenges::ChallengeDef',
  'reward' => 1000,
  'xpReward' => -1,
  'achievmentId' => 88,
  'cash' => -1,
  'cashPerRound' => 200,
  'mode' => 1,
  'track' => 'MonkeyLane',
  'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/short_lived.png',
  'description' => '<b>Short-Lived</b>
Good old Monkey Lane, except, any tower you place disappears after 10 rounds! Finish Medium difficulty to defeat this dastardly Special Mission.',
  'startRound' => -1,
  'health' => -1,
  'endRound' => 65,
  'maxNumTowers' => -1,
  'maxNumTowersPerClass' => -1,
  'rankRequired' => 60,
  'towerLifespan' => 10,
  'isNew' => false,
  'upgradeEachRound' => false,
  'towers' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'DartMonkey',
      1 => 'TackTower',
      2 => 'SniperMonkey',
      3 => 'BoomerangThrower',
      4 => 'NinjaMonkey',
      5 => 'BombTower',
      6 => 'IceTower',
      7 => 'GlueGunner',
      8 => 'MonkeyBuccaneer',
      9 => 'MonkeyAce',
      10 => 'SuperMonkey',
      11 => 'MonkeyApprentice',
      12 => 'MonkeyVillage',
      13 => 'BananaFarm',
      14 => 'MortarTower',
      15 => 'DartlingGun',
      16 => 'SpikeFactory',
      17 => 'RoadSpikes',
      18 => 'ExplodingPineapple',
      19 => 'MonkeySub',
    ),
  ),
  'reserves' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
    'data' => 
    array(
    ),
  ),
  'agents' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<String>',
    'data' => 
    array(
      0 => 'Meerkat',
      1 => 'BloonberryBush',
      2 => 'Beekeeper',
      3 => 'AngrySquirrel',
      4 => 'SuperMonkeyStorm',
      5 => 'BloonsdayDevice',
      6 => 'TribalTurtle',
    ),
  ),
  'upgradeLocks' => 
  array(
    'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
    'data' => 
    array(
    ),
  ),
);
$ShortLived = base64_encode(json_encode($ShortLived));

$MOABMadness = array(
	'id' => '18',
	'objectType' => 'challenges::ChallengeDef',
	'reward' => 150,
	'xpReward' => 0,
	'achievmentId' => 83,
	'cash' => 50000,
	'cashPerRound' => 0,
	'mode' => 2,
	'track' => 'MonkeyLane',
	'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/moab_madness.png',
	'description' => '<b>MOAB Madness</b>
$50,000 cash to defeat 50 MOABs. Are you up to the task?',
	'startRound' => -1,
	'health' => -1,
	'endRound' => -1,
	'maxNumTowers' => -1,
	'maxNumTowersPerClass' => -1,
	'rankRequired' => 10,
	'towerLifespan' => -1,
	'isNew' => false,
	'upgradeEachRound' => false,
	'rounds' => array(
		'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::RoundDef>',
		'data' => [
			array(
				'objectType' => 'levels.rounds.def::RoundDef',
				'groups' => array(
					'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::GroupDef>',
					'data' => [
						array(
							'objectType' => 'levels.rounds.def::GroupDef',
							'spawners' => array(
								'objectType' => '__AS3__.vec::Vector.<levels.rounds.def::SpawnerDef>',
								'data' => [array('objectType' => 'levels.rounds.def::SpawnerDef', 'length' => 40, 'count' => 50, 'start' => 0)],
							),
							'bloon' => array('objectType' => 'levels.rounds.def::BloonDef', 'regen' => false, 'type' => 11, 'camo' => false),
						),
					],
				),
			),
		],
	),
	'towers' => array(
		'objectType' => '__AS3__.vec::Vector.<String>',
		'data' => ['DartMonkey', 'TackTower', 'SniperMonkey', 'BoomerangThrower', 'NinjaMonkey', 'BombTower', 'IceTower', 'GlueGunner', 'MonkeyBuccaneer', 'MonkeyAce', 'SuperMonkey', 'MonkeyApprentice', 'MonkeyVillage', 'BananaFarm', 'MortarTower', 'DartlingGun', 'SpikeFactory', 'RoadSpikes', 'ExplodingPineapple', 'MonkeySub'],
	),
	'agents' => array(
		'objectType' => '__AS3__.vec::Vector.<String>',
		'data' => ['Meerkat', 'BloonberryBush', 'Beekeeper', 'AngrySquirrel', 'BloonsdayDevice', 'TribalTurtle'],
	),
	'reserves' => array(
		'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
		'data' => [],
	),
	'upgradeLocks' => array(
		'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
		'data' => [],
	),
);
$MOABMadness = base64_encode(json_encode($MOABMadness));

$FullHouse = array(
	'id' => '17',
	'objectType' => 'challenges::ChallengeDef',
	'reward' => 150,
	'xpReward' => 0,
	'achievmentId' => 84,
	'cash' => -1,
	'cashPerRound' => 0,
	'mode' => 1,
	'track' => 'Park',
	'thumb' => 'https://btd5-web-challenges.ct8.pl/btd5/missions/full_house.png',
	'description' => '<b>Full House</b>
Pass this track on Medium difficulty, but you may have no more than 5 towers or agents on the field at one time!',
	'startRound' => -1,
	'health' => -1,
	'endRound' => -1,
	'maxNumTowers' => 5,
	'maxNumTowersPerClass' => -1,
	'rankRequired' => 10,
	'towerLifespan' => -1,
	'isNew' => false,
	'upgradeEachRound' => false,
	'rounds' => NULL,
	'towers' => array(
		'objectType' => '__AS3__.vec::Vector.<String>',
		'data' => ['DartMonkey', 'TackTower', 'SniperMonkey', 'BoomerangThrower', 'NinjaMonkey', 'BombTower', 'IceTower', 'GlueGunner', 'MonkeyBuccaneer', 'MonkeyAce', 'SuperMonkey', 'MonkeyApprentice', 'MonkeyVillage', 'BananaFarm', 'MortarTower', 'DartlingGun', 'SpikeFactory', 'MonkeySub'],
	),
	'agents' => array(
		'objectType' => '__AS3__.vec::Vector.<String>',
		'data' => ['Meerkat', 'Beekeeper', 'AngrySquirrel', 'BloonsdayDevice', 'TribalTurtle'],
	),
	'reserves' => array(
		'objectType' => '__AS3__.vec::Vector.<profile::InventoryCount>',
		'data' => [],
	),
	'upgradeLocks' => array(
		'objectType' => '__AS3__.vec::Vector.<challenges::UpgradeLock>',
		'data' => [],
	),
);
$FullHouse = base64_encode(json_encode($FullHouse));

echo("$WizardLord
$ProtectMonkeyTown
$CovertPops
$ThereCanBeOnlyOne
$SpecialAgentsOnly
$FastUpgrades
$ShortLived
$MOABMadness
$FullHouse");
?>