@section('itemselect')
<?php
$items = [
	'Bow' => [
		'count' => 1,
		'name' => 'Bow',
	],
	'BookOfMudora' => [
		'count' => 1,
		'name' => 'Book Of Mudora',
	],
	'Hammer' => [
		'count' => 1,
		'name' => 'Hammer',
	],
	'Hookshot' => [
		'count' => 1,
		'name' => 'Hookshot',
	],
	'MagicMirror' => [
		'count' => 1,
		'name' => 'Magic Mirror',
	],
	'OcarinaInactive' => [
		'count' => 1,
		'name' => 'Ocarina',
	],
	'PegasusBoots' => [
		'count' => 1,
		'name' => 'Pegasus Boots',
	],
	'PowerGlove' => [
		'count' => 1,
		'name' => 'Power Glove',
	],
	'Cape' => [
		'count' => 1,
		'name' => 'Cape',
	],
	'Mushroom' => [
		'count' => 1,
		'name' => 'Mushroom',
	],
	'Shovel' => [
		'count' => 1,
		'name' => 'Shovel',
	],
	'Lamp' => [
		'count' => 1,
		'name' => 'Lamp',
	],
	'Powder' => [
		'count' => 1,
		'name' => 'Powder',
	],
	'MoonPearl' => [
		'count' => 1,
		'name' => 'Moon Pearl',
	],
	'CaneOfSomaria' => [
		'count' => 1,
		'name' => 'Cane Of Somaria',
	],
	'FireRod' => [
		'count' => 1,
		'name' => 'Fire Rod',
	],
	'Flippers' => [
		'count' => 1,
		'name' => 'Flippers',
	],
	'IceRod' => [
		'count' => 1,
		'name' => 'Ice Rod',
	],
	'TitansMitt' => [
		'count' => 1,
		'name' => 'Titans Mitt',
	],
	'Ether' => [
		'count' => 1,
		'name' => 'Ether',
	],
	'Bombos' => [
		'count' => 1,
		'name' => 'Bombos',
	],
	'Quake' => [
		'count' => 1,
		'name' => 'Quake',
	],
	'Bottle' => [
		'count' => 1,
		'name' => 'Bottle',
	],
	'L1Sword' => [
		'count' => 1,
		'name' => 'Fighters Sword',
	],
	'MasterSword' => [
		'count' => 1,
		'name' => 'Master Sword',
	],
	'L3Sword' => [
		'count' => 1,
		'name' => 'Tempered Sword',
	],
	'L4Sword' => [
		'count' => 1,
		'name' => 'Golden Sword',
	],
	'BowAndSilverArrows' => [
		'count' => 0,
		'name' => 'Bow And Silver Arrows',
	],
	'SilverArrowUpgrade' => [
		'count' => 1,
		'name' => 'Silver Arrows Upgrade',
	],
	'Arrow' => [
		'count' => 1,
		'name' => 'Single Arrow',
	],
	'TenArrows' => [
		'count' => 5,
		'name' => 'Arrows (10)',
	],
	'ArrowUpgrade10' => [
		'count' => 1,
		'name' => 'Arrow Upgrade (+10)',
	],
	'ArrowUpgrade5' => [
		'count' => 6,
		'name' => 'Arrow Upgrade (+5)',
	],
	'ArrowUpgrade70' => [
		'count' => 0,
		'name' => 'Arrow Upgrade (+70)',
	],
	'BlueMail' => [
		'count' => 1,
		'name' => 'Blue Mail',
	],
	'Bomb' => [
		'count' => 0,
		'name' => 'Single Bomb',
	],
	'ThreeBombs' => [
		'count' => 10,
		'name' => 'Bombs (3)',
	],
	'BombUpgrade10' => [
		'count' => 1,
		'name' => 'Bomb Upgrade (+10)',
	],
	'BombUpgrade5' => [
		'count' => 6,
		'name' => 'Bomb Upgrade (+5)',
	],
	'BombUpgrade50' => [
		'count' => 0,
		'name' => 'Bomb Upgrade (+50)',
	],
	'Boomerang' => [
		'count' => 1,
		'name' => 'Blue Boomerang',
	],
	'RedBoomerang' => [
		'count' => 1,
		'name' => 'Red Boomerang',
	],
	'BlueShield' => [
		'count' => 1,
		'name' => 'Blue Shield',
	],
	'RedShield' => [
		'count' => 1,
		'name' => 'Red Shield',
	],
	'MirrorShield' => [
		'count' => 1,
		'name' => 'Mirror Shield',
	],
	'BossHeartContainer' => [
		'count' => 10,
		'name' => 'Boss Heart Container',
	],
	'BugCatchingNet' => [
		'count' => 1,
		'name' => 'Bug Catching Net',
	],
	'ExtraBottles' => [
		'count' => 3,
		'name' => 'Extra Bottles',
	],
	'HeartContainer' => [
		'count' => 1,
		'name' => 'Sancturary Heart Container',
	],
	'PieceOfHeart' => [
		'count' => 24,
		'name' => 'Piece Of Heart Container',
	],
	'RedMail' => [
		'count' => 1,
		'name' => 'Red Mail',
	],
	'CaneOfByrna' => [
		'count' => 1,
		'name' => 'Cane Of Byrna',
	],
	'OneRupee' => [
		'count' => 2,
		'name' => 'Rupee (1)',
	],
	'FiveRupees' => [
		'count' => 4,
		'name' => 'Rupees (5)',
	],
	'TwentyRupees' => [
		'count' => 28,
		'name' => 'Rupees (20)',
	],
	'FiftyRupees' => [
		'count' => 7,
		'name' => 'Rupees (50)',
	],
	'OneHundredRupees' => [
		'count' => 1,
		'name' => 'Rupees (100)',
	],
	'ThreeHundredRupees' => [
		'count' => 5,
		'name' => 'Rupees (300)',
	],
	'MagicUpgrade' => [
		'count' => 1,
		'name' => 'Magic Upgrade (1/2 or 1/4)',
	],
	'MapLW' => [
		'count' => 0,
		'name' => 'Light World Map',
	],
	'MapDW' => [
		'count' => 0,
		'name' => 'Dark World Map',
	],
	'MapA2' => [
		'count' => 1,
		'name' => 'Ganons Tower Map',
	],
	'MapD7' => [
		'count' => 1,
		'name' => 'Turtle Rock Map',
	],
	'MapD4' => [
		'count' => 1,
		'name' => 'Thieves Town Map',
	],
	'MapP3' => [
		'count' => 1,
		'name' => 'Tower of Hera Map',
	],
	'MapD5' => [
		'count' => 1,
		'name' => 'Ice Palace Map',
	],
	'MapD3' => [
		'count' => 1,
		'name' => 'Skull Woods Map',
	],
	'MapD6' => [
		'count' => 1,
		'name' => 'Misery Mire Map',
	],
	'MapD1' => [
		'count' => 1,
		'name' => 'Palace of Darkness Map',
	],
	'MapD2' => [
		'count' => 1,
		'name' => 'Swamp Palace Map',
	],
	'MapA1' => [
		'count' => 0,
		'name' => 'Agahnims Tower Map',
	],
	'MapP2' => [
		'count' => 1,
		'name' => 'Desert Palace Map',
	],
	'MapP1' => [
		'count' => 1,
		'name' => 'Eastern Palace Map',
	],
	'MapH1' => [
		'count' => 0,
		'name' => 'Hyrule Castle Map',
	],
	'MapH2' => [
		'count' => 1,
		'name' => 'Sewers Map',
	],
	'CompassA2' => [
		'count' => 1,
		'name' => 'Ganons Tower Compass',
	],
	'CompassD7' => [
		'count' => 1,
		'name' => 'Turtle Rock Compass',
	],
	'CompassD4' => [
		'count' => 1,
		'name' => 'Thieves Town Compass',
	],
	'CompassP3' => [
		'count' => 1,
		'name' => 'Tower of Hera Compass',
	],
	'CompassD5' => [
		'count' => 1,
		'name' => 'Ice Palace Compass',
	],
	'CompassD3' => [
		'count' => 1,
		'name' => 'Skull Woods Compass',
	],
	'CompassD6' => [
		'count' => 1,
		'name' => 'Misery Mire Compass',
	],
	'CompassD1' => [
		'count' => 1,
		'name' => 'Palace of Darkness Compass',
	],
	'CompassD2' => [
		'count' => 1,
		'name' => 'Swamp Palace Compass',
	],
	'CompassA1' => [
		'count' => 0,
		'name' => 'Agahnims Tower Compass',
	],
	'CompassP2' => [
		'count' => 1,
		'name' => 'Desert Palace Compass',
	],
	'CompassP1' => [
		'count' => 1,
		'name' => 'Eastern Palace Compass',
	],
	'CompassH1' => [
		'count' => 0,
		'name' => 'Hyrule Castle Compass',
	],
	'CompassH2' => [
		'count' => 0,
		'name' => 'Sewers Compass',
	],
	'BigKeyA2' => [
		'count' => 1,
		'name' => 'Ganons Tower Big Key',
	],
	'BigKeyD7' => [
		'count' => 1,
		'name' => 'Turtle Rock Big Key',
	],
	'BigKeyD4' => [
		'count' => 1,
		'name' => 'Thieves Town Big Key',
	],
	'BigKeyP3' => [
		'count' => 1,
		'name' => 'Tower of Hera Big Key',
	],
	'BigKeyD5' => [
		'count' => 1,
		'name' => 'Ice Palace Big Key',
	],
	'BigKeyD3' => [
		'count' => 1,
		'name' => 'Skull Woods Big Key',
	],
	'BigKeyD6' => [
		'count' => 1,
		'name' => 'Misery Mire Big Key',
	],
	'BigKeyD1' => [
		'count' => 1,
		'name' => 'Palace of Darkness Big Key',
	],
	'BigKeyD2' => [
		'count' => 1,
		'name' => 'Swamp Palace Big Key',
	],
	'BigKeyA1' => [
		'count' => 0,
		'name' => 'Agahnims Tower Big Key',
	],
	'BigKeyP2' => [
		'count' => 1,
		'name' => 'Desert Palace Big Key',
	],
	'BigKeyP1' => [
		'count' => 1,
		'name' => 'Eastern Palace Big Key',
	],
	'BigKeyH1' => [
		'count' => 0,
		'name' => 'Hyrule Castle Big Key',
	],
	'BigKeyH2' => [
		'count' => 0,
		'name' => 'Sewers Big Key',
	],
	'KeyH2' => [
		'count' => 1,
		'name' => 'Sewers Key',
	],
	'KeyH1' => [
		'count' => 0,
		'name' => 'Hyrule Castle Key',
	],
	'KeyP1' => [
		'count' => 0,
		'name' => 'Eastern Palace Key',
	],
	'KeyP2' => [
		'count' => 1,
		'name' => 'Desert Palace Key',
	],
	'KeyA1' => [
		'count' => 2,
		'name' => 'Agahnims Tower Key',
	],
	'KeyD2' => [
		'count' => 1,
		'name' => 'Swamp Palace Key',
	],
	'KeyD1' => [
		'count' => 6,
		'name' => 'Palace of Darkness Key',
	],
	'KeyD6' => [
		'count' => 3,
		'name' => 'Misery Mire Key',
	],
	'KeyD3' => [
		'count' => 3,
		'name' => 'Skull Woods Key',
	],
	'KeyD5' => [
		'count' => 2,
		'name' => 'Ice Palace Key',
	],
	'KeyP3' => [
		'count' => 1,
		'name' => 'Tower of Hera Key',
	],
	'KeyD4' => [
		'count' => 1,
		'name' => 'Thieves Town Key',
	],
	'KeyD7' => [
		'count' => 4,
		'name' => 'Turtle Rock Key',
	],
	'KeyA2' => [
		'count' => 4,
		'name' => 'Ganons Tower Key',
	],
];
?>
@foreach ($items as $key => $item)
<div class="col-md-4">
	<input id="item-count-{{ $key }}" type="number" value="{{ $item['count'] }}" min="0" max="218" step="1" name="data[alttp.custom.item.count.{{ $key }}]" class="custom-items">
	<input id="item-placed-{{ $key }}" type="number" min="0" max="218" step="1" value="0" readonly>
	<label for="item-count-{{ $key }}">{{ $item['name'] }}</label>
</div>
@endforeach
<script>
$(function() {
	localforage.getItem('vt.custom.items').then(function(value) {
		if (value === null) return;

		for (id in value) {
			document.getElementById(id).value = value[id];
		}

		$('.custom-items').on('change', function() {
			var items = {};
			$('.custom-items').each(function(){
				items[this.id] = this.value;
			});

			localforage.setItem('vt.custom.items', items);
		});
	});
});
</script>
@overwrite
