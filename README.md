TimeyTweet
=======

TimeyTweet is remotely hosted user timeline jQuery plugin.  
It pulls in everything in the user timeline object (statuses_userTimeline) returned from twitter's 1.1 API.  
See https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline for more information.  

TimeyTweet makes use of the awesome Twitter API 1.1 library CodeBird.

https://github.com/mynetx/codebird-php  
CodeBird requires php 5.3 as it uses namespaces  


__**NOTE**__
Make sure that you have `cacert.pem` in the same folder as `codebird.php`, or CodeBird will not work.

##Remote Host Server  
File Structure (server A - www.example.com)
```
/grabtweets.php
/timeytweet-remote.js
/cacert.pem
/codebird.php
```  

* Open `timeytweet-remote.js` in a code editor.  
 * **Change `remote_url` to point at the http location of the file**  
 * Example: `remote_url = 'http://www.example.com';`  

* Open `grabtweets.php` in a code editor.  
 * Change the following to your twitter app tokens/keys:
 * `$CONSUMER_KEY = '';`
 * `$CONSUMER_SECRET = '';`
 * `$ACCESS_TOKEN = '';`
 * `$ACCESS_TOKEN_SECRET = '';`

##Locally  
(Server B - www.urdomain.com)
```javascript
<script src="jquery"></script>
<script src="http://www.example.com/timeytweet-remote.js" type="text/javascript"></script>
<script>
	$(function(){
	  TimeyTweet.loadTweets('username','numOfTweetsToReturn(int)');
	});
</script>
```

**Put this DIV in your HTML file where you want the tweets to display:**
```html
<div id="timeytwitter"></div>
```

**The following code will be inserted into #timeytwitter:**
```html
<div class="item" id="{ID_NUM}">
  {IMG}
  <div class="tweet-wrapper">
    <span class="text">{TEXT}</span>
    <span class="time">
    <a href="{URL}" target="_blank">{AGO}</a>
    </span>
    by
    <span class="user">{USER}</span>
  </div>
</div>
```
  
__**CSS Styles**__ 
```css    	
    #timeytwitter {} 
		.item{} 
		.tweet-wrapper{} 
		.tweet-wrapper .text{}
		.tweet-wrapper .text a{}
		.tweet-wrapper .text a:hover{}
		.tweet-wrapper .text img{}
		.tweet-wrapper .time{}
		.tweet-wrapper .user{} 
```
