UrTweet
=======

UrTweet is a jquery plugin for grabbing a user's timeline.  
It can be used as a remote service to serve multiple clients, or set up locally to pull your own tweets in.  
UrTweet makes use of the awesome Twitter API 1.1 library CodeBird.

https://github.com/mynetx/codebird-php  
CodeBird requires php 5.3 as it uses namespaces  
__**NOTE**__
Make sure that you have `cacert.pem` in the same folder as `codebird.php`, or CodeBird will not work.

##Remote Executed version  

**Include jQuery and the jstweet-remote.js file**
```
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script src="http://www.example.com/jstweet-remote.js" type="text/javascript"></script>
```

**Set up the javascript function with the following vars:**  
username - The twitter username you want to fetch.  
numOfTweetsToReturn - How many tweets to return, must be an int.  

```javascript
$(function(){
  UrTweet.loadTweets('username','numOfTweetsToReturn(int)');
});
```

**Put this DIV on in your HTML file where you want the tweets to display:**
```html
<div id="jstwitter"></div>
```
