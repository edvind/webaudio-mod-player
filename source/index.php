<html>
  <head>
    <title>TrackerStation</title>
    <meta name="description" content="A XM module player in Javascript using the Web Audio API.">
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen" />
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
<?php
$browserAsString = $_SERVER['HTTP_USER_AGENT'];
if (strstr($browserAsString, " AppleWebKit/") && strstr($browserAsString, " Mobile/"))
{
  echo "    <script type=\"text/javascript\">var mobileSafari=true;</script>";
} else {
  echo "    <script type=\"text/javascript\">var mobileSafari=false;</script>";
}
?>
    <script type="text/javascript" src="/js/utils.js"></script>
    <script type="text/javascript" src="/js/player.js"></script>
    <script type="text/javascript" src="/js/ft2.js"></script>
    <script type="text/javascript" src="/js/ui.js"></script>
    <script type="text/javascript">
      window.musicPath='/xm/';
      window.musicLibrary=[];
      window.currentModule='edvind/kasta.xm';
      window.defaultComposer='';
    </script>
  </head>
  <body>
    <div id="outercontainer">
      <div id="headercontainer">
        <div style="float:left">TrackerStation</div>
        <div style="float:right">edvind</div>
        <div style="clear:both;"></div>
      </div>
      <div id="innercontainer">
        <div id="modsamples"></div>
        <div style="position:relative;">
          <span id="modtitle"></span>
          <span id="modinfo">('&nbsp;&nbsp;&nbsp;&nbsp;')</span>
          <span id="modtimer"></span>
          <br/><br/>
          <a href="#" id="go_back">[&lt;&lt;]</a>
          <a href="#" id="play">[play]</a>
          <a href="#" id="pause">[pause]</a>
          <a href="#" id="go_fwd">[&gt;&gt;]</a>
          <span style="white-space:pre;">     </span>
          <a href="#" title="Repeat song" id="modrepeat">[repeat]</a>
          <a class="down" title="Stereo separation" href="#" id="modpaula">[)oo(]</a>
          <a title="Amiga A500 lowpass filter" href="#" id="modamiga">[lowpass]</a>
        </div>
        <div id="modpattern"></div>
        <div id="modchannels"><div id="even-channels"></div><div id="odd-channels"></div></div>
        <div style="clear:both"></div>
      </div>

        <div id="musiclibrary">
          <br/>dh0:music_library&gt;<br/><br/>
          <select size="24" id="modfile"></select>
          <br/><br/>
          <div style="clear:left;"></div>
          <div style="margin-left: 24px;">
            <a href="#" id="load">[load song]</a>&nbsp;
          </div>
          <div style="margin-left: 24px; margin-top: 12px;">
          <input value="" id="loadfilter" size="48" placeholder="Filter songs" style="border: 1px solid #8f8; background-color: #181818" />
          </div>

        <div style="clear:both"></div>
      </div>

    </div>
  </body>
</html>
