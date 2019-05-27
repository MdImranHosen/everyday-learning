//Play HTML5 Video when scrolled to
<script>
       $(document).ready(function() {
            // Get media - with autoplay disabled (audio or video)
            var media = $('video').not("[autoplay='autoplay']");
            var tolerancePixel = 40;

            function checkMedia(){
                // Get current browser top and bottom
                var scrollTop = $(window).scrollTop() + tolerancePixel;
                var scrollBottom = $(window).scrollTop() + $(window).height() - tolerancePixel;

                media.each(function(index, el) {
                    var yTopMedia = $(this).offset().top;
                    var yBottomMedia = $(this).height() + yTopMedia;

                    if(scrollTop < yBottomMedia && scrollBottom > yTopMedia){ //view explaination in `In brief` section above
                        $(this).get(0).play();
                    } else {
                        $(this).get(0).pause();
                    }
                });

                //}
            }
            $(document).on('scroll', checkMedia);
        });


</script>

<script>
if(screen.width < 500){
    
     $(document).ready(function() {
            // Get media - with autoplay disabled (audio or video)
            var media = $('video').not("[autoplay='autoplay']");
            var tolerancePixel = 40;

            function checkMedia(){
                // Get current browser top and bottom
                var scrollTop = $(window).scrollTop() + tolerancePixel;
                var scrollBottom = $(window).scrollTop() + $(window).height() - tolerancePixel;

                media.each(function(index, el) {
                    var yTopMedia = $(this).offset().top;
                    var yBottomMedia = $(this).height() + yTopMedia;

                    if(scrollTop < yBottomMedia && scrollBottom > yTopMedia){ //view explaination in `In brief` section above
                        $(this).get(0).play();
                    } else {
                        $(this).get(0).pause();
                    }
                });

                //}
            }
            $(document).on('scroll', checkMedia);
        });

 /*var videos = document.getElementsByTagName("video"),
 
 
 fraction = 0.8;
 
 function checkScroll() {

    for(var i = 0; i < videos.length; i++) {

        var video = videos[i];

        var x = video.offsetLeft, y = video.offsetTop, w = video.offsetWidth, h = video.offsetHeight, r = x + w, //right
            b = y + h, //bottom
            visibleX, visibleY, visible;

            visibleX = Math.max(0, Math.min(w, window.pageXOffset + window.innerWidth - x, r - window.pageXOffset));
            visibleY = Math.max(0, Math.min(h, window.pageYOffset + window.innerHeight - y, b - window.pageYOffset));

            visible = visibleX * visibleY / (w * h);

            if (visible > fraction) {
                video.play();
            } else {
                video.pause();
            }

    }

 }

window.addEventListener('scroll', checkScroll, false);
window.addEventListener('resize', checkScroll, false);*/

// select video element
/*var vid = document.getElementById('tmv_<?php echo $POST_ID;?>');
//var vid = $('#v0')[0]; // jquery option

// pause video on load
vid.pause();

// pause video on document scroll (stops autoplay once scroll started)
window.onscroll = function(){
    vid.pause();
};

// refresh video frames on interval for smoother playback
setInterval(function(){
    vid.currentTime = window.pageYOffset/400;
}, 40);*/

}
</script>

<div class="shop-img" style="background-image: url('<?php if(empty($post_poster)){ echo $THUMBNAIL.'thumb0001.jpg'; } else{ echo $post_poster.'thumb.jpg'; } ?>');">	
   
   <video poster="<?php  if(empty($post_poster)){ echo $THUMBNAIL.'thumb0001.jpg'; } else{ echo $post_poster.'thumb.jpg'; } ?>" 
   onmouseover="play_video_of_thumbnils('<?php echo $POST_ID;?>')" onmouseout="pause_video_of_thumbnils('<?php echo $POST_ID;?>')"
     class="video_thumb" id="tmv_<?php echo $POST_ID;?>" 
     onclick="<?php echo $profile_picture_link;?>"  style="vertical-align: middle;"  preload="auto"   muted>
     <source src="<?php  if(!empty($THUMBNAIL)){ echo $THUMBNAIL.'newvideo.mp4'; } else{  echo $POST_SOURCE; } ?>" type="video/mp4">
  
     Your browser does not support the video tag.
   </video>

	<a  id="play_unlpay" class="video_play_buttom_style"  onclick="<?php echo $profile_picture_link;?>" 
	onmouseover="play_video_of_thumbnils('<?php echo $POST_ID;?>')" onmouseout="pause_video_of_thumbnils('<?php echo $POST_ID;?>')">
	    <i class="fa fa-play fa-2x" style="color:#fff;font-size: 25px;padding-top:12px;padding-left:3px;" aria-hidden="true"></i><a>
</div>

function play_video_of_thumbnils(pid){

var vid = document.getElementById("tmv_"+pid); 
							
try {

						
 if(vid.paused){
		  vid.play();
    }else{
		  vid.pause();
    }
	
	}catch(error) {
  console.error(error);
 
}

}

function pause_video_of_thumbnils(pid){

var vid = document.getElementById("tmv_"+pid); 
							
try {

						
 if(vid.paused == false){
		  vid.pause();
    }else{
		  vid.play();
    }
	
	}catch(error) {
  console.error(error);
 
}

}
