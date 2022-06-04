<?php snippet('header') ?>

<?php
  $sectors = $site->kulturesktoren()->toStructure()
 ?>
<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js"></script>

<div id="map" class="map"></div>

<div id="overlays">
  <?php foreach ($site->places()->toStructure() as $place): ?>
    <div class="place" data-lat=<?=$place->lat()?> data-lon=<?=$place->lon()?> >
      <div class="marker" style="background-color:<?=$sectors->findBy('name',$place->kultursektor()->value())->color()?>"><span><?=$place->no()?></span></div>
      <div class="info">
        <?=$place->institution()?><br>
        <?=$place->adresse()?><br>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<?php snippet('footer') ?>