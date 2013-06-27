TimeyTweet
=======

TimeyTweet is a jquery plugin for grabbing a user's timeline.  
It pulls in everything in the user timeline object (statuses_userTimeline) returned from twitter's 1.1 API.  
See https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline for more information.  

It can be used as a remote service to serve multiple clients websites from one location.  
TimeyTweet makes use of the awesome Twitter API 1.1 library CodeBird.

https://github.com/mynetx/codebird-php  
CodeBird requires php 5.3 as it uses namespaces  
__**NOTE**__
Make sure that you have `cacert.pem` in the same folder as `codebird.php`, or CodeBird will not work.

##Remote Executed version  

**Include jQuery and the jstweet-remote.js file**  
```
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
```
Put the source files on your remote server, and point the js script to the remote server
```
<script src="http://www.example.com/timeytweet-remote.js" type="text/javascript"></script>
```

**Change `remote_url` in the js file to point at the http location of the file**
Example: `remote_url = 'http://www.example.com';`  

> __**NOTE**__
> This is needed for jsonp to query the host server where timeytweet-remote.js sits. We're doing remote javascript and php execution, so jsonp is required or XSS errors will happen.  




**Set up the javascript function with the following vars:**  
username - The twitter username you want to fetch.  
numOfTweetsToReturn - How many tweets to return, must be an int.  

```javascript
$(function(){
  TimeyTweet.loadTweets('username','numOfTweetsToReturn(int)');
});
```

**Put this DIV on in your HTML file where you want the tweets to display:**
```html
<div id="timeytwitter"></div>
```

**The following code will be inserted into #timeytwitter:**
```html
<div class="item">
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
