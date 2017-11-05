<?php
/** @var array $a */
/** @var string $api_key */
/** @var string $iw_content */
?>
<script>
	function initMap () {
		var map, marker;

		var latLng = {
			lat: <?php echo $a['lat'] ?>,
			lng: <?php echo $a['lng'] ?>
		};

		var iw_content = "<?php echo $iw_content ?>";

		map = new google.maps.Map(document.querySelector('<?php echo $a['container'] ?>'), {
			center: latLng,
			zoom: <?php echo $a['zoom'] ?>
		})

		marker = new google.maps.Marker({
			position: latLng,
			map: map,
			title: '<?php echo $a['title'] ?>'
		})

		if (iw_content != '') {
			var infoWindow = new google.maps.InfoWindow({
				content: iw_content
			})

			marker.addListener('click', function () {
				infoWindow.open(map, marker)
			})
		}
	}
</script>
<script async defer src="https://maps.google.cn/maps/api/js?key=<?php echo $api_key ?>&amp;callback=initMap"></script>