=== Google Map (CN) ===
Tags: google map, China
Tested up to: 1.0
Requires PHP: 5.4.0
Stable tag: 1.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Google Map China version for WordPress

== Description ==

An Google Map JS [API key](https://developers.google.com/maps/documentation/javascript/get-api-key) required for before
use, it can be set on the plugin's option page.

Use it by create a shortcode insert the place where you want, for example:

```
[gmapcn container="#google-map" title="Title of position mark" lat=29.358355 lng=105.8384612 zoom=6.21]
<h1>Info Window</h1>
<p>Info window description</p>
[/gmapcn]
```

= Shortcode attribute list =

 * **container: ** CSS selector of the container element.
 * **title: ** Title of [map position marker](https://developers.google.com/maps/documentation/javascript/markers)
 * **lat: ** Latitude
 * **lng: ** Longitude
 * **zoom: ** Zoom level
 * **content: ** The shortcode's content will be used for
   [info window](https://developers.google.com/maps/documentation/javascript/infowindows) of position mark.
